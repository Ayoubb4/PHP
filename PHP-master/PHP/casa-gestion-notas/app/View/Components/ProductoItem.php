<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductoItem extends Component
{
    /**
     * Create a new component instance.
     */

    public $nombre;
    public $precio;
    public $caducidad;

    public function __construct($nombre,$precio,$caducidad)
    {
        $this->nombre=$nombre;
        $this->precio=$precio;
        $this->caducidad=$caducidad;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.producto-item');
    }
}
