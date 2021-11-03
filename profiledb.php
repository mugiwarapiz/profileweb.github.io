<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="profile.css">
<style>
	body {
       width: 230mm;
       height: 100%;
       margin: 0 auto;
       padding: 0;
       font-size: 12pt;
       position: relative;
     }
     * {
       box-sizing: border-box;
       -moz-box-sizing: border-box;
     }
     .main-page {
       width: 210mm;
       min-height: 297mm;
       margin: 10mm auto;
       background: white;
       box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
     }
     .sub-page {
       padding: 1cm;
       height: 297mm;
     }
     @page {
       size: A4;
       margin-top: 0.5in;
	   margin-bottom: 0.5in;
     }
	 
	 @bottom-center {
		content: element(footer);
		}
		
	 @top-center {
		content: element(header);
		}
		
	 #page-header {
			display: block;
			position: running(header);
		}

		#page-footer {
			display: block;
			position: running(footer);
		}
		
     @media print {
       html, body {
     	width: 210mm;
     	height: 297mm;        
       }
       .main-page {
     	margin: 0;
     	border: initial;
     	border-radius: initial;
     	width: initial;
     	min-height: initial;
     	box-shadow: initial;
     	background: initial;
     	page-break-after: always;
       }
     }
  
div.name {
	float: left;
    position: relative;
    left: 20%;
}	
div.style {
	display: block; text-align: left;
}	
div.prof {
	text-align: left;
}	
table  {
  border: 1px solid black;
  
}
th {
	border: 1px solid black;
	background-color: #0085F3;
	font-size: 20px;
}
td{
	border: 1px solid black;
	background-color: #85B9E5;
}
	
body:before{
  content: ' ';
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background:  url(watermark.png);
  background-position: center;  
  background-repeat: no-repeat;
  
  z-index: -1;
  opacity: 0.3;
  }
  
</style>
<title> Profile </title>
</head>
<body>


<div class="style"><a href="D:\Documents\.UITM\Intern\ucyp" imageanchor="1">
<img align="left" src= "images\ucyp_logo.png" alt="logo" width="130" height="130"></a><br>


<div class="name" > University College of Yayasan Pahang  <br>
 Address: University College of Yayasan Pahang <br>
	 2nd Floor, Kompleks Yayasan Pahang, <br>
	 Jalan Tanjung Lumpur,<br>
	 26060 Kuantan, Pahang 
</div>

</div><br><br><br><br><br><br><br><br><br>

<h1 align="center"> Profile </h1> <br>

<div class="prof" style="font-size:30px"> <b>Name:</b> Muhammad Hafiz Bin Saharidan <br>
				  <b>Identification Card: </b> 990116065937 <br>
				  <b>D.O.B</b> 16 January 1999 &emsp;&nbsp;&nbsp;&nbsp;
				  <b>Age:</b> 22 years old <br>
				  <b>Status:</b> Single<br>
				  <b>Address:</b> A-4696 Tingkat Bawah, 
				  Lorong Alor Akar 30 <br>
				  <b>Post-code:</b> 25250 &emsp;&emsp;&emsp;&emsp; 
				  <b>City:</b> Kuantan <br>
				  <b>Studies:</b> University Technology Mara (UiTM)<br>
				  <b>Phone No.: </b> 01111026947 &nbsp;&nbsp;&nbsp;
				  <b>E-mail:</b> hafizifnktg53@gmail.com <br>
				  
				  
				  
				  </div> <br><br><br><br>
				  
<table style="width:100%">
	<tr>
		<th> Description  </th>
		<th> SPM </th>
		<th> Matrics </th>
		<th> University </th>
	
	</tr>
	<?php
$conn = mysqli_connect("localhost" , "php" , "123" , "profile");
$sql = "SELECT * FROM profile";
$result = $conn->query($sql);

if ($result->num_rows >0){
	while($row= $result -> fetch_assoc()){
		echo "<tr><th>" . $row["Description"] . "</th><td>" .
		$row["SPM"] . "</td><td>" .
		$row["Matrics"] . "</td><td>" .
		$row["University"] . "</td>" ;
	}
}
else{
	echo "No Results";
}
$conn->close();
?>
</table><br><br><br><br><br>


<button id="printPageButton" onclick="window.print()">Print this page</button>

</body>
</html>
