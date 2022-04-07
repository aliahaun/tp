@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Category Edit</h1>
    <form action=" {{route('categories.update', $categories->id)}} " method="POST">
        @method('PUT')
        @csrf

        Name:
    </br>
    <input type="text" name="name" value="{{ $categories->nom}}" class="form-control" placeholder="nom categories"/>
    </br> </br>
    <input type="submit" value="Update" class="btn btn-primary"/>
</br> </br>
    </form>
</div>
@endsection
