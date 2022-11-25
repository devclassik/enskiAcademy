<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    use HasFactory;

    protected $fillable = [
        'video_id',
    ];

    public function merchants()
    {
        return $this->belongsToMany(SkillsAcademy::class);
    }

    
}
