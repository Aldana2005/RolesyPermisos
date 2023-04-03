<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use SoftDeletes; 
    protected $fillable = [
        'name',
        'document_number',
        'city',
        'email',
        'telephone'
    ]; /* aquí se establecen los campos que van ha hacer enviados desde un formulario a la bbdd */
    protected $hidden = ['created_at','updated_at'];
    protected $dates = ['deleted_at'];    
}
