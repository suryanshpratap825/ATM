<?php
require 'connection.php';
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $CustomerType=$_POST['myselectboxC'];
            $Status=$_POST['myselectboxS'];
            $NameGender=$_POST['myselectboxG'];
            $FirstName=$_POST['FirstName'];
            $LastName=$_POST['LastName'];
            $City=$_POST['city'];
            $State=$_POST['myselectboxState'];
            $PIN=$_POST['PIN'];
            $FatherNameGender=$_POST['myselectboxFather'];
            $FirstNameFat=$_POST['fathernamefirst'];
            $LastNameFat=$_POST['fathernamelast'];
            $DateOfBirth=$_POST['DOB'];
            $AadharNumber=$_POST['aadharNo'];
            $PAN_Number=$_POST['panNo'];
            $AadressType=$_POST['myselectdata'];
            $HouseFlatNo=$_POST['HouseNo'];
            $LandmarkStreet=$_POST['Landmark'];
            $CityTownDistrict=$_POST['cityTownDistrict'];
            $Country=$_POST['Country'];
            $PINAreaCode=$_POST['Pin1'];
            $StateAgain=$_POST['state1'];
            $MobileNo=$_POST['mob'];
            $Email=$_POST['mail'];
            $TelephoneNo=$_POST['tel'];
            $AccNo="8904".$AadharNumber;
            $sql="INSERT INTO `openaccount` (`CustomerType`, `Status`, `NameGender`, `FirstName`, `LastName`, `City`, `State`, `PIN`, `FatherNameGender`, `FirstNameFat`, `LastNameFat`, `DateOfBirth`, `AadharNumber`, `PAN Number`, `AadressType`, `HouseFlatNo`, `LandmarkStreet`, `CityTownDistrict`, `Country`, `PINAreaCode`, `StateAgain`, `MobileNo`, `Email`, `TelephoneNo`,`AccNo`) VALUES ('$CustomerType', '$Status', '$NameGender', '$FirstName', '$LastName', '$City', '$State', '$PIN', '$FatherNameGender', '$FirstNameFat', '$LastNameFat', '$DateOfBirth', '$AadharNumber', '$PAN_Number', '$AadressType', '$HouseFlatNo', '$LandmarkStreet', '$CityTownDistrict', '$Country', '$PINAreaCode', '$StateAgain', '$MobileNo', '$Email', '$TelephoneNo','$AccNo')";
            $result=mysqli_query($conn,$sql);
            if($result){
               $insert=true;
            }
            else{
                echo "not success".mysqli_error($conn);
            }
                    }
?>
<?php
if($insert){
    echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Details Submitted!</h4>
    <p>Your details has been submitted successfully. Please wait for some days for verification</p>
    <hr>
    <p class='mb-0'>Please NoteDown/Print your Account Number</p>
  </div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Account Number</title>
</head>
<body>
    <br><br><br>
    <?php
       echo "<h2><center><strong>Your Account Number:</strong></center><h2>";
       echo "<h1><center><strong> $AccNo</strong></center><h1>";
    ?>
    
    <div class="container">
        <br><br><br><br><br>
        <center><a href="/atm/openAccount.php"><button type="button" class="btn btn-info">Home Page</button></a>
        <button  onclick="window.print()" class="btn btn-primary">Print</button></center>
    </div>
</body>
</html>