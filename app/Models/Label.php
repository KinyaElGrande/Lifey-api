<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Label extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'color',
    ];

    public $timestamps = false;

    public function tasks(): MorphToMany
    {
        return $this->morphedByMany(Task::class, 'labellable');
    }
}
