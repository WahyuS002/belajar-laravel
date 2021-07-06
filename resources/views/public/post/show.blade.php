@extends('layouts.frontend')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h1> <strong>{{ $post->title }}</strong></h1>
                <p class="text-muted">{{ $post->created_at->format('d M Y') }} Created By {{ $post->user_id }} <a href="#">{{ $post->category_id }}</a></p>
            </div>
            <div class="col-md-8 mx-auto d-flex justify-content-center">
                {{-- <div class="w-100" style="height: 500px; background-color: grey; border-radius: 20px;"></div> --}}
                <img width="730px" height="500px" src="{{ asset('storage/' . $post->image) }}" style="border-radius: 20px; object-fit: cover;">
            </div>
            <div class="col-md-8 mx-auto mt-4">
                <p>{{ $post->description }}</p>
            </div>
        </div>
    </div>
@endsection