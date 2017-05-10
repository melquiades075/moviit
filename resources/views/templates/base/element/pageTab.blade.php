<div class="page-content">

    <div class="page-heading mb0">

        <h1>{{$pageHeading}}</h1>

    </div>

    <div class="page-tabs">

        <ul class="nav nav-tabs">

        	@if(isset($tab1Heading))

				<li class="active"><a data-toggle="tab" href="#tab1">{{$tab1Heading}}</a></li>

			@endif

        	@if(isset($tab2Heading))

				<li class=""><a data-toggle="tab" href="#tab2">{{$tab2Heading}}</a></li>

			@endif

        	@if(isset($tab3Heading))

				<li class=""><a data-toggle="tab" href="#tab3">{{$tab3Heading}}</a></li>

			@endif

        </ul>

    </div>

    <div class="container-fluid">

		<div class="tab-content">

        	@if(isset($tab1Heading))

				<div class="tab-pane active" id="tab1">

					<div class="row">

						<div class="col-md-12">

							<div class="panel panel-{{$tab1Style}}">

								<div class="panel-heading"><h2>{{$tab1Heading}}</h2></div>

								<div class="panel-body">

									@include($tab1Content)

								</div>

							</div>

						</div>

					</div>

				</div>

			@endif

			@if(isset($tab2Heading))

				<div class="tab-pane" id="tab2">

					<div class="row">

						<div class="col-md-12">

							<div class="panel panel-{{$tab2Style}}">

								<div class="panel-heading"><h2>{{$tab2Heading}}</h2></div>

								<div class="panel-body">

									@include($tab2Content)

								</div>

							</div>

						</div>

					</div>

				</div>
			
			@endif 

			@if(isset($tab3Heading))

				<div class="tab-pane" id="tab3">

					<div class="row">

						<div class="col-md-12">

							<div class="panel panel-{{$tab3Style}}">

								<div class="panel-heading"><h2>{{$tab3Heading}}</h2></div>

								<div class="panel-body">

									@include($tab3Content)

								</div>

							</div>

						</div>

					</div>

				</div>

			@endif 


		</div>

    </div> 

</div> 
