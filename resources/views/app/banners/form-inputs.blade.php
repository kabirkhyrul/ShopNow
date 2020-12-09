@php $editing = isset($banner) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="bottom_string"
            label="Bottom String"
            value="{{ old('bottom_string', ($editing ? $banner->bottom_string : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.textarea
            name="middle_string"
            label="Middle String"
            maxlength="255"
            >{{ old('middle_string', ($editing ? $banner->middle_string : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.url
            name="url"
            label="Url"
            value="{{ old('url', ($editing ? $banner->url : '')) }}"
            maxlength="255"
            required
        ></x-inputs.url>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <div x-data="imageComponentData()">
            <label for="image">Image</label><br />

            <img
                :src="imageDataUrl"
                style="object-fit: cover; width: 150px; height: 150px; border: 1px solid #ccc;"
            /><br />

            <div class="mt-2">
                <input
                    type="file"
                    name="image"
                    id="image"
                    @change="fileChanged"
                />
            </div>

            @error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="top_string"
            label="Top String"
            value="{{ old('top_string', ($editing ? $banner->top_string : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.checkbox
            name="top_position"
            label="Top Position"
            :checked="old('top_position', ($editing ? $banner->top_position : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>
</div>

@push('scripts')
<script>

    /* Alpine component for image uploader viewer */
    function imageComponentData() {
        return {
            imageDataUrl: '{{ $editing && $banner->image ? \Storage::url($banner->image) : '' }}',

            fileChanged(event) {
                fileToDataUrl(event, src => this.imageDataUrl = src)
            }
        }
    }
</script>
@endpush
