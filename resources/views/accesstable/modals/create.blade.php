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
        <!-- Modal -->
        <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="ModalCreate" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new Access</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

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
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            </div>
        </div>
  
  
         
</form>
