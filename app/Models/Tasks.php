<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{


    use HasFactory;
    protected $guarded = [];
    public function project()
    {
        return $this->belongsTo(Projects::class, 'project_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}