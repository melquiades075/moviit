<div class="row">

	<div class="col-md-3" style="padding-bottom: 5px;">
		
		<h5>Clients</h5>

		@include('templates.base.element.select',[

			'selectName'	=>'clientId',

			'selectClass'	=> 'form-control',

			'selectData'	=>$clients

		])

	</div>

	<div class="col-md-2">

		<h5>Maximum Number of Visits</h5>

		@include('templates.base.element.input',[

			'inputClass' 		=>'numeric',

			'inputName'			=>'maxNumber',

			'inputValue'		=> '2',

			'inputPlaceholder'	=>'Only Numbers'

		])	

	</div>

	<div class="col-md-1" style="margin-top: 48px;margin-bottom: 15px">

		@include('templates.base.element.button',[

			'buttonType'	=>'submit',

			'buttonId'		=>'submit',

			'buttonClass'	=>'btn btn-primary',

			'buttonTitle'	=>'Search Result'

		])	

		@include('templates.base.element.loader',[

			'loaderId'	=>'loader'

		])


	</div>


</div>
