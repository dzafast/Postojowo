@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('hrefTitle'){{$hrefTitle}}@endsection

@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imię Nazwisko</th>
        <th scope="col">pesel</th>
        <th scope="col">telefon</th>
        <th scope="col">adres</th>
        <th scope="col">email</th>
        <th scope="col">status</th>
        <th scope="col">typ</th>
        <th scope="col">nr rejestracyjny pojazdu</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($usersList as $user)
       
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->pesel}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->status}}</td>
            <td>{{$user->type}}</td>
            <td>{{$user->car}}</td>
          </tr>
  
      @endforeach
    </tbody>
  </table>
@endsection('content')
