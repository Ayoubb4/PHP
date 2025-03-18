<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NotaItem extends Component
{
   //no has declarado las propiedades
   // public $nombre.....
   
    /**
     * Create a new component instance.
     */
    public function __construct($nombre, $asignatura, $nota, $estado){
        $this->nombre=$nombre;
        $this->asignatura=$asignatura;
        $this->nota=$nota;
        $this->estado=$estado;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nota-item');
    }
}
