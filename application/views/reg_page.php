<html>
<head>
<meta charset="utf-8">
<title>регистрация</title>
<style>
.debug{
border: 1px solid red;
}

body{

}
#main{
width: 800px;
height: 100%;
margin-left: auto;
margin-right: auto;
border: 1px solid #51767c;
background:#ecefe1;
}
#header{
height: 35px;
padding-top:5px;
padding-bottom:5px;
position: relative;
}
#logo{
width: 500px;
float: left;
padding-left: 10px;
}
#login{
    background: none repeat scroll 0 0 #bbc693;
    border-radius: 7px 7px 7px 7px;
    color: #FFFFFF;
    float: right;
    height: 36px;
    line-height: 30px;
    padding-right: 10px;
    position: absolute;
    right: 5px;
    text-align: center;
    top: -4px;
    width: 90px;
}
#container{

}

#left-slide{
margin-top: 10px;
float: left;
}
#menu{
width: 250px
}
#content{
width: 530px;
float: right;
margin-top: 10px;
margin-right:10px
}
#menu{
margin: 0;
padding: 0;
list-style: none;
}
#menu li{
display: block;
width: 200px;
height: 30px;
line-height: 30px;
margin-left: 10px;
border: 1px solid #51767c;
padding-left: 5px;
margin-bottom: 1px;
background:#dee3cb;
}
#menu li:hover{
background:#bbc693;
margin-left:5px;
width:210px;
-moz-box-shadow: 5px 5px 5px #ccc;
-webkit-box-shadow: 5px 5px 5px #ccc;
box-shadow: 5px 5px 5px #ccc;
}
#menu li a
{
text-decoration:none;
color:#000;
display:block;
}
</style>
</head>
<body>

	<div id="main">
		<div id="header" class="debug">
			<div id="logo">logo</div>
			
		</div>
		<div id="container">
			<div id="left-slide">
				<ul id="menu">
					<li><a href="#">Ням ням</a></li>
					<li> <a href="#">M</a></li>
					<li><a href="#">Other-1</a></li>
					<li><a href="#">Other-2</a></li>
					<li><a href="#">Other-3</a></li>
				</ul>
			</div>
			<div id="content" class="debug">
				<?php $this->load->helper('form')?>
				<?php echo form_open('sbs/reg');?>
				<div>Имя<span></span></div>
				<input type="text" maxlength="12" /><br />
				<div>Password<span></span></div>
				<input type="password" maxlength="12" /><br />
				<div>Password<span></span></div>
				<input type="password" maxlength="12" /><br />
				<input type="submit" value="Reeg M" /><br />
				<?php echo form_close();?>
				
				
			</div>
			
		</div>
		
	</div>
	-->
</body>
</html>
