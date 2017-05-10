<script type="text/javascript">
	
	function ajaxPost(route,data)
	{
		$.ajax(
		{

			beforeSend: function()
			{ 

				$("#submit").addClass('hide');

				$("#loader").removeClass('hide');

			},

			cache: false,

			type: "POST",

			url: route,

			data: data,

			success: function(data)
			{
				
				@yield('ajaxPostAction')

				$("#loader").addClass('hide');

				$("#submit").removeClass('hide');


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