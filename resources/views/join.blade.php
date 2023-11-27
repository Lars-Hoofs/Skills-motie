<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('show', ['id' => $stelling->id]) }}">
    @csrf
    <!-- Voeg een inputveld toe voor het ID -->
    <input type="text" id="st_id" name="st_id">
    <input type="submit" value="Submit">
</form>
</body>
</html>