<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="row g-2">
    <div class="col-md">
      <div class="form-floating">
        <input type="first name" class="form-control" id="" placeholder="" value="">
        <label for="floatingInputGrid">First Name </label>
      </div>
    </div>

    <div class="col-md">
      <div class="form-floating">
        <input type="last name" class="form-control" id="" placeholder="" value="">
        <label for="floatingInputGrid">Last Name</label>
      </div>
    </div> 
</div><br>
<div class="row g-2">
<div class="col-md">
      <div class="form-floating">
        <input type="email" class="form-control" id="" placeholder="" value="">
        <label for="floatingInputGrid">Email</label>
      </div>
    </div>

    <div class="col-md">
      <div class="form-floating">
        <input type="username" class="form-control" id="" placeholder="" value="">
        <label for="floatingInputGrid">Username</label>
      </div>
    </div> 
</div><br>
<div class="row g-2">
<div class="col-md">
      <div class="form-floating">
          <input type="password" class="form-control" id="" placeholder="" value="">
          <!-- <img src="closeeye.jpeg" > -->
        <label for="floatingInputGrid">Password</label>
     
      </div>
    </div>

    <div class="col-md">
    <div class="form-floating">
          <input type="password" class="form-control" id="" placeholder="" value="">
          <!-- <img src="closeeye.jpeg" > -->
        <label for="floatingInputGrid">Confirm Password</label>
     
      </div>
    </div>
</div><br>

<div class="row g-2">
<div class="col-md">
      <div class="form-floating">
      <!-- <label for="inputState" class="form-label">City</label> -->
    <select id="inputState" class="form-select">
              <option selected>City</option>
              <option>Surat</option>
              <option>Mumbai</option>
              <option>Ahemdabad</option>
              <option>Navsari</option>
              <option>Amreli</option>
              <option>Gandhinagar</option>
              <option>Jamnagar</option>
            </select>
            
      </div>
    </div>

    <div class="col-md">
      <div class="form-floating">
        <p>Gender:</p>
      <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3">Other</label>
</div>
      </div>
    </div> 
</div><br>

<div class="row g-2">
<div class="col-md">
      <div class="form-floating">
          <input type="number" class="form-control" id="" placeholder="" value="">
          <!-- <img src="closeeye.jpeg" > -->
        <label for="floatingInputGrid">Date Of Birth</label>
     
      </div>
    </div>

    <div class="col-md">
      <div class="form-floating">
      <!-- <img src="closeeye.jpeg"> -->
        <input type="number" class="form-control" id="" placeholder="" value="">
        <label for="floatingInputGrid">Age</label>
      </div>
    </div> 
</div><br>
<div class="row g-1">
<div class="col-md">
      <div class="form-floating">
      <!-- <img src="closeeye.jpeg"> -->
        <input type="number" class="form-control">
        <label for="floatingInputGrid">Mobile Number</label>
      </div>
    </div> 
</div><br>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
  <label class="form-check-label" for="flexCheckIndeterminate">
  Terms & Condition You agree that by accessing the Registration Form, you have read, understood, and agree to be bound
by all of these Terms and Conditions.
  </label>
</div><br><br>

<div class="button">
        <button type="button" class="btn btn-primary btn-lg">SUBMIT</button>
        <button type="button" class="btn btn-secondary btn-lg">RESET</button>
</div>
</body>
</html>