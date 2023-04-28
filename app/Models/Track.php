<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    public $fillable = ["name", "description"];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }
}
