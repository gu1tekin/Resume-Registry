<?php
session_start();
require_once "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
      tbody, td, tfoot, th, thead, tr {
      border-style: solid;
      border-width: 1px!important;
      padding: 2px;
    }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Gultekin Cirik</title>
  </head>
  <body>
  <div class="container">
   <h1>Chuck Severance's Resume Registry</h1>
   <p><a href="login.php">Please Login</a></p>
   <?php

    $stmt = $db->query('SELECT * FROM profile');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
    <table>
      <tr>
        <th>Name</th>
        <th>Headline</th>
      </tr>
      <tr>
       <td><?php echo $row['first_name']; ?></td>
       <td><?php echo $row['headline']; ?></td>
      </tr> 
    </table>
      <?php } ?>
   <p><b>Note:</b> Your implementation should retain data across multiple logout/login sessions.  This sample implementation clears all its data periodically - which you should not do in your implementation.</p>
  </div>
    

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>