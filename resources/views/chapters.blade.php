<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAPTERS PAGE</title>
</head>
<body>
    <h1>CHAPTERS PAGE</h1>

    <form action="{{ route('createChapter') }}" method="GET">
        @method('GET')
        <button type="submit">Create Chapter</button>
    </form>

    @foreach ($chapters as $chapter)
    <div>Kabanata: {{$chapter->kabanata}}</div>
    <div>Content: {{$chapter->content}}</div>

    <form action="{{ route('viewChapter', ['id' => $chapter->id]) }}" method="GET">
            <button type="submit">
                View Chapter
            </button>
        </form>
    <hr>
    @endforeach
    
</body>
</html>