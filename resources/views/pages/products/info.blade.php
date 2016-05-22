@extends('index')

@section('content')
<div class="messages">

	
	<div class="panel panel-default">
		<table class="table table-bordered">
			<thead>
				<tr class="info">
					<th>Название товара</th>
					<th>Описание</th>
					<th>Цена</th>
					<th>Фабрика</th>
					<th>Старна производитель</th>
					<th>Удалить</th>
				</tr>
			</thead>
			<tr class="success">
				<td>{{ $product->name }}</td>
				<td>{!! $product->description !!}</td>
				<td>{!! $product->price !!} $</td>
				<td>{!! $product->factory->name !!}</td>
				<td>{!! $product->country->country
					!!}</td>
					<td>
						<a href="/delete/{{ $product->id }}" class="btn btn-danger">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
					</td>
				</tr>

			</table>
		</div>

		<div class="text-center">
			<a href="{{ url('/')}}">назад</a>
		</div>

</div>
@endsection