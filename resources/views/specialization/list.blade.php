@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('hrefTitle'){{$hrefTitle}}@endsection

@section('content')
<div class="container">
<h2>Dodaj specjalizacje</h2>
<a href="{{ URL::to('specialization/create' )}}">Dodaj nową specjalizację</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa specjalizacji</th>
        <th scope="col">Usuń specjalizację</th>

      </tr>
    </thead>
    <tbody>
      @foreach ($specializationList as $specialization)
       
          <tr>
            <th scope="row">{{$specialization->id}}</th>
            <td><a href="{{ URL::to('rentier/specialization/' . $specialization->id )}}">{{$specialization->name}}</a></td>
            <td><a href="{{ URL::to('specialization/delete/' . $specialization->id )}}" onclick="return confirm('Czy na pewno usunąć')">Usuń</a></td>
          </tr>
  
      @endforeach
    </tbody>
  </table>
</div>  
@endsection('content')