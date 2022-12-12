@extends('admin.admin_master')
@section('admin')

  <div class="main-content">
  	<section class="section">
  		<div class="section-body">
  			<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Change Password</h4>
                  </div>

                  @if(count($errors))
                  	@foreach ($errors->all() as $error)
                  	<div class="alert alert-danger alert-dismissible fade show"> {{ $error }}</div>
                  	@endforeach
                  @endif
                  <form method="POST" action="{{ route('update.password') }}">
                  @csrf
	                  <div class="card-body">
	                    
	                    <div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Current Password</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-key"></i>
	                            </div>
	                          </div>
	                          <input type="password" class="form-control" name="oldpassword" id="oldpassword">
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">New Password *</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-lock"></i>
	                            </div>
	                          </div>
	                          <input type="password" class="form-control" name="newpassword" id="newpassword">
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Confirm Password *</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-lock"></i>
	                            </div>
	                          </div>
	                          <input type="password" class="form-control" name="confirm_password" id="confirm_password">
	                        </div>
                    	</div>

	                    <div class="form-group row mb-4">
	                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
	                      <div class="col-sm-12 col-md-7">
	                        <button type="submit" class="btn btn-primary">Update</button>
	                      </div>
	                    </div>
	                  </div>
              	  </form>
                </div>
              </div>
            </div>
  		</div>
  	</section>
  </div>

@endsection