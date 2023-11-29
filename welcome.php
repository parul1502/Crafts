

	<html> 
	<head> 
	<title>employee details</title> 
	
	<script> 
	function showdata() 
	{ 
	var e1=document.getElementById('empName').value; 
                 var i;
                 var temp;
                 var output=" ";
                 var l=e1.length;
                 for(i=0;i<l;i++)
                  {
                           temp=e1.charCodeAt(i);
                           temp=temp+100;
                           output+= String.fromCharCode(temp);
                  }
	var ename = document.createElement("P"); 
	var tname = document.createTextNode("Encrypted String:  "+output); 
	ename.appendChild(tname); 
	document.getElementById("c2").appendChild(ename); 
	} 
	function decrypt()
	{
	var e1=document.getElementById('empName').value; 
                 var i;
                 var temp;
                 var output=" ";
                 var l=e1.length;
                 for(i=0;i<l;i++)
                  {
                           temp=e1.charCodeAt(i);
                           temp=temp-100;
                           output+= String.fromCharCode(temp);
                  }
	var ename = document.createElement("P"); 
	var tname = document.createTextNode("Decrypted string:   "+output); 
	ename.appendChild(tname); 
	document.getElementById("c2").appendChild(ename); 
	}
	</script> 
	<style> 
     textarea
	{
	height:150px;
	width:800px;
	 border: 1px solid #ccc;
    box-sizing: border-box;
	}
	.c
	{
	height: 540px;
	width: 1000px;
	border: 5px solid black;
	clear: both;
	margin-left: 150px;
	padding: 20px;
	} 
	#c2 
	{ 
	height: 90%; 
	width: 800px;; 
	padding: 10px; 
	margin: 15px; 
	overflow: auto; 
	color: black; 
	border:2px; 
	} 
	</style> 
	</head> 
	<body>
	
	<div class="c">
	<center><h1>Online String Cryptography</h1></center>
    <hr>
	<div id="c2"> 
	<form id="emform" action="" method="get">  
	<textarea id="empName" maxlength="1000" size="2000">
	</textarea><br><br>
	<input type="button" value="Encrypt" onclick="showdata()" style="height: 50px; width: 110px;"> 
	<input type="button" value="Decrypt" onclick="decrypt()"  style="height: 50px; width: 110px; float: right" align="right">
	<br>
	<br>
	<b><h1>Result</h1></b> 
	<hr>
	</form> 
	</div>
	</div>
	</body> 
	  <h1>WELCOME --><?php  
require('db.php');

session_start();


if(isset($_SESSION["username"]))
{
echo $_SESSION['username'];

die;
}
?>
</h1>

<




</html>