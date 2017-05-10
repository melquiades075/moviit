{!! Field::text($inputName,isset($inputValue) ? $inputValue : null,
	[	
		'class'=> isset($inputClass) ? $inputClass : null,

		'placeholder'	=> isset($inputPlaceholder) ? $inputPlaceholder : null,

		'data-route'	=> isset($inputDataRoute) ? $inputDataRoute : null

	]) 
!!}