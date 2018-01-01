<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>education.php</title>
<style>		
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
body{
background-color:#f2f2f2;
margin:0px;
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
								<li><a href=MI.php">Marketing Internship</a></li>
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
				<li><a href="contact.php">Contact</a></li><br><br><br></div>
<hr><center><h3>
				My Education
			</h3></center></hr>
<hr><p>
				Hi! Everyone, If you want to know about my <strong>Educational Qualification</strong> then refer to the table below:
			</p>
<center>
<table width="1076" height="339" border="1" summary="To Know about my educational qualification please refer the table given below">
  <caption>
  Table 1: Educational Qualification 
  </caption>
  
  
  <tr>
    <th scope="col">Degree</th>
    <th scope="col">Year</th>
    <th scope="col">Instittute Name </th>
    <th scope="col">University/Board</th>
    <th scope="col">Percentage Obtained </th>
  </tr>
  <tr>
    <td> <div align="center">B.Tech.(I.T.)</div></td>
    <td><div align="center">2015-2018</div></td>
    <td><div align="center">Maharaja Surajmal Institute of Technology </div></td>
    <td><div align="center">GGSIPU,DELHI</div></td>
    <td><div align="center">70.36%</div></td>
  </tr>
  <tr>
    <td><div align="center">Diploma(ITES&amp;M)</div></td>
    <td><div align="center">2012-2015</div></td>
    <td><div align="center">Aditya Institute of Technology </div></td>
    <td><div align="center">BTE,DELHI</div></td>
    <td><div align="center">73.69%</div></td>
  </tr>
  <tr>
    <td><div align="center">Class 12th </div></td>
    <td><div align="center">2010</div></td>
    <td><div align="center">Vandana International School </div></td>
    <td><div align="center">CBSE</div></td>
    <td><div align="center">53%</div></td>
  </tr>
  <tr>
    <td><div align="center">Class 10th </div></td>
    <td><div align="center">2008</div></td>
    <td><div align="center">MRC Public School </div></td>
    <td><div align="center">CBSE</div></td>
    <td><div align="center">64.20%</div></td>
  </tr>
</table>
</center>
</hr>
</body>
</html>
