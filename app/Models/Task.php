<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


    use HasFactory;
    protected $guarded = [];
    protected $with = ["project"];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['project'] ?? false, function ($query, $project) {
            $query->where('project_id', $project);
        });
        $query->when($filters['user'] ?? false, function ($query, $user) {
            $query->where('user_id', $user);
        });
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
