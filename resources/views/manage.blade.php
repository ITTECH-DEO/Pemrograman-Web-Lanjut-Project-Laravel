
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
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      
@endsection

