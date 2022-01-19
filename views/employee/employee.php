<!--Employee view -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee</title>
      <!--CSS BOOTSTRAP-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!--JS BOOTSTRAP-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="assets/js/employees.js" defer></script>
</head>
<body>
  <form id="formCreate" method="post" action="?controller=employee&action=addEmployee">
  <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="validationCustom02" name="lastName" placeholder="last name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomEmail" class="form-label">Email Adress</label>
    <input type="text" class="form-control" id="validationCustomEmail" name="email" placeholder = "email direction" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomGender" class="form-label">Gender</label>
    <select class="form-select" id="validationCustomGender" name="gender" required>
      <option <?php if(!isset($gender)) {echo "selected";} else {if($gender === ""){echo "selected";}} ?> disabled value="">Gender....</option>
        <option <?php if(isset($gender)){ if($gender == "man") {echo "selected";}}?>>man</option>
        <option <?php if(isset($gender)){ if($gender == "woman") {echo "selected";}}?>>woman</option>
        <option>Not Gender</option>
    </select>
    <div class="invalid-feedback">
      Please select a Gender.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" name="city" placeholder = "city" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomSaddress" class="form-label">Street Address</label>
    <input type="text" class="form-control" id="validationCustomSaddress" name="streetAddress" placeholder = "street address"required>
    <div class="invalid-feedback">
      Please provide a valid address.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomSaddress" class="form-label">State</label>
    <input type="text" class="form-control" id="validationCustomSaddress" name="state" placeholder = "State"required>
    <div class="invalid-feedback">
      Please provide a valid State.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomAge" class="form-label">Age</label>
    <input type="text" class="form-control" id="validationCustomAge" name="age" placeholder = "Age" required>
    <div class="invalid-feedback">
      Type an age.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Postal Code</label>
    <input type="text" class="form-control" id="validationCustom05" name="postalCode" placeholder = "Postal Code" required>
    <div class="invalid-feedback">
      Please provide a valid Postal Code.
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom06" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="validationCustom06" name="phoneNumber" placeholder = "Phone number" required>
    <div class="invalid-feedback">
      Please provide a valid Phone Number.
    </div>
  </div>
  <div class="col-2">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
  <div class="col-2">
    <button
    <a id="home" class="btn btn-secondary" href="./">Back</a>
    </button>
  </div>
</form>
</div>
</body>
</html>