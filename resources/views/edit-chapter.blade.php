<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT CHAPTER</title>
</head>
<body>
    <h1>EDIT CHAPTER</h1>
    <form action="{{ route('updateChapter', ['id' => $chapter->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="kabanata">Kabanata:</label>
        <input type="text" id="kabanata" name="kabanata" value="{{ $chapter->kabanata }}" required><br>
        <label for="content">Content:</label>
        <input type="text" id="content" name="content" value="{{ $chapter->content }}" required><br>

        <button type="submit">Update Chapter</button>
    </form>

    
</body>
</html>
