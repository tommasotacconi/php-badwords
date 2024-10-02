<?php
  // Recupero le due variabili inserite dall'utente
  $parsedText = $_GET['input_text'];
  $censoredWords = $_GET['censored']
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
        <section for="parsed-text" class="parsed-text">
          <h2>Testo in ingresso</h2>
          <p>
            Il tuo testo: "<?php echo $parsedText ?>"
          </p>
          <p>Hai inserito un testo di <?php echo strlen($parsedText)?> caratteri</p>
        </section>
        <section class="censored-box">
          <h2>Testo risultante</h2>
        <p>Il testo con le censure ha una lunghezza di <?php ?> caratteri</p>
        </section>
      </div>
    </main>
  </body>
</html>
