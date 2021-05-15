@extends('layout.layout')
@section('dashboard')
<div class="row g-5 g-xl-8 p-10">
    <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
        <thead>
            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>NIN</th>
                <th>Phone Number</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td><img src="{{$user->photo}}" alt="" srcset="" width="150px"></td>
                <td>{{$user->name}} {{$user->firstname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->NIN}}</td>
                <td>{{$user->phone}}</td>
                <td> @if ($user->status === "Approved") 
                    <span class="badge badge-light-success fs-8 fw-bolder my-2">Approved</span>
                    @elseif ($user->status === "Rejected")
                    <span class="badge badge-light-danger fs-8 fw-bolder my-2">Rejected</span>
                    @elseif ($user->status === "On Hold")
                    <span class="badge badge-light-warning fs-8 fw-bolder my-2">On Hold</span>
                    @else
                    <span class="badge badge-light-warning fs-8 fw-bolder my-2">Processing</span>
                    @endif   </td>
                    <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$user->id}}">
                        View
                    </button>
                    <div class="modal fade" tabindex="-1" id="kt_modal_{{$user->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{$user->name}}</h5>
                    
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-2x"></span>
                                    </div>
                                    <!--end::Close-->
                                </div>
                    
                                <div class="modal-body">
                                    <p>Photo:<img src="{{$user->photo}}" alt="" srcset="" width="150px"></p>
                                    <p>Name: {{$user->name}} {{$user->firstname}}</p>
                                    <p>Phone Number: {{$user->number}} </p>
                                    <p>NIN: {{$user->NIN}} </p>
                                    <p>Email: {{$user->email}} </p>
                                    <p>Fathers name: {{$user->father_name}} </p>
                                    <p>Fathers Phone Number: {{$user->father_phone_number}} </p>
                                    <p>Mother Name: {{$user->mothername}} </p>
                                    <p>date of birth: {{$user->dob}} </p>
                                    <p>JAMB 2020 or 2021: {{$user->jamb_2020}} </p>
                                    <p>Jamb Reg NO: {{$user->jamb_reg_no}} </p>
                                    <p>Jamb Certificate: <a href="{{$user->jambfile}}" target="_blank">View</a> </p>
                                    <p>Jamb Score: {{$user->jambscore}} </p>
                                    <p>WAEC or NECO: {{$user->waecorneco}} </p>
                                    <p>WAEC or NECO RESULT: <a href="{{$user->waecorresults}}" target="_blank">View</a> </p>
                                    <p>Primary School: {{$user->primarschool}} </p>
                                    <p>SSCE Results: <a href="{{$user->ssceresults}}" target="_blank">View</a> </p>
                                    <p>State: {{$user->state}} </p>
                                    <p>LGA: {{$user->lga}} </p>
                                    <p>Program: {{$user->program}} </p>
                                </div>
                    
                                <div class="modal-footer">
                                    <form action="{{route('admin.approve', $user->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success">
                                            Approve
                                        </button>
                                    </form>
                                    <form action="{{route('admin.decline', $user->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Reject
                                        </button>
                                    </form>
                                    <form action="{{route('admin.onhold', $user->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">
                                            On Hold
                                        </button>
                                    </form>
                                    
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                    
            </tr>
            @endforeach
            
            
        </tbody>
    </table>
</div>
@endsection