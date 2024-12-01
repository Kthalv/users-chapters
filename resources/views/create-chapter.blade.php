<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE CHAPTER</title>
</head>
<body>
    <h1>CREATE CHAPTER</h1>

    <form action="{{ route('storeChapter') }}" method="POST">
        @method('POST')
        @csrf
        <label for="kabanata">Kabanata:</label>
        <input type="text" id="kabanata" name="kabanata" required><br>
        <label for="content">content:</label>
        <input type="text" id="content" name="content" required><br>

        <button type="submit">Create Chapter</button>
    </form>

    <form action="{{ route('showAllChapters')}}" method="GET">
        <button type="submit">Back to Chapters</button>
    </form>

</body>
</html>
