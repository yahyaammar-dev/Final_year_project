<?php

namespace App\View\Components;

use Illuminate\View\Component;

class singleuserstory extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dsa;
    public function __construct($dsa)
    {
        $this->dsa = $dsa;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.singleuserstory');
    }
}
