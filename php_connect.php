<html>
  <head>
    <title> mysql connection </title>
  </head>
  <body>
    <?php
      echo "<h1> this sample program for make connection with Database </h1>";
      $data = mysqli_connect("localhost", "root", "", "krishna") or die("Mysql not found");
      echo "<p> Data base connected</p>";



      $table = mysqli_query($data, "SELECT * FROM student") or die("Error: in query");
      if(mysqli_num_rows($table)>0)
      {
        echo "<table>";
        while($row = mysqli_fetch_row($table))
        {
            echo "<tr> <td> $row[0] </td> <td> $row[1] </td> <td> $row[2] </td> </tr>";
        }
        echo "</table>";
      }
      else{
        echo "No row's are available";
      }
      mysqli_close($data);

  ?>


  </body>
</html>
