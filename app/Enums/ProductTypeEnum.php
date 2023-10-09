<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ProductTypeEnum: int implements  HasLabel
{

    case service = 1;
    case mentoring = 2;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::service => 'Curso Onlne',
            self::mentoring => 'Mentoria Online',
            default => 'Opção não definida'
        };

    }

}
