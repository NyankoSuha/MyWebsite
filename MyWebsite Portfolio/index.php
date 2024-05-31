<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
table {
	width: 800px;
	margin: auto;
	table-layout: fixed;
	text-align: center;
	margin-top: 50px;
	font-family: Arial;
	color: #fff;
}
table, th, td{
    border: 1px dotted white;
	border-collapse: collapse;
	padding: 20px;
	font-size: 20px;
}
th{
    background: green;
	padding: 30px;
	text-transform: uppercase;
</style>
<body>
    
	<header>
	     <h2 class = "logo">My Portfolio</h2>
		 <nav class = "navigation">
		     <a href = "#" class="active">Home</a>
			 <a href = "#">About</a>
			 <a href = "#">Contact</a>
			 <a href = "login.html">Login</a>
		 </nav>
	</header>
	
	<section class="profile">
		 <img src= "hill1.png" id= "hill1">
		 <img src= "hill2.png" id= "hill2">
		 
		 <img src= "hill3.png" id= "hill3">
		 <img src= "hill4.png" id= "hill4">
		 <img src= "hill5.png" id= "hill5">
		 <img src= "tree.png" id= "tree">
		 <h2 id="text">Welcome To My Profile</h2>
		 <img src= "leaf.png" id= "leaf">
		 <img src= "plant.png" id= "plant">
	</section>
	
	<section class="dance">
		 <img src= "dance.gif" id= "dance" width="250">
	</section>
	
	<section class="dance1">
		 <img src= "dance1.gif" id= "dance" width="250">
	</section>
	
	<section class="dance2">
		 <img src= "dance2.webp" id= "dance" width="250">
	</section>
	
	
	<section class= "sec">
		<h2>My Profile</h2>
		<p>
		<table>
			 <tr>
		    <th> Name</th>
			<th>Address</th>
			<th>Hobbies</th>
			<th> Favourite Movies</th>
		</tr>
		<tr>
		    <td> Anis Madihah Binti Zakiman </td>
			<td>Shah Alam </td>
			<td> Playing Games </td>
			<td><a href = "https://youtu.be/on-y9zuW52Y?si=M_rCyP8nmgp9XfwV">Kimi No Nawa</a></td>
		</tr>
			
		</table>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		<br></br>
		</p>
	</section>
    <script src="script.js"></script>
</body>

</html>