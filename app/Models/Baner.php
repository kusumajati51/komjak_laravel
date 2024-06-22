<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_id',
        'description',
        'is_active',
    ];


    public function postImages()
    {
        return Media::where('id', $this->image_id)->first();
    }
}
