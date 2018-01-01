<!DOCTYPE html>
<html>
	<head>
		<title>Contact Me</title>
		<style>
		body{background-color:powderblue}
		/* Style inputs with type="text", select elements and textareas */
		input[type=text], select, textarea {
	    width: 100%; /* Full width */
	    padding: 12px; /* Some padding */  
	    border: 1px solid #ccc; /* Gray border */
	    border-radius: 4px; /* Rounded borders */
	    box-sizing: border-box; /* Make sure that padding and width stays in place */
	    margin-top: 6px; /* Add a top margin */
	    margin-bottom: 16px; /* Bottom margin */
	    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    //background-color: #f2f2f2;
    padding: 20px;
}
body{
	background-color: #f2f2f2;
	margin:0px;
}
.menu ul
{
	margin:0px;
	padding:0px;
	list-style:none;
}
.menu ul li
{
	float:left;
	width:262px;
	height:40px;
	border:1px solid white;
	background-color:black;
	opacity:0.7;
	line-height:40px;
	text-align:center;
	font-size:20px;
	//margin-right:20px;
	border-radius:8px;
}
.menu ul li a
{
	text-decoration:none;
	color:white;
	display:block;
}
.menu ul li a:hover
{
	background-color:green;
	border-radius:8px;
}
.menu ul li ul li
{
	display:none;
}
.menu ul li:hover ul li
{
	display:block;
}
.menu ul ul ul
{
	margin-left:262px;
	margin-top:-40px;
	display:none;
}
.menu ul ul li:hover ul
{
	display:block;
}

			.header
			{
				width:100%;
				height:170px;
				background-color:black;
				opacity:0.7;
				border:1px solid white;
			}
			h1
			{
				color:white;
				margin:0px;
				padding-top:50px;
				font-size:3em;
				font-family:Broadway;
				float:left;
			}
			.search_icon
			{
				float:right;
				margin-top:50px;
				margin-right:50px;
			}
			.search_box
			{
				border:2px solid #333366;
				padding:10px;
				width:200px;
				font-size:16px;
			}
			.search
			{
				background-color:#333366;
				padding:10px;
				width:102px;
				border:none;
				font-size:16px;
				color:white;
			}

		</style>
	</head>
	<body>
	
	<div class="header">
			<h1>
				Prashant Mishra
			</h1>
			<div class="search_icon">
				<form>
					<input type="text" name="text" class="search_box">
					<input type="submit" name="search" class="search">
				</form>
			</div>
		</div>
	<div class="menu">
			<ul>
				<li><a href="navigation.php">Home</a></li>
				<li><a href="About me.php">About</a>
					<ul>
						<li><a href="About me.php">About Me</a></li>
						<li><a href="education.php">About My Education</a></li>
						<li><a href="career.php">Career Objective</a></li>
						<li><a href="ECA.php">Extra-Curricular Activities</a></li>
					</ul>
				</li>
				<li><a href="#">Projects and Intenships</a>
					<ul><li><a href="#">Projects</a>
							<ul>
								<li><a href="WDP.php">Web Designing Projects</a></li>
								<li><a href="PP.php">Programming Projects</a></li>
								<li><a href="NP.php">Networking Projects</a></li>
							</ul>
						</li>
					</ul>
					<ul><li><a href="#">Internships</a>
							<ul>
								<li><a href="MI.php">Marketing Internship</a></li>
								<li><a href="TI.php">Technical Internships</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#">Skills</a>
					<ul>
						<li><a href="WDD.php">Web Designing and Developing Skills</a></li>
						<li><a href="PS.php">Programming Skills</a></li>
						<li><a href="NS.php">Networking Skills</a></li>
					</ul>
				</li>
				<li><a href="contact.php">Contact</a></li><br><br><br>
	<center><h2>Contact Me</h2></center>
	<hr>
		<div class="contact"><center><span><img src="images/CM.png"></span></center>
		<h3 style="color:green;">Address</h3>
		<p>E-92,Vishwash Park,Uttam Nagar,New Delhi-110059</p>
		<h3 style="color:green;">Phones</h3>
		<p>9953701608 , 8700934140</p>
		<h3 style="color:green;">Email</h3>
		<p>mishra.prashant500@gmail.com</p>
		<h3 style="color:green;">LinkedIn</h3>
		<p onClick="https://www.linkedin.com/in/prashant-mishra-305b14a8">https://www.linkedin.com/in/prashant-mishra-305b14a8</p>
	</hr>
	<hr>
		<div class="container"><center><span><img src="images/GIT.png"></span></center>
		  <form action="mishra.prashant500@gmail.com">

  		  <label for="fname">First Name</label>
   			 <input type="text" id="fname" name="firstname" placeholder="Your name..">

    		<label for="lname">Last Name</label>
    			<input type="text" id="lname" name="lastname" placeholder="Your last name..">

   		 <label for="country">Country</label>
  			  <select id="country" name="country">
				  <option value="select">Select</option>
    				  <option value="australia">Australia</option>
    				  <option value="canada">Canada</option>
				  <option value="india">India</option>
				  <option value="pakistan">Pakistan</option>
      				  <option value="usa">USA</option>
				  <option value="other">Other</option>
   			 </select>

   		 <label for="subject">Subject</label>
   		 <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

   		 <input type="submit" value="Submit">
		</form>
		</div>
	</hr>
	</body>
</html>



