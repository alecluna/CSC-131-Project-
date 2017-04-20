<!DOCTYPE html>
<?php
	$db = mysqli_connect('localhost', 'root', '', 'testdb'); 
	if (!$db)
	{
	   die('Error connecting to MySQL server. Is this your error?.');
	}
	echo "connection succesful";
   //$selected = mysqli_select_db($db, 'testdb')
     //   or die("Unable to connect");
   $result = mysqli_query($db, "SELECT * FROM table_one");
   echo "" . mysqli_num_rows($result);
   while ($row = mysqli_fetch_assoc($result)) 
   {
      echo " ". $row["alecluna"];
   }
  /*init session
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] == true)) 
  {
  // show the password protected page
  } else 
  {
  // redirect to the login page
  header('Location: login.php');
  die();*/
?>

<html>

<head>
  <meta charset="UTF-8">

  <link href="style.css" rel="stylesheet"> 
  <title>CSC 131 Project</title>
</head>

<body>

  <div class="wrapper">

    <div class="header">

      <div id="logo">

          <!--img link in css -->
          <a> logo </a>

        </div>

        <div id="teamname">

          <!--link our team name here i CSS -->
          <a> Insert Page </a>

          </div>
    </div>

    <div class="content">
    <a ID="student-header"> Menu Page </a>

      <div class="home-page">

          

        <!-- Form Code Start -->
<form id='update' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Update Your Information!</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='container'>
    <label for='name' >Your Full Name: </label><br/>
    <input type='text' name='name' id='name'  maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address:</label><br/>
    <input type='text' name='email' id='email'  maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='timing' >Timings:</label><br/>
    <input type='text' name='timing' id='timing' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style='height:80px;'>
    <label for='phone' >Phone Number:</label><br/>
    <input type='phone' name='phone' id='phone' maxlength="50" />
</div>

<div class='button'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>





      </div>  
      </div>


    </div>
  </div>
</body>

</html>