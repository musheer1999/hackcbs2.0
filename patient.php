<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital </title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link rel="shortcut icon" href="pic/logo.png" type="image/png">
	
</head>
<script type="text/javascript">



</script>
<body>
    <header>
	    <div class="container">
            <nav>
			    <h1 class="brand"><a href="index.html"><img src="logo.png" height=120px width=120px></a></h1>
				<ul>
				    <li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					
					<li><a href="contact.html">Contact us</a></li>
					<li><a href="form.html">hospital login </a></li>
				</ul>
			</nav>	
		</div>	
	<pre><h5 style="float:left; color:aqua; margin:0px 0px 0px 30px;font-size:15px ;"> <b> Patient Registration and <br>Information System Management</b></h5>
		
<?php

$hosname=$_POST['hosname'];
$hosid=$_POST['hosid'];

$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackcbs');

$q="select * from hospital";

$result=mysqli_query($con,$q);		
		
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);?>

<?php

for($i=0;$i<$num;$i++)
{?>
	<?php $row=mysqli_fetch_array($result); ?>

    <?php if(($row['hospital_name']==$hosname)&&($row['hospital_id']==$hosid)) 
	{
		 $i=$num+1;
		?>	

   
			<fieldset style="width:600px; height:auto; border-radius:20px;border-color:firebrick; margin: 50px 50px 50px 300px; padding:10px;">
<legend style="color:white ; font-size:150%"><h2>REGISTRATION FOR PATIENT</h2></legend>
<form action="patient_list.php"  method="POST" style="color:red; font-size:150%"  >
<pre> 	
     
<b>PATIENT NAME</b>    	:  <input type="text" name="name"><br><br>
<b>GENDER</b>          	:  <select name="gender">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select><br><br>
<b>BLOOD-GROUP</b>     	:  <input type="text" name="blood"><br><br>
<b>AGE</b>             	:  <input type="text" name="age"><br><br>
<b>DISEASE</b>         	:  <input type="text"  name="disease"><br><br>
<b>AADHAR_CARD</b>     	:  <input type="number" style="width:159px;" min ="100000000000" max="999999999999" name="adhar_card"><br><br>
<b>MEDICAL HISTORY</b> 	:    <select name="history">
    <option value="NO">no</option>
    <option value="YES" onclick="desc();">yes</option>
  </select><br><br>

<b>PAST DISEASE</b>    	:  <input type="text" name="past"><br><br>
<b>TREATMENT HISTORY</b>       :  <input type="text" name="treat"><br><br>
<b>DESCRIPTION</b>     	:  <input type="text"  name="desc"><br><br>
<b>RECOMMENDATION</b>  	:  <input type="text"  name="rec"><br><br>
<input type="submit" value="Register" onclick="alert('are you sure you want to submit')">
	
</pre>
</form>
</fieldset>   
   
   
   <?php
	}
	
	if($i==$num-1)
	{?>

       <h1 style="background-color:red;">not found</h1>


     <?php
	 }?>
<?php
}?>
<?php mysqli_close($con); ?>
</header>
</body>
</html>