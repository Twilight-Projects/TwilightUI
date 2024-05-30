@php
    $uuid = $uuid . $modelName()
@endphp

@if($label)
    <label class="form-control" for="{{ $uuid }}">
        <div class="label">
            @if($labelPosition === 'top-left' || $labelPosition === 'top-right')
                @if($labelPosition === 'top-left')
                    <span class="label-text">
                        {{ $label }}

                        @if($attributes->get('required'))
                            <span class="text-error">*</span>
                        @endif
                    </span>
                @endif
                @if($labelPosition === 'top-right')
                    <span class="label-alt">
                        {{ $label }}

                        @if($attributes->get('required'))
                            <span class="text-error">*</span>
                        @endif
                    </span>
                @endif
            @endif
        </div>
        <input id="{{ $uuid }}" placeholder="{{ $placeholder }} " {{ $attributes->class(['input input-bordered']) }} {{ $attributes->get('type') }}>
        <div class="label">
            @if($labelPosition === 'bottom-left' || $labelPosition === 'bottom-right')
                @if($labelPosition === 'bottom-left')
                    <span class="label-text">
                        {{ $label }}

                        @if($attributes->get('required'))
                            <span class="text-error">*</span>
                        @endif
                    </span>
                @endif
                @if($labelPosition === 'bottom-right')
                    <span class="label-alt">
                        {{ $label }}

                        @if($attributes->get('required'))
                            <span class="text-error">*</span>
                        @endif
                    </span>
                @endif
            @endif
        </div>
    </label>
@endif
