@php $editing = isset($coupon) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-md-12 col-lg-12">
        <x-inputs.text
            name="code"
            label="Code"
            value="{{ old('code', ($editing ? $coupon->code : '')) }}"
            maxlength="255"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.date
            name="start_date"
            label="Start Date"
            value="{{ old('start_date', ($editing ? optional($coupon->start_date)->format('Y-m-d') : '')) }}"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.date
            name="expired_date"
            label="Expired Date"
            value="{{ old('expired_date', ($editing ? optional($coupon->expired_date)->format('Y-m-d') : '')) }}"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.select name="discount_type" label="Discount Type">
            @php $selected = old('discount_type', ($editing ? $coupon->discount_type : 'Amount')) @endphp
            <option value="amount" {{ $selected == 'amount' ? 'selected' : '' }} >Amount</option>
            <option value="percent" {{ $selected == 'percent' ? 'selected' : '' }} >Percent</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-md-12 col-lg-6">
        <x-inputs.number
            name="amount"
            label="Amount"
            value="{{ old('amount', ($editing ? $coupon->amount : '0')) }}"
            step="0.01"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
