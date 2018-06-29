<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $table = 'temas';

    protected $fillable = [
    	'id_info','tema1', 'tema2', 'tema3', 'tema4','tema5',
    ];

    protected $hidden = [
    	'id_info','tema1', 'tema2', 'tema3', 'tema4','tema5', 
    ];

    public function bases()
    {
        return $this->belongsTo('App\Base');
    }
}
