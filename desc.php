<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Patient Data </title>
	<link rel="stylesheet" href="Patient_data.css" type="text/css">
	<link rel="shortcut icon" href="pic/logo.png" type="image/png">
	
</head>
<body>
    <header>
	    <div class="container">
            <nav>
			    <h1 class="brand"><a href="index.html"><img src="logo.png" height=120px width=120px></a></h1>
				<ul>
				    <li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="patient_list.html">Patient List</a></li>
					<li><a href="contact.html">Contact us</a></li>
					<li><a href="form.html">hospital login </a></li>
				</ul>
			</nav>	
		</div>	
		<pre><h5 style="float:left; color:aqua; margin:0px 0px 0px 30px;font-size:15px ;"> <b> Patient Registration and <br>Information System Management</b></h5>						
		</pre>
		
		
		
		<?php

$data=$_GET['data'];


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackcbs');

$q="select * from list";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);?>
<center>
<div class="sd">

<?php

for($i=0;$i<$num;$i++)
{?>
	<?php $row=mysqli_fetch_array($result); ?>
	
	
	<?php if(($row['sno']==$data)||($row['adhar_card']==$data)) 
	{?>


		
		<div id="login">
			
		    <form class="details" style="">
			    <ul>
			    	<li>NAME			: <span><?php echo $row['name']; ?><span></li>
			    	<li>GENDER			: <span><?php echo $row['gender']; ?></span></li>
			    	<li>AGE				:<span><?php echo $row['age']; ?></span></li>
					<li>BLOOD GROUP	:<span><?php echo $row['blood']; ?></span></li>
			    	<li>DISEASE			: <span><?php echo $row['disease']; ?></span></li>
			    	<li>AADHAR NO		:<span><?php echo $row['adhar_card']; ?></span></li>
					<li>DESCRIPTION		:<span><?php echo $row['des']; ?></span></li>
			    	<li>HISTORY			:<span><?php echo $row['history']; ?></span></li>
					<li>PAST DISEASE	:<span><?php echo $row['di_name']; ?></span></li>
					<li>PAST TREATEMENT	:<span><?php echo $row['treatment']; ?></span></li>
					<li>RECOMMENDATION	:<span><?php echo $row['recommendation']; ?></span></li>
			    

			    </ul>	
			</form>	
     </div>
	
	 <?php			
	}?>
<?php
}?>	
    </header>
	
	
	<?php mysqli_close($con); ?>
	
	

</body>
</html>
