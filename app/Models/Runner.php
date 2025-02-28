<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'profile_picture'];

    public function distances() {
        return $this->hasMany(Distance::class);
    }
}
