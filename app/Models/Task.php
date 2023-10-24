<?php

namespace App\Models;

use App\Enums\TaskTypeEnum;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'type' => TaskTypeEnum::class,
        'task_date' => 'datetime',
    ];


    public function contacts(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }
}
