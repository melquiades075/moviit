@include('templates.base.element.form',[

	'formType'	=>'model' ,

	'formName' 	=>'form',

	'formId'	=>'form',

	'formRoute'		=>'clientsVisits',

	'formContent'	=>'templates.visits.index.search'

])

<div class="table-responsive">

    <table class="table table-striped">

		<thead>

			<tr>

				<th align="center">Visit Date</th>

				<th>Client Name</th>

				<th>Technician Name</th>

				<th>Visit Cost</th>

			</tr>

		</thead>

		<tbody id='tBody'>

			@foreach($visits as $visit)

				<tr>

					<td>{{$visit->date}}</td>

					<td>{{$visit->client->name}}</td>

					<td>{{$visit->technician->name}}</td>

					<td>{{number_format($visit->cost,2)}}</td>

				</tr>

			@endforeach

		</tbody>

    </table>

</div>
