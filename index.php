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
          <a> Titan Software </a>

          </div>
    </div>

    <div class="content">
    <a ID="admin-header"> Admin Page </a>

      <div class="home-page">

        <div class="list-buttons">
          <ul>
            <li id="viewData"><button onclick="viewData()"> View Data</button> </li>  <!-- href tags embedded in each button -->
            <li id="insertData"><button onclick="insertData()"> Insert Data </button> </li>
            <li id="deleteData"><button onclick="deleteData()"> Delete Data </button> </li>
            <li id="changeData"><button onclick="changeData()"> Change My Data </button> </li>
          </ul>
          </div>

      </div>
      <script>
      
      function viewData()
      {
          //need view data url
          //window.open("");
          var x = document.getElementById("deleteData");
          x.remove();
          x = document.getElementById("insertData");
          x.remove();
          x = document.getElementById("changeData");
          x.remove();
      
      }

      function insertData()
      {

        //williams insert data page
        window.open("http://athena.ecs.csus.edu/~rybachuw/Insert%20Page.html");

      }

      function deleteData()
      {

          //delete page here
          //windown.open("");
          var x = document.getElementById("viewData");
          x.remove();
          x = document.getElementById("insertData");
          x.remove();
          x = document.getElementById("changeData");
          x.remove();
      }

      function changeData()
      {
        
          //change data page
          //window.open("");
          var x = document.getElementById("deleteData");
          x.remove();
          x = document.getElementById("insertData");
          x.remove();
          x = document.getElementById("viewData");
          x.remove();

      }
      </script>  
      


         
      </div>


    </div>
  </div>
</body>

</html>