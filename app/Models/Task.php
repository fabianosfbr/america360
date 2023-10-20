<?php

namespace App\Models;

use App\Enums\TaskTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'type' => TaskTypeEnum::class,
    ];


    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
