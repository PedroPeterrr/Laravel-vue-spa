<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateContentRequest;
use Illuminate\Http\Request;
use App\Models\Content;

class SiteStatsController extends Controller
{
    public function index(Request $request)
    {
       if ($request->expectsJson()) {
            $series = Content::where('type', 'series')
                            ->get(['id', 'title']);
                            
            $lessons = Content::where('type', 'lesson')
                            ->get(['id', 'title', 'series_id']);

            return response()->json([
                'series' => $series,
                'lessons' => $lessons,
            ]);
        }
    }

    public function update(UpdateContentRequest $request, Content $content)
    {
        $content->update([
            'title' => $request->title,
        ]);

        return response()->json([
            'message' => 'Content updated successfully.',
            'content' => $content
        ]);
    }

    public function store(UpdateContentRequest $request)
    {   
        $seriesId = $request->series_id ? $request->series_id + 1 : null;

        // Create a new content item
        $content = Content::create([
            'title' => $request->title,
            'type' => $request->type, // e.g., 'series' or 'lesson'
            'series_id' => $seriesId,
        ]);

        return response()->json([
            'message' => 'Content created successfully.',
            'content' => $content
        ], 201); // 201 = Created
    }

    public function destroy(Content $content)
    {
        $content->delete();

        return response()->json([
            'message' => 'Content deleted successfully.'
        ], 200);
    }
}
