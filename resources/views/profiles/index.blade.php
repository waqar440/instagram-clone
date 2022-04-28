@extends('layouts.app')

@section('content')
<div class="container" style="width: 60%">
  <div class="row">
        <div class="col-3 p-2">
            <img src="/storage/{{ $user->profile->profileImage() }}"  class="rounded-circle w-100"  alt="">
        </div>
        <div class="col-9 py-1">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h4">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="px-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="px-3"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div>
                <a href="#">{{ $user->profile->url }}</a>
            </div>
        </div>
  </div>
  <div class="row pt-5">
      @foreach ($user->posts as $post)
      <div class="col-4">
        <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100  pb-4">
        </a>
    </div>
      @endforeach
  </div>
</div>
@endsection
