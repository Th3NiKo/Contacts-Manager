@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <h1>All contacts</h1>
        <!-- Search form -->
        
    </div>
    <div class="row justify-content-center">
        @foreach ($user->contacts as $contact)
            <div class="card m-3" style="width: 18rem;">
                    <img class="card-img-top w-100" src="{{$contact->contactImage()}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$contact->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$contact->contactCategory()}}</h6>
                    <p class="card-text">
                        Phone: {{$contact->phone}} <br>
                        E-mail: {{$contact->email}}</p>
                    <p class="card-text"></p>
                    <div class="row justify-content-center">
                    <a href="/contact/edit/{{$contact->id}}" class="btn btn-primary mr-1">Edit Contact</a>
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
