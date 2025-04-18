<!DOCTYPE html>
<html>
<head>
	<title>Career Pro</title>
    <style>



        ul {
			display: flex;
			list-style-type: none;
			padding: 0;
			margin: 0;
			justify-content: center;
			align-items: center;
			height: 100%;
		}

		ul li {
			text-align: center;
			padding: 20px;
			border: 1px solid black;
			border-radius: 10px;
			margin: 10px;
			background-color: rgb(150, 240, 146);
			position: relative;
            font-size: 23px;
		}

		ul li:first-child {
			margin-left: 0;
		}

		ul li:last-child {
			margin-right: 0;
		}

		ul li:before {
			content: "";
			display: block;
			height: 40px;
			width: 0;
			border-width: 0 0 1px 1px;
			margin: 20px auto 0;
			position: absolute;
			top: -20px;
			left: 50%;
			transform: translateX(-50%);
		}

		ul li:first-child:before {
			margin-left: 0;
		}

		ul li:last-child:before {
			margin-right: 0;
			border-width: 0 1px 1px 0;
		}

		ul li:after {
			content: "";
			display: block;
			height: 0;
			width: 0;
			border-style: solid;
			border-width: 10px 0 10px 10px;
			border-color: transparent transparent transparent black;
			position: absolute;
			top: 50%;
			right: -20px;
			transform: translateY(-50%);
		}

		ul li:first-child:after {
			display: none;
		}

        .pos{
            padding: 100px;
            
        }

        .posdiv1{
            background-color: rgb(198, 241, 208); 
            padding: 2px; 
            border: black; 
            border-width: 1px; 
            border-radius: 2px;
        }

        .posdiv2{
            background-color: rgb(198, 241, 208); 
            padding: 2px; 
            border: black; 
            border-width: 1px; 
            border-radius: 2px;
        }

        ol li{
            background-color: transparent;
            border: 0;
            padding: 2px;
            font-size: 25px;

        }



        /* header */

        header {
	/* background-color: #58C5B8; */
    background: url("img11.jpg");
    background-size: cover;
	padding: 20px;
	text-align: center;
}

header p {
    color: #fff;
    font-size: 25px;
}





        /* footer */

        footer {
	background: url("img11-1.jpg");
    background-size: cover;
	color: #fff;
	padding: 20px;
	text-align: center;
    margin-bottom: 0%;
}

        footer h3 {
	margin-top: 0;
  }
  

  
  footer ul li {
	margin-bottom: 10px;
  }
  
  footer ul li a {
	color: #fff;
  }


    </style>
</head>
<body>
	<header>
		<nav class="nav1">
			<ul style="list-style: none; margin: 0; padding: 0;">
				<li style="display: inline-block; margin-right: 20px; border: 0; background-color: transparent;"><a style="color: #ffffff; text-decoration: none; font-size: 23px;" href="home.html">Home</a></li>
				
				<li style="display: inline-block; margin-right: 20px;  border: 0; background-color: transparent;"><a style="color: #ffffff; text-decoration: none; font-size: 23px;" href="LOGOUT.html">Logout</a></li>
			</ul>
		</nav>
		<h1 style="font-size: 70px;color: azure; font-family:Copperplate ;">Career Pro</h1>
		<p>Navigate your career with ease</p>

        <br>
        <!-- <input  style="width: 400px; height: 25px; border-radius: 10px; font-size: 15px;" type="text" name="searching" placeholder="  Enter the career to generate a path to reach it "> -->
	</header>
    </body>
    </html>


  
