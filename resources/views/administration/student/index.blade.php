@extends('layouts.backend.app')

@section('title', 'All Students')

@push('css')
	<link href="{{asset('assets/backend/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
		type="text/css" />
@endpush



@section('content')
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">List
											View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">Grid
											View</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<header>All Students List</header>
														<div class="tools">
															<a class="fa fa-repeat btn-color box-refresh"
																href="javascript:;"></a>
															<a class="t-collapse btn-color fa fa-chevron-down"
																href="javascript:;"></a>
															<a class="t-close btn-color fa fa-times"
																href="javascript:;"></a>
														</div>
													</div>
													<div class="card-body ">
														<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="{{ route('oim.student.create') }}" id="addRow"
																		class="btn btn-info">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																	<a href="#" id="addRow"
																		class="btn btn-success">
																		Import CSV <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group pull-right">
																	<a class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
																		data-toggle="dropdown">Tools
																		<i class="fa fa-angle-down"></i>
																	</a>
																	<ul class="dropdown-menu pull-right">
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-print"></i> Print </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-pdf-o"></i> Save as
																				PDF </a>
																		</li>
																		<li>
																			<a href="javascript:;">
																				<i class="fa fa-file-excel-o"></i>
																				Export to Excel </a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="table-scrollable">
															<table
																class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
																id="example4">
																<thead>
																	<tr>
																		<th>
																		 <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2[]"> #
																		</th>
																		<th> Student ID </th>
																		<th> Name </th>
																		<th> Department </th>
																		<th> Batch </th>
																		<th> Email </th>
																		<th> Mobile </th>
																		<th> Action </th>
																	</tr>
																</thead>
																<tbody>
																	@foreach ($students as $key => $student)	
																	<tr class="odd gradeX">
																		<td class="patient-img">
																			<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2{{$key+1}}">
                              												<label for="checkbox-2{{$key+1}}" class="custom-control-label">{{ $key+1 }}</label>
																		</td>
																		<td class="left">{!! $student->official_id !!}</td>
																		<td>{!! $student->name !!}</td>
																		<td class="left">{!! $student->department->department_initial !!}</td>
																		<td>{!! $student->batch->batch !!}</td>
																		<td><a href="mail:{{$student->email}}">
																				{!! $student->email !!} </a></td>
																		<td class="left"><a href="tel:{{$student->contact}}">{!! $student->contact !!}</a></td>
																		<td>
																			<a href="{{ route('oim.student.show',$student->id) }}"
																				class="btn btn-success btn-xs">
																				<i class="fa fa-eye"></i>
																			</a>
																			<a href="{{ route('oim.student.edit',$student->id) }}"
																				class="btn btn-primary btn-xs">
																				<i class="fa fa-pencil"></i>
																			</a>
																			<button disabled="true" class="btn btn-danger btn-xs" onclick="deleteStudent({{ $student->id }})">
																				<i class="fa fa-trash-o "></i>
																			</button>
																			<form id="delete-form-{{ $student->id }}" action="{{ route('oim.student.destroy',$student->id) }}" method="POST" style="display: none;">
											                                        @csrf
											                                        @method('DELETE')
											                                </form>
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
									</div>
									<div class="tab-pane" id="tab2">
										
											<div class="col-md-4">
												@foreach ($students as $student)
													
												
												<div class="card card-box">
													<div class="card-body no-padding ">
														<div class="doctor-profile">
															<img src="{{asset('assets/backend/img/std/std10.jpg')}}" class="doctor-pic"
																alt="">
															<div class="profile-usertitle">
																<div class="doctor-name">Pooja Patel </div>
																<div class="name-center"> Science </div>
															</div>
															<p>A-103, shyam gokul flats, Mahatma Road <br />Mumbai</p>
															<div>
																<p><i class="fa fa-phone"></i><a
																		href="tel:(123)456-7890"> (123)456-7890</a></p>
															</div>
															<div class="profile-userbuttons">
																<a href="professor_profile.html"
																	class="btn btn-circle deepPink-bgcolor btn-sm">Read
																	More</a>
															</div>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection

@push('js')
	<!-- data tables -->
	<script src="{{asset('assets/backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/pages/table/table_data.js')}}"></script>
	<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function deleteStudent(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endpush
