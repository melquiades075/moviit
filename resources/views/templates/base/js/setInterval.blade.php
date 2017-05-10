<script>

    jQuery(document).ready(function() {

        setInterval(function(){

			ajaxGet($('#tBodyLog').attr('route'))

        }, 5000);

    })

</script>
