@extends('master');

@section('content')
Sub page
<br>
<?php 
$hoten = "<b>Hieuzzz</b>";
?>
{{$hoten}} <br>
{!! $hoten !!}
<br>
<?php $count = 8; ?>
@if ($count <= 8)
    abc
@elseif ($count > 8)
    xyz
@endif

{{ isset($count1) ? $count1 : 'null' }}
<br>
{{$count or 'null'}}
@stop

@section('sidebar')
    @parent
    Sub append
@stop
