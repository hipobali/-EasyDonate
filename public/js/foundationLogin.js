$(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });

    $("#foundation_email").mouseenter(function()
        {
            $(".fa-envelope").removeClass().addClass("fas fa-envelope-open");
        }
    ).mouseleave(function () {
        $(".fa-envelope-open").removeClass().addClass("fas fa-envelope");
    });

    $("#foundation_pw").mouseenter(function()
        {
            $(".fa-lock").removeClass().addClass("fas fa-unlock");
        }
    ).mouseleave(function () {
        $(".fa-unlock").removeClass().addClass("fas fa-lock");
    });
});