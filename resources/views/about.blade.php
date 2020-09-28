<!-- Menghubungkan dengan view tempalte master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','halaman About')


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
@section('content')
<html>
<h1> Halo Selamat datang di Halaman About </h1>
<h3> Saya akan memberikan Perkenalan Terlebih Dahulu <h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Data Pribadi saya : </p>
        <p> Nama Saya Deo Fahmawan</p>
        <p> Saya Berasal Dari Sidoarjo </p>
        <P> Saya Sedang Menempuh Kuliah di malang, Politeknik Negeri Malang </p>
        <p> Alamat Rumah saya di Permata Candi Loka Sidoarjo, Yang terkenal dengan Lumpur Lapindo </p>
        </tr>
        </td>
        </table>
        </html>
@endsection

