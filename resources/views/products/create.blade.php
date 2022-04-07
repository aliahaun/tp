@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Create product</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action=" {{route('products.store')}} " method="POST" enctype="multipart/form-data">
        @csrf

        Name:
    </br>
    <input type="text" name="nomP" value="{{old('nomP')}}" class="form-control" placeholder="nom produit"/>
    </br>

    prix($):
    </br>
    <input type="number" name="prix" value="{{old('prix')}}" class="form-control" placeholder="prix"/>
    </br>

    Description:
    </br>
    <textarea name="description" class="form-control">{{old('description')}}</textarea>
    </br> 

    Category:
    </br>
    <select name="Category_id" class="form-control">
        @foreach ($categories as $category)
        <option value="{{$category->id}}" @if ($category->id==old('Category_id')) selected @endif>{{$category->nom}}</option>
        @endforeach
    </select>
    </br> 

    Image:
    </br>
    <input type="file" name="img"/>
    </br> </br>

    <input type="submit" value="Save" class="btn btn-primary"/>
    </br> </br>
    </form>
</div>
@endsection
