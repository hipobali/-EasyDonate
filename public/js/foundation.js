$(document).ready( function() {
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.user_profile').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('.img-upload').change(function(){
        readURL(this);
    });
});


