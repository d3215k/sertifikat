<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kompetensi extends Model
{
    use HasFactory;

    protected $table = 'kompetensi';

    public $timestamps = false;

    public function sertifikat(): HasMany
    {
        return $this->hasMany(Sertifikat::class);
    }
}
