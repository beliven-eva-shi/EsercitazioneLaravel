<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ["client"];


    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['client'] ?? false, function ($query, $client) {
            $query->where('client_id', $client);
        });
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
