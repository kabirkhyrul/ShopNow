@php $editing = isset($generalSetting) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $generalSetting->name : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="phone"
            label="Phone"
            value="{{ old('phone', ($editing ? $generalSetting->phone : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="address"
            label="Address"
            value="{{ old('address', ($editing ? $generalSetting->address : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="logo"
            label="Logo"
            value="{{ old('logo', ($editing ? $generalSetting->logo : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.email
            name="email"
            label="Email"
            value="{{ old('email', ($editing ? $generalSetting->email : '')) }}"
            maxlength="255"
        ></x-inputs.email>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="facebook"
            label="Facebook"
            value="{{ old('facebook', ($editing ? $generalSetting->facebook : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="twitter"
            label="Twitter"
            value="{{ old('twitter', ($editing ? $generalSetting->twitter : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="instagram"
            label="Instagram"
            value="{{ old('instagram', ($editing ? $generalSetting->instagram : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="pinterest"
            label="Pinterest"
            value="{{ old('pinterest', ($editing ? $generalSetting->pinterest : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="top_bar_offer"
            label="Top Bar Offer"
            value="{{ old('top_bar_offer', ($editing ? $generalSetting->top_bar_offer : '')) }}"
            maxlength="255"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text
            name="currency"
            label="Currency"
            value="{{ old('currency', ($editing ? $generalSetting->currency : '')) }}"
            maxlength="3"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.number
            name="shipping_cost"
            label="Shipping Cost"
            value="{{ old('shipping_cost', ($editing ? $generalSetting->shipping_cost : '0')) }}"
            max="255"
            step="0.01"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
