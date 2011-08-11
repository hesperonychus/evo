<?php
/**
 * Created by JetBrains PhpStorm.
 * User: igor_a
 * Date: 16.06.11
 * Time: 13:55
 * To change this template use File | Settings | File Templates.
 */
 
?>
<html>
<head>
    <meta charset="utf-8">
    <link  rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/user.css"
    <script type="text/javascript" src="/js/jquery-1.5.min.js"></script>
    <title>EVO Home page</title>
</head>
<body>
<div class="container_12" id="main">
    <div class="grid_12" id="header">
        <div>User info</div>

    </div>
    <div class="clear"></div>


    <div class="grid_12" id="content">

        <div class="grid_7 alpha omega" id="error-box">
        <?php echo validation_errors();?>
        </div>
        <div class="grid_7 alpha omega" id="signup_form">
         <?php echo form_open('user/signup'); ?>
         <?php echo form_label('login');?><br />
         <?php echo form_input('login','login');?><br />
         <?php echo form_label('name');?><br />
         <?php echo form_input('name','name');?><br />
         <?php echo form_label('password');?><br />
         <?php echo form_password('psw1','pssw');?><br />

         <?php echo form_label(' Re-type Password');?><br />
         <?php echo form_password('psw2','psw');?><br />
         <?php echo form_submit('','Get ');?><br />
         <?php echo form_close();?>
    </div>
</div><!-- end main div-->


</body>
</html>