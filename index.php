
<!doctype html>
<?php

include ('inc/data.php');
?>
<head>
  <base href="/">
  <title>Music Database</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" type="text/css">
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
        <li class="list-group-item"><a class="nav-link" href="index.php/?instrument=piano">Piano</a>
          <ul class="grades">
            <li class="mx-2"><a href="index.php/?instrument=piano&grade=1">Grade 1</a>
              <ul class="lists">
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=1&list=a">List A</a></li>
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=1&list=b">List B</a></li>
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=1&list=c">List C</a></li>
              </ul>
            </li>
            <li class="mx-2"><a href="index.php/?instrument=piano&grade=2">Grade 2</a>
              <ul class="lists">
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=2&list=a">List A</a></li>
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=2&list=b">List B</a></li>
                <li class="mx-1"><a href="index.php/?instrument=piano&grade=2&list=c">List C</a></li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="list-group">
        <li class="list-group-item"><a class="nav-link" href="index.php/?instrument=flute">Flute</a>
          <ul class="grades">
            <li class="mx-2"><a href="index.php/?instrument=flute&grade=1">Grade 1</a>
              <ul class="lists">
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=1&list=a">List A</a></li>
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=1&list=b">List B</a></li>
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=1&list=c">List C</a></li>
              </ul>
            </li>
            <li class="mx-2"><a href="index.php/?instrument=flute&grade=2">Grade 2</a>
              <ul class="lists">
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=2&list=a">List A</a></li>
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=2&list=b">List B</a></li>
                <li class="mx-1"><a href="index.php/?instrument=flute&grade=2&list=c">List C</a></li>
              </ul>
            </li>
          </ul>
        </li>
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
        <th scope = "col">Instrument</th>
        <th scope = "col">Book</th>
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
                    . "<td>"
                    . $item['Location']
                    . "</td>"
                    . "</tr>";
          echo $tableoutput;
        }
      ?>
    </table>

  </main>
  <footer></footer>
</body>
