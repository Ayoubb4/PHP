<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    /* Forma que yo he echo esta bien */
/*      protected $title = 'title';
    protected $description = 'description';
    protected $completed = false; */

    /* Simplificado por Laravel */

    protected $fillable = ['title', 'description', 'completed'];
    
}
