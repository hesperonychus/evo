<html>
<head>
<meta charset="utf-8">
<title>Home local</title>
<style>
.debug{
border: 1px solid red;
}
*
{
margin:0;
padding:0;
}
body{
background:#f3f5ec;
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
height: 50px;
padding-top:5px;
padding-bottom:5px;
}
#logo{
width: 500px;
float: left;
padding-left: 10px;
}
#login{
float:right;
padding-right: 10px;
}
#container{

}

#left-slide{
margin-top: 10px;
float: left;
    width:200px;
}
#menu{
width: 250px
}
#content{
width: 600px;
    margin-left:auto;
    margin-right:auto;
margin-top: 10px;
margin-right:10px
}
#content_login{
 border: 2px solid #9FAE67;
    border-radius: 7px 7px 7px 7px;
    box-shadow: 3px 7px 9px #000000;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 50px;
    padding-top: 60px;
    text-align: center;
    width: 480px;
    background-repeat: no-repeat;
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
#login_form input{
height:30px;
    width:260px;
    margin-bottom:10px;
    color:#666;
    font-size:15px;
}
    #login_form input[type=submit]{
        border: 1px solid #66939a;
        width:100px;
        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        background:#99b7bc;

    }
    #error_message{
        color:red;
        border:1px solid red;
        height:20px;
        width:95%;
        margin:5px;
        margin-left:auto;
        margin-right:auto;
        text-align:center;
        padding-top:10px;
        display: none;        
    }
    .show_error_message{
    	display: block;
    }

</style>
</head>
<body>
	<div id="main">
		<div id="header" class="debug">
			<div id="logo">logo</div>
			<div id="login"></div>
		</div>
		<div id="container">
			
			<div id="content_login">
                <div id="error_message">Error</div>
				<div id="login_form">
                    <?php $this->load->helper('form'); ?>
                    <?php echo form_open("admin/login");?>

						<input type="text" maxlength="12" value="login" name="login"/><br />
						<input type="password" name="psw" /><br />
						<input type="submit" value="Login" /><br />
					<?php form_close();?>

				</div>
			</div>
			
		</div>
		
	</div>
</body>
</html>
