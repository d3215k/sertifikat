<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grup extends Model
{
    use HasFactory;

    protected $table = 'grup';

    public $timestamps = false;

    public function anggota(): HasMany
    {
        return $this->hasMany(Pemilik::class, 'grup_id');
    }

}
