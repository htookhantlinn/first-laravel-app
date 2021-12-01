@extends("layouts.app")

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Person Name</th>
                <th scope="col">Nationality</th>
                <th scope="col">Rank</th>
                <th scope="col">Vessel Type</th>
                <th scope="col">Sbook Number</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($crews as $x)
                <tr>
                    <td> {{$x->id}} </td>
                    <td>
                        <img style="width: 100px; height:100px; border-radius:100%;" src="data:image/png;base64,{{base64_encode($x->image)}}" />
                    </td>

                    <td>
                        {{$x->firstname}}  {{$x->middlename}} {{$x->lastname}}
                    </td>

                    <td>
                        {{$x->nationality}} 
                    </td>

                    <td>
                        {{$x->rank}} 
                    </td>

                    <td>
                        {{$x->vessel_type}} 
                    </td>

                    <td>
                        {{$x->sbookno}} 
                    </td>
                    
                    <td>
                        <a  href=" {{route('crews.detail',[$x->id])}} " class=' m-1 btn btn-outline-info'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a  href="" class=' m-1 btn btn-outline-warning'>
                            <i class="fas fa-edit    "></i>
                        </a>
                        <a  href="" class=' m-1 btn btn-outline-danger'>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
               
                    </td>
                </tr>  
            @endforeach
        </tbody>
    </table>
@endsection
