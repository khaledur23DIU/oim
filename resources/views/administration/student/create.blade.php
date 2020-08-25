@extends('layouts.backend.app')

@section('title', 'Add Student')

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
									<form action="{{ route('oim.student.store') }}" method="POST" id="form_sample_1" class="form-horizontal">
										@csrf
										<div class="form-body">
											<div class="form-group row">
												<label class="control-label col-md-3" for="name">Student Name
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<input type="text" name="name" id="name" required placeholder="Enter Student Name"
														class="form-control input-height @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus />

														@error('name')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
								                        @enderror
												</div>
											</div>
											
											<div class="form-group row">
												<label class="control-label col-md-3" for="official_id">Student ID
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
                                                	<input type="text" name="official_id" id="official_id" required placeholder="172-35-2000" data-mask="999-99-9999" class="form-control @error('official_id') is-invalid @enderror" value="{{ old('official_id') }}" required autocomplete="official_id" autofocus>

														@error('official_id')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
							                            @enderror
                                            	</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3" for="email">Student Email
												</label>
												<div class="col-md-5">
													<div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-envelope"></i>
														</span>
														<input type="email" class="form-control input-height @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus
															name="email" id="email" placeholder="Email Address"> 

															@error('email')
								                                    <span class="invalid-feedback" role="alert">
								                                        <strong>{{ $message }}</strong>
								                                    </span>
								                            @enderror
														</div>
												</div>
											</div>

											<div class="form-group row">
												<label class="control-label col-md-3">Department
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height select2 @error('department_id') is-invalid @enderror" value="{{ old('department_id') }}" required autocomplete="department_id" autofocus name="department_id" id="department_id">
														<option value="">Select...</option>
														@foreach ($departments as $department)	
														<option value="{{$department->id}}"> {{$department->department_initial}} </option>
														@endforeach
													</select>

														@error('department_id')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
							                            @enderror
												</div>
											</div>
											<div class="form-group row">
												<label class="control-label col-md-3" for="batch_id">Batch
													<span class="required"> * </span>
												</label>
												<div class="col-md-5">
													<select class="form-control input-height select2 @error('batch_id') is-invalid @enderror" value="{{ old('batch_id') }}" required autocomplete="batch_id" autofocus name="batch_id" id="batch_id">
														<option value="">Select...</option>
														@foreach ($departments as $key=>$department)
														@foreach ($department->batches as $batch)
															@if ($department->department_code == '35')
														<option value="{{$batch->id}}">{{$batch->batch}}</option>
															@endif
														@endforeach
														@endforeach
													</select>

														@error('batch_id')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
							                            @enderror
												</div>
											</div>
											
											<div class="form-group row">
                                            	<label class="control-label col-md-3" for="contact">Student Contact
                                            		<span class="required"> * </span></label>
                                            <div class="col-md-5">
                                                <input type="text" name="contact" id="contact" required placeholder="(+880)199-9999999" data-mask="(+880)199-9999999" class="form-control @error('contact') is-invalid @enderror" value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                                	@error('contact')
						                                    <span class="invalid-feedback" role="alert">
						                                        <strong>{{ $message }}</strong>
						                                    </span>
						                            @enderror
                                            </div>
                                        	</div>
                                        	
                                         	<div class="form-group row">
													<div class="offset-md-3 col-md-9 checkbox checkbox-black">
														<input id="checkboxbg1" type="checkbox" name="checkAttachAdviser" id="checkAttachAdviser">
		                                                <label for="checkboxbg1" class="col-md-5">
		                                                    Want to attach Adviser
		                                                </label>
													</div>
											</div>

											<div class="form-group row" id="attachAdviser" style="display: none;">
	                                            <label class="col-lg-3 col-md-4 control-label for" for="adviser">Attach Adviser
	                                            </label>
	                                            <div class="col-md-5">
	                                                <select class="form-control select2 @error('adviser') is-invalid @enderror" value="{{ old('adviser') }}" autocomplete="adviser" autofocus name="adviser" id="adviser">
	                                                    <option value="">Select...</option>
	                                                    @foreach ($departments as $key=>$department)
	                                                    	@foreach ($department->faculties as $key=>$faculty)
	                                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
	                                                        @endforeach   
	                                                    @endforeach
	                                                </select>

	                                                	@error('adviser')
							                                    <span class="invalid-feedback" role="alert">
							                                        <strong>{{ $message }}</strong>
							                                    </span>
							                            @enderror
	                                            </div>
                                        	</div>
											<div class="form-actions">
												<div class="row">
													<div class="offset-md-3 col-md-9">
														<button type="submit" class="btn btn-info m-r-20">Submit</button>
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
	<script>
		$(function () {
        $("#checkboxbg1").click(function () {
            if ($(this).is(":checked")) {
                $("#attachAdviser").show();
                
            } else {
                $("#attachAdviser").hide();
                
            }
        });
    });
		// $('#checkedForAdviser').change(function() {
  //   	$('#attatchAdviser').toggle();
		// });

		// $('#status').change(function() {
		//   $('#schedule').hide();
		//   if ($(this).val() == '-1') {
		//     $('#schedule').show();
		//   }

  // 		console.log($('option').val() + ' ---- ' + $(this).val());
		// });
	</script>
@endpush