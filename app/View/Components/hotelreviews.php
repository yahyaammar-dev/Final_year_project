<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hotelreviews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public  $reviews;
    public $id;
    public function __construct($reviews, $id)
    {
        $this->reviews = $reviews;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hotelreviews');
    }
}
