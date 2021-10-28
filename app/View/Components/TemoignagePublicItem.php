<?php

namespace App\View\Components;

use App\Models\Temoignage;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;

class TemoignagePublicItem extends Component
{
   public  $temoignages;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $temoignages=DB::table('temoignages')->latest()->take(2)->get();
       $this->temoignages=$temoignages;
        return view('components.temoignage-public-item');
    }



}
