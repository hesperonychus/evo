<?php
/**
 * Created by JetBrains PhpStorm.
 * User: igor_a
 * Date: 16.06.11
 * Time: 12:53
 * To change this template use File | Settings | File Templates.
 */
 
?>
<html>
<head>
    <meta charset="utf-8">
    <link  rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src="/js/jquery-1.5.min.js"></script>
    <title>EVO Home page</title>
</head>
<body>
<div class="container_12" id="main">
    <div class="grid_12" id="header">
        <div>User info</div>

    </div>
    <div class="clear"></div>


    <div class="grid_9" id="content">
content
        <div class="grid_9 alpha omega">


        </div>
           <div class="clear"></div>

           <div class="grid_9 alpha omega">


           </div>
        <div class="clear"></div>

    </div>

     <div class="grid_3" id="right_slide">
         <?php echo form_open('user/login'); ?>
         <?php echo form_label('login');?><br />
         <?php echo form_input('login','login');?><br />
         <?php echo form_label('password');?><br />
         <?php echo form_password('psw','psw');?><br />
         <?php echo form_submit('','Login');?><br />
         <?php echo form_close();?>
         <a href="user/signup"> Регистрация</a><br />
         <a href="user/fogot"> Забыл пароль</a><br />
    </div>
</div><!-- end main div-->


</body>
</html>