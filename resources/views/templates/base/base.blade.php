<!DOCTYPE html>

<html lang="es">
	
	<head>

		@include('templates.base.head')

		@include('templates.base.css.default')

		@yield('head')
		
    </head>

    <body class="infobar-offcanvas">
        
    	@include('templates.base.header')

	    <div id="wrapper">

	        <div id="layout-static">

	            <div class="static-content-wrapper">

	                <div class="static-content">

						@yield('content')

	                </div>

	                @include('templates.base.footer')

	            </div>

	        </div>

	    </div>

        @include('templates.base.widgetArea')

	    @include('templates.base.js.default')

	    @yield('footer')
    
    </body>

</html>