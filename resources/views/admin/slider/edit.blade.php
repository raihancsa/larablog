@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <div class="main-content">
  	<section class="section">
  		<div class="section-body">
  			<div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Profile</h4>
                  </div>
                  <form method="POST" action="{{ route('update.slider') }}" enctype="multipart/form-data" >
                  @csrf
	                  <div class="card-body">
	                    
	                    <div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-book"></i>
	                            </div>
	                          </div>
	                          <input type="text" class="form-control" name="title" value="{{ $edit->title }}">
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Short Title</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-clipboard-list"></i>
	                            </div>
	                          </div>
	                          <textarea class="form-control" name="short_title">{{ $edit->short_title }}</textarea>
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Video URL</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-link"></i>
	                            </div>
	                          </div>
	                          <input type="url" class="form-control" name="video_url" value="{{ $edit->video_url }}">
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Photo</label>
	                        <div class="input-group col-sm-12 col-md-7">
	                          <div class="input-group-prepend">
	                            <div class="input-group-text">
	                              <i class="fas fa-image"></i>
	                            </div>
	                          </div>
	                          <input name="image" type="file" class="form-control" id="image">
	                        </div>
                    	</div>

                    	<div class="form-group row mb-4">
                        	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"> </label>
	                          <img id="showImage" alt="image" src="{{ (!empty($edit->image))? url('upload/slider/'.$edit->image):url('upload/no_image.jpg') }}" class="rounded-circle" height="70px;" width="70px;">
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

  <script type="text/javascript">
  	
  	$(document).ready(function() {
  		$('#image').change(function(e) {
  			var reader = new FileReader();
  			reader.onload = function(e){
  				$('#showImage').attr('src',e.target.result);
  			}
  			reader.readAsDataURL(e.target.files['0']);
  		});
  	});

  </script>

@endsection