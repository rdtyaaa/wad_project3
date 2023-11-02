<?php
    $conn = mysqli_connect("localhost:3310  ","root","","wad_project3");

    $result = mysqli_query($conn,"SELECT * FROM students");

    // $data = mysqli_fetch_object($result);
    // var_dump($result)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Project 3</title>
</head>
<body>
<style>
    th, td {
  border: 1px solid black;
  padding: 6px;
  border-radius: 4px;
}
</style>
<h1>Halaman index data:</h1>
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>nim</th>
    <th>address</th>
  </tr>
  <?php
  while($data = mysqli_fetch_object($result)){
    echo "<tr>
    <td>". $data -> id . "</td>".
    "<td>". $data -> name . "</td>".
    "<td>". $data -> nim . "</td>".
    "<td>". $data -> address . "</td>
  </tr>";
  }
  ?>

  <!-- <?php
    while($data = mysqli_fetch_object($result))
    { ?>
  <tr>
    <td><?php echo $data -> id ?></td>
    <td><?php echo $data -> name ?></td>
    <td><?php echo $data -> nim ?></td>
    <td><?php echo $data -> address ?></td>
  </tr>
  <?php
    }
  ?> -->
</table>
</body>
</html> 