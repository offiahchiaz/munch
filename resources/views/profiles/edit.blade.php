@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Title</label>
                    
                        <input type="text" id="title" 
                            class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ old('title') ?? $user->profile->title }}"
                            autocomplete="title" required autofocus>
        
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
        
                        <input id="description" type="text" 
                            class="form-control @error('description') is-invalid @enderror" 
                            name="description" value="{{ old('description') ?? $user->profile->description }}"  
                            autocomplete="description" required autofocus>
        
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>
                        
                        <input type="file" class="form-control-file" id="image" name="image">
                        
                        @error('image')
                            
                            <strong style="color: #e3342f; font-weight: 600; margin-top: 0.25rem; width: 100%;">{{ $message }}</strong>
                            
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>
                </div>
            </div>    
        </form>
    </div>
@endsection