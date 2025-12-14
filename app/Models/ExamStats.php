<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class ExamStats extends Model
{
    protected $fillable = [
        'cefr', 'universitet', 'ielts', 'sat'
    ];
}
