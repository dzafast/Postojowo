@extends('template')

@section('title')
  @if (isset($title))
    - {{$title}}
  @endif
@endsection

@section('content')
<div class="container">
<h2>Dodawanie specializacji</h2>
    <form action="{{action('SpecializationController@store')}}" method="POST" role="form">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="form-group">
            <label for="name">Nazwa specjalizacji</label>
            <input type="text" class="form-control" name="name" />

        <input type="submit" value="Dodaj" class="btn btn-primary" />
    </form>
</div>  
@endsection('content')
