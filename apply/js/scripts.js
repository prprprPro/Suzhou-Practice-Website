
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
		var title = $(this).find('.title').val();
		
		if(title == '') {
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.title').focus();
            });
			alert("���ⲻ��Ϊ��");
            return false;
        }
		
		var msg = $(this).find('.msg').val();
		
		if(msg == '') {
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.msg').focus();
            });
			alert("���ݲ���Ϊ��");
            return false;
        }
		
		
    });

    $('.page-container form .email, .page-container form .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });

});

    });

});
