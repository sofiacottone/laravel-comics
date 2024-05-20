@extends('layouts.app')

@section('page-title')
Comics
@endsection

@section('content')
<div class="container-fluid ms-jumbo d-flex align-items-end">
    <div class="container position-relative">
        <div class="position-absolute bg-primary text-uppercase text-white fw-bold h4 py-2 px-3">
            our comics
        </div>
    </div>
</div>
<div class="container pt-5">
    <div class="row row-cols-3">
        @foreach($comics as $comic)
        <div class="ms-flip-card col-xxl-3 col-lg-4 col-md-6 col-sm-9 mb-4 mx-auto">

            <div class="ms-flip-card-inner border">
    
                <div class="ms-flip-card-front">
                    <img src="{{ $comic['thumb'] }}" >
                </div>
    
                <div class="ms-flip-card-back p-3">
                    <div><span>Title: </span>{{ $comic['title'] }}</div>
                    <div><span>Series: </span>{{ $comic['series'] }}</div>
                    <div><span>Sale date: </span>{{ $comic['sale_date'] }}</div>
                    <div><span>Type: </span>{{ $comic['type'] }}</div>
                    <div><span>Description: </span>{{ $comic['description'] }}</div>

                </div>
    
            </div>
        </div>
        @endforeach


        {{-- @foreach($comics as $comic)
        <div class="col mb-3">
            <div class="card">
                <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $comic['title'] }}</h5>
                    <div><span class="fw-bold">Series: </span>{{ $comic['series'] }}</div>
                    <div><span class="fw-bold">Sale date: </span>{{ $comic['sale_date'] }}</div>
                    <div><span class="fw-bold">Type: </span>{{ $comic['type'] }}</div>
                    <p class="card-text">{{ $comic['description'] }}</p>
                </div>
            </div>
        </div>
        @endforeach --}}
    </div>
</div>
@endsection