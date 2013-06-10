jQuery(document).ready(function(){
    jQuery('.check:button').toggle(function(){
        jQuery('input:checkbox').attr('checked','checked');
        jQuery(this).val('uncheck all')
    },function(){
        jQuery('input:checkbox').removeAttr('checked');
        jQuery(this).val('check all');        
    })
})

.
