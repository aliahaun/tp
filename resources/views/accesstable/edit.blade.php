@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Edit Access Table</h1>
    <form action=" {{route('accesstables.update',$accesstables->id)}} " method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        Name:
        </br>
        <input type="text" name="Name" value="{{$accesstables->Name}}" class="form-control" placeholder="nom"/>
        </br>

        Link:
        </br>
        <input type="text" name="Link" value="{{$accesstables->Link}}" class="form-control" placeholder="https://"/>
        </br>

        Login:
        </br>
        <input type="text" name="Login" value="{{$accesstables->Login}}" class="form-control" placeholder="Admin"/>
        </br>

        Password:
        </br>
        <input type="password" name="password" value="{{$accesstables->password}}" class="form-control" placeholder="******"/>
        </br>

  

    <input type="submit" value="Save" class="btn btn-primary"/>
    </br> </br>
    </form>
</div>
@endsection
