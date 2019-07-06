@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        <h1>All contacts</h1>
    </div>
    <div class="card-columns">
        <div class="card" style="width: 18rem;">
                <img class="card-img-top w-100" src="https://i.iplsc.com/mariusz-pudzianowski/00047PMY3MUEIDDO-C122-F4.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Mariusz Pudzianowski</h5>
                <h6 class="card-subtitle mb-2 text-muted">Colleague</h6>
                <p class="card-text">
                    Phone: 696969699 <br>
                    E-mail: mariusz@pudzianowski.pl</p>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Edit Contact</a>
                <a href="#" class="btn btn-danger">Delete Contact</a>
                </div>
        </div>

        <div class="card" style="width: 18rem;">
                <img class="card-img-top w-100" src="https://s3.viva.pl/newsy/agnieszka-chylinska-487516-GALLERY_BIG.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Agnieszka Chylinska</h5>
                <h6 class="card-subtitle mb-2 text-muted">Singer</h6>
                <p class="card-text">
                    Phone: 1212121222 <br>
                    E-mail: agniecha@toja.pl</p>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Edit Contact</a>
                <a href="#" class="btn btn-danger">Delete Contact</a>
                </div>
        </div>

    </div>
    
        
    </div>

</div>
@endsection
