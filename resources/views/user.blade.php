@extends('mastercadangan')
@section('content')
  <div class="col-100">
    <div class="card">
       <form action="/users/update/{{$user->id}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$user->id}}"></br>
                <div class="form-group">
                    <label for="title">name</label>
                    <input type="text" class="form-control" required="required" name="title" value="{{$user->name}}"></br>
                </div>
                <div class="form-group">
                    <label for="content">Email</label>
                    <input type="text" class="form-control" required="required" name="content" value="{{$user->email}}"></br>
                </div>
                <button type="submit" name="edit" class="btn btn-danger float-right">Ubah Data</button>
            </form>
    </div>
</div>
@endsection
