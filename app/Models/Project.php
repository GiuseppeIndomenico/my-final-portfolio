<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}

