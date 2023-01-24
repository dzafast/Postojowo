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
        <th scope="col">Najemca</th>
        <th scope="col">Wynajmujący</th>
        <th scope="col">Data rezerwacji miejsca postojowego</th>
        <th scope="col">Usuń wizytę</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($visitList as $visit)
       
          <tr>
            <th scope="row">{{$visit->id}}</th>
            <td>{{$visit->user->name}}, {{$visit->user->car}}, {{$visit->user->phone}}</td>
            <td>{{$visit->rentier->name}}, {{$visit->rentier->phone}}</td>
            <td>{{$visit->date}}</td>
            <td><a href="{{ URL::to('visit/delete/' . $visit->id )}}" onclick="return confirm('Czy na pewno usunąć')">Usuń</a></td>
          </tr>
  
      @endforeach
    </tbody>
  </table>
</div>  
@endsection('content')