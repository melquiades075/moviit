<script type="text/javascript">
	
	function ajaxGet(route)
	{
		$.ajax(
		{

			cache: false,

			type: "GET",

			url: route,

			success: function(data)
			{
				
				@yield('ajaxGetAction')


			},
			error:function()
			{
				$("#loader").addClass("hide");

				$("#submit").removeClass('hide');

				simpleAlert('Malas Noticias','Encontramos problemas con la conexión a Internet','error','Volver a intentar');

			}

		});             

	}

	
</script>