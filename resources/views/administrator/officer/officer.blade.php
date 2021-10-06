@extends('layout.adminSide.app')

{{-- title page --}}
@section('content-title','Processing Officer')

@section('content')
<div class="col-12">
   <div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                List
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="show"></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <form id="formProceesingOfficer">@csrf
            <div class="card">
                <div class="card-header">
                   <b> Processing Officer</b>
                </div>
                <div class="card-body">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label >First name</label>
                        <input type="text" class="form-control" name="first_name" required placeholder="Enter first name">
                      </div>
                      <div class="form-group">
                        <label >Last name</label>
                        <input type="text" class="form-control" name="last_name" required placeholder="Enter last name">
                      </div>
                      <div class="form-group">
                        <label >Username</label>
                        <input type="text" class="form-control" name="username" required placeholder="Enter username">
                      </div>
                      <div class="form-group">
                        <label >Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="Enter email">
                      </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btnSave">Save</button>
                    <button type="submit" class="btn btn-warning cancelAssign">Cancel</button>
                </div>
            </div>
        </form>
    </div>
   </div>
</div>
@endsection
@section('moreJs')
    <script src="{{ asset('administrator/officer.js') }}"></script>
@endsection