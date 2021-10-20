<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DisplayValidationErrors extends Component
{
    public $errors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $errors)
    {
        $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.display-validation-errors');
    }
}
