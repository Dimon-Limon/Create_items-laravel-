	<p id="pad">
		
	</p>
<div class="messages">

	@if (! $products->isEmpty() )
	<div class="text-center">
		<a href="/api/products">Json всех записей</a>
	</div>
	<div class="panel panel-default">
		<table class="table table-bordered">
			<thead>
				<tr class="info">
					<th>Название товара</th>
					<th>Цена</th>
					<th>Описание</th>
					<th>Json</th>
				</tr>
			</thead>
			@foreach ($products as $product)
			<tr class="success">
				<td>{{ $product->name }}</td>
				<td>{!! $product->price !!} $</td>
				<td><a href="/info/{{ $product->id}}">Подробное описание</a></td>
				<td><a href="/api/products/{{ $product->id}}">Json конкретной записи</a></td>
				</tr>
				@endforeach

			</table>
		</div>

		<div class="text-center">
			{!! $products->render() !!}
		</div>
		@endif

</div>