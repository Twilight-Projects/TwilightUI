@if($link)
    <a href="{!! $link !!}" wire:key="{{ $uuid }}"
       {{ $attributes->class(['btn normal-case', '!inline-flex lg:tooltip lg:tooltip-' . $tooltipPosition]) }}
       {{ $attributes }}
       @if($spinner)
           wire:target="{{ $spinnerTarget }}"
       wire:loading.attr="disabled"
       @endif

       @if ($tooltip)
           data-tip="{{ $tooltip }}"
        @endif
    >
        @if ($spinner && $iconPosition === 'right')
            <span wire:loading wire:target="{{ $spinnerTarget() }}" class="loading loading-spinner w-5 h-5"></span>
        @endif

        @if($icon && $iconPosition === 'left')
            <i class="{{ $icon }} text-xl"></i>
        @endif

        @if ($label)
            {{ $label }}
        @else
            {{ $slot }}
        @endif

        @if($icon && $iconPosition === 'right')
            <i class="{{ $icon }} text-xl"></i>
        @endif

        @if ($spinner && $iconPosition === 'left')
            <span wire:loading wire:target="{{ $spinnerTarget() }}" class="loading loading-spinner w-5 h-5"></span>
        @endif
    </a>
    @if($hint)
        <div class="label-text-alt text-gray-400 p-1 pb-0">{{ $hint }}</div>
    @endif
@else
    <button
        {{ $attributes->class(['btn normal-case', '!inline-flex lg:tooltip lg:tooltip-' . $tooltipPosition]) }}
        {{ $attributes }}
        @if($spinner)
            wire:target="{{ $spinnerTarget }}"
        wire:loading.attr="disabled"
        @endif
        wire:key="{{ $uuid }}"
        @if ($tooltip)
            data-tip="{{ $tooltip }}"
        @endif
    >
        @if ($spinner && $iconPosition === 'right')
            <span wire:loading wire:target="{{ $spinnerTarget() }}" class="loading loading-spinner w-5 h-5"></span>
        @endif

        @if($icon && $iconPosition === 'left')
            <i class="{{ $icon }} text-xl"></i>
        @endif

        @if ($label)
            {{ $label }}
        @else
            {{ $slot }}
        @endif

        @if($icon && $iconPosition === 'right')
            <i class="{{ $icon }} text-xl"></i>
        @endif

        @if ($spinner && $iconPosition === 'left')
            <span wire:loading wire:target="{{ $spinnerTarget() }}" class="loading loading-spinner w-5 h-5"></span>
        @endif
    </button>
    @if($hint)
        <div class="label-text-alt text-gray-400 p-1 pb-0">{{ $hint }}</div>
    @endif
@endif
