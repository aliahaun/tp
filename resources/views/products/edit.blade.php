@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Edit product</h1>
    <form action=" {{route('products.update',$products->id)}} " method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        Name:
    </br>
    <input type="text" name="nomP" value="{{$products->nomP}}" class="form-control" placeholder="nom produit"/>
    </br>

    prix($):
    </br>
    <input type="number" name="prix" value="{{$products->Prix}}" class="form-control" placeholder="prix"/>
    </br>

    Description:
    </br>
    <textarea name="description"  class="form-control">{{$products->description}}</textarea>
    </br> 

    Category:
    </br>
    <select name="Category_id" class="form-control">
        @foreach ($categories as $category)
        <option value="{{$category->id}}" @if ($category->id==$products->Category_id)
            selected @endif>{{$category->nom}}</option>
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
