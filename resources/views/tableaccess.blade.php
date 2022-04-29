@extends('app')

@section('content')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">My table</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-4">
            <div class="container">
              <table class="table table-bordered">
                <thread>
                 <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Link</th>
                     <th>Login</th>
                     <th>Password</th>
                 </tr>
                 <?php $compteur=0; ?>
                 @foreach($tableaccess as $access)
                 <?php $compteur++; ?>
                 <tr>
                     <td><?php echo $compteur; ?></td>
                     <td>{{$access->Name}}</td>
                     <td><a href="{{$access->Link}}">{{$access->Link}}</a></td>
                     <td>{{$access->Login}}</td>
                     <td>{{$access->password}}</td>
                 </tr>
                 @endforeach
                </thread>
             </table>
            </div>
        </section>
  @endsection