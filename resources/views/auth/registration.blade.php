@extends('layouts.auth')
@section('title', 'dashboard')
@section('body')

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">

                    <div class="col-lg-6 col-12 p-0">
                        <div class="card rounded-0 mb-0 px-2">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h4 class="mb-0">Register</h4>
                                </div>
                            </div>
                            <p class="px-2">Welcome back, please login to your account.</p>
                            <div class="card-content">
                                <div class="card-body pt-1">
                                    <form action="#" class="icons-tab-steps wizard-circle">

                                        <!-- Step 1 -->
                                        <h6><i class="step-icon feather icon-home"></i> Step 1</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="firstName11">First Name </label>
                                                        <input type="text" class="form-control" id="firstName11">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="lastName11">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName11">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="firstName11">Firm Name </label>
                                                        <input type="text" class="form-control" id="firstName11">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="lastName11">Company pancard number</label>
                                                        <input type="text" class="form-control" id="lastName11">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="firstName11">Email</label>
                                                        <input type="text" class="form-control" id="firstName11">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="lastName11">Gstin no</label>
                                                        <input type="text" class="form-control" id="lastName11">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress11">Business type</label>
                                                        <input type="email" class="form-control" id="emailAddress11">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="location11">City</label>
                                                        <select class="custom-select form-control" id="location11" name="location">
                                                            <option value="new-york">2</option>
                                                            <option value="chicago">1</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </fieldset>

                                        <!-- Step 2 -->
                                        <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                                        <fieldset>
                                            <div class="form-group col-sm-6 row">
                                                <label for="sel1">Select list (select one):</label>
                                                <select class="form-control " id="sel1">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                </select>
                                                <div class="col-sm-6" >
                                                    <div class="form-group row">
                                                        <label for="firstName11">Email</label>
                                                        <input type="text" class="form-control" id="firstName11">
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            <div class="row">
                                                

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="lastName11">Gstin no</label>
                                                        <input type="text" class="form-control" id="lastName11">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="emailAddress11">Business type</label>
                                                        <input type="email" class="form-control" id="emailAddress11">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="location11">City</label>
                                                        <select class="custom-select form-control" id="location11" name="location">
                                                            <option value="new-york">2</option>
                                                            <option value="chicago">1</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="proposalTitle11">Proposal Title</label>
                                                        <input type="text" class="form-control" id="proposalTitle11">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="jobtitle11">Job Title</label>
                                                        <input type="text" class="form-control" id="jobtitle11">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="shortDescription11">Short Description :</label>
                                                        <textarea name="shortDescription" id="shortDescription11" rows="5" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <!-- Step 3 -->
                                        <h6><i class="step-icon feather icon-image"></i> Step 3</h6>
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="eventName11">Event Name :</label>
                                                        <input type="text" class="form-control" id="eventName11">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="eventType11">Event Status :</label>
                                                        <select class="custom-select form-control" id="eventType11" data-placeholder="Type to search cities" name="eventType11">
                                                            <option value="Banquet">Planning</option>
                                                            <option value="Fund Raiser">In Process</option>
                                                            <option value="Dinner Party">Finished</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="eventLocation11">Event Location :</label>
                                                        <select class="custom-select form-control" id="eventLocation11" name="location">
                                                            <option value="new-york">New York</option>
                                                            <option value="chicago">Chicago</option>
                                                            <option value="san-francisco">San Francisco</option>
                                                            <option value="boston">Boston</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group d-flex align-items-center pt-md-2">
                                                        <label class="mr-2">Requirements :</label>
                                                        <div class="c-inputs-stacked">
                                                            <div class="d-inline-block mr-2">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" value="false">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Staffing</span>
                                                                </div>
                                                            </div>
                                                            <div class="d-inline-block">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" value="false">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Catering</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    @endsection()