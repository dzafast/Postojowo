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
  <a href="{{ URL::to('user/create' )}}">Dodaj nowego użytkownika</a>
  <div>
      @foreach ($statistic as $stat)
        @if ($stat->status == "active")
          Liczba aktywnych uzytkowników: {{$stat->user_count}},
        @endif
        @if ($stat->status == "inactive")
          Liczba nieaktywnych uzytkowników: {{$stat->user_count}}
        @endif
      @endforeach
    </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imię Nazwisko</th>
        <th scope="col">email</th>
        <th scope="col">Rezerwacja</th>
        <th scope="col">Usuń</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($usersList as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td><a href="{{ URL::to('user/' . $user->id )}}">{{$user->name}}</a></td>
          <td>{{$user->email}}</td>
          <td>
            @foreach ($user->usersVisits as $visit)
              <li>{{$visit->date}}</li>
              <li>{{$visit->rentier->name}}</li>
            @endforeach
          </td>
          <td><a href="{{ URL::to('user/delete/' . $user->id )}}" onclick="return confirm('Czy na pewno usunąć')">Usuń</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>  
@endsection('content')
