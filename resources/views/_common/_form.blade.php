@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
			<li> {{ $error }}</li>		
		@endforeach
	</ul>
</div>
@endif
		{!! Form::open(array('url'=>'/add', 'method'=>'POST', 'id'=>'id-form_messages')) !!}
		<div class="form-group">
		{!! Form::label('name', 'Название товара') !!}
		{!! Form::text('name','',array('class' => 'form-control', 'id' => 'name', 'placeholder' => 'название товара')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('price', 'Цена') !!}
		{!! Form::text('price','',array('class' => 'form-control', 'id' => 'price', 'placeholder' => 'цена товара')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('description', 'Описание товара *') !!}
		{!! Form::textarea('description','' ,array('class' => 'form-control', 'id' => 'description', 'placeholder' => 'Описание товара', 'cols'=>'50','rows'=>'5')) !!}
		</div>
		
		<div class="form-group">
		{!! Form::label('country_id', 'Список стран производителей') !!}
		{!! Form::select('country_id', array('3' => 'USA','4' => 'Ukraine','5' => 'China'), 'key', array('class' => 'form-control')) !!}
		</div>

		<div class="form-group">
		{!! Form::label('factory_id', 'Список фабрик') !!}
		{!! Form::select('factory_id', array('1' => 'Adidas','2' => 'nike','3' => 'Reebok'), 'key', array('class' => 'form-control')) !!}
		</div>


		<div class="form-group">
		{!! Form::submit('Создать товар', array('class'=>'btn btn-primary')) !!}
		</div>
		{!! Form::close() !!}
	<hr>