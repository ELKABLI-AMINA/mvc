<!DOCTYPE html>
<html lang="en">
<head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Joke</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
                <?php  foreach($jokes as $joke){?>
    <tr>
      <th scope="row">1</th>
      <td><?= $joke["value"] ?></td>
      <td><?= $joke["date"] ?><?= $joke["id"] ?></td>
      <td></td>
    </tr>
    <?php }?>
   
  </tbody>
</table>          
</body>
</html>