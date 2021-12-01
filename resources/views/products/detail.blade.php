@extends("layouts.app")
@section('content')

    <div class="container">
        <a href=" {{route('products.index')}} " class=" btn btn-outline-secondary mb-3"> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a>
        <div class="row">
            <div class="card text-left mb-3 shadow " >
                <div class="card-body">
                  <h4 class="card-title"> {{$product['title']}} </h4>
                  <p class="card-text"> {{$product['body']}} </p>
                  
                  <a href="" class="btn btn-outline-danger"> 
                       <i class="fa fa-trash" aria-hidden="true"></i> 
                  </a>
                </div>
            </div>
        </div>
    </div>

@endsection