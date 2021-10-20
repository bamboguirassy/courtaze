<?php

namespace App\View\Components;

use App\Models\Agence;
use App\Models\Offre;
use Illuminate\View\Component;

class OffreItem extends Component
{
    public $offre;
    public $agence;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Offre $offre, Agence $agence=null)
    {
        $this->offre = $offre;
        $this->agence = $agence;
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
