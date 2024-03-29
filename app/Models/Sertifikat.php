<?php

namespace App\Models;

use App\Enums\JenisSertifikat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sertifikat extends Model
{
    use HasFactory;

    protected $table = 'sertifikat';

    protected $casts = [
        'jenis' => JenisSertifikat::class
    ];

    public function pemilik(): BelongsTo
    {
        return $this->belongsTo(Pemilik::class);
    }

    public function kompetensi(): BelongsTo
    {
        return $this->belongsTo(Kompetensi::class);
    }

}
