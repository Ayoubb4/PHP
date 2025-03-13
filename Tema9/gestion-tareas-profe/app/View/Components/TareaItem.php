<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TareaItem extends Component
{
    public $titulo;
    public $descripcion;
    public $completada;

    public function __construct($titulo, $descripcion, $completada)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->completada = $completada;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tarea-item');
    }
}
