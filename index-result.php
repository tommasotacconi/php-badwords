<?php
  // Recupero le due variabili inserite dall'utente
  $inputText = $_GET['input_text'];
  $censoredWords = $_GET['censored'];
  $parsedText = str_ireplace($censoredWords, '***', $inputText);
  $parsedTextLength = strlen($parsedText);
?>

<!DOCTYPE html>
<html lang="it">
  <head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Php text badwords">
    <meta name="description" content="html form to insert a word and the text to be censored">

    <!-- Links -->
    <link href="./style/style.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="container">
        <h1>Text editor</h1>

        <!-- form -->
        <section for="input-text" class="input-text">
          <h2>Testo in ingresso</h2>
          <p>
            Il tuo testo: "<?php echo $inputText ?>"
          </p>
          <p>Hai inserito un testo di <?php echo strlen($inputText)?> caratteri.</p>
        </section>
        <section class="censored-box">
          <h2>Testo risultante</h2>
          <p>"<?php echo $parsedText; ?>"</p>
          <p>Il testo con le censure ha una lunghezza di <?php echo $parsedTextLength ?> caratteri.</p>
        </section>
      </div>
    </main>
  </body>
</html>
