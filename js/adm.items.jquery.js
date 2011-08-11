/**
 * Created by kosr_ik.
 * User: Admin items list
 * Time: 18:08
 */
(function($){

    $.fn.items = function(){

        var defaultSettings = {
            ajax:'http://127.0.0.1/admin/ajax',
            edit: '#item_edit'
        };

        item_name = $(this).find('.item_name');
        button = $(this).find('.item_save');
        $(item_name).click(function(){
            text = $(this).text();
            offset = $(this).offset();
            $(defaultSettings.edit).offset({'left':0,'top':0})
            .css({'left':offset.left,'top':offset.top})
            .css({'width':$(this).width(),'height':$(this).height()-2})
            .val(text).show().focus();
            // $(this).hide();
        });
         $(defaultSettings.edit).focusout(new_value);
        
    }
})(jQuery);