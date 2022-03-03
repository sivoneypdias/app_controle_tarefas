<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = ['tarefa','data_limite_conclusao','user_id','hora', 'nota'];

    /**
     * The attributes that should be cast.
     *
     * @var array
    */
    /* protected $casts = [
        'hora' => 'datetime:hh:mm',
    ];*/ 

    public function user(){
        // belongTo pertence a
        return $this->belongsTo('App\Models\User');
    }
}
