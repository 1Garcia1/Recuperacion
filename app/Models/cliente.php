<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    //use HasFactory;
    protected $table="clientes";
    protected $primaryKey="Id_cliente";
    protected $fillable=[
        'Codigo_cliente','Nombre','Apellido','Direccion','Telefono','Correo'
        ];
    public $timestamps =false;
}
