<?php

namespace App\View\Components;

use Illuminate\View\Component;

class block extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */



    public $dest;

    public function __construct($dest)
    {
        $this->dest = $dest;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.block');
    }
}
