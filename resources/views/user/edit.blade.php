@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('content')
<div class="container">
<h2>Edycja Profilu użytkownika</h2>
    <form action="{{action('UserController@editStore')}}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="hidden" name="id" value="{{$user->id}}" />
        
        <div class="form-check">
            @if($user->type == 'user')
                <h4>Zmień typ jeśli chcesz wynajmować</h4>
            @else
            <h4>Zmień typ jeśli chcesz przejść w status zwykłego użytkownika</h4>
            @endif
        @if($user->type == 'user')
            <input type="radio" name="type" id="user" value="user" checked/>
            <label class="form-check-label" for="type">Użytkownik</label>

            <input  type="radio" name="type" id="user" value="rentier" />
            <label class="form-check-label" for="type">Usługodawca</label>
        @else
            <input type="radio" name="type" id="user" value="user" />
            <label class="form-check-label" for="type">Użytkownik</label>

            <input  type="radio" name="type" id="user" value="rentier" checked/>
            <label class="form-check-label" for="type">Usługodawca</label>
        @endif
        </div>
        <br>
        <div class="form-group">
            <label for="name">Nazwisko i Imię</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}" />
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="{{$user->email}}"/>
        </div>
        <div class="form-group">
            <label for="address">Adres</label>
            <input type="address" class="form-control" name="address" value="{{$user->address}}"/>
        </div>
        <div class="form-group">
            <label for="pesel">Pesel</label>
            <input type="pesel" class="form-control" name="pesel" value="{{$user->pesel}}"/>
        </div>
        <div class="form-group">
            <label for="phone">Telefon</label>
            <input type="phone" class="form-control" name="phone" value="{{$user->phone}}"/>
        </div>
        <div class="form-group">
            <label for="car">Nr Rejestracyjny samochodu</label>
            <input type="car" class="form-control" name="car" value="{{$user->car}}"/>
        </div>
        <div class="form-check">

            @if($user->type == 'user')
                <h4>Poniższe pola zaznacz jesli chcesz przekwalifikować się na RENTIERA</h4>
            @else
                <h4>Dodaj lub zmień!</h4>
            @endif

            @foreach($specialization as $special)
                @if($user->specialization->contains($special->id))
                    <input  type="checkbox" value="{{$special->id}}" name="specialization[]" checked />
                    <label class="form-check-label">{{$special->name}}</label>
                @else
                    <input  type="checkbox" value="{{$special->id}}" name="specialization[]" />
                    <label class="form-check-label">{{$special->name}}</label>
                @endif
            @endforeach

        </div>
        <br>
        <div class="form-check">
            <h4>Status</h4>
                @if($user->status == 'active')
                    <input type="checkbox"  name="status" value="active" checked="checked" />
                    <label class="form-check-label">Aktywny</label>
                    <input type="checkbox"  name="status" value="inactive" />
                    <label class="form-check-label">Nieaktywny</label>
                @else
                    <input type="checkbox"  name="status" value="active"/>
                    <label class="form-check-label">Aktywny</label>
                    <input type="checkbox"  name="status" value="inactive" checked="checked" />
                    <label class="form-check-label">Nieaktywny</label>
                @endif
        </div>
        <div class="center">
            <input type="submit" value="Zapisz" class="btn btn-primary" />
        </div>
        
    </form>
</div>  
@endsection('content')
