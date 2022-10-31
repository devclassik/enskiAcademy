<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsAcademy extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'class',
        'category',
        'title',
        'price',
        'bulletin',
        'picture_path',
        'description',
        'full_description',
        'video_path',
        'icon_path'
    ];

}
