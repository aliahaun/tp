@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Create category</h1>
    <form action=" {{route('categories.store')}} " method="POST">
        @csrf

        Name:
    </br>
    <input type="text" name="name" value="" class="form-control" placeholder="nom categories"/>
    </br> </br>
    <input type="submit" value="Save" class="btn btn-primary"/>
</br> </br>
    </form>
</div>
@endsection
