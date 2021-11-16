<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="main.js"></script>
    <?php require 'main.php'; ?>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="w-50 p-4">
        <form action="/agregar.php" method="post">
            <input name="direccion" type="text" id="myInput" onkeyup="filter()" placeholder="Search for names..">
                <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
        <table class="table" id="myTable">
         <thead>
          <tr>
            <th scope="col">FQDN</th>
            <th scope="col">IP</th>
            <th scope="col">CNAME</th>
          </tr>
         </thead>
         <tbody>
          <?php read(); ?>
         </tbody>
        </table>
        </div>
    </div>
</div>
</body>
</html>

