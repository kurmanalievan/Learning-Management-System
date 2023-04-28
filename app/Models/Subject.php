<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    public $fillable = ["name", "description", "image_url"];

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
