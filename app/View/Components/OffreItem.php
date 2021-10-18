<?php

namespace App\View\Components;

use App\Models\Offre;
use Illuminate\View\Component;

class OffreItem extends Component
{
    public $offre;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Offre $offre)
    {
        $this->offre = $offre;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offre-item');
    }
}
