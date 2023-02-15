@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('hrefTitle'){{$hrefTitle}}@endsection

@section('content')
<div class="container">
<h2>{{$hrefTitle}}</h2>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Lokalizacja</th>
        <th scope="col">Opis</th>
        <th scope="col">ilość</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($parkingList as $parking)
       
          <tr>
            <th scope="row">{{$parking->id}}</th>
            <td><a href="{{URL::to('rentier/parking/' . $parking->id)}}">{{$parking->localization}}</a></td>
            <td>{{$parking->description}}</td>
            <td>{{$parking->amount}}</td>
          </tr>
  
      @endforeach
    </tbody>
  </table>
</div>  
@endsection('content')
