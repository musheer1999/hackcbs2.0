<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hospital </title>
	<link rel="stylesheet" href="style.css" type="text/css">
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
		<fieldset style="width:600px; height:200px; border-radius:20px;border-color:firebrick; margin: 50px 50px 50px 300px; padding:10px;">
		<?php


$name=$_POST['name'];
$gender=$_POST['gender'];
$blood=$_POST['blood'];
$age=$_POST['age'];
$disease=$_POST['disease'];
$adhar_card=$_POST['adhar_card'];
$history=$_POST['history'];
$past=$_POST['past'];
$desc=$_POST['desc'];
$treat=$_POST['treat'];
$rec=$_POST['rec'];


$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'hackcbs');

$p="insert into list(name,gender,age,disease,adhar_card,history,des,di_name,treatment,recommendation,blood) values('{$name}','{$gender}','{$age}','{$disease}','{$adhar_card}','{$history}','{$desc}','{$past}','{$treat}','{$rec}','{$blood}')";
mysqli_query($con,$p);

?>

<h1 style="bg-color:red;"> patient is registered!! </h1>

<a href='patient.php'STYLE="color:red;"> GO BACK</a>

<?php mysqli_close($con); ?>
		
		
		
				</body>
</html>