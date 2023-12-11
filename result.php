<?php 
    $paragraph = $_GET['paragraph'];
    $censured_word = $_GET['censur'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph whit censur</title>
</head>
<body>
    <?php 
        $censored_text = str_replace($censured_word, '***', $paragraph);
    ?>
    <h2>Testo originale</h2>
    <p><?php echo $paragraph; ?></p>
    <p>Il testo è lungo: <?php echo strlen($paragraph); ?> caratteri</p>
    <h2>Testo censurato</h2>
    <p><?php echo $censored_text; ?></p>
    <p>Il testo è lungo: <?php echo strlen($censored_text); ?> caratteri</p>
</body>
</html>