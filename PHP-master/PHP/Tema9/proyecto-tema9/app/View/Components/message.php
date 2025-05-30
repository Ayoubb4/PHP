<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    public $tipo;
    public $mensaje;
    /**
     * Create a new component instance.
     */
    public function __construct($tipo,$mensaje)
    {
        $this->tipo = $tipo;
        $this->mensaje = $mensaje;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }


}
