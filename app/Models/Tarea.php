<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
 use HasFactory;
 protected $fillable = ['nombre','asignado_a','fecha_inicio','fecha_fin'];
}
