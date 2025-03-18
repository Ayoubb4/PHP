<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NotaItem extends Component
{
    public $nombre;
    public $asignatura;
    public $nota;
    public $estado;

    public function __construct($nombre, $asignatura, $nota, $estado)
    {
        $this->nombre = $nombre;
        $this->asignatura = $asignatura;
        $this->nota = $nota;
        $this->estado = $estado;
    }

    public function render()
    {
        return view('components.nota-item');
    }
}
