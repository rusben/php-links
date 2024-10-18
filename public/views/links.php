<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Links</title>
    <link href="../assets/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/cover.css">
  </head>
  <body class="d-flex h-100 text-center text-bg-dark">
    <div class=" d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="mb-auto"> </header>

      <main class="px-3">
        <form method="post">
            <input class="btn btn-lg btn-primary fw-bold" type="submit" value="Link!">
        </form>
        <br>

        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo '<h1><a href="http://www.links.local/token/'.LinkController::createLink().'">http://www.links.local/token/'.LinkController::createLink().'</a></h1>';
          }    
        ?>
      </main>

      <footer class="mt-auto text-white-50"> </footer>
    </div>
    
    <script src="../assets/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>