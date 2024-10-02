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
        <form>
          <label for="parsed-text" class="parsed-text">
            Insert here your text:
            <textarea name="parsed_text" id="parsed-text" name="censored_words"></textarea>
          </label>
          <label class="censored-box">
            Insert the words you want to remove separated by spaces:
            <input type="text" id="censored" name="censoered">
          </label>
        </form>
      </div>
    </main>
  </body>
</html>