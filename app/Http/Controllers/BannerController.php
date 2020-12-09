<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;

class BannerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Banner::class);

        $search = $request->get('search', '');

        $banners = Banner::search($search)
            ->latest()
            ->paginate();

        return view('app.banners.index', compact('banners', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Banner::class);

        return view('app.banners.create');
    }

    /**
     * @param \App\Http\Requests\BannerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerStoreRequest $request)
    {
        $this->authorize('create', Banner::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $banner = Banner::create($validated);

        return redirect()
            ->route('banners.edit', $banner)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Banner $banner)
    {
        $this->authorize('view', $banner);

        return view('app.banners.show', compact('banner'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Banner $banner)
    {
        $this->authorize('update', $banner);

        return view('app.banners.edit', compact('banner'));
    }

    /**
     * @param \App\Http\Requests\BannerUpdateRequest $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function update(BannerUpdateRequest $request, Banner $banner)
    {
        $this->authorize('update', $banner);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::delete($banner->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $banner->update($validated);

        return redirect()
            ->route('banners.edit', $banner)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Banner $banner)
    {
        $this->authorize('delete', $banner);

        if ($banner->image) {
            Storage::delete($banner->image);
        }

        $banner->delete();

        return redirect()
            ->route('banners.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
