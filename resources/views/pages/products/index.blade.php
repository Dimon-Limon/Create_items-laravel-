@extends('index')

@section('content')
	<div class="row">
		<div class="span4">
			@include('_common._form')
		</div>
		<div class="text-right"> <b>Всего товаров:</b> <i class="badge">{{ $count }}</i></div>
		<hr>
		<div class="span8">
			@include('pages.products._items')
		</div>
	</div>
@stop