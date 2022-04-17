<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourSection extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $lesson;
    public $counter;
    public function __construct($lesson,$counter)
    {
        $this->counter = $counter;
        $this->lesson = $lesson;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cour-section');
    }
}
