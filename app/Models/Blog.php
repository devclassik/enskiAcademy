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
        'image_path',
        'title',
        'phaseOne',
        'phaseTwo',
        'phaseTwoB',
        'phaseThree',
        'phaseThreeB',
        'phaseFour',
        'phaseFive'

    ];
}
