@extends('app')

@section('content')
    <section id="search_bar">
        <input type="text" placeholder="Trouver un Film">
    </section>

    <div class="film_area">

        <section class="cards">
            @foreach($films as $film)
            <div class="card">
                <img src="storage/img_avatar.png" alt="Avatar" style="width:100%">
                <div class="container">
                    <h4><b>{{$film->name}}</b></h4>
                    <p>Architect & Engineer</p>
                </div>
            </div>
            @endforeach

        </section>
    </div>
@endsection
