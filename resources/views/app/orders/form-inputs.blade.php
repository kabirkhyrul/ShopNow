@php $editing = isset($order) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $order->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.select name="coupon_id" label="Coupon" required>
            @php $selected = old('coupon_id', ($editing ? $order->coupon_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Coupon</option>
            @foreach($coupons as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.select name="status" label="Status">
            @php $selected = old('status', ($editing ? $order->status : 'pending')) @endphp
            <option value="pending" {{ $selected == 'pending' ? 'selected' : '' }}>pending</option>
            <option value="processing" {{ $selected == 'processing' ? 'selected' : '' }}>processing</option>
            <option value="delivered" {{ $selected == 'delivered' ? 'selected' : '' }}>delivered</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text name="billing_name" label="Billing Name"
            value="{{ old('billing_name', ($editing ? $order->billing_name : '')) }}" maxlength="255" required>
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text name="billing_mobile" label="Billing Mobile"
            value="{{ old('billing_mobile', ($editing ? $order->billing_mobile : '')) }}" maxlength="255" required>
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text name="billing_address" label="Billing Address"
            value="{{ old('billing_address', ($editing ? $order->billing_address : '')) }}" maxlength="255" required>
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text name="shipping_name" label="Shipping Name"
            value="{{ old('shipping_name', ($editing ? $order->shipping_name : '')) }}" maxlength="255" required>
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.text name="shipping_mobile" label="Shipping Mobile"
            value="{{ old('shipping_mobile', ($editing ? $order->shipping_mobile : '')) }}" maxlength="255" required>
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text name="shipping_address" label="Shipping Address"
            value="{{ old('shipping_address', ($editing ? $order->shipping_address : '')) }}" maxlength="255">
        </x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.textarea name="notes" label="Notes" maxlength="255" required>{{ old('notes', ($editing ? $order->notes : ''))
            }}</x-inputs.textarea>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number name="sub_total" label="Sub Total"
            value="{{ old('sub_total', ($editing ? $order->sub_total : '')) }}" step="0.01" required></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number name="profit" label="Profit" value="{{ old('profit', ($editing ? $order->profit : '')) }}"
            step="0.01" required></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-4">
        <x-inputs.number name="total" label="Total" value="{{ old('total', ($editing ? $order->total : '')) }}"
            step="0.01" required></x-inputs.number>
    </x-inputs.group>
</div>