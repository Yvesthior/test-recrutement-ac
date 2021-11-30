@extends('app')

@section('content')
    <section id="search_bar">
        <input type="text" placeholder="Trouver un Film">
    </section>

    <div class="film_area">

        <section class="cards">
            {{--@foreach($films as $film)
            <div class="card">
                <img src="storage/{{$film->image}}" alt="Avatar" style="width:100%">
                <h1>{{$film->name}}</h1>
                <p class="title">{{$film->genre->name}}</p>
                <br>
                <p><button>Ajouter aux favoris</button></p>
            </div>
            @endforeach--}}
            @foreach($films as $film)
                <div class="card">
                    <div class="card__header">
                        <img src="storage/{{$film->image}}" alt="card__image" class="card__image" width="600">
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue">{{$film->genre->name}}</span>
                        <h4>{{$film->name}}</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
    <div class="pagination">
        {{ $films->links() }}
    </div>
@endsection
