@extends('frontend.layouts.member_panel')
@section('panel_content')
<div class="col-lg-6  mx-auto">
      <div class="card">
          <div class="card-header">
              <h5 class="mb-0 h6">{{translate('Profile')}}</h5>
          </div>
          <div class="card-body">
              <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                  <input name="_method" type="hidden" value="PATCH">
                  @csrf
                  <div class="form-group row">
                      <label class="col-md-3 col-form-label" for="signinSrEmail">{{translate('Image')}} <small>(90x90)</small></label>
                      <div class="col-md-9">
                          <div class="input-group" data-toggle="aizuploader" data-type="image">
                              <div class="input-group-prepend">
                                  <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                              </div>
                              <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                              <input type="hidden" name="photo" class="selected-files" value="{{ $member->photo }}">
                          </div>
                          <div class="file-preview box sm">
                          </div>
                      </div>
                  </div>
                  <div class="form-group mb-0 text-right">
                      <button type="submit" class="btn btn-primary">{{translate('Save')}}</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection