<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    protected $fillable = [
        'title',
        'url',
        'published_at',
        'course_id'
    ];

    protected $casts = [
        'published_at' => 'date'
    ];

    // Video bir course ga tegishli
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    
    // YouTube URL ni embed formatiga o'zgartirish
    public function getEmbedUrlAttribute(): string
    {
        if (str_contains($this->url, 'youtube.com/watch')) {
            return str_replace('watch?v=', 'embed/', $this->url);
        }
        
        if (str_contains($this->url, 'youtu.be/')) {
            return str_replace('youtu.be/', 'youtube.com/embed/', $this->url);
        }
        
        return $this->url; // Agar embed format bo'lsa
    }
}