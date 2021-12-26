<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hoteldetailvideo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $ida;
    public $dataa;
    public $videos;
    public function __construct($ida, $dataa, $videos)
    {
        $this->ida = $ida;
        $this->dataa = $dataa;
        $this->videos = $videos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hoteldetailvideo');
    }
}
