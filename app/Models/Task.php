<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'is_completed', 'due_date'];
    protected $casts = [
        'is_completed' => 'boolean',
        'due_date' => 'date',
    ];
}
