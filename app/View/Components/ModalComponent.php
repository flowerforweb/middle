<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $todo;
    public function __construct($todo)
    {
        $this->todo = $todo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-component');
    }
}
