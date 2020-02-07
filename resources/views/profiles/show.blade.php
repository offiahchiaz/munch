@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" alt="">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h4">{{ $user->username }}</div>
                    
                </div>

                
                <a href="/post/create" class="btn btn-primary">Add new Post</a>
                
                <a href="/profile/{{ $user->id }}/edit" class="btn btn-primary">Edit Profile</a>

                
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>234</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>10k</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>
                {{-- {{ $user->profile->description }} --}}
                {{-- We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit. --}}
            </div>
        </div>
    </div>

    
</div>
@endsection