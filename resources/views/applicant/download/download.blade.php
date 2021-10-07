@extends('layout.applicantSide.app')

{{-- title page --}}
@section('content-title','Dashboard')

@section('content')
<div class="col-12">
    @section('title','Download')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"><b>Self Assessment Guide</b></h5>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                   <tr>
                    <th>#</th>
                    <th>Courses</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Download</th>
                   </tr>
                  </thead>
                  <tbody>
                    <?php $i=1?>
                    @foreach ($data as $item)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item['type'] }}</td>
                            <td>{{ $item['created_at'] }}</td>
                            <td>{{ $item['time'] }}</td>
                            <td>
                              <button class="btn btn-info">
                                <i class="fas fa-download"></i>&nbsp;
                                Download
                              </button>
                            </td>
                          </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        
    </div>
</div>
@endsection