    <form action=" {{route('accesstable.update',$accesstables->id)}} " method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
  <!-- Modal -->
  <div class="modal fade" id="ModalEdit{{$accesstables->id}}" tabindex="-1" aria-labelledby="ModalEdit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create new Access</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
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

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    </div>
</div>
        
    </form>
