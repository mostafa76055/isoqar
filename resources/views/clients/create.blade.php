@extends('layouts.master')
@section('css')

@section('title')
    empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">Add Client</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Client</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@if (session('status'))
    <p id="alert-wishlist" class="alert alert-success"> {{ session('status') }}</p>
@endif
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <form  method="POST" action="{!! url('client/store') !!}"
                enctype="multipart/form-data">
                @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Name of Company </label>
                                <input type="text" class="form-control" name="name" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Companies Hous No. </label>
                                <input type="text" class="form-control" name="company" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Telephone No </label>
                                <input type="number" class="form-control" name="tele" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Email </label>
                                <input type="text" class="form-control" name="email" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Contact </label>
                                <input type="text" class="form-control" name="contact" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Fax  No. </label>
                                <input type="text" class="form-control" name="fax" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Website </label>
                                <input type="text" class="form-control" name="website" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Position </label>
                                <input type="text" class="form-control" name="position" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Postcode </label>
                                <input type="text" class="form-control" name="postcode" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="" class="form-label">Address </label>
                                <input type="text" class="form-control" name="address" id="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">1- What is the proposed scope of certification?
                                    <p>Description of the products and services you offer to your customers.</p>
                                </label>
                                <textarea class="form-control" name="question1" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">2- What are  the main processes carried out to deliver the products and services you offer?
                                    <p>What are the main actions or steps taken in order to produce the above products and services?</p>
                                </label>
                                <textarea class="form-control" name="question2" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">3-Does providing these products or services involve working at customer sites?
                                    <p>If yes, please tell us what you do on site (e.g. installation, maintenance, construction, security, cleaning etc.)</p>
                                </label>
                                <textarea class="form-control" name="question3" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">4-What are  the risks associated with your processes?
                                    <p>The main sources with a potential to cause injury and ill health.</p>
                                </label>
                                <textarea class="form-control" name="question4" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">5-What are  your significant environmental aspects?
                                    <p>Elements of your activities, products or services that interact with, and can have a significant impact on, the environment.</p>
                                </label>
                                <textarea class="form-control" name="question5" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">6-Please identify any hazardous materials used in your processes?
                                    <p>Any item or agent which has the potential to cause harm.</p>
                                </label>
                                <textarea class="form-control" name="question6" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">7-Please identify any specific legal obligations relevant to OH&S and/or Environmental legislation?
                                    <p>Any obligations requiring you to perform a specific duty.</p>
                                </label>
                                <textarea class="form-control" name="question7" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    8-What is your total number of employees?
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question8" id="">
                                    <label class="form-check-label" for="">
                                        Full Time
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question8" id="" checked>
                                    <label class="form-check-label" for="">
                                        Part Time
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    9-Do you utilise any subcontractors to deliver the services you provide?
                                    If YES, please give details as to what extent you use them (e.g. manufacture, installation, design, transport, waste) and approximately how many are used at any one time.
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question9" id="">
                                    <label class="form-check-label" for="">
                                        Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question9" id="" checked>
                                    <label class="form-check-label" for="">
                                        No
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    10-Do you operate a shift system?
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question10" id="">
                                    <label class="form-check-label" for="">
                                        Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question10" id="" checked>
                                    <label class="form-check-label" for="">
                                        No
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    11-Do you have any other branches or satellite offices?
                                    If you do, please tell us where they are and approximate numbers employed at each branch

                                </label>
                                <textarea class="form-control" name="question11" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    12-Have you produced a relevant
                                    management system?

                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question12" id="">
                                    <label class="form-check-label" for="">
                                        Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question12" id="" checked>
                                    <label class="form-check-label" for="">
                                        No
                                    </label>
                                  </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    13-Have you produced a relevant
                                    management system?
                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question13" id="">
                                    <label class="form-check-label" for="">
                                        Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question13" id="" checked>
                                    <label class="form-check-label" for="">
                                        No
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    14-Does your organisation currently have any registrations
                                    granted by ISOQAR or other certification bodies?



                                </label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question14" id="">
                                    <label class="form-check-label" for="">
                                        Yes
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question14" id="" checked>
                                    <label class="form-check-label" for="">
                                        No
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    15-If a consultant was used to develop your management system, please give their name and company
                                </label>
                                <textarea class="form-control" name="question15" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    16-List any legislation and / or regulation
                                    that applies to the scoped area.



                                </label>
                                <textarea class="form-control" name="question16" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    17-Please add any other information you feel will help us provide a quotation in the box below:


                                </label>
                                <textarea class="form-control" name="question17" id="" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    18-If you are a new customer,
                                    how did  you hear about ISOQAR?



                                </label>
                                <textarea class="form-control" name="question18" id="" style="height: 100px"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="" class="form-label">
                                    19-Is there any additional information you
                                    feel may help us prepare your quotation?


                                </label>
                                <textarea class="form-control" name="question19" id="" style="height: 100px"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
