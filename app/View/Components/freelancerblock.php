<?php

namespace App\View\Components;

use Illuminate\View\Component;

class freelancerblock extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $freelancers;
    public function __construct($freelancers)
    {
        $this->freelancers = $freelancers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.freelancerblock');
    }
}
