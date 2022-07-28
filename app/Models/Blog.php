<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'body',
        'seo_title',
        'seo_description',
        'image',
        'link_source',
        'status',
        'view_number',
        'create_by',
        'created_at',
        'updated_at'
    ];
}
