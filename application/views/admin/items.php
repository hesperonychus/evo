<html>
<head>
<link href="/css/grid.css" rel="stylesheet">
    <meta content="" charset="utf-8">

<script type="text/javascript" src="/js/jquery-1.5.min.js"></script>
<!--<script type="text/javascript" src="/js/admin.items.js"></script>-->
    <script type="text/javascript" src="/js/adm.items.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.item').items();
        });

    </script>
<style type="text/css">
    .debug{border: 1px solid red;}
    *{
        margin:0;
        padding:0;
       }
    body{background:#f3f5ec;}
    #main{
        margin-left:auto;
        margin-right:auto;
        height:100%;
        /*background:url("/images/960_grid_12_col.png");*/
border: 1px solid #51767c;
background:#ecefe1;
        height:100%;
    }
    #header{
        height:70px;background:#cecece;
    }
    #left_slide,#content{margin-top:10px; background:#cecece;}

    .item{  height:25px;
        -moz-border-radius:2px;
        background:#cecece;
        border:1px solid #666;margin-top:5px;
        margin-left: auto;
    margin-right: auto;
    margin-top: 5px;
    width: 98%;
    }
       .item_name{
            float:left;
            margin-left:3px;
            width: 200px;
           overflow-x:hidden;
           overflow-y:hidden;
           height:28px;    
        }
        .item_save,.item_arhive{
            width:16px;
            height:16px;
            float:right;
            margin-top:2px;
            margin-right:3px;

        }
    .item_arhive{
        cursor:pointer;
    }
        .item_save_show{
            background:url("/images/1307032431_Save.png");
            cursor:pointer;
        }
        .item_arhive{
            background:url("/images/1307032490_Archive.png");
        }
        #item_edit{
            display:none;
            position:absolute;
            border:0;
            margin-top: 1px;

        }
        .not_save{
            color:red;/*#7E0001;*/
            font-style:italic;
             font-size: 15px;
   			 font-weight: bold;
    		line-height: 25px;
        }
        .price{
        	width: 45px;float:right;
        }
        .discription{
        width: 380px;
        }
    #new_item{
            background: none repeat scroll 0 0 #adba7d;
      border: 1px solid #7b8849;
      border-radius: 8px 8px 8px 8px;
      color: #3f4625;
      width: 100px;
      height: 25px;
      text-align: center;
      line-height: 25px;
      cursor: pointer;
      display: block;
      float: right;
      font-family: verdana;
      font-size: 15px;
      line-height: 25px;
      text-align: center;
      text-decoration: none;
      width: 100px;
        margin-top:5px;
          }
          #new_item_wnd{
          width: 430px;
          border:1px solid #666;margin-left: 100px;
          background: #d0d7b5;
           border: 1px solid #666666;
      border-radius: 8px 8px 8px 8px;
      color:#3f4625;
      display: none;
      position: absolute;
          }

          #new_item_wnd div{
          margin-top: 5px;
          margin-left: 5px;
          }
          #new_item_header_wnd{
          height: 10px;
          background:  #adba7d;
          margin-top: 0;
          }
           #new_item_add{
                         background: none repeat scroll 0 0 #adba7d;
      border: 1px solid #7b8849;
      border-radius: 8px 8px 8px 8px;
      color: #3f4625;
      width: 100px;
      height: 25px;
      text-align: center;
      line-height: 25px;
      cursor: pointer;
      margin-bottom: 5px;
           }
             #menu{
                 list-style:none;
                 margin:0;
                 padding:0;
             }
    #left_slide, #content{
        background:#D0D7B5;
    }

</style>

</head>

<body>
<!-- main div-->
<div class="container_12" id="main">
    <div class="grid_12" id="header">

    </div>
    <div class="clear"></div>
    <div class="grid_3" id="left_slide">
      <ul id="menu">
          <li <a href="<?php echo base_url();?>admin/items">Меню</a></li>
          <li><a href="<?php echo base_url();?>admin/arhive">Архив</a></li>
      </ul>
    </div>
    <div class="grid_9" id="content">

        <div class="grid_9 alpha omega">
            <div id="new_item">new</div>
            <div>
                <select>
                    <option value="-1">Все</option>
                    <?php foreach ($group->result() as $item):?>
                    <option value="<?php echo $item->id_group;?>"><?php echo $item->name_group?></option>
                    <?php endforeach;;?>
                </select>
            </div>

        </div>
           <div class="clear"></div>
        <?php foreach($items->result() as $item ):?>
           <div class="grid_9 alpha omega">
               	<div class="item">
						<div style=" width:150px;"><div class="item_name name"><?php echo $item->name_item; ?></div></div>
						<div class="item_name discription"><?php echo $item->discription_item; ?></div>

					    <div class="item_save"></div>
					    <div class="item_arhive"></div>	<div class="item_name price"><?php echo $item->price_item; ?></div>
						<input type="hidden"class="item_id" value="<?php echo $item->id_item; ?>" />
					</div>

           </div>
        <div class="clear"></div>
    <?php endforeach;?>
    </div>
</div><!-- end main div-->
<input type="text" id="item_edit" />
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
