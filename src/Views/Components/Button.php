<?php

namespace TwilightProjects\TwilightUI\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $icon = null,
        public ?string $iconPosition = 'left',
        public ?string $spinner = null,
        public ?string $link = null,
        public ?string $tooltip = null,
        public ?string $tooltipPosition = 'top',
        public ?string $hint = null,
    ) {
        $this->uuid = 'twilight-'.md5(serialize($this));
    }

    public function spinnerTarget(): ?string
    {
        if ($this->spinner == 1) {
            return $this->attributes->whereStartsWith('wire:click')->first();
        }

        return $this->spinner;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('twilightui::components.button');
    }
}
