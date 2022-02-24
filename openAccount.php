<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


    <title>Welcome</title>
</head>

<body>
    <?php require 'connections/_nav.php' ?>
    <div class="container1">
        <form class="row g-3 needs-validation"  method="POST" action="/atm/accountNumber.php">
            <div class="contaner">
                <div class="alert alert-info" role="alert">
                    BASIC DETAILS
                </div>
            </div>
            <label for="Customer">Customer Type: </label>
            <br><select name="myselectboxC" class="form-select" aria-label="Default select example" required>
                <option name="myoption1" selected>-select-</option>
                <option name="myoption2" value="Public">Public</option>
                <option name="myoption3" value="Staff">Staff</option>
            </select>
            <label for="status">Status:</label>
            <br><select name="myselectboxS" class="form-select" aria-label="Default select example" required>
                <option name="myoption1S" selected>-select-</option>
                <option name="myoption2S" value="NRI">Non-Resident Indian(NRI)</option>
                <option name="myoption1=3S" value="PIO/OCI">Person of Indian Origin(PIO)/Overseas Citizen of India(OCI)</option>
            </select>
            <br><label for="name">Name (as mentioned in the passport):</label><br>
            <div class="col-md-4">
                <select name="myselectboxG" class="form-select" id="validationCustom04" required>
                    <option name="myoption1G" selected disabled value="">Choose....</option>
                    <option name="myoption2G" value="MR">MR</option>
                    <option name="myoption3G" value="MRS">MRS</option>
                    <option name="myoption4G" value="MISS">MISS</option>
                    <option name="myoption5G" value="OTHER">OTHER</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" required>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">State</label>
                <select name="myselectboxState" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option name="myoptionState1" value="Andhra Pradesh">Andhra Pradesh</option>
                    <option name="myoptionState2" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option name="myoptionState3" value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option name="myoptionState4" value="Assam">Assam</option>
                    <option name="myoptionState5" value="Bihar">Bihar</option>
                    <option name="myoptionState6" value="Chandigarh">Chandigarh</option>
                    <option name="myoptionState7" value="Chhattisgarh">Chhattisgarh</option>
                    <option name="myoptionState8" value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option name="myoptionState9" value="Daman and Diu">Daman and Diu</option>
                    <option name="myoptionState10" value="Delhi">Delhi</option>
                    <option name="myoptionState11" value="Lakshadweep">Lakshadweep</option>
                    <option name="myoptionState12" value="Puducherry">Puducherry</option>
                    <option name="myoptionState13" value="Goa">Goa</option>
                    <option name="myoptionState14" value="Gujarat">Gujarat</option>
                    <option name="myoptionState15" value="Haryana">Haryana</option>
                    <option name="myoptionState16" value="Himachal Pradesh">Himachal Pradesh</option>
                    <option name="myoptionState17" value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option name="myoptionState18" value="Jharkhand">Jharkhand</option>
                    <option name="myoptionState19" value="Karnataka">Karnataka</option>
                    <option name="myoptionState20" value="Kerala">Kerala</option>
                    <option name="myoptionState21" value="Madhya Pradesh">Madhya Pradesh</option>
                    <option name="myoptionState22" value="Maharashtra">Maharashtra</option>
                    <option name="myoptionState23" value="Manipur">Manipur</option>
                    <option name="myoptionState24" value="Meghalaya">Meghalaya</option>
                    <option name="myoptionState25" value="Mizoram">Mizoram</option>
                    <option name="myoptionState26" value="Nagaland">Nagaland</option>
                    <option name="myoptionState27" value="Odisha">Odisha</option>
                    <option name="myoptionState28" value="Punjab">Punjab</option>
                    <option name="myoptionState29" value="Rajasthan">Rajasthan</option>
                    <option name="myoptionState30" value="Sikkim">Sikkim</option>
                    <option name="myoptionState31" value="Tamil Nadu">Tamil Nadu</option>
                    <option name="myoptionState32" value="Telangana">Telangana</option>
                    <option name="myoptionState33" value="Tripura">Tripura</option>
                    <option name="myoptionState34" value="Uttar Pradesh">Uttar Pradesh</option>
                    <option name="myoptionState35" value="Uttarakhand">Uttarakhand</option>
                    <option name="myoptionState36" value="West Bengal">West Bengal</option>
                    <option name="myoptionState37" value="Andhra Pradesh">Andhra Pradesh</option>
                    <option name="myoptionState38" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                    <option name="myoptionState39" value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option name="myoptionState40" value="Assam">Assam</option>
                    <option name="myoptionState41" value="Bihar">Bihar</option>
                    <option name="myoptionState42" value="Chandigarh">Chandigarh</option>
                    <option name="myoptionState43" value="Chhattisgarh">Chhattisgarh</option>
                    <option name="myoptionState44" value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                    <option name="myoptionState45" value="Daman and Diu">Daman and Diu</option>
                    <option name="myoptionState46" value="Delhi">Delhi</option>
                    <option name="myoptionState47" value="Lakshadweep">Lakshadweep</option>
                    <option name="myoptionState48" value="Puducherry">Puducherry</option>
                    <option name="myoptionState49" value="Goa">Goa</option>
                    <option name="myoptionState50" value="Gujarat">Gujarat</option>
                    <option name="myoptionState51" value="Haryana">Haryana</option>
                    <option name="myoptionState52" value="Himachal Pradesh">Himachal Pradesh</option>
                    <option name="myoptionState53" value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option name="myoptionState54" value="Jharkhand">Jharkhand</option>
                    <option name="myoptionState55" value="Karnataka">Karnataka</option>
                    <option name="myoptionState56" value="Kerala">Kerala</option>
                    <option name="myoptionState57" value="Madhya Pradesh">Madhya Pradesh</option>
                    <option name="myoptionState58" value="Maharashtra">Maharashtra</option>
                    <option name="myoptionState59" value="Manipur">Manipur</option>
                    <option name="myoptionState60" value="Meghalaya">Meghalaya</option>
                    <option name="myoptionState61" value="Mizoram">Mizoram</option>
                    <option name="myoptionState62" value="Nagaland">Nagaland</option>
                    <option name="myoptionState63" value="Odisha">Odisha</option>
                    <option name="myoptionState64" value="Punjab">Punjab</option>
                    <option name="myoptionState65" value="Rajasthan">Rajasthan</option>
                    <option name="myoptionState66" value="Sikkim">Sikkim</option>
                    <option name="myoptionState67" value="Tamil Nadu">Tamil Nadu</option>
                    <option name="myoptionState68" value="Telangana">Telangana</option>
                    <option name="myoptionState69" value="Tripura">Tripura</option>
                    <option name="myoptionState70" value="Uttar Pradesh">Uttar Pradesh</option>
                    <option name="myoptionState71" value="Uttarakhand">Uttarakhand</option>
                    <option name="myoptionState72" value="West Bengal">West Bengal</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="PIN" class="form-label">PIN</label>
                <input type="text" class="form-control" id="PIN" name="PIN" required>
            </div>
            <br><label for="fatherName">Father Name:</label><br>
            <div class="col-md-4">
                <select name="myselectboxFather" class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">-select-</option>
                    <option name="myoptionFather" value="MR">MR</option>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="fathernamefirst" name="fathernamefirst" placeholder="First Name" required>
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" id="fathernamelast" name="fathernamelast" placeholder="Last Name" required>
            </div>
            <div class="col-md-4">
                <br>
                <label for="DOB">Date Of Birth:</label>
                <input type="date" class="form-control" id="DOB" name="DOB" required>
            </div>
            <div class="col-md-4">
                <br><label for="aadharNo">Aadhar Number:</label>
                <input type="text" class="form-control" id="aadharNo" name="aadharNo" required>
            </div>
            <div class="col-md-4">
                <br><label for="panNo">PAN Number:</label>
                <input type="text" class="form-control" id="panNo" name="panNo" required>
            </div>

            <div class="contaner">
                <div class="alert alert-info" role="alert">
                    ADDRESS (OVERSEAS ONLY)
                </div>
            </div>
            <label name="myselectboxaddress" for="address">Aadress Type: </label>
            <select name="myselectdata" class="form-select" aria-label="Default select example" required>
                <option name="myoptionaddress1" selected>-select-</option>
                <option name="myoptionaddress2" value="Residential">Residential</option>
                <option name="myoptionaddress3" value="Business">Business</option>
                <option name="myoptionaddress4" value="Residential or Business">Residential or Business</option>
                <option name="myoptionaddress5" value="Registered Office">Registered Office</option>
            </select>
            <br>
            <div class="col-md-4">
                <label for="HouseNo">House /Flat No</label>
                <input type="text" class="form-control" id="HouseNo" name="HouseNo">
            </div>
            <div class="col-md-4">
                <label for="Landmark">Landmark/Street</label>
                <input type="text" class="form-control" id="Landmark" name="Landmark">
            </div>
            <div class="col-md-4">
                <label for="cityTownDistrict">City/Town/District</label>
                <input type="text" class="form-control" id="cityTownDistrict" name="cityTownDistrict" required>
            </div>
            <br>
            <div class="col-md-4">
                <label for="Country">Country</label>
                <input type="text" class="form-control" id="Country" name="Country" required>
            </div>
            <div class="col-md-4">
                <label for="Pin1"> PIN/Area Code</label>
                <input type="text" class="form-control" id="Pin1" name="Pin1" required>
            </div>
            <div class="col-md-4">
                <label for="state1">State</label> </label>
                <input type="text" class="form-control" id="state1" name="state1" required>
            </div>
            <br>
            <div class="contaner">
                <div class="alert alert-info" role="alert">
                    CONTACT DETAILS
                </div>
            </div>
            <div class="col-md-4">
                <label for="mob">Mobile No.</label>
                <input type="text" class="form-control" id="mob" name="mob" required>
            </div>
            <div class="col-md-4">
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" name="mail" required>
            </div>
            <div class="col-md-4">
                <label for="tel">Telephone No (Office)</label>
                <input type="text" class="form-control" id="tel" name="tel">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>