@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <h1>All contacts</h1>
    </div>

    <div class="card-columns">
        @foreach ($user->contacts as $contact)
            <div class="card" style="width: 18rem;">
                    <img class="card-img-top w-100" src="{{$contact->profileImage()}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$contact->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$contact->category}}</h6>
                    <p class="card-text">
                        Phone: {{$contact->phone}} <br>
                        E-mail: {{$contact->email}}</p>
                    <p class="card-text"></p>
                    <div class="row justify-content-center">
                    <button href="#" class="btn btn-primary mr-1">Edit Contact</button>
                    <form action="/contact/{{$contact->id}}", method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete Contact</button>
                    </form>
                    </div>
                    </div>
            </div>
        @endforeach

    </div>
    
        
    </div>

</div>
@endsection
