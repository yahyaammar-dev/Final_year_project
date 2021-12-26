<?php

namespace App\View\Components;

use Illuminate\View\Component;

class blockhotels extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $blockhotels ;
    public function __construct($blockhotels)
    {
        $this->blockhotels = $blockhotels;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blockhotels');
    }
}
