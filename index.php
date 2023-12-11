<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph</title>
</head>
<body>
    <h1>Inserisci un paragrafo e la parola da censurare</h1>

    <form action="result.php" method="GET">
        <label for="paragraph">Inserisci un paragrafo</label>
        <input type="text" id="paragraph" name="paragraph">

        <label for="censur">Censura questa parola</label>
        <input type="text" id="censur" name="censur">

        <button type="submit">INVIA</button>
    </form>
</body>
</html>