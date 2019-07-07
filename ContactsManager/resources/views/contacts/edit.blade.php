@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/contact/{{$contact->id}}" enctype="multipart/form-data", method="post">
        @csrf
        @method('PATCH')
        <div class="row">
                <div class="col-8 offset-2">
                        <div class="row">
                            <h1>Update contact</h1>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label">Name</label>
            
                            <input id="name" 
                            name="name" 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ old('name') ?? $contact->name }}"
                            autocomplete="name" 
                            autofocus>
            
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label">Category</label>
            
                            <input id="category" 
                            name="category" 
                            type="text" 
                            class="form-control @error('category') is-invalid @enderror" 
                            value="{{ old('category') ?? $contact->category }}"
                            autocomplete="category" 
                            autofocus>
            
                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>
            
                            <input id="email" 
                            name="email" 
                            type="text" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') ?? $contact->email }}"
                            autocomplete="email" 
                            autofocus>
            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label">Phone number</label>
            
                            <input id="phone" 
                            name="phone" 
                            type="text" 
                            class="form-control @error('phone') is-invalid @enderror" 
                            value="{{ old('phone') ?? $contact->phone }}"
                            autocomplete="phone" 
                            autofocus>
            
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Contact image</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                    
                                @error('image')
                                    <strong>{{ $message }}</strong>
                                @enderror
                        </div>

                        <div class="row pt-4">
                            <button class="btn btn-primary">Add contact</button>
                        </div>
                </div>
        </div>

    </form>
</div>
@endsection
