@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('hrefTitle'){{$hrefTitle}}@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$user->name}}<h2><h3>{{$user->type}}</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Pesel</td>
                        <td>{{$user->pesel}}</td>
                    </tr>
                    <tr>
                        <td>Telefon</td>
                        <td>{{$user->phone}}</td>
                    </tr>
                    <tr>
                        <td>Adres</td>
                        <td>{{$user->address}}</td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>{{$user->status}}</td>
                    </tr>
                    <tr>
                        <td>Nr rejestracyjny pojazdu</td>
                        <td>{{$user->car}}</td>
                    </tr>
                        @if ($user->type == "rentier")
                         <tr>
                            <td>Usługa</td>
                            <td>
                                @foreach ($user->specialization as $special)
                                    <li>{{$special->name}}</li>
                                @endforeach
                            </td>
                        </tr>
                        @endif
                        <td><a href="{{ URL::to('user/edit/' . $user->id )}}" >Edycja profilu</a></td>
                </table>
            </div>
        </div>
    </div>    
@endsection('content')
