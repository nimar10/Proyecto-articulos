<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable=['nombre', 'categoria', 'precio', 'stock', 'imagen'];

    public function scopeCategoria($query,$v){
        if(!isset($v)){
            return $query->where('categoria', 'like', '%');
        }
        if($v=='%'){
            return $query->where('categoria', 'like',$v);
        }
        return $query->where('categoria', $v);
    }

    public function scopePrecio($query, $n){
        switch($n){
            case '%':
                return $query->where('precio','like','%');
            case 1:
                return $query->where('precio','<=',15);
            case 2:
                return $query->where('precio','>',20)->where('precio','<=',70);
             case 3:
                return $query->where('precio','>',100);
        }
    }
}
