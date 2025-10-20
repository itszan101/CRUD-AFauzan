<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi mass assignment
    protected $fillable = [
        'title',
        'description',
        'is_done',
    ];

    // Default cast untuk kolom boolean
    protected $casts = [
        'is_done' => 'boolean',
    ];
}
