@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 40px;">
                    </div>
                    <div class="">
                        <div class="font-weight-bold"><span><a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span> . <a href="#" class="text-primary">Follow</a></div>
                    </div>
                </div>

                <hr>
                
                <p><span class="font-weight-bold"><a class="text-dark" href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a> </span>{{ $post->caption }}</p>
            </div>
        </div>
        
    </div>
@endsection