
@extends('layouts.main')

@section('container')
    <h1 class="head mb-5 cf">My Project</h1>

    <div class="container mt-8">
        <div class="row">
            @foreach ($ports as $port) 
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2 " style="background-color:rgba(0, 0, 0, 0.7)"></div>
                    <img src="{{ $port["image"] }}" alt="{{ $port["name"]}}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $port["title"] }}</h5>
                      <h4>{{ $port["name"] }}</h4>
                      <p class="justify">{{ $port["description"] }}</p>
                      <a href="/ports/{{ $port["subtitle"] }}" class="text-decoration-none">Read more...</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection