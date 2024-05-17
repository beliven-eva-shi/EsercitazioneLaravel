<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{


    use HasFactory;
    protected $guarded = [];
    protected $with = ["project"];

    public function scopeFilter($query, array $filters) //Post::newQuery()->filter()
    {
        // $query->when($filters['search'] ?? false, function ($query, $search) {
        //     $query->where(fn($query) =>
        //         $query
        //             ->where('title', 'like', '%' . request('search') . '%')
        //             ->orWhere('body', 'like', '%' . request('search') . '%'));

        // });
        $query->when($filters['project'] ?? false, function ($query, $project) {
            $query->where('project_id', $project);
        });
        // $query->when($filters['author'] ?? false, function ($query, $author) {
        //     $query
        //         ->whereHas('author', fn($query)
        //             => $query->where('username', $author));

        // });
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
