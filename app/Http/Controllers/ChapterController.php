<?php

namespace App\Http\Controllers;
use App\Models\Chapter;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function showAllChapters()
    {
        $chapters = Chapter::orderBy('updated_at', 'desc')->get();
        return view('chapters', ['chapters' => $chapters]);
    }

    public function createChapter(Request $request)
    {
        return view('create-chapter');
    }

    public function storeChapter(Request $request)
    {
        $validated = $request->validate([
            'kabanata' => 'required|string|max:255',
            'content' => 'required|string|max:10000',
        ]);

        $chapter = new Chapter();
        $chapter->kabanata = $validated['kabanata'];
        $chapter->content = $validated['content'];
        $chapter->save();

        return redirect()->route('showAllChapters')->with('success', 'Chapter created successfully.');
    }

    public function viewChapter(Request $request)
    {
        $chapter = Chapter::findOrFail($request->id);
        return view('chapter', ['chapter' => $chapter]);
    }

    public function editChapter(Request $request)
    {
        $chapter = Chapter::findOrFail($request->id);
        return view('edit-chapter',  ['chapter' => $chapter]);
    }

    public function updateChapter(Request $request)
    {
        $validated = $request->validate([
            'kabanata' => 'required|string|max:255',
            'content' => 'required|string|max:10000',
        ]);

        $chapter = Chapter::findOrFail($request->id);

        $chapter->kabanata = $validated['kabanata'];
        $chapter->content = $validated['content'];
        $chapter->save();

        return redirect()->route('viewChapter', ['id' => $chapter->id])->with('success', 'Chapter updated successfully.');
    }

    public function deleteChapter(Request $request)
    {
        $chapter = Chapter::findOrFail($request->id);
        
        if ($chapter) 
        {
            $chapter->delete();
        }

        return redirect()->route('showAllChapters')->with('success', 'Chapter deleted successfully.');
    }
}