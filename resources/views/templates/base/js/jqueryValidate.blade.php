<script src="/site/assets/js/jquery.validate.js"></script>

<script type="text/javascript">

    $("#form").validate({

        submitHandler: function(form){
            
            event.preventDefault();

            ajaxPost($("#form").attr('action'),$("#form").serialize())

    },
    successClass: 'has-success',

    errorClass: 'text-danger',

    errorElem: '<span></span>',

    errorsWrapper: '<span class="help-block"></span>',

    errorTemplate: "<div></div>",

      @yield("validate")  

    });
    
</script>

