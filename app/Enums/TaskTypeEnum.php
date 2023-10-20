<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TaskTypeEnum: int implements  HasLabel
{

    case reunion = 1;
    case call = 2;
    case zap = 3;

    public function getLabel(): ?string
    {
        return match ($this) {
            self::reunion => 'Reunião',
            self::call => 'Ligação',
            self::zap => 'Chamar no zap',
            default => 'Opção não definida'
        };

    }

}
