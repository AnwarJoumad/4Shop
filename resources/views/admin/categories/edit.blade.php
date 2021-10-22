@extends('layouts.admin')

@section('content')

<div class="d-flex align-items-center flex-column my-5"> 

	<form action="{{ route('admin.categories.update', $category) }}" method="POST" style="min-width: 320px;" enctype="multipart/form-data">
		
		<h4>Categorie aanpassen</h4>
        <div class="form-group">
			<label for="name">Naam</label>
			<input type="text" id="name" name="title" class="form-control" value="{{ old('name', $category->name) }}">
		</div>
		
		

		

		<button type="submit" class="form-control btn btn-primary my-2">Opslaan</button>
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
	</form>
    <h4>Producten</h4>
    <div> 
        
    
</div>
		

@endsection
