@extends('layouts.app')

@section('content')

<h1>player</h1>
<div class="video" style="overflow: hidden;
    width: 1278px;
    height: 650px;
    border-radius: 20px;
    transform: translateZ(0px);
    border: 3px solid #eee;
  ">
    <iframe width="1278" 
    height="650" src="https://www.youtube.com/embed/TCJrN0g8XUQ" 
    title="Colorimetria" 
    frameborder="0" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
    allowfullscreen></iframe>
</div>


@endsection