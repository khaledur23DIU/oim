@extends('layouts.backend.app')

@section('title', 'Edit Batch')

@push('css')
	<link rel="stylesheet" href="{{asset('assets/backend/plugins/flatpicker/css/flatpickr.min.css')}}" />
	<link href="{{asset('assets/backend/css/pages/formlayout.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/plugins/select2/css/select2.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/backend/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endpush



@section('content')
			
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card card-box">
								<div class="card-head">
									
									<header>Basic Information</header>
									<button id="panel-button"
										class="mdl-button mdl-js-button mdl-button--icon pull-right"
										data-upgraded=",MaterialButton">
										<i class="material-icons">more_vert</i>
									</button>
									<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
										data-mdl-for="panel-button">
										<li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">print</i>Another action
										</li>
										<li class="mdl-menu__item"><i class="material-icons">favorite</i>Import CSV</li>
									</ul>
								</div>
								<div class="card-body" id="bar-parent">
									<form action="{{ route('oim.batch.update',$batch->id) }}" method="POST" id="form_sample_1" class="form-horizontal">
										@csrf
										@method('PUT')
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3" for="department">Department
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input disabled="true" type="text" name="department" id="department" required placeholder="Department"
														class="form-control input-height @error('department') is-invalid @enderror" value="{{ $department->department_initial }}" required autocomplete="department" autofocus />

														@error('department')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
								                        @enderror
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3" for="batch">Batch
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                                                	<input type="text" name="batch" id="batch" required placeholder="eg. 23" data-mask="99" class="form-control @error('batch') is-invalid @enderror" value="{{ $batch->batch }}" required autocomplete="batch" autofocus>

														@error('batch')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
							                            @enderror
                                            	</div>
											</div>
											
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="button" class="btn btn-info m-r-20" onclick="updateBatch({{ $batch->id }})">Submit</button>
														<a href=""class="btn btn-default">Cancel</a>
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>	
					

@endsection

@push('js')
	<script src="{{asset('assets/backend/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/jquery-validation/js/additional-methods.min.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/flatpicker/js/flatpicker.min.js')}}"></script>
	<script src="{{asset('assets/backend/js/pages/date-time/date-time.init.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/select2/js/select2.js')}}"></script>
	<script src="{{asset('assets/backend/js/pages/select2/select2-init.js')}}"></script>
	<script src="{{asset('assets/backend/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
	<script src="https://unpkg.com/sweetalert2@7.19.1/dist/sweetalert2.all.js"></script>
    <script type="text/javascript">
        function updateBatch(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('form_sample_1').submit();
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