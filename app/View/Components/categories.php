<?php

namespace App\View\Components;

use App\Models\CategorieBien;
use Illuminate\View\Component;

class categories extends Component
{
    public $categoris;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($categoris)
    {
        $this->categoris = $categoris;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories');
    }
}
