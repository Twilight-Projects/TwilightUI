<?php

namespace TwilightProjects\TwilightUI\Views\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $uuid;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $label = null,
        public ?string $labelPosition = 'top-left',
        public ?string $icon = null,
        public ?string $iconPosition = 'left',
        public ?string $placeholder = null,
        public ?string $prefix = null,
        public ?string $suffix = null,

        // Validations
        public ?string $errorField = null,
        public ?string $errorClass = 'text-red-500 label-text-alt p-1',
        public ?bool $omitError = false,
        public ?bool $firstErrorOnly = false,
    ) {
        $this->uuid = 'twilight-'.md5(serialize($this));
    }

    public function modelName(): ?string
    {
        return $this->attributes->whereStartsWith('wire:model')->first();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('twilightui::components.input');
    }
}
