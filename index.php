<?php

include ('inc/data.php');
?>
<!doctype html>
<head>
  <title>Music Database</title>
  <link type="stylesheet" src="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include ('inc/sections.php');
  ?>
  <header>
    <nav class="nav">
      <ul class="list-group">
        <li class="list-group-item"><a class="nav-link" href="index.php">All</a></li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item"><a class="nav-link" href="index.php/?instrument=piano">Piano</a></li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item"><a class="nav-link" href="index.php/?instrument=flute">Flute</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <table class="table">
      <tr>
        <th scope = "col">Composer</th>
        <th scope = "col">Title</th>
        <th scope = "col">Grade</th>
        <th scope = "col">List</th>
        <th scop = "col">Instrument</th>
      </tr>
      <?php

        foreach ($output as $item){
          $tableoutput = "<tr> <td>"
                    . $item['Composer']
                    . "</td>"
                    . "<td>"
                    . $item['Title']
                    . "</td>"
                    . "<td>"
                    . $item['Grade']
                    . "</td>"
                    . "<td>"
                    . $item['List']
                    . "</td>"
                    . "<td>"
                    . $item['Instrument']
                    . "</td>"
                    . "</tr>";
          echo $tableoutput;
        }
      ?>
    </table>

  </main>
  <footer></footer>
</body>
