@extends('admin.admin_master')
@section('admin')
  <div class="main-content">
    <section class="section">
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-12">
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
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>Short Details</th>
                            <th>Long Details</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <tr>
                            <td class="text-center pt-2" width="10%">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                  id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>

                            <td>
                              <img alt="image" src="{{ (!empty($aboutData->image))? url('upload/about/'.$aboutData->image):url('upload/no_image.jpg') }}" width="45">
                            </td>
                            <td>{{ substr($aboutData->title,0,30) }}</td>
                            <td>{{ substr($aboutData->short_title,0,30) }}</td>
                            <td>{{ substr($aboutData->short_details,0,30) }}</td>
                            <td width="30%">{{ substr($aboutData->long_details,0,30) }}</td>
                            <td width="10%">
                              <a href="{{ route('edit.about') }}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
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