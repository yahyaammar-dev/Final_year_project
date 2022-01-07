<?php

namespace App\View\Components;

use Illuminate\View\Component;

class transport extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $costs;
    public $destinations;
    public function __construct($costs, $destinations)
    {
        $this->costs = $costs;
        $this->destinations = $destinations;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.transport');
    }
}
