<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/admin.css">
<script type="text/javascript" src="/js/jquery-1.5.min.js"></script>
<script type="text/javascript" src="/js/admin.items.js"></script>
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

#main{
width: 960px;
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
}
#menu{
width: 150px
}
#content{
width: 735px;
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
width: 180px;
height: 28px;
line-height: 25px;
margin-left: 5px;
border: 1px solid #51767c;
padding-left: 5px;
margin-bottom: 1px;
background:#dee3cb;
}
#menu li:hover{
background:#bbc693;
margin-left:-15px;
width:190px;
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
witdth:20px;
}
</style>
</head>
<body>
	<div id="main">
		<div id="header" class="debug">
			<div id="logo">logo</div>
			<div id="login">login</div>
		</div>
		<div id="container">
			<div id="left-slide">
				<ul id="menu">
					<li><a href="#">Меню</a></li>
					<li> <a href="#">Заказы</a></li>
					<li><a href="#">Other-1</a></li>
					<li><a href="#">Other-2</a></li>
					<li><a href="#">Other-3</a></li>
				</ul>
			</div>
			<div id="content">
			<div><a href="#" id="new_item">New</a></div>
				<?php foreach ($menu->result() as $item):?>
					<div class="item">
						<div class="item_name name"><?php echo $item->name_item; ?></div>
						<div class="item_name discription"><?php echo $item->discription_item; ?></div>
						<div class="item_name price"><?php echo $item->price_item; ?></div>
						<input type="hidden"class="item_id" value="<?php echo $item->id_item; ?>" />
					    <div class="item_save"></div>
					    <div class="tem_arhive"></div>
					</div>
<?php endforeach;?>
<input type="text" id="item_edit" />
			
			</div>
			</div>
			
		</div>
		
	</div>
	<div id="new_item_wnd">
		<!--  <div id="new_item_header_wnd"></div>-->
		<div><select id="new_item_group">
		<?php foreach ($group->result() as $item):?>
		<option value="<?php echo $item->id_group;?>"><?php echo $item->name_group?></option>
		<?php endforeach;;?>
		</select>
		<span>Категория</span></div>
		<div><input type="text" id="new_item_name" /> <span>Имя</span></div>
		<div><textarea  rows="5" cols="40" id="new_item_discription" /></textarea> <span>Описание</span><div></div>
		 <div><input type="text" id="new_item_price" /> <span>Цена</span></div>
		 <div id="new_item_add">Добавить</div>
		 
			
	</div>
</body>
</html>
