<?php

namespace App\View\Components;

use Illuminate\View\Component;

class downloadcart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


     public $destinations;

    public function __construct($destinations)
    {
        $this->destinations = $destinations;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.downloadcart');
    }
}
