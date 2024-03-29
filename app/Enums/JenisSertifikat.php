<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum JenisSertifikat: int implements HasLabel
{
    case UKK = 1;

    public function getLabel(): ?string
    {
        return match($this) {
            self::UKK => 'UKK'
        };
    }
}
