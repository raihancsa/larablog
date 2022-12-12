@extends('admin.admin_master')
@section('admin')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-4">
            <div class="card author-box">
              <div class="card-body">
                <div class="author-box-center">
                  
                  <img alt="image" src="{{ (!empty($adminData->image))? url('upload/admin/'.$adminData->image):url('upload/no_image.jpg') }}" class="rounded-circle author-box-picture">
                  <div class="clearfix"></div>
                </div>

              <div class="card-body">
                <div class="py-4">
                  <p class="clearfix">
                    <span class="float-left">
                      Name
                    </span>
                    <span class="float-right text-muted">
                      {{ $adminData->name }}
                    </span>
                  </p>
                  <p class="clearfix">
                    <span class="float-left">
                      Mail
                    </span>
                    <span class="float-right text-muted">
                      {{ $adminData->email }}
                    </span>
                  </p>

                </div>
              </div>

              </div>
            </div>

          </div>
          <div class="col-12 col-md-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
            
              
              

                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-2">
                        
                        <thead>
                          <tr>
                            <th class="text-center pt-3">
                              <div class="custom-checkbox custom-checkbox-table custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                  class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center pt-2">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>

                            <td>
                              <img alt="image" src="{{ (!empty($adminData->image))? url('upload/admin/'.$adminData->image):url('upload/no_image.jpg') }}" width="45">
                            </td>
                            <td>{{ $adminData->name }}</td>
                            <td>{{ $adminData->email }}</td>
                            <td><a href="{{ route('edit.profile') }}" class="btn btn-primary">Edit</a></td>
                          </tr>


                        </tbody>
                        
                      </table>
                    </div>
                  </div>
               
              
           
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

    </section>


  </div>
@endsection