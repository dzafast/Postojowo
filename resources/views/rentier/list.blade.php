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
        <th scope="col">Imię Nazwisko</th>
        <th scope="col">email</th>
        <th scope="col">specjalizacja</th>
        <th scope="col">Oferta wynajmu</th>
        <th scope="col">Rezerwacja</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($rentiersList as $rentier)
       
          <tr>
            <th scope="row">{{$rentier->id}}</th>
            <td><a href="{{ URL::to('user/' . $rentier->id )}}">{{$rentier->name}}</a></td>
            <td>{{$rentier->email}}</td>
            <td>
              @foreach ($rentier->specialization as $special)
                <li>{{$special->name}}</li>

              @endforeach
            </td>
            <td>
                @foreach ($rentier->parking as $parking)
                    <li>ilość miejsc - {{$parking->amount}}</li>
                    <li>{{$parking->localization}}</li>
                    <li>{{$parking->description}}</li>
                    --------------------
                @endforeach
            </td>
            <td>
                @foreach ($rentier->rentiersVisits as $visit)
                    <li>{{$visit->date}}</li>
                    <li>{{$visit->user->name}}</li>
                    <li>{{$visit->user->car}}</li>
                    --------------------
                @endforeach
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>  
@endsection('content')
