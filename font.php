<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
   
<form action="submitform.php">

<div class="container">
    <div class="row">

       <div class="col-md-6">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Full Name</label>
        <input name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>


         </div>

      <div class="col-md-6">
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Father Name</label>
        <input name="faname" type="text" class="form-control" id="exampleInputPassword1">
         </div>
      </div>

     </div>
     <div class="row">
       <div class="col-md-6">
      <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
      <input name="date1" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
      </div>
     </div>

  <div class="col-md-6">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CNIC*</label>
    <input name="cnic1" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  </div>
</div>
 <div class="row">
 <div class="col-md-6">
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input name="address1" type="textarea" class="form-control" id="exampleInputPassword1">
  </div>
</div>
</div>
  


  

    <input type="submit" class="btn btn-primary" value="Submit">
</div>
   

  
</form> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM user6table";
$result = $conn->query($sql);

?>
<div class="container mt-5">
<table class="table">
  <thead>
    <tr class="bg-primary text-white">
      <th scope="col">Full Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">CNIC*</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

        echo '<tr>';

        echo '<th scope="row">'.$row["fullname"].'</th>';

        echo '<th scope="row">'.$row["fathername"].'</th>';
        echo '<th scope="row">'.$row["dob"].'</th>';
        echo '<th scope="row">'.$row["cnic"].'</th>';
        echo '<th scope="row">'.$row["address"].'</th>';
        echo '<th>';
        echo '<form action="delete.php">';
       
        echo'<input type="hidden" name="id" value="'.$row["id"].'">';
        echo '<input type="submit" value="delete record">';
       
       
        echo'</form>';
        echo '</th>';
        echo '</tr>';

      }
    } else {
      echo "0 results";
    }

   

    ?>
    



  </tbody>
</table>

<?php
 

?>




  </div>
</body>
</html>