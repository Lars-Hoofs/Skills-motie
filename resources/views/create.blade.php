<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>maak</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="titel" value="titel">
        <input type="text" name="beschrijving" value="beschrijving">
        <a href="" id="maakOptie">+</a>
        <div class="div-add">

        </div>

        <input type="submit">
    </form>

    <script>
                    document.getElementById('maakOptie').addEventListener('click', function (e) {
                        e.preventDefault();
                        var newDiv = document.createElement('div');
                        newDiv.innerHTML = '<input type="text" name="opties[]" value="Optie">';
                        document.querySelector('.div-add').appendChild(newDiv);
                    });
                </script>
</body>
</html>