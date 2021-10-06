@extends('layout.applicantSide.app')

{{-- title page --}}
@section('content-title','Dashboard')

@section('content')
<div class="col-12">
    @section('title','National Cetificate Courses')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"><b>Computer System Servicing NC II</b></h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"></h6>

                <p class="card-text">
                    The COMPUTER SYSTEMS SERVICING NC II Qualification consists of competencies that must possess to enable to install and configure computers systems, set-up computer networks and servers and to maintain and repair computer systems and networks
                </p>
                <a href="#" class="btn btn-primary">Apply Now</a>
              </div>
            </div>
        </div>
        {{--  --}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-primary card-outline">
             <div class="card-header">
               <h5 class="card-title m-0"><b>Bookkeeping NC II</b></h5>
             </div>
             <div class="card-body">
               <h6 class="card-title"></h6>

               <p class="card-text">
                Bookkeeping NC III is a short TESDA course in the Philippines that will train you in posting transactions, preparing trial balance, preparing financial reports, and reviewing internal control system. Aside from those mentioned above, it will also teach you how to: Lead workplace communication.
               </p>
               <a href="#" class="btn btn-primary">Apply Now</a>
             </div>
           </div>
       </div>
    </div>
</div>
@endsection