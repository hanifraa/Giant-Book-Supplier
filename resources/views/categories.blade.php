@extends('layouts.main')

@section('container')
    <div class="cont-card">
        <div class="wrap-card">
            <div class="header-card">
                <p>{{$books->name}}</p>
            </div>
            <div class="content-card">
                @foreach ($books->books as $book)
                    <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($book->image) }}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$book->title}} </h5>
                    <p>by</p>
                    <p class="card-text">{{$book->author}}</p>
                    <a href="{{ asset("book/".$book->id) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
