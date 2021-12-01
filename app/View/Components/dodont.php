<?php

namespace App\View\Components;

use Illuminate\View\Component;

class dodont extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $laws;    

    public function __construct($laws)
    {
        $this->laws = $laws;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dodont');
    }
}
