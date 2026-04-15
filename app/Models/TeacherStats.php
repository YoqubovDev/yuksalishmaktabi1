<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TeacherStats extends Model
{
    protected $table = 'teachers_stats';

    protected $fillable = [
        'asosiy', 'ilmiy', 'kurator', 'tashqi'
    ];
}
