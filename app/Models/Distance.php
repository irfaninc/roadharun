<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distance extends Model
{
    use HasFactory;

    protected $fillable = ['runner_id', 'date', 'distance'];

    public function runner() {
        return $this->belongsTo(Runner::class);
    }
}
