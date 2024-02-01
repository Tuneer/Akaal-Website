<?php session_start();?>
<!DOCTYPE html>
  <html>
    <head>
      <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
      <title>Apply</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/css?family=Spectral+SC" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Spectral+SC:800" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Atomic+Age" rel="stylesheet">
    </head>

    <body>
<div class="border-text-all" style="margin:20px;">


<div class="row">
    <form class="col s12" method="POST" action="submitdata.php" enctype="multipart/form-data">

  <div class="input-field col s12 l6">
    <select name="postappliedfor">
      <option value="" disabled selected>Choose your option</option>
      <option value="ASST. HR MANAGER">ASST. HR MANAGER</option>
      <option value="HR EXECUTIVE">HR EXECUTIVE</option>
      <option value="MARKETING EXECUTIVE - SALES">MARKETING EXECUTIVE - SALES</option>
      <option value="BUSINESS DEVELOPMENT MANAGER">BUSINESS DEVELOPMENT MANAGER</option>
      <option value="ADMINISTRATION MANAGER">ADMINISTRATION MANAGER</option>
      <option value="ACCOUNTS MANAGER">ACCOUNTS MANAGER</option>
      <option value="ACCOUNTS EXECUTIVE">ACCOUNTS EXECUTIVE</option>
      <option value="IT DEVELOPER">IT DEVELOPER</option>
      <option value="DATA ENTRY OPERATOR">DATA ENTRY OPERATOR</option>
    </select>
    <label>Post Applied For</label>
   </div>

      <div class="row">
        <div class="input-field col s12 l6">
          <input placeholder="Placeholder" name="firstname" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>

        <div class="input-field col s12 l6">
          <input id="last_name" type="text" name="lastname" class="validate">
          <label for="last_name">Last Name</label>
        </div>
         <div class="input-field col s12 l6">
          <input type="text" name="dob" class="datepicker">
          <label for="birthday">Birthday</label>
        </div>
      </div>

       <div class="input-field col s12 l12">
          <input id="address" type="text" name="address" class="validate">
          <label for="address">Mailing/Postal Address</label>
        </div>

      <div class="row">
        <div class="input-field col s12 l6">
          <input id="telephone" type="text" name="phonenumber" class="validate">
          <label for="telephone">Telephone No.</label>
        </div>
        <div class="input-field col s12 l6">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">E-mail</label>
        </div>
      </div>

      <div class="row">

        <div class="input-field col s12 l4">
          <input id="city" type="text" name="city" class="validate">
          <label for="city">City</label>
        </div>
        <div class="input-field col s12 l4">
          <input id="State" type="text" name="state" class="validate">
          <label for="State">State</label>
        </div>
         <div class="input-field col s12 l4">
          <input id="country" type="text" name="country" class="validate">
          <label for="country">Country</label>
        </div>
     
     </div>

     <div class="row">
       <div class="input-field col s12 l4">
          <input id="city" type="text" name="minimumexperience" class="validate">
          <label for="city">Minimum Experience</label>
        </div>
        <div class="input-field col s12 l4">
          <input id="State" type="text" name="skills" class="validate">
          <label for="State">Skills</label>
        </div>
         <div class="input-field col s12 l4">
          <input id="country" type="text" name="education" class="validate">
          <label for="country">Education</label>
        </div>
     </div>

      <div class="file-field input-field">
      <div class="btn" style="background-color:maroon;">
        <span>Upload CV</span>
        <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
<div class="row">
<div class="col s3 l3">
 <a class="btn waves-effect waves-light" href="index.html" style="background-color:maroon;" type="submit" name="action">Back
    <i class="material-icons right">replay</i>
  </a>
</div>
<div class="col s3 l3">
  <button class="btn waves-effect waves-light" style="background-color:maroon;" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
</div>
 
</div>

</form>
  </div>

</div>
      <!--Import jQuery before materialize.js-->
       <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>

