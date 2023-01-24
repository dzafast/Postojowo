@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h4>W następujących polach wystapił błąd</h4>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
<h2>Dodawanie użytkownika</h2>
    <form action="{{action('UserController@store')}}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="form-check">
            <div class="form-group space">
                <input class="form-check-input" type="radio" name="type" id="user" value="user"/>
                <label class="form-check-label" for="type">
                    Użytkownik
                </label>

                <input class="form-check-input" type="radio" name="type" id="user" value="rentier" checked/>
                <label class="form-check-label" for="type">
                    Usługodawca
                </label>
            </div>  
        </div>
        <div class="form-group">
            <label for="name">Nazwisko i Imię</label>
            <input type="text" class="form-control" name="name" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" />
        </div>
        <div class="form-group">
            <label for="password">Hasło</label>
            <input type="password" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="address" class="form-control" name="address" />
        </div>
        <div class="form-group">
            <label for="pesel">Pesel</label>
            <input type="pesel" class="form-control" name="pesel" />
        </div>
        <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="phone" class="form-control" name="phone" />
        </div>
        <div class="form-group">
            <label for="car">Nr Rejestracyjny samochodu</label>
            <input type="car" class="form-control" name="car" />
        </div>
        <div class="form-check">
            <h4>Poniższe pola zaznacz jesli jesteś usługodawcą</h4>
            <label class="form-check-label" for="specialization">
                @foreach($specialization as $special)
                    <input class="form-check-input" type="checkbox" value="{{$special->id}}", name="specialization[]" />
                    <p>{{$special->name}}</p>
                @endforeach
            </label>
        </div>
        <br>
        <input type="hidden" name="status" value="active" />
        <input type="submit" value="Dodaj" class="btn btn-primary" />
    </form>
</div>  
@endsection('content')
