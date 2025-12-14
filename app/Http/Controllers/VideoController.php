<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Barcha videolarni chiqarish
    public function index()
    {
        $groups = Group::all();
        $courses = Course::with('videos')->get(); // Videos bilan birga yuklash
        
        return view('your-view-name', compact('groups', 'courses'));
    }

    // Yangi video qo‘shish
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'published_at' => 'nullable|date',
        ]);

        Video::create($request->all());

        return redirect()->back()->with('success', 'Video muvaffaqiyatli qo‘shildi');
    }

    // Video tahrirlash
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url',
            'published_at' => 'nullable|date',
        ]);

        $video->update($request->all());

        return redirect()->back()->with('success', 'Video yangilandi');
    }

    // Video o‘chirish
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->back()->with('success', 'Video o‘chirildi');
    }
}
