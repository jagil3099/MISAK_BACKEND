<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable =[
        'name'
    ];
    protected $hidden =[
        'created_at',
        'updated_at'
    ];
     // relacion de uno a muchos 
     public function material(){
        return $this->BelongsTo('App\Material','area_id','id_users');
    }
}