<?php
	$conn=new mysqli('localhost','root','','db2');

	$proff=$_GET['searching'];

	// $sqlobj=mysqli_query($conn,"select * from employee where Designation in ($proff)");
  	$sql1="SELECT E1,C1,E2,C2,E3,C3,E4,C4,E5,C5,Designation FROM employee WHERE Designation='$proff'";
	$res=$conn->query($sql1);


	if($res->num_rows > 0){
		while($row=$res->fetch_assoc())
		{
			
			$E1=$row["E1"];
			$C1=$row["C1"];
			$E2=$row["E2"];
			$C2=$row["C2"];
			$E3=$row["E3"];
			$C3=$row["C3"];
			$E4=$row["E4"];
			$C4=$row["C4"];
			$E5=$row["E5"];
			$C5=$row["C5"];
			$des=$row["Designation"];


		 echo " <div class='pos'>
         <div class='posdiv1'>
         <p style='text-align: center; font-size: 37px; font-weight: bold;'>Paths for you !</p>
         
         <ul>
            <li>12th board examination</li>
			<li>$E1</li>
            <li>$C1</li>
            <li>$E2</li>
            <li>$C2</li>
            <li>$E3</li>
            <li>$C3</li>
            <li>$E4</li>
            <li>$C4</li>
			<li>$E5</li>
            <li>$C5</li>
			<li>$des</li>
          </ul></div><br>

         
         </div>";
		 $sql2="SELECT clgname,course_Offer FROM college WHERE course_Offer='$C1'||course_Offer='$C2'||course_Offer='$C3'||course_Offer='$C4'||course_Offer='$C5'";

		 echo" <h2>Colleges for the above path</h2>";
		 $res2=$conn->query($sql2);
		 if($res2->num_rows > 0){
			while($row1=$res2->fetch_assoc())
		    {
				$college=$row1["clgname"];
				$collegecor=$row1["course_Offer"];
				echo"<p>$college offers $collegecor</p>";
		    }
		  }
		  
		}
		}
	else{
		echo "0 results";
	}


// $conn->close();




	// <div class="pos">
    //     <div class="posdiv1">
    //     <p style="text-align: center; font-size: 37px; font-weight: bold;">Paths for you !</p>
    //     <ul>
    //         <li>12th board examination</li>
    //         <li>Step 1</li>
    //         <li>Step 2</li>
    //         <li>Step 3</li>
    //         <li>Step 4</li>
    //         <li>Step 5</li>
    //         <li>Step 6</li>
            
    //     </ul>
    //     <ul>
    //         <li>12th board examination</li>
    //         <li>Step 1</li>
    //         <li>Step 2</li>
    //         <li>Step 3</li>
    //         <li>Step 4</li>
    //         <li>Step 5</li>
            
    //     </ul>
    //     <ul>
    //         <li>12th board examination</li>
    //         <li>Step 1</li>
    //         <li>Step 2</li>
    //         <li>Step 3</li>
    //         <li>Step 4</li>
    //         <li>Step 5</li>
    //         <li>Step 6</li>
    //         <li>Step 7</li>
    //         <li>Step 8</li>
    //     </ul></div><br>

    //     <div>
    //     <p style="text-align: center; font-size: 35px; font-weight: bold;">Colleges for you</p>
    //     <ol>
    //         <li>College 1</li>
    //         <li>College 2</li>
    //         <li>College 3</li>
    //         <li>College 4</li>
    //         <li>College 5</li>
    //         <li>College 6</li>
    //         <li>College 7</li>
    //     </ol>
    // </div>
    // </div>



?>
<html>
	<body>	
		<footer style="background-image: url(img11-1.jpg); background-size: cover; color: #fff;
        padding: 20px;
        text-align: center;
        margin-bottom: 0%;">
			<div class="container">
			  <div class="row">
				<div class="col-md-6">
				  <h2>Contact Us</h2>
				  <p>Phone: 9999999999</p>
				  <p>Email: careerpro@gmail.com</p><br>
				</div>
				
				
			  </div>
			  <div class="row">
				<div class="col-md-12">
				  <p>&copy; 2023 Career Pro. All Rights Reserved.</p>
				</div>
			  </div>
			</div>
		  </footer>

</body>
</html>
