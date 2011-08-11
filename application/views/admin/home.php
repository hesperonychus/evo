<html>
<head>
<link href="/css/grid.css" rel="stylesheet">
    <meta content="" charset="utf-8">
<style type="text/css">
    .debug{border: 1px solid red;}
    *{
        margin:0;
        padding:0;
       }
    #main{
        margin-left:auto;
        margin-right:auto;
        height:100%;
        background:url("/images/960_grid_12_col.png");
    }
    #header{
        height:70px;background:#cecece;
    }
    #left_slide,#content{margin-top:10px; background:#cecece;}

    .item{margin-top:5px; margin-left:20px;
        
        background:#666;}
</style>
</head>

<body>
<!-- main div-->
<div class="container_12" id="main">
    <div class="grid_12" id="header">

    </div>
    <div class="clear"></div>
    <div class="grid_3" id="left_slide">
        left slide
    </div>
    <div class="grid_8" id="content">

        <div class="grid_7 alpha omega item">
            

        </div>
        <div class="clear"></div>
           <div class="grid_7 alpha omega item">item</div>
        <div class="clear"></div>
           <div class="grid_7 alpha omega item">item</div>
        <div class="clear"></div>
    </div>
</div><!-- end main div-->

</body>
</html>