@extends('templates.base.base')

@section('head')

	@include('templates.base.css.sweetAlert')
	
@endsection()

@section('content')

	@include('templates.base.element.pageTab',[

		'pageHeading'	=> 'Moviit Test',

		'tab1Heading'	=> 'Visits',

		'tab1Content'	=> 'templates.visits.index.tab1Content',

		'tab1Style'		=> 'default',

		'tab2Heading'	=> 'Requests Log',

		'tab2Content'	=> 'templates.visits.index.tab2Content',

		'tab2Style'		=> 'primary',

	])

@endsection()

@section('ajaxPostAction')

    $('#tBody').empty()

	for (var i = data.length - 1; i >= 0; i--) {

	    $('#tBody').append('<tr><td>'+data[i]['date']+'</td><td>'+data[i]['client']+'</td><td>'+data[i]['technician']+'</td><td>'+data[i]['cost']+'</td></tr>');

	}
	var text=data.length + ' Client Visits ' + data[0]['client'];

	simpleAlert('We Found',text,'success','ok');

@endsection()

@section('ajaxGetAction')

	console.log(data)
	$('#tBodyLog').empty();

	for (var i = data.length - 1; i >= 0; i--) {

	    $('#tBodyLog').prepend('<tr><td>'+data[i]['controller']+'</td><td>'+data[i]['action']+'</td><td>'+data[i]['parameter']+'</td><td>'+data[i]['created_at']+'</td></tr>');

	}

@endsection()

@section('footer')
	
	@include('templates.base.js.jqueryNumeric')

	@include('templates.base.js.sweetAlert')

	@include('templates.base.js.jqueryValidate')

	@include('templates.base.js.ajaxPost')

	@include('templates.base.js.ajaxGet')

	@include('templates.base.js.setInterval')

@endsection()
