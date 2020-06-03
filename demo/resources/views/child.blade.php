@extends('parent')
@section('title', 'Child Page')
@section('sometext')
    @parent
    <p>My name is Pham Nhat Hieu. I am from VN!</p>
@endsection

@section('sometext2')
    @parent
    <p>Hello VN.</p>
@endsection

<?php
$count = 10;
$users = array('hieu', 'zzzz', 'abcxyz');
?>
@section('footer')

@foreach($users as $user)
    <p>This is user {{ $user }}</p>
@endforeach
@while($count > 0)
    @if ($count % 2 == 0)
        <b>Count</b> 
        <br>
        {{$count}}
    @endif
    <?php $count = $count - 1; ?>
@endwhile
@include('blog')

@endsection
