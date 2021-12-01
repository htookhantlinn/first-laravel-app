@extends("layouts.app")
@section('content')

    <div class="container">
        {{$products->links()}}
        <div class="row">
            @foreach ($products as $x)
               <div class="col-md-4  mb-3">
                   <div class="card">
                       <div class="card-header">
                            <h5 class="card-title text-truncate">{{ $x['title'] }}</h5>
                            <div class="card-subtitle mb-2 text-muted small text-truncate " >
                                {{ $x->created_at->diffForHumans() }}
                            </div>
                       </div>
                       <div class="card-body " style="max-height: 150px; overflow: hidden; ">
                           <h4 class="card-title  " > {{$x['body']}} </h4>
                           
                       </div>
                       <div class="card-footer text-muted" style="background-color: white;"  >
                           <a class="btn btn-outline-secondary float-end" href=" {{route('products.detail',$x->id)}} "> Read More</a>
                       </div>
                   </div>
                
               </div>
            @endforeach
        </div>
    </div>

@endsection