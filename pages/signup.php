<!-- for bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
body{
  background-image: url("https://wallpaper-mania.com/wp-content/uploads/2018/09/High_resolution_wallpaper_background_ID_77701389136.jpg");
  background-repeat: no-repeat;
  background-size: cover;
} 

form {
  background: rgb(0, 0, 0, 0.5);
}

input{
  width: 100%;
  padding: 15px 20px;
  margin: 15px 0;
  display: inline-block;
	box-sizing: border-box;
	outline: none;
	font-size: 150%;
}

button {
  /* background-color: #b30d4b; */
  background-color: #ad0c4d;
  color: white;
  padding: 16px 20px;
  margin: 15px 0;
	cursor: pointer;
	border: none;
	width: 100%;
	font-size: 150%;
  outline: none;
}

button:hover {
  opacity: 0.8;
}

img.avatar {
	width: 22%;
	opacity: 0.8;
  border-radius: 60%;
}

.form-elements{
	text-align: center;
}

.form-elements h3{
	color: white;
	font-size: 30px;
  margin: 5px;
}

/* -------------------Styling the error messages----------------- */

#failed{
  color: #c51244;
  font-size: 28px;
}
#success{
  color: #32cd32;
  font-size: 28px;
}
/* for show password */
#showpass
{
  width:15vw;
  color:#fff;
  font-size: 22px;
  font-family: Arial;
}
#showpass input
{
  width: 20px;
  height: 20px;
}
/* On screens that are 992px or less, set the background color to blue */
@media screen and (max-width: 992px) {
  #showpass
  {
    width:55vw;
  } 
}
</style>

<?php include("../templates/header.php"); ?>

	<div class="nav-container">
      <?php include("../templates/navBar.php") ?>
  </div>

  <div class="container col-lg-4 co-sm-11 px-0">
	<form action="../include/signup.inc.php" class="py-5 px-4" method="POST" id=signupForm>

    <div class="form-elements">
      <h3>SIGN UP</h3>
    </div>

    <div class="form-elements">
        <img src="../images/red-avatar.png" alt="Avatar" class="avatar">
        <?php 
          if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInputSignup") {
              echo "<p id='failed'>Please fill all the fields</p>";
            }
            else if ($_GET["error"] == "invalidUname") {
              echo "<p id='failed'>Username must contain letters, numbers and underscores only</p>";
            }
            else if ($_GET["error"] == "invalidHospId") {
              echo "<p id='failed'>Invalid hospital id</p>";
            }
            else if ($_GET["error"] == "invalidEmail") {
              echo "<p id='failed'>Invalid email id</p>";
            }
            else if ($_GET["error"] == "noPswdMatch") {
              echo "<p id='failed'>The passwords do not match</p>";
            }
            else if ($_GET["error"] == "unameExists") {
              echo "<p id='failed'>This username is already taken</p>";
            }
            else if ($_GET["error"] == "noHospIdExists") {
              echo "<p id='failed'>Your hospital is not registered with us</p>";
            }
            else if ($_GET["error"] == "hospstmtfailed") {
              echo "<p id='failed'>Something went wrong while checking hospital id</p>";
            }
            else if ($_GET["error"] == "userstmtfailed") {
              echo "<p id='failed'>Something went wrong while creating user</p>";
            }
            else if ($_GET["error"] == "none") {
              echo "<p id='success'>Registration successful!!!</p>";
            }
          
          }
        ?>
    </div>

    <div class="form-elements">
      <input type="text" name="uname" placeholder="Username" class="requiredField">
      <input type="text" name="email" placeholder="Email" class="requiredField">
      <input type="number" name="hosp_id" placeholder="Hospital ID" class="requiredField">
      <input type="password" name="pswd" placeholder="Password" id="pswd" class="requiredField">
      <input type="password" name="re_pswd" placeholder="Re-enter Password" id="pswd2" class="requiredField">
      <div id="showpass">
          <input type="checkbox" id="box" onclick="box1()">
          <span id="notice">show password</span>
      </div>
      <button type="submit" name="submit" value="submit" id="submitBtn">Sign Up</button>
    </div>
      	
  </form>
  </div>
  <script src="../js/showpassword.js"></script>
  <!-- for bootstrap js   -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<?php include("../include/footer.inc.php") ?>
