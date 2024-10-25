<?php

namespace App\Http\Controllers;
use App\Models\Video;

use Illuminate\Http\Request;

class VideosUserController extends Controller
{
    public function index()
    {
        $videos = Video::all();

        return view('VistaUser', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {

        
        Video::create($request->all());
        return redirect()->route('videos.index')->with('success', 'Video created successfully.');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $video->update($request->all());
        return redirect()->route('videos.index');
    }

    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index');
    }
}
