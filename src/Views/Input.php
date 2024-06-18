<?php

namespace RobinThijsen\ComponentForm\Views;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $fieldName;
    public string $fieldKey;
    public string|bool $label;
    public string $type;

    public function __construct(
        string $fieldName,
        string $fieldKey,
        string|bool $label = false,
        string $type = "text",
    ){
        $this->fieldName = $fieldName;
        $this->fieldKey = $fieldKey;
        $this->label = $label;
        $this->type = $type;
    }

    public function render(): View
    {
        return view('component-form::input');
    }
}