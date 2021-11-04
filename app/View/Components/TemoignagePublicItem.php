<?php

namespace App\View\Components;

use App\Models\Temoignage;
use Illuminate\View\Component;

class TemoignagePublicItem extends Component
{
   public  $temoignages;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $temoignages)
    {
        $this->temoignages=$temoignages;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.temoignage-public-item');
    }



}
