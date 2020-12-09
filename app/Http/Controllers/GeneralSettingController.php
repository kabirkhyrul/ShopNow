<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\GeneralSettingStoreRequest;
use App\Http\Requests\GeneralSettingUpdateRequest;

class GeneralSettingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', GeneralSetting::class);

        $search = $request->get('search', '');

        $generalSettings = GeneralSetting::search($search)
            ->latest()
            ->paginate();

        return view(
            'app.general_settings.index',
            compact('generalSettings', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', GeneralSetting::class);

        return view('app.general_settings.create');
    }

    /**
     * @param \App\Http\Requests\GeneralSettingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GeneralSettingStoreRequest $request)
    {
        $this->authorize('create', GeneralSetting::class);

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('public');
        }

        $generalSetting = GeneralSetting::create($validated);

        return redirect()
            ->route('general-settings.edit', $generalSetting)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, GeneralSetting $generalSetting)
    {
        $this->authorize('view', $generalSetting);

        return view('app.general_settings.show', compact('generalSetting'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, GeneralSetting $generalSetting)
    {
        $this->authorize('update', $generalSetting);

        return view('app.general_settings.edit', compact('generalSetting'));
    }

    /**
     * @param \App\Http\Requests\GeneralSettingUpdateRequest $request
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(
        GeneralSettingUpdateRequest $request,
        GeneralSetting $generalSetting
    ) {
        $this->authorize('update', $generalSetting);

        $validated = $request->validated();

        if ($request->hasFile('logo')) {
            if ($generalSetting->logo) {
                Storage::delete($generalSetting->logo);
            }

            $validated['logo'] = $request->file('logo')->store('public');
        }

        $generalSetting->update($validated);

        return redirect()
            ->route('general-settings.edit', $generalSetting)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\GeneralSetting $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, GeneralSetting $generalSetting)
    {
        $this->authorize('delete', $generalSetting);

        if ($generalSetting->logo) {
            Storage::delete($generalSetting->logo);
        }

        $generalSetting->delete();

        return redirect()
            ->route('general-settings.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
