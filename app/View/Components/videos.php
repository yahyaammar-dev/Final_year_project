<?php

namespace App\View\Components;

use Illuminate\View\Component;

class videos extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */


    public $id;
    public $dataa;
    public $videos;


    public function __construct($id, $dataa, $videos)
    {
        $this->id = $id;
        $this->dataa = $dataa;
        $this->videos = $videos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.videos');
    }
}
