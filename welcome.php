<?php require 'connections/conn.php' ?>
<?php
session_start();
$insert=false;
$update=false;
$delete=false;
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;

    if(isset($_GET['delete'])){
        $sno = $_GET['delete'];
        $delete = true;
        $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
        $result = mysqli_query($conn, $sql);
      }
}
if(isset($_GET['delete'])){
  $sno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `openaccount` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
  if($result){
    $delete=true;
  }
  else{
    echo "The record are not Deleted".mysqli_error($conn);
}
}

if($_SERVER['REQUEST_METHOD']=="POST"){
  if(isset($_POST['snoEdit'])){
    // echo "yes";
    $sno=$_POST['snoEdit'];
    $CustomerEdit=$_POST['CustomerEdit'];
    $StatusEditData=$_POST['statusEdit'];
    $GenderName=$_POST['NameGenderEdit'];
    $FirstNameEdit=$_POST['FirstNameEdit'];
    $LastNameEdit=$_POST['LastNameEdit'];
    $cityEdit=$_POST['cityEdit'];
    $StateEdit=$_POST['StateEdit'];
    $PINEdit=$_POST['PINEdit'];
    $fathernameGender=$_POST['fathernameGen'];
    $fathernamefirstEdit=$_POST['fathernamefirstEdit'];
    $fathernamelastEdit=$_POST['fathernamelastEdit'];
    $DOBEdit=$_POST['DOBEdit'];
    $aadharNoEdit=$_POST['aadharNoEdit'];
    $PanNumber=$_POST['panNoEdit'];
    $AddressType=$_POST['addressEdit'];
    $HouseFlatNo=$_POST['HouseNoEdit'];
    $LandmarkEdit=$_POST['LandmarkEdit'];
    $cityTownDistrictEdit=$_POST['cityTownDistrictEdit'];
    $CountryAfterEdit=$_POST['CountryEdit'];
    $Pin1Edit=$_POST['Pin1Edit'];
    $state1Edit=$_POST['state1Edit'];
    $mobEdit=$_POST['mobEdit'];
    $mailEdit=$_POST['mailEdit'];
    $telEdit=$_POST['telEdit'];
    $sql="UPDATE `openaccount` SET `CustomerType` = '$CustomerEdit', `Status` = '$StatusEditData', `NameGender` = '$GenderName', `FirstName` = '$FirstNameEdit', `LastName` = '$LastNameEdit', `City` = '$cityEdit', `State` = '$StateEdit', `PIN` = '$PINEdit', `FatherNameGender` = '$fathernameGender', `FirstNameFat` = '$fathernamefirstEdit', `LastNameFat` = '$fathernamelastEdit', `DateOfBirth` = '$DOBEdit', `AadharNumber` = '$aadharNoEdit', `PAN Number` = '$PanNumber', `AadressType` = '$AddressType', `HouseFlatNo` = '$HouseFlatNo', `LandmarkStreet` = '$LandmarkEdit', `CityTownDistrict` = '$cityTownDistrictEdit', `Country` = '$CountryAfterEdit', `PINAreaCode` = '$Pin1Edit', `StateAgain` = '$state1Edit', `MobileNo` = '$mobEdit', `Email` = '$mailEdit', `TelephoneNo` = '$telEdit' WHERE `sno` = $sno";
    $result=mysqli_query($conn,$sql);
    if($result){
      $update=true;
    }
    else{
      echo "The record are not updated".mysqli_error($conn);
    }
  }
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <title>Welcome To Admin Portal
    <?php $_SESSION['username']?>
  </title>
</head>

<body>

  <?php require 'connections/conn.php' ?>
  <?php require 'connections/_nav.php' ?>
  <?php
if($update){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your Account Details has been updated successfully
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
?>
  <?php
  if($delete){
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your Account Details has been deleted successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
?>
  <!-- Button trigger modal -->
  <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditModal"> -->
  <!-- Launch demo modal -->
  <!-- </button> -->

  <!-- Modal -->
  <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="EditModalLabel">Edit Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/atm/welcome.php" method="POST">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <label for="CustomerEdit">Customer Type: </label>
            <div class="col-md-4">
              <input type="text" name="CustomerEdit" id="CustomerEdit" class="CustomerEdit">
            </div>
            <br><label for="statusEdit">Status:</label>
            <div class="col-md-4">
              <input type="text" class="statusEdit" name="statusEdit" id="statusEdit">
            </div>
            <br><label for="name">Name (as mentioned in the passport):</label><br>
            <br><label for="name">Gender:</label><br>
            <div class="col-md-4">
              <input type="text" name="NameGenderEdit" class="NameGenderEdit" id="NameGenderEdit">
            </div>
            <br><label for="name">First Name:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="FirstNameEdit" name="FirstNameEdit" placeholder="First Name"
                required>
            </div>
            <br><label for="name">Last Name:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="LastNameEdit" name="LastNameEdit" Edit placeholder="Last Name"
                required>
            </div>
            <br><label for="cityEdit" class="form-label">City:</label><br>
            <div class="col-md-6">
              <input type="text" class="form-control" id="cityEdit" name="cityEdit">
            </div>
            <br><label for="stateEdit" class="state">State Name:</label><br>
            <div class="col-md-6">
              <input type="text" class="form-control" id="StateEdit" name="StateEdit">
            </div>

            <br><label for="PINEdit" class="form-label">PIN:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="PINEdit" name="PINEdit">
            </div>
            <br><label for="fatherNameEdit">Father Name:</label><br>
            <br><label for="genderEdit">Gender:</label><br>
            <div class="col-md-4">
              <input type="text" name="fathernameGen" id="fathernameGen">
            </div>
            <br><label for="firstNameEdit">First Name:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="fathernamefirstEdit" name="fathernamefirstEdit"
                placeholder="First Name" required>
            </div>
            <br><label for="lastNameEdit">Last Name:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="fathernamelastEdit" name="fathernamelastEdit"
                placeholder="Last Name" required>
            </div>
            <br><label for="DOBEdit">Date of Birth:</label><br>
            <div class="col-md-4">
              <input type="date" class="form-control" id="DOBEdit" name="DOBEdit">
            </div>
            <br><label for="aadharNoEdit">Aadhar Number:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="aadharNoEdit" name="aadharNoEdit">
            </div>
            <br><label for="panNoEdit">PAN Number:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="panNoEdit" name="panNoEdit">
            </div>
            <br><label name="myselectboxaddressEdit" for="addressEdit">Aadress Type:</label><br>
            <div class="col-md-4">
              <input type="text" name="addressEdit" id="addressEdit">
            </div>
            <br><label for="HouseNoEdit">House /Flat No:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="HouseNoEdit" name="HouseNoEdit">
            </div>
            <br><label for="LandmarkEdit">Landmark/Street:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="LandmarkEdit" name="LandmarkEdit">
            </div>
            <br><label for="cityTownDistrictEdit">City/Town/District:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="cityTownDistrictEdit" name="cityTownDistrictEdit">
            </div>
            <br><label for="CountryEdit">Country:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="CountryEdit" name="CountryEdit">
            </div>
            <br><label for="Pin1Edit">PIN/Area Code:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="Pin1Edit" name="Pin1Edit">
            </div>
            <br><label for="state1Edit">State:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="state1Edit" name="state1Edit">
            </div>
            <br>
            <br><label for="mobdit">Mobile No:</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="mobEdit" name="mobEdit">
            </div>
            <br><label for="mailEdit">Email:</label><br>
            <div class="col-md-4">
              <input type="email" class="form-control" id="mailEdit" name="mailEdit">
            </div>
            <br><label for="telEdit">Telephone No (Office):</label><br>
            <div class="col-md-4">
              <input type="text" class="form-control" id="telEdit" name="telEdit">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-4">
    <table class="table" id="myTable">
      <hr>
      <thead>
        <tr>
          <th scope="col">Account Number</th>
          <th scope="col">Customer Type</th>
          <th scope="col">Status</th>
          <th scope="col">NameGender</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName'</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">PIN</th>
          <th scope="col">FatherNameGender</th>
          <th scope="col">FirstNameFat</th>
          <th scope="col">LastNameFat</th>
          <th scope="col">DateOfBirth</th>
          <th scope="col">AadharNumber</th>
          <th scope="col">PAN Number</th>
          <th scope="col">AadressType</th>
          <th scope="col">HouseFlatNo</th>
          <th scope="col">LandmarkStreet</th>
          <th scope="col">CityTownDistrict</th>
          <th scope="col">Country</th>
          <th scope="col">PINAreaCode</th>
          <th scope="col">StateAgain</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Email</th>
          <th scope="col">TelephoneNo</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql="SELECT * FROM openaccount";
        $result=mysqli_query($conn,$sql);
        $srno=0;
        while($row=mysqli_fetch_assoc($result)){
          $srno=$srno+1;
          echo "<tr>
          <td>".$row['AccNo']."</td>
          <td>".$row['CustomerType']."</td>
          <td>".$row['Status']."</td>
          <td>".$row['NameGender']."</td>
          <td>".$row['FirstName']."</td>
          <td>".$row['LastName']."</td>
          <td>".$row['City']."</td>
          <td>".$row['State']."</td>
          <td>".$row['PIN']."</td>
          <td>".$row['FatherNameGender']."</td>
          <td>".$row['FirstNameFat']."</td>
          <td>".$row['LastNameFat']."</td>
          <td>".$row['DateOfBirth']."</td> 
          <td>".$row['AadharNumber']."</td>
          <td>".$row['PAN Number']."</td> 
          <td>".$row['AadressType']."</td>
          <td>".$row['HouseFlatNo']."</td>
          <td>".$row['LandmarkStreet']."</td>
          <td>".$row['CityTownDistrict']."</td>
          <td>".$row['Country']."</td>
          <td>".$row['PINAreaCode']."</td>
          <td>".$row['StateAgain']."</td>
          <td>".$row['MobileNo']."</td>
          <td>".$row['Email']."</td>
          <td>".$row['TelephoneNo']."</td>
          <td><button class=' edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button></td>
          <td><button class=' delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button><td>
        </tr>";
  }
?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

  <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ",);
        tr = e.target.parentNode.parentNode;
        AccNo = tr.getElementsByTagName("td")[0].innerText;
        CustomerEdit1 = tr.getElementsByTagName("td")[1].innerText;
        statusEdit1 = tr.getElementsByTagName("td")[2].innerText;
        nameGenderEdit1 = tr.getElementsByTagName("td")[3].innerText;
        FirstName = tr.getElementsByTagName("td")[4].innerText;
        LastName = tr.getElementsByTagName("td")[5].innerText;
        City = tr.getElementsByTagName("td")[6].innerText;
        State = tr.getElementsByTagName("td")[7].innerText;
        Pin = tr.getElementsByTagName("td")[8].innerText;
        FatherNameGender = tr.getElementsByTagName("td")[9].innerText;
        FirstNameFat = tr.getElementsByTagName("td")[10].innerText;
        LastNameFat = tr.getElementsByTagName("td")[11].innerText;
        DateOfBirth = tr.getElementsByTagName("td")[12].innerText;
        AadharNumber = tr.getElementsByTagName("td")[13].innerText;
        PanNo = tr.getElementsByTagName("td")[14].innerText;
        AddressType = tr.getElementsByTagName("td")[15].innerText;
        HouseFlatNo = tr.getElementsByTagName("td")[16].innerText;
        LandmarkStreet = tr.getElementsByTagName("td")[17].innerText;
        CityTownDistrict = tr.getElementsByTagName("td")[18].innerText;
        Country = tr.getElementsByTagName("td")[19].innerText;
        PINAreaCode = tr.getElementsByTagName("td")[20].innerText;
        StateAgain = tr.getElementsByTagName("td")[21].innerText;
        MobileNo = tr.getElementsByTagName("td")[22].innerText;
        Email = tr.getElementsByTagName("td")[23].innerText;
        TelephoneNo = tr.getElementsByTagName("td")[24].innerText;
        console.log(CustomerEdit1, statusEdit1, nameGenderEdit1, FirstName, LastName, City, State, Pin, FatherNameGender, FirstNameFat, LastNameFat, DateOfBirth, AadharNumber, PanNo, AddressType, HouseFlatNo, LandmarkStreet, CityTownDistrict, Email, Country, PINAreaCode, StateAgain, MobileNo, TelephoneNo);
        CustomerEdit.value = CustomerEdit1;
        statusEdit.value = statusEdit1;
        NameGenderEdit.value = nameGenderEdit1;
        FirstNameEdit.value = FirstName;
        LastNameEdit.value = LastName;
        cityEdit.value = City;
        StateEdit.value = State;
        PINEdit.value = Pin;
        fathernameGen.value = FatherNameGender;
        fathernamefirstEdit.value = FirstNameFat;
        fathernamelastEdit.value = LastNameFat;
        DOBEdit.value = DateOfBirth;
        aadharNoEdit.value = AadharNumber;
        panNoEdit.value = PanNo;
        addressEdit.value = AddressType;
        HouseNoEdit.value = HouseFlatNo;
        LandmarkEdit.value = LandmarkStreet;
        cityTownDistrictEdit.value = CityTownDistrict;
        CountryEdit.value = Country;
        Pin1Edit.value = PINAreaCode;
        state1Edit.value = StateAgain;
        mobEdit.value = MobileNo;
        mailEdit.value = Email;
        telEdit.value = TelephoneNo;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#EditModal').modal('toggle');
      })
    })
    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        sno = e.target.id.substr(1);
        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/atm/welcome.php?delete=${sno}`;
          // TODO: Create a form and use post request to submit a form
        }
        else {
          console.log("no");
        }
      })
    })
  </script>


</body>

</html>