@extends('layouts.main')

@section('container')

<div class="cont-card">
    <div class="wrap-card">
        <div class="header-card">
            <p>Book Detail</p>
        </div>
        <div class="content-card">
            <div class="card">
                <img class="card-img-top cssImageAdjust" src="{{ asset($bookDetail ->image) }}" alt="Card image cap">
                <div class="card-body">
                <p class="card-title">Title : {{$bookDetail ->title}} </p>
                <p class="card-title">Author : {{$bookDetail ->author}} </p>
                <p class="card-title">Publisher : {{$bookDetail->publishers->name}} </p>
                <p class="card-title">Year : {{$bookDetail ->year}} </p>
                <p class="card-title">Synopsis :  <br> {{$bookDetail ->synopsis}} </p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
