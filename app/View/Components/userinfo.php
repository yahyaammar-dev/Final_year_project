<?php

namespace App\View\Components;

use Illuminate\View\Component;

class userinfo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $user;
    public $productqw;

    public function __construct($user, $productqw)
    {
        $this->user = $user;
        $this->productqw = $productqw;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.userinfo');
    }
}
