@extends('layout.adminSide.app')

{{-- title page --}}
@section('content-title','Dashboard')

@section('content')
<div class="col-12">
   <div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>4</h3>

            <p>Processing Officer</p>
          </div>
          <div class="icon">
            <i class="fas fa-user-shield"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>4</h3>

            <p>Applicant</p>
          </div>
          <div class="icon">
            <i class="fas fa-users"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
   </div>
</div>
@endsection