<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navegacion extends Component
{
    /**
     * Create a new component instance.
     */

    public $inicio;
    public $contacto;
    public $localizacion;
    public function __construct($inicio,$localizacion,$contacto)
    {
        $this->inicio = $inicio;
        $this->localizacion = $localizacion;
        $this->contacto = $contacto;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navegacion');
    }
}
