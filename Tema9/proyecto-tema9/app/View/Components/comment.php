<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comment extends Component
{
    /**
     * Create a new component instance.
     */
    public $autor;
    public $descripcion;
    public $fecha;

    public function __construct($autor, $descripcion, $fecha)
    {
        $this->autor = $autor;
        $this->descripcion = $descripcion;
        $this->fecha = $fecha;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment');
    }
}
