<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'Portfolios';
    protected $fillable = [
        'title',
        'description',
        'client_name',
        'industry',
        'website',
        'client_description',
        'project_requirements',
        'project_overview',
        'solution',
        'client_satisfaction',
        'time_needed',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];
    protected $hidden = [];

    protected $dates = ['created_at', 'updated_at'];
}
