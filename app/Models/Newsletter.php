<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
=======
use DateTime;
use Carbon\CarbonImmutable;
use WendellAdriel\Lift\Lift;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Newsletter extends Model
{
    use Lift, SoftDeletes;

    public int $id;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $name;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $email;

    #[Config(fillable: true, rules: ['required', 'string'])]
    public string $phone;
>>>>>>> 1147288 (refactor: remoção de comentários)
}
