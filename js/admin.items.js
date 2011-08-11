 		text ='';
        item = '';
        $(document).ready(function(){
			$('.item_save').click(function(){
				
				id=$($(item).parent()).find('.item_id').val();
				price=$($(item).parent()).find('.price').text();
				name=$($(item).parent()).find('.name').text();
				discription=$($(item).parent()).find('.discription').text();
				if($(this).css('cursor')=='pointer')
				$.post('http://127.0.0.1/index.php/admin/ajax',{id:id,name:name,discription:discription,price:price,action:'edit'},function(data){
					if(data=='ok'){
						$(item).removeClass('not_save');
						$($(item).parent()).find('.item_save').removeClass('item_save_show');
					}
				});			
			});
			$('.item_arhive').click(function(){

               	id=$($(this).parent()).find('.item_id').val();
                $.post('http://127.0.0.1/admin/ajax',{id:id,action:'arhive'},function(data){
					if(data=='1'){

					 $($(this).parent()).slideToggle();
                    }

				});

            });
            $('.item_name').click(function(){
             item=$(this);
             text = $(item).text();
              offset = $(item).offset();
               $('#item_edit').offset({'left':0,'top':0});
             $('#item_edit').css({'left':offset.left,'top':offset.top});           
             $('#item_edit').css({'width':$(item).width(),'height':$('.item').height()-2});             
             $('#item_edit').val(text);          
             $('#item_edit').show();   
             $('#item_edit').focus();
             $(item).hide();

            });
            $('#item_edit').focusout(new_value);
            $('#item_edit').keypress(function(e){if(e.keyCode==13)new_value();});

            $('#new_item').click(function(){
            	offset = $(this).offset();
            	 $('#new_item_wnd').css({'left':offset.left-450,'top':offset.top});
            	 $('#new_item_wnd').fadeIn(); 
            });
            $('#new_item_add').click(function(){
            	name = $('#new_item_name').val();
            	discription =$('#new_item_discription').val();
            	price =$('#new_item_price').val();
            	group = $('#new_item_group :selected').val();
            	if(name=='' || price=='' )
            	{
                    alert('')
            		return;
            	}
            	$.post('http://127.0.0.1/admin/ajax',{group:group,name:name,discription:discription,price:price,action:'add'},function(data){
					if(data=='1'){
                                    	 $('#new_item_wnd').fadeOut();
					}
					
				});		
            	
            });
            
        });//end ready
            function new_value(){
            
            	$('#item_edit').hide();
            	new_text = $('#item_edit').val();
            	if(new_text=='' || text==new_text){
            		 $(item).text(text);
                     $(item).show();
                     return;
            	}

             if(text !=new_text)
             {
            	 if($(item).hasClass('price'))
            	 {    
             		price = parseFloat( new_text );
             		if(isNaN(price))
             		{
             			 $(item).text(text);
                          $(item).show();
                          return;
             		}             		  
             	}
            	 $(item).addClass('not_save');
            }
             
             $(item).text(new_text);
             $(item).show();
             $($(item).parent()).find('.item_save').addClass('item_save_show');
           }