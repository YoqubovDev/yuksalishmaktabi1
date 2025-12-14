<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class TeacherStats extends Model
{
    protected $fillable = [
        'asosiy', 'ilmiy', 'bosh', 'kurator'
    ];
}
