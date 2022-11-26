@extends('layouts.main')

@section('container')
<div class="cont-card">
    <div class="wrap-card">
        @foreach ( $publishers as $publisher )
        <div class="header-cardpub">
            <div class="wrapping">
                <p>{{$publisher->name}}</p>
                <p>Address : {{$publisher->address}}</p>
                <p>Phone : {{$publisher->phone}}</p>
                <p>Email : {{$publisher->email}}</p>
            </div>
            <div class="publogo">
                <img class='poto'src={{$publisher->image}} alt="">
            </div>
        </div>
        <div class="content-card">
            @foreach ($publisher->books as $book)
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
        @endforeach
    </div>
</div>
@endsection
