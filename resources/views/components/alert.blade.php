<div class="alert alert-danger">
{{ $slot }}
</div>
@extends(‘layouts.app’)
// kode...
@component(“alert”)
<b>Tulisan ini akan mengisi variabel $slot</b>
@endcomponent