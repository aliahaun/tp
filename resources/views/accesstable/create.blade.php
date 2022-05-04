@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Create New Access</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    <form action=" {{route('accesstable.store')}} " method="POST" enctype="multipart/form-data">
        @csrf

        Name:
    </br>
    <input type="text" name="Name" value="{{old('Name')}}" class="form-control" placeholder="nom produit"/>
    </br>

    Link:
    </br>
    <input type="text" name="Link" value="{{old('Link')}}" class="form-control" placeholder="prix"/>
    </br>

    Login:
    </br>
    <input type="text" name="Login" value="{{old('Login')}}" class="form-control" placeholder="prix"/>
    </br>

    Password:
    </br>
    <input type="password" name="password" value="{{old('password')}}" class="form-control" placeholder="prix"/>
    </br>
  

    <input type="submit" value="Save" class="btn btn-primary"/>
    </br> </br>
    </form>
</div>
@endsection
