<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class tarea_item extends Component
{
    /**
     * Create a new component instance.
     */

    public $title;
    public $description;
    public $completed;
    public function __construct($title,$description,$completed)
    {
        $this->title = $title;
        $this->description = $description;
        $this->completed = $completed;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tarea_item');
    }
}
