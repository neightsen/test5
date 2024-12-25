<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lot extends Model
{
    protected $fillable = ['name', 'description', 'bet'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
