<?php

namespace App\Filament\Traits;

trait useKanban
{

    public function filter(): void
    {
        $this->getRecords();
    }

    public function resetFilters(): void
    {
        $this->form->fill();
        $this->filter();
    }

}
