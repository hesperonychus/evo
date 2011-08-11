<html>
<head>
<meta charset="UTF-8">
<title>Menu</title>
</head>
<style>
*{
margin: 0;
padding:0;
}
body{
background:#f3f5ec;
}
#main{
width: 960px;
height: 100%;
margin-left: auto;
margin-right: auto;
margin-top:0px;
border: 1px solid #51767c;
background:#ecefe1;
}
#header{
height: 60px;
border:1px solid #666;
}
#mtnu_block{

}
#menu{
list-style:none;
margin-left:20px;
}
#menu li{
float:left;
border:1px solid #666;
width: 175px;
text-align: center;
margin-left: 5px;
}
#content{
clear:both;
margin-top:10px;
margin-left:20px;
</style>
<body>
<div id="main">
<div id="header"></div>

<div style="width: 200px; border:1px solid #666; float: left; margin-top: 10px; margin-left: 10px;">
<ul style="list-style: none;">
<li> <a href="#">Заказ</a></li>
<li> <a href="#">Profile</a></li>
<li> <a href="#">Default Order</a></li>
</ul>
</div>
<div style="float: right;border:1px solid #666; width: 700px; margin-top: 10px; margin-right: 10px" >
<form action="http://127.0.0.1/index.php/user/order" method="post">
<?php foreach ($menu->result() as $item):?>
<?php $this->load->helper('form')?>
<?php // echo form_open();?>
<div class="item" style="clear:both; height: 30px;">
	<div style="float:left;"><?php echo $item->name_item; ?></div>
	<div style="display:none;"><?php echo $item->discription_item;?></div>
	<div style="float:left;"><?php echo $item->price_item; ?></div>
	<div style="float:left;"><input type="checkbox" name="items[]" value="<?php echo $item->id_item; ?>" /></div>

</div>
<?php endforeach;;?>	
<?php echo form_submit('','Заказать');?>
<?php echo form_close();?>



</div>
</div>
</body>
</html>