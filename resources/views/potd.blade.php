@extends('layout')

@section('content')

<body onload="showImage();">

  <h1 style="text-align: center;">NASA Astronomy Picture Of The Day</h1>
  <h2 style="text-align: center;" id="title"></h2>

  <h3>
    <input type="date"
    id="Date_Picker"
    min="1995-06-01"
    max="2023-12-31"
    onchange="showImage();">
  </h3>

  <img id="pic" src="" alt="NASA Picture Of The Day">

  <h3 id="explanation"></h3>

  @endsection
