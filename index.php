<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>INSERISCI UN PARAGRAFO E LA PAROLA DA CENSURARE</h1>

    <form action="result.php" method="GET">
        <label for="paragraph">Inserisci un paragrafo</label>
        <textarea name="paragraph" id="paragraph" cols="50" rows="10"></textarea>

        <label for="censur">Censura questa parola</label>
        <input type="text" id="censur" name="censur">

        <button type="submit">CENSURA</button>
    </form>
</body>
</html>