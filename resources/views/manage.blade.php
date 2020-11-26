
<!-- Menghubungkan dengan view tempalte master -->
@extends('msmanage')

<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
@section('content')

<div class = "col-50">
<div class = "card">
<div class = "card-header text-center">
<h3> Manage Data </h3>
</div>
</div>
</div>
<table class ="table table-bordered table-striped" > 
<thead>
  <tr>
  <tr>               
  <th>No</th>               
  <th>Judul</th>          
  <th>Tanggal</th> 
  <th>Tools</th> 
   </tr>   
   </thead>
   <tbody>
   @foreach($articles as $a)
   <tr>
    <td>{{$a->id}}</td>
    <td>{{$a->title}}</td>
    <td>{{$a->created_at}}</td>
    <td>
      <a href = "articles/edit/{{ $a->id}}" class = "badge badge-warning">Edit</a>
      <a href = "articles/delete/{{ $a->id}}" class = "badge badge-danger">Hapus</a>
      <a href="/articles/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>

<h3>Daftar User </h3>
</br>
<table class="table table-bordered table-striped">
 <thead>
 <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Roles</th>
        <th>Foto Profil</th>
        <th>Tools</th>
 </tr>
 </thead>
 <tbody>
 @foreach($users as $u)
 <tr>
        <td>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->roles}}</td>
        <td>
        <img height="80px" src="{{asset('/storage/'. $u->featured_image)}}" alt="">
        </td>
        <td>
        <a href = "user/edit/{{ $u->id}}" class = "badge badge-warning">Edit</a>
      <a href = "user/delete/{{ $u->id}}" class = "badge badge-danger">Hapus</a> 
      <a href="/user/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
      </td>
        
 </tr>
 @endforeach
 </body>
 </table>
 </div>
</table>
      
@endsection

