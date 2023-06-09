<main class="page-content"> 

<div class="card overflow-hidden">
    <div class="profile-ourlady bg-dark position-relative mb-4">
    <div class="user-profile-avatar shadow position-absolute top-50 start-0 translate-middle-x">
        <img src="views/images/ch1.jpg" alt="...">
    </div>
    </div>
    <div class="card-body">
    <div class="mt-5 d-flex align-items-start justify-content-between">
        <div class="">
        <h3 class="mb-2">OUR LADY OF THE MIRACULOUS MEDAL PARISH</h3>
        <div class="">
            <span class="badge rounded-pill bg-primary">Mansiligan, Bacolod City</span>
            <span class="badge rounded-pill bg-primary">Negros Occidenal Philippines</span>
        </div>
        </div>
    </div>  
    </div>
</div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form id="jQueryValidationForm">
                        <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Church Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" name="yourname" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="inputAddress" class="form-label">Church Address *</label>
                                <input type="text" class="form-control border-3" id="tns-churchAddress" name="churchAddress" placeholder="Brgy. Singcang Airport, Alice St.">
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">Contact Details</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input37" class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input37" name="username" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input37a" class="col-sm-3 col-form-label">Email Address</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="input37a" name="email" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input38" class="col-sm-3 col-form-label"> Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="input38" name="password" placeholder="Choose Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input38a" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="input38a" name="confirm_password" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                                <label for="inputReligion" class="form-label">Religion *</label>
                                <select class="form-select border-3" id="tns-religion" name="religion" aria-label="Default select example">
                                <option selected="" value="Catholic">Catholicism</option>
                                <option value="Baptist">Baptist</option>
                                <option value="Baptist">Islam</option>
                                <option value="Christianity ">Christianity </option>
                                </select>
                        </div>
                        <div class="row mb-3">
                                <label for="inputCity" class="form-label">City *</label>
                                <input type="text" class="form-control border-3" id="tns-city" name="city" placeholder="Bacolod City">
                        </div>

                       <div class="row mb-3">
                                <label for="inputSelectCountry" class="form-label">Country *</label>
                                <select class="form-select border-3" id="tns-country" name="country" aria-label="Default select example">
                                <option selected="" value="Philippines">Philippines</option>
                                <option  value="India">India</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="America">America</option>
                                <option value="Dubai">Dubai</option>
                                </select>
                        </div>

    
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
                                    <button type="reset" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <div class="card">
        <div class="card-body">
        <h5 class="mb-3">Location</h5>
            <div id="marker-map" class="gmaps"></div>
        </div>
    </div>
</main>