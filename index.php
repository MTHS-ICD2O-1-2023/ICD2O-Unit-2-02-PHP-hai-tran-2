<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="My first webpage" />
    <meta name="keywords" content="mths, ICD2O" />
    <meta name="author" content="Hai Tran" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>The Area and Perimeter program</title>
    <title>Title</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The Area and Perimeter program</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="image">
          <img src="./images/area_and_perimeter.png" alt="area and perimeter of rectangle">
        </div>
        <br>
        <div class="page-content">
          <p>The dimensions of a rectangle are: 5 cm and 3 cm</p>
        </div>
        <div class="page-content-answer">
          <?php echo '<p>The area is: 15 cm²</p>'; ?>
          <?php echo '<p>The perimeter is: 16 cm</p>'; ?>
        </div>
      </main>
    </div>
  </body>
</html>