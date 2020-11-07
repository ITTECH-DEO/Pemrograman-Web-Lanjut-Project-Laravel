@extends('mastercadangan')
@section('content')
  <div class="col-100">
    <div class="card">
       <form action="/user/update/{{$user->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$user->id}}"></br>
                <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-danger float-right">Ubah Data</button>
            </form>
    </div>
</div>
@endsection
