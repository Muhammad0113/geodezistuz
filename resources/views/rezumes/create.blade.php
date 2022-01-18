@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            	<div class="card-header">{{ __('Rezume qo‘shish') }}</div>
            	<div class="card-body">
				<form method="post" action="{{ route('rezumes.store') }}">
				  @csrf
				  @include('rezumes.form')
				 
				  <button type="submit" class="btn btn-success">Saqlash</button>
				</form>
			</div>
			</div>
		</div>
	</div>	
</div>


@endsection
