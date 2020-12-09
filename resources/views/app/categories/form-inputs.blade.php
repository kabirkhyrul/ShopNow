@php $editing = isset($category) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $category->name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $category->status : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <div x-data="photoComponentData()">
            <label for="photo">Photo</label><br />

            <img
                :src="photoDataUrl"
                style="object-fit: cover; width: 150px; height: 150px; border: 1px solid #ccc;"
            /><br />

            <div class="mt-2">
                <input
                    type="file"
                    name="photo"
                    id="photo"
                    @change="fileChanged"
                />
            </div>

            @error('photo')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-inputs.group>
</div>

@push('scripts')
<script>

    /* Alpine component for photo uploader viewer */
    function photoComponentData() {
        return {
            photoDataUrl: '{{ $editing && $category->photo ? \Storage::url($category->photo) : '' }}',

            fileChanged(event) {
                fileToDataUrl(event, src => this.photoDataUrl = src)
            }
        }
    }
</script>
@endpush
