<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <p class="lead">
          Index Of  
            <?php 
              $exec = 'ipconfig | findstr /R /C:"IPv4.*"';
              exec($exec, $output);
              preg_match('/\d+\.\d+\.\d+\.\d+/', $output[0], $matches);
              print_r($matches[0]); 
            ?>
      </p>
      <div class="list-group list-group-flush">
        <?php
          $path = './';
          $files = scandir($path);
          $files = array_diff(scandir($path), array('.', '..'));
          foreach($files as $file){
            echo '<a class="list-group-item list-group-item-action" href="'.$file.'">'.$file.'</a>';
          }
        ?>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
