<div class="table-responsive">

    <table class="table table-striped">

		<thead>

			<tr>

				<th align="center">Controller</th>

				<th>Action</th>

				<th style="width: 60%">Parameters</th>

				<th>Time</th>

			</tr>

		</thead>

		<tbody id='tBodyLog' route="{{route('updateRequestTable')}}">

			@foreach($requests as $request)

				<tr>

					<td>{{$request->controller}}</td>

					<td>{{$request->action}}</td>

					<td>{{$request->parameter}}</td>

					<td>{{$request->created_at}}</td>

				</tr>

			@endforeach

		</tbody>

    </table>

</div>
