@extends("layouts.app")
@section('content')
    <div class="container">
        <a href="{{route('crews.index')}}" class="btn btn-outline-secondary "> <i class="fa fa-arrow-left" aria-hidden="true"></i> </a>
        <div class="read_form_container container p-3">
            <div class=" row ">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <img style="width: 100px; height:100px; border-radius:100%;" src="data:image/png;base64,{{base64_encode($crew->image)}}" />
                    </div>
                </div>
                <div class="col-md-5"></div>
    
            </div>
            <div class="row m-5 mt-0">
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Person Name</label>
                        <input type="text" class="form-control" disabled value="{{$crew->firstname}}{{$crew->middlename}}{{$crew->lastname}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['father_name'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Mother Name</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['mother_name'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Naionality</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['nationality'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Birthdate</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['birthdate'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Rank </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['rank'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Vessel Type</label>
                        <input type="text" class="form-control" disabled value="<?php
                                                                                echo $crew['name']
                                                                                ?> 
                        ">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Final School</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['final_school'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Martial Status</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['martial_status'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Waistline</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['waistline'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Uniform Size</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['uniform_size'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Safe Shoe</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['safeshoe'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Blood Type</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['blood_type'] ?>">
                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Health Status</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['health_status'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Bank Info</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['bank_info'] ?>">
                    </div>
                </div>
    
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Telephone One</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['tel1'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Telephone Two</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['tel2'] ?>">
                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['address'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['city'] ?>">
                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">English Level</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['english_level'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Application Date</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['application_date'] ?>">
                    </div>
                </div>
    
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Passport Number</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['passportno'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Passport Date</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['passportdate'] ?>">
                    </div>
                </div>
    
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Passport Expired Date</label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['passportexpiredate'] ?>">
                    </div>
                </div>
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">SBook Number </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['sbookno'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">SBook Date </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['sbookdate'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">SBook Expired </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['sbookexpire'] ?>">
                    </div>
                </div>
    
    
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">License Number </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['lincece'] ?>">
                    </div>
                </div>
    
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">License Date </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['licencedate'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">License Expired </label>
                        <input type="text" class="form-control" disabled value="<?php echo $crew['licen_expire'] ?>">
                    </div>
                </div>
    
    
    
    
    
    
    
            </div>
        </div>
    </div>
@endsection