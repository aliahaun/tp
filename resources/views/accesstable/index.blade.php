@extends('app')

@section('content')
<div class="container px-4 px-lg-5 mt-5">
    <h1>Accesstable</h1>

    <a href="#" class="btn btn-icon"><i class="ti-plus"></i></a>

    </br>
</br>

    <table class="table table-bordered">
       <thread>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Link</th>
            <th>Login</th>
            <th>Password</th>
            <th></th>
        </tr>
        <?php $compteur=0; ?>
        @foreach($accesstables as $accesstables)
        <?php $compteur++; ?>
        <tr>
            <td> <?php echo $compteur; ?></td>
            <td>{{$accesstables->Name}}</td>
            <td><a href="{{$accesstables->Link}}">{{$accesstables->Link}}</a></td>
            <td>{{$accesstables->Login}}</td>
            <td>{{$accesstables->password}}</td>
            <td>
                    <a class="btn btn-primary" href="{{ route('accesstable.edit',$accesstables->id) }}">Edit</a>
                    <form action="{{ route('accesstable.destroy',$accesstables->id)}}" method="POST" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delte" class="btn btn-danger" onclick="return confirm('Are you sure ?')"/>
                    </form>
            </td>
        </tr>
        @endforeach
       </thread>
    </table>

</div>
@endsection
