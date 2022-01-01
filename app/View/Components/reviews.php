<?php

namespace App\View\Components;

use Illuminate\View\Component;

class reviews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $review;
    public $id;
    public function __construct($review, $id)
    {
        $this->review = $review;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reviews');
    }
}
