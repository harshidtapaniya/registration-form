<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    body {
      height: 100vh;
      width: 100vw;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      background-image: url(3368026.jpg);
      background-repeat: repeat-y;
      display: flex;
      align-items: center;
      justify-content: center;
      background-size: 100%;
    }

    /* header {
      left: 50%;
      top: 20%;
      position: relative;
    } */

    .container {
      height: 100vh;
      width: 100vh;

    }

    .image {
      position: relative;
      left: 45%;
      margin-top: 50px;
    }

    .error {
      color: red;
    }

    h4 {
      color: red;
    }

    #validation-box {
      color: yellow;
      display: none;
    }

    #submitbtn {
      display: none;
    }

    /* button{
      position: absolute;
      left: 92%;
      top:50%;
      transform: translateY(-50%);
      cursor: pointer;

    }  */
    #profile-file {
      display: none;
    }

    #profile-pic {
      position: relative;
      left: -60px;
    }

    #password-toggle {
      position: relative;
      left: 340px;
      margin-top: -100px;

    }
  </style>
</head>

<body>


  <div class="container">
    <div class="header">
      <h1 style="position: relative; left: 270px; color:white;">Registration Form</h1>
    </div>
    <div class="image">
      <img src="https://cdn-icons-png.flaticon.com/512/4128/4128176.png" height="200px" width="200px" id="profile-pic">
      <input type="file" id="profile-file" name="photo">

    </div><br><br>
    <form action="insert.php" method="POST">
      <!-- onsubmit="return validateForm()" -->
      <div class="row g-2">
        <div class="col-md">
          <div class="form-floating" id="name">
            <input type="text" onkeyup="fnamevalidation()" class="form-control" name="fname" id="fname" placeholder="">
            <span class="formerror"></span>
            <label for="floatingInputGrid">First Name </label>

          </div>
          <label class="error" id="fname-error">  </label>

        </div>

        <div class="col-md">
          <div class="form-floating">
            <input type="text" onkeyup="lnamevalidation()" class="form-control" name="lname" id="lname" placeholder=""><span class="formerror"></span>
            <label for="floatingInputGrid">Last Name</label>
          </div>
          <label class="error" id="lname-error"></label>
        </div><br>

        <div class="row g-2">
          <div class="col-md">
            <div class="form-floating">
              <input type="email" onkeyup="emailvalidation()" class="form-control" name="email" id="email" placeholder=""><span class="formerror"></span>
              <label for="floatingInputGrid">Email</label>
            </div>
            <label class="error" id="email-error"></label>
          </div>

          <div class="col-md">
            <div class="form-floating">
              <input type="text" onkeyup="usernamevalidation()" class="form-control" name="username" id="username" placeholder=""><span class="formerror"></span>
              <label for="floatingInputGrid">Username</label>
            </div>
            <label class="error" id="username-error"></label>
          </div><br>

          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating"> 
                <input type="password" onkeyup="passwordvalidation()" name="pass" class="form-control" id="password" placeholder="Enter your password" aria-label="Password" aria-describedby="password-toggle">
                <button class="btn btn-outline-light" type="button" id="password-toggle" onclick="togglePasswordVisibility()">
                  <i class="bi bi-eye-slash"></i>
                </button>
                <label for="floatingInputGrid">Password</label>
              </div>
              <label class="error" id="fpassword-error"></label>
            </div>

            <div class="col-md">
              <div class="form-floating">
                <input type="password" onkeyup="cpasswordvalidation()" name="confirm" class="form-control" id="password1" placeholder="confirm your password" aria-label="Password" aria-describedby="password2-toggle">
                <button class="btn btn-outline-light" type="button" id="password-toggle"  onclick="box()">
                  <i class="bi bi-eye-slash"></i>
                </button>
                <label for="floatingInputGrid">Confirm-Password</label>
              </div>
              <label class="error" id="cpassword-error"></label>
            </div><br>


            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating" onchange="">

                  <select onchange="cityvalidation()" name="city" id="city" class="form-select">
                    <option selected disabled value="">City</option>
                    <option>Surat</option>
                    <option>Mumbai</option>
                    <option>Ahemdabad</option>
                    <option>Navsari</option>
                    <option>Amreli</option>
                    <option>Gandhinagar</option>
                    <option>Jamnagar</option>
                  </select>
                </div>
                <label class="error" id="city-error"></label>
              </div>

              <div class="col-md">
                <div class="form-floating">
                  <p style="color: yellow;">Gender:</p>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male" checked>
                    <label class="form-check-label" for="inlineRadio1" style="color: white;">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                    <label class="form-check-label" for="inlineRadio2" style="color: white;">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="other">
                    <label class="form-check-label" for="inlineRadio3" style="color: white;">Other</label>
                  </div>
                </div>
              </div>
            </div><br>

            <div class="row g-2">
              <div class="col-md">
                <div class="form-floating">
                  <input type="date" onkeyup="DOBvalidation()" class="form-control" name="dob" id="DOB" placeholder="" value="">
                  
                  <label for="floatingInputGrid">Date Of Birth</label>
                </div>
                <label class="error" id="DOB-error"></label>
              </div>

              <div class="col-md">
                <div class="form-floating">
                  <!-- <img src="closeeye.jpeg"> -->
                  <input type="number" onkeyup="agevalidation()" class="form-control" name="age" id="age" placeholder="" value="">
                  <label for="floatingInputGrid">Age</label>
                </div>
                <label class="error" id="age-error"></label>
              </div>
            </div><br><br>
            <div class="row g-1">
              <div class="col-md">
                <div class="form-floating">
                  <!-- <img src="closeeye.jpeg"> -->
                  <input type="number" onkeyup="numbervalidation()" class="form-control"  name="phonenum" id="tnumber" maxlength="10" ;>
                  <label for="floatingInputGrid">Mobile Number</label>
                </div>
                <label class="error" id="tnumber-error"></label>
              </div>
            </div><br>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
              <label class="form-check-label" for="flexCheckIndeterminate" style="color: white;">
                Terms & Condition You agree that by accessing the Registration Form, you have read, understood, and
                agree to
                be bound
                by all of these Terms and Conditions.
              </label>
            </div><br><br>

            <div class="button">
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" onclick="submitdata()" name="submit">Submit</button>
                <button class="btn btn-primary" type="button">Reset</button>

                <button type="submit" name="submit" id="done" style="display:none;">Submit</button>
              </div>
            </div>
    </form>
  </div>

  <script>
    function box() {
      const passwordInput = document.getElementById("password1");
      const passwordToggle = document.getElementById("password2-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';

      } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
      }
    }


    function togglePasswordVisibility() {
      const passwordInput = document.getElementById("password");
      const passwordToggle = document.getElementById("password-toggle");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.innerHTML = '<i class="bi bi-eye"></i>';
      } else {
        passwordInput.type = "password";
        passwordToggle.innerHTML = '<i class="bi bi-eye-slash"></i>';
      }
    }


    var profile_pic = document.getElementById("profile-pic");
    var profile_file = document.getElementById("profile-file");

    profile_pic.addEventListener('click', () => {

      profile_file.click()
    })

    profile_file.addEventListener("change", (event) => {
      profile_pic.src = URL.createObjectURL(event.target.files[0]);
    })



    function fnamevalidation() {


      var fname = document.getElementById("fname").value;

      if (fname == "") {
        document.getElementById("fname-error").innerHTML = "**firstname is required**";
        return false;
      } else {
        document.getElementById("fname-error").innerHTML = "";
        return true;

      }


    }


    function usernamevalidation() {


      var username = document.getElementById("username").value;

      if (username == "") {
        document.getElementById("username-error").innerHTML = "**username is required**";
        return false;
      } else if (username.length <5) {
        document.getElementById("username-error").innerHTML = "**username minimum 5 character**";
        return false;
      } else {
        document.getElementById("username-error").innerHTML = "";
        return true;
      }

    }


    function lnamevalidation() {
      //lname-error

      var lname = document.getElementById("lname").value;

      if (lname == "") {
        document.getElementById("lname-error").innerHTML = "**last Name is required**";
        return false;
      } else {
        document.getElementById("lname-error").innerHTML = "";
        return true;

      }


    }

    function DOBvalidation() {


      var DOB = document.getElementById("DOB").value;

      if (DOB == "") {
        document.getElementById("DOB-error").innerHTML = "**date of birth is required**";
        return false;
      } else {
        document.getElementById("DOB-error").innerHTML = "";
        return true;

      }


    }

    function tnumbervalidation() {
      //number-error

      var tnumber = document.getElementById("tnumber").value;

      if (tnumber == "") {
        document.getElementById("tnumber-error").innerHTML = "**mobile number is required**";
        return false;
      } else if (tnumber.length == 11) {
        document.getElementById("tnumber-error").innerHTML = "**Only 10 character**";
        return false;
      } else {
        document.getElementById("tnumber-error").innerHTML = "";
        return true;

      }
    }

    function emailvalidation() {

      var email = document.getElementById("email").value;

      if (email == "") {
        document.getElementById("email-error").innerHTML = "**email is required**";
        return false;

      } else {
        document.getElementById("email-error").innerHTML = "";


        var checkemail = email.match(
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
        );

        if (checkemail == null) {
          document.getElementById("email-error").innerHTML = "**email is invalid**";
          return false;
        } else {
          document.getElementById("email-error").innerHTML = "";
          return true;
        }

        return true;

      }
    }

    function passwordvalidation() {

      var password = document.getElementById("password").value;

      if (password == "") {
        document.getElementById("fpassword-error").innerHTML = "**password is required**";
        return false;

      } else {
        document.getElementById("fpassword-error").innerHTML = "";


        var checkpassword = password.match(
          /([()[\]{}?!$%&@\/=*+~])/
        );

        if (checkpassword == null) {
          document.getElementById("fpassword-error").innerHTML = "**password is invalid**";
          return false;
        } else {
          document.getElementById("fpassword-error").innerHTML = "";
          return true;
        }

        return true;

       }
    }

    function cpasswordvalidation() {
      var password1 = document.getElementById("password1").value;
      var password = document.getElementById("password").value;

      if (password1 == "") {
        document.getElementById("cpassword-error").innerHTML = "**confirm password is required**";
        return false;
      } else if (password1 != password) {
        document.getElementById("cpassword-error").innerHTML = " **password does not matched**";
        return false;
      } else if (password1 == password) {
        document.getElementById("cpassword-error").innerHTML = " ";
        return true;
      }

    }

    function agevalidation() {


      var age = document.getElementById("age").value;

      if (age == "") {
        document.getElementById("age-error").innerHTML = "**Age is required**";
        return false;
      } else {
        document.getElementById("age-error").innerHTML = "";
        return true;
      }

    }

    function cityvalidation() {


      var city = document.getElementById("city").value;

      if (city == "") {
        document.getElementById("city-error").innerHTML = " **City is required**";
        return false;
      } else {
        document.getElementById("city-error").innerHTML = "";
        return true;

      }

    }



    function submitdata() {
      lnamevalidation();
      fnamevalidation();
      tnumbervalidation();
      DOBvalidation();
      agevalidation();
      cityvalidation();
      emailvalidation();
      usernamevalidation();
      passwordvalidation();
      cpasswordvalidation();

      if (lnamevalidation() && fnamevalidation() && tnumbervalidation() && DOBvalidation() && agevalidation() && cityvalidation() && emailvalidation() && usernamevalidation() && passwordvalidation() && cpasswordvalidation()) {
     
        document.getElementById("done").click();

      }



    }
  </script>


</body>

</html>