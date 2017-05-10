<a id="{{$hrefId}}" href="{{$hrefRoute}}" class="{{$hrefClass}}" title="{{$hrefTitle}}">

	@if(isset($hrefIcon))

		<i class="{{$hrefIcon}}"></i>&nbsp; 

	@endif

	{{$hrefText}}

</a>