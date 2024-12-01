<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAPTER PAGE</title>
</head>
  <body>
    <h1>CHAPTER PAGE</h1>
    <div>Kabanata: {{$chapter->kabanata}}</div>
    <div>Content: {{$chapter->content}}</div>
    <hr>

    <form action="{{ route('deleteChapter', ['id' => $chapter->id]) }}" method="POST"onsubmit="return confirm('Are you sure you want to delete this chapter?')">
        @method('DELETE')
        @csrf
        <button type="submit">Delete Chapter</button>
    </form>
    <form action="{{ route('showAllChapters') }}" method="GET">
            <button type="submit">
                Back to Chapters
            </button>
    </form>
    <form action="{{ route('editChapter', ['id' => $chapter->id]) }}" method="GET">
        <button type="submit">
            Edit Chapter
        </button>
    </form>
</body>
</html>