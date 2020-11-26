<!DOCTYPE html>
<html>
<head>
<title>Tabel User</title>
</head>
<body>
<style type="text/css">
table tr td{padding:2px 4px; background-color:#f65; color:#fff;},
table tr th{padding:2px 4px; background-color:#f60; color:#fff;}
font-size: 9pt;
}
</style>
<center>
<h5>Laporan User</h4>
</center>
<table class='table table-bordered'>
<thead>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Roles</th>
<th>Foto Profil</th>
</tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($user as $a)
<tr>
<td>{{ $i++ }}</td>
<td>{{$a->name}}</td>
<td>{{$a->email}}</td>
<td>{{$a->roles}}</td>
<td><img width="90px" src = "{{public_path('storage/'.$a->featured_image)}}"</td>
</tr>
@endforeach
</tbody>
</table>
</body>
</html>