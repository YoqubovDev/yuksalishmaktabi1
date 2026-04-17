<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchievementStats extends Model
{
    use HasFactory;

    protected $table = 'achievement_stats';

    protected $fillable = [
        'olympiad_winners',
        'maktab_tayyorlov',
        'iqtidorli_bolalar',
        'jami_yutuqlar',
    ];
}
