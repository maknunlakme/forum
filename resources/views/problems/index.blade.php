@extends('layouts.master')


@section('content')

	<div class="col-md-8">
		<table class="table table-hover">
			<tr>
				<th> Problem name </th>
				<th> Online Judge </th>
				<th> Problem Level </th>
			</tr>
			@foreach ($problems as $problem)
				<tr>
					<td> <a href="{{ $problem->link }}">
						{{ $problem->name }}</a> 
					</td>
					<td> {{ $problem->oj_name }} </td>
					<td> {{ $problem->level }} </td>
				<tr>
			@endforeach
		</table>
	</div>
@endsection