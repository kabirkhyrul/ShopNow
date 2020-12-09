@php $editing = isset($product) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.select name="category_id" label="Category" required>
            @php $selected = old('category_id', ($editing ? $product->category_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Category</option>
            @foreach($categories as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $product->name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="price"
            label="Price"
            value="{{ old('price', ($editing ? $product->price : '')) }}"
            max="255"
            step="0.01"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="cost_price"
            label="Cost Price"
            value="{{ old('cost_price', ($editing ? $product->cost_price : '')) }}"
            max="255"
            step="0.01"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="quantity"
            label="Quantity"
            value="{{ old('quantity', ($editing ? $product->quantity : '')) }}"
            max="255"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="shipping"
            label="Shipping"
            value="{{ old('shipping', ($editing ? $product->shipping : '')) }}"
            max="255"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.text
            name="weight"
            label="Weight"
            value="{{ old('weight', ($editing ? $product->weight : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="special_price"
            label="Special Price"
            value="{{ old('special_price', ($editing ? $product->special_price : '')) }}"
            max="255"
            step="0.01"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="total_sale"
            label="Total Sale"
            value="{{ old('total_sale', ($editing ? $product->total_sale : '')) }}"
            max="255"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.textarea
            name="short_description"
            label="Short Description"
            maxlength="255"
            >{{ old('short_description', ($editing ? $product->short_description
            : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.textarea
            name="description"
            label="Description"
            maxlength="255"
            >{{ old('description', ($editing ? $product->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.textarea
            name="information"
            label="Information"
            maxlength="255"
            >{{ old('information', ($editing ? $product->information : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number
            name="rating"
            label="Rating"
            value="{{ old('rating', ($editing ? $product->rating : '')) }}"
            max="255"
            step="0.01"
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.checkbox
            name="is_featured"
            label="Is Featured"
            :checked="old('is_featured', ($editing ? $product->is_featured : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.checkbox
            name="free_shipping"
            label="Free Shipping"
            :checked="old('free_shipping', ($editing ? $product->free_shipping : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $product->status : 0))"
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
            photoDataUrl: '{{ $editing && $product->photo ? \Storage::url($product->photo) : '' }}',

            fileChanged(event) {
                fileToDataUrl(event, src => this.photoDataUrl = src)
            }
        }
    }
</script>
@endpush
