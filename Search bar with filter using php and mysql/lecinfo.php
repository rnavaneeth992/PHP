<!doctype html>
<html lang="en">
  <head>
    <title>Faculty Informtion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .bm 
        {
            width: 850px;
            border: 15px solid green;
            padding: 25px;
            margin: 20px;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <center>
          <h1>Faculty Information System</h1>
            <form action="" method="GET">
                <h3>
                  Search : <input type="search" name="facname" placeholder="Enter Faculty name"><br>
                  <h5>
                      <div class="bm">
                        Filter: <br>
                        <br>
                        1) Positions : <select name="position" class="btn btn-success">
                                      <option value="Position">Position</option>
                                      <option value="Professor">Professor</option>
                                      <option value="Assitant Professor">Assitant Professor</option>
                                      <option value="Teaching fellow">Teaching fellow</option>
                                    </select> 
                        2) Department : <select name="department" class="btn btn-success">
                                      <option value="Department">Department</option>
                                      <option value="CSE">CSE</option>
                                      <option value="IT">IT</option>
                                      <option value="ECE">ECE</option>
                                    </select>
                      </div>
                  </h5>
                  <input type="submit" name="" value="Submit">
                </h3>
              </form>
              <hr>
      <?php
      if((isset($_GET['facname'])&&$_GET['facname']==""&&$_GET['department']=="Department"&&$_GET['position']=="Position")||!(isset($_GET['facname'])))
      {
        $servername = "127.0.0.1";
      $username = "root";
      $password = "navaneeth";
      $dbname = "project1";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
        if(!($conn))
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql="SELECT * FROM lecturer ORDER BY Department";
        $result=mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
          echo '<table border="5" class="table table-danger table-hover">';
          echo '<tr>';
          echo '<th>Name</th>';
          echo '<th>Department</th>';
          echo '<th>Position</th>';
          echo '<th>Mobile no</th>';
          echo '<th>Email</th>';
          echo '</tr>';
          while($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>'.$row["Name"].'</td>';
          echo '<td>'.$row["Department"].'</td>';
          echo '<td>'.$row["Position"].'</td>';
          echo '<td>'.$row["Phno"].'</td>';
          echo '<td>'.$row["Email"].'</td>';
          echo '</tr>';
          }
        }
        echo '</table>';
      }
      else{
        $servername = "127.0.0.1";
      $username = "root";
      $password = "navaneeth";
      $dbname = "project1";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
        $se=trim($_GET["facname"]);
        $dep=$_GET["department"];
        $pos=$_GET["position"];
        $sql="SELECT * FROM project1.lecturer WHERE ";
        if($dep!="Department")
        {
          $sql.=" Department='".$dep."' AND";
        }
        if($pos!="Position")
        {
          $sql.=" Position='".$pos."' AND";
        }
        if($se!="")
        {
          $ksea=explode(' ',$se);
          foreach($ksea as $word)
          {
            $sql.=" Name LIKE '%".$word."%'  OR";
          }
        }
        $sql=substr($sql,0,strlen($sql)-3);
        $sql.=" ORDER BY Department";
        $result=mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)>0) {
          echo '<table border="5" class="table table-danger table-hover">';
          echo '<tr>';
          echo '<th>Name</th>';
          echo '<th>Department</th>';
          echo '<th>Position</th>';
          echo '<th>Mobile no</th>';
          echo '<th>Email</th>';
          echo '</tr>';
          while($row = mysqli_fetch_assoc($result)) {
          echo '<tr>';
          echo '<td>'.$row["Name"].'</td>';
          echo '<td>'.$row["Department"].'</td>';
          echo '<td>'.$row["Position"].'</td>';
          echo '<td>'.$row["Phno"].'</td>';
          echo '<td>'.$row["Email"].'</td>';
          echo '</tr>';
          }
        }
        echo '</table>';
      }
      ?>
      </center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>