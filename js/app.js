$(document).ready(function(){
    $('body').hide();
    $('h1').hide();
    $('.mainform').hide();
    
    $('body').toggle(1500,function(){
        var logo = "<center><i class='large material-icons logo'>insert_chart</i></center>";  
        $('.box').append(logo);
        setTimeout(showAll,1000);
    });

    function showAll(){
        $('h1').show(1500);
        $('.mainform').show(2000);
        $(".logo").fadeOut(3000);
    }
    /* SETTINGS */
      $('select').material_select();
        
    
    $('body').on('click','.submit',function(){
        
        n    = $('#nome').val();
        e    = $('#email').val();
        c    = $('#sala').val();
        s    = $("#sabor option:selected").val();
        
        if($.trim(n) == '' || $.trim(e) == '' || $.trim(c) == '' || $.trim(s) == ''){
            $('#wrong').openModal();
        }else{
            $.ajax({
                url:'sys/action.php?action=save&name='+n+'&email='+e+'&class='+c+'&savor='+s+'',
                type:'get',
                success:function(e){
                    $('#cod').html(e);
                    $('#sold').openModal();
                }
            });
        }
    });
    
});