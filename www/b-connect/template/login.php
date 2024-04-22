<!DOCTYPE html>
    <?php echo "<form action=\"index.php?res=popup1&uamip=$uamip&uamport=$uamport\" style=\"padding: 0%;\" method=\"post\">
            <input type='hidden' name='challenge' value='$challenge'>
            <input type='hidden' name='uamip' value='$uamip'>
            <input type='hidden' name='uamport' value='$uamport'>
            <input type='hidden' name='userurl' value='$userurl'>
    "?>
        <div class="main-content">
            <div class="container-fluid">
                <div class="row section1">                
                    <img class="mb-3" src="assets/bwifilogo.svg" width="40" height="60">
                    <p id="header1">b Wi-Fi</p>
                    <p id="header2">at Cocotte's Cafe</p>
                </div>
                <div class="row section2">
                    <div style="padding: 0%; margin-bottom: 24px;">
                        <label for="emailValidation" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email_address" id="emailValidation" required>
                        <span class="validation-message" id="emailError"></span>
                    </div>
                    <div class="col" style="padding: 0%;">
                        <label for="ageValidation" class="form-label">Age</label>
                        <select name="age" class="form-select" aria-label="ageValidation" id="ageValidation" required>
                            <option value="" disabled selected>Select</option>
                            <option value="1">18-24</option>
                            <option value="2">25-34</option>
                            <option value="3">35-44</option>
                            <option value="4">45-54</option>
                            <option value="5">55-64</option>
                            <option value="6">65 and over</option>
                        </select>
                    </div>
                    <div class="col" style="padding: 0%; margin-left: 24px;">
                        <label for="genderValidation" class="form-label">Gender</label>
                        <select name="gender" class="form-select" aria-label="Default select example" id="genderValidation" required> 
                            <option value="" disabled selected>Select</option>
                            <option value="1">Woman</option>
                            <option value="2">Man</option>
                            <option value="3">Transgender</option>
                            <option value="4">Non-binary/Non-conforming</option>
                            <option value="5">Prefer Not to Respond</option>
                        </select>
                    </div>
                </div>
                <div class="row section3">
                    <div class="form-check">
                        <label class="form-check-label" for="checkboxValidation">
                            Accept <a href="#">Terms and Conditions</a>
                        </label>
                        <input class="form-check-input" type="checkbox" value="accepeted" id="checkboxValidation" required>
                    </div>
                </div>
                <div class="row section4">
                    <form action="index.php" method="post">
                        <input type='hidden' name='button' value='Login'>
                          <button type="submit" class="btn btn-primary btn-lg" style="background-color: #000029; font-weight: 600; --bs-btn-padding-y: .25rem">
                            Connect For Free
                          </button>
                    </form>
                </div>
            </div>
        </div>
    </form>
    <script src="assets/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>
