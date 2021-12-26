<?php

namespace App\View\Components;

use Illuminate\View\Component;

class freelancerlisting extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $abc;
    public function __construct($abc)
    {
        $this->abc = $abc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.freelancerlisting');
    }
}
