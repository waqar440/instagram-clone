@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($posts as $post)
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-center">
                <div class="card " style="width: 30rem;">
                    <div class="card-header d-flex">
                        <img class="rounded-circle" src="/storage/{{ $post->user->profile->image }}" width="40" alt="">
                        <div class="align-items-center mx-4"><strong>{{ $post->user->username }}</strong></div>
                        {{-- <p class="mx-4"></p> --}}
                    </div>
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                    <div class="card-body">
                        <p><span class="font-weight-bold"><a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a> </span>{{ $post->caption }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection