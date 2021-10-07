@extends('layout.applicantSide.app')

{{-- title page --}}
@section('content-title','Dashboard')

@section('content')
<div class="col-12">
    @section('title','Self Assessment Guide')
    <form action="{{ route('applicant.sag.bookkeeping.store') }}" method="POST">@csrf
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('applicant.dashboard') }}" class="btn btn-info">Back</a>
                    </div>
                    <div class="card-body mb-3">
                     <table class="table table-bordered">
                         <tr>
                             <td>Qualification Title</td>
                             <td colspan="2">BOOKKEEPING NC III</td>
                         </tr>
                         <tr>
                             <td>Units of Competency:</td>
                             <td colspan="2">
                                <p style="margin-bottom:1px "> &middot; <b>Journalize Transactions</b></p>
                                 <p style="margin-bottom:1px ">&middot; <b>Post Transactions</b></p>
                                 <p style="margin-bottom:1px ">&middot; <b>Prepare Trial Balance</b></p>
                                 <p style="margin-bottom:1px ">&middot; <b>Prepare Financial Reports</b></p>
                                 <p style="margin-bottom:1px ">&middot; <b>Review Internal Control System</b></p>
                             </td>
                         </tr>
                         <tr>
                             <td colspan="3">
                                 <b>Instruction:</b> Instruction: Read each question and check the appropriate box to indicate your answer.
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <b>Can I ?</b>
                             </td>
                             <td class="text-center">
                                <b>Yes</b>
                             </td>
                             <td class="text-center">
                                <b>No</b>
                             </td>
                         </tr>
                         {{--  --}}
                         <tr>
                            <td>
                                <b>Prepares/Enters chart of account</b>
                            </td>
                            <td>
                               <input type="radio" name="b1" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b1" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
    
                        {{--  --}}
    
                        <tr>
                            <td>
                                <b>Analyses documents*</b>
                            </td>
                            <td>
                               <input type="radio" name="b2" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b2" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
    
                        {{--  --}}
    
                        <tr>
                            <td>
                                <b>Prepares journal entry* </b>
                            </td>
                            <td>
                               <input type="radio" name="b3" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b3" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
    
                         {{--  --}}
    
                         <tr>
                            <td>
                                <b>Transfers/Posts journal entries* </b>
                            </td>
                            <td>
                               <input type="radio" name="b4" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b4" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
    
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Prepares Trial Balance* </b>
                            </td>
                            <td>
                               <input type="radio" name="b5" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b5" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                        
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Prepares Worksheet* </b>
                            </td>
                            <td>
                               <input type="radio" name="b6" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b6" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                        
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Prepares Financial Statements* </b>
                            </td>
                            <td>
                               <input type="radio" name="b7" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b7" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                        
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Journalizes & Posts adjusting and closing entries* </b>
                            </td>
                            <td>
                               <input type="radio" name="b8" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b8" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                        
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Prepares Post Closing Trial Balance* </b>
                            </td>
                            <td>
                               <input type="radio" name="b9" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b9" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                        
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Checks policy compliance* </b>
                            </td>
                            <td>
                               <input type="radio" name="b10" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b10" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
    
                          {{--  --}}
    
                          <tr>
                            <td>
                                <b>Prepares policy compliance report*</b>
                            </td>
                            <td>
                               <input type="radio" name="b11" class="form-control form-control-sm" value="1">
                            </td>
                            <td>
                               <input type="radio" name="b11" class="form-control form-control-sm" value="0">
                            </td>
                        </tr>
                     </table>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-block btn-info" data-toggle="modal" data-target="#modal-default">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
        @include('applicant.partial.notice')
    </form>
</div>


@endsection