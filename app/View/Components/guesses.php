<?php

namespace App\View\Components;

use App\Http\Controllers\GuessController;
use Illuminate\View\Component;

class guesses extends Component
{
    
    public $guesses;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->guesses = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.guesses', ['guesses' => $this->guesses]);
    }
}
