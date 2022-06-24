<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">
</head>

<body>
   <form action="output.php" method="post">
    <div class="container border p-4">

      <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname">
      </div>

      <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>

      <div class="mb-3">
        <label for="address">Address</label>
        <textarea name="address" id="" cols="20" rows="5" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label for="country">Governorate</label>
        <select class="form-select" aria-label="Default select example">
          <option value="1" selected>Alexandria</option>
          <option value="2">Mansoura</option>
          <option value="3">Behaira</option>
          <option value="4">Sohag</option>
          <option value="5">Aswan</option>
        </select>
      </div>

      <div class="mb-4 mt-4">
        <label for="gender" >Gender</label>

        <div class="form-check form-check-inline" style="margin-left:200px ; ">
          <input type="radio" name="gender" value="male"> Male
        </div>

        <div class="form-check form-check-inline">
          <input type="radio" name="gender" value="female"> Female
        </div>
        
      </div>

      <div class="mb-4 mt-4">
        <label for="skills">Skills</label>

        <div class="" style="margin-left:275px ; ">
          <div class="form-check-inline" >
            <input class="form-check-input" type="checkbox" value="PHP" name="skill[]" id="Check">
            <label class="form-check-label" for="Check"> PHP </label>
          </div>
          <div class="form-check-inline"style="margin-left:20px ; ">
            <input class="form-check-input" type="checkbox" value="MySql" name="skill[]" id="Check">
            <label class="form-check-label" for="Check"> Javascript </label>
          </div>
          <br>
          <div class="form-check-inline">
            <input class="form-check-input" type="checkbox" value="Laravel" name="skill[]" id="Check">
            <label class="form-check-label" for="Check"> Laravel </label>
          </div>

          <div class="form-check-inline">
            <input class="form-check-input" type="checkbox" value="NodeJs" name="skill[]" id="Check">
            <label class="form-check-label" for="Check"> ReactJS </label>
          </div>
        </div>
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password">
      </div>

      <div class="mb-3">
        <label for="depart" class="form-label">Department</label>
        <input type="text" class="form-control" id="depart" name="depart" placeholder="Open Source" readonly>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>

</body>

</html>