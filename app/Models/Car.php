<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'mark',
        'year',
        'price',
        'km_riding',
        'apk',
        'fuel_type',
        'image_urls',
    ];

    /**
     * Cast attributes automatically.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'image_urls' => 'array',
        'apk' => 'date',
    ];
}
