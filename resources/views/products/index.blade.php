@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">New product</a>

    </br>
</br>

    <table class="table table-striped table-bordered">
       <thread>
        <tr>
            <th>Name</th>
            <th>Price</th>

            <th></th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->nomP}}</td>
            <td>${{$product->Prix}}</td>

            <td>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id)}}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delte" class="btn btn-danger" onclick="return confirm('Are you sure ?')"/>
                    </form>
            </td>
        </tr>
        @endforeach
       </thread>
    </table>
    <p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.</p>

</div>
@endsection
