<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Basic Information')}}</h5>
    </div>
    <div class="card-body">

        <form action="{{ route('member.basic_info_update', $member->id) }}" method="POST">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate(' First Name')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="first_name" value="{{ $member->first_name }}" class="form-control" placeholder="{{translate('First Name')}}" required>
                    @error('first_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Last Name')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="last_name" value="{{ $member->last_name }}" class="form-control" placeholder="{{translate('Last Name')}}" required>
                    @error('last_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate(' Gender')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="gender" required>
                        <option value="1" @if($member->member->gender ==  1) selected @endif >{{translate('Male')}}</option>
                        <option value="2" @if($member->member->gender ==  2) selected @endif >{{translate('Female')}}</option>
                        @error('gender')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate(' Date Of Birth')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="aiz-date-range form-control" name="date_of_birth"  value="@if(!empty($member->member->birthday)) {{date('d-m-Y', strtotime($member->member->birthday))}} @endif" placeholder="Select Date" data-single="true" data-show-dropdown="true">
                    @error('date_of_birth')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Phone Number')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="phone" value="{{ $member->phone }}" class="form-control" placeholder="{{translate('Phone')}}" required>
                    @error('phone')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('On Behalf')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="on_behalf" data-live-search="true" required>
                        @foreach ($on_behalves as $on_behalf)
                            <option value="{{$on_behalf->id}}" @if($member->member->on_behalves_id == $on_behalf->id) selected @endif>{{$on_behalf->name}}</option>
                        @endforeach
                    </select>
                    @error('on_behalf')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="first_name" >{{translate(' Marital Status')}}
                        <span class="text-danger">*</span>
                    </label>
                    <select class="form-control aiz-selectpicker" name="marital_status" data-live-search="true" required>
                        @foreach ($marital_statuses as $marital_status)
                            <option value="{{$marital_status->id}}" @if($member->member->marital_status_id == $marital_status->id) selected @endif>{{$marital_status->name}}</option>
                        @endforeach
                    </select>
                    @error('marital_status')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="first_name" >{{translate('Number Of Children')}}
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" name="children" value="{{ $member->member->children }}" class="form-control" placeholder="{{translate('Number Of Children')}}" >
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="photo" >{{translate(' Profile Photo')}} <small>(800x800)</small>
                        @if(auth()->user()->photo != null && auth()->user()->photo_approved == 0)
                        <small class="text-danger">({{ translate('Pending for Admin Approval.') }})</small>
                        @elseif(auth()->user()->photo != null && auth()->user()->photo_approved == 1)
                            <small class="text-danger">({{ translate('Approved.') }})</small>
                        @endif</label>
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
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
        <div class="card-header">
            <h5 class="mb-0 h6"><img src="{{ static_asset('assets/img/v2.png') }}"
                                    class="size-30px rounded-circle img-fit mr-2">{{ translate(' Verify Your Profile To Get Desire Match.')}}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('happy-story.store') }}" method="POST">
          @csrf
            <div class="form-group ">
    					<label class="from-label">{{translate('Select ID Proof')}}</label>
  						<select class="form-control aiz-selectpicker" name="video_provider" id="video_provider">
  						    <option value="">{{translate('Select One')}}</option>
  							<option value="Aadhar Card">{{translate('Aadhar Card')}}</option>
  							<option value="PAN Card">{{translate('PAN Card')}}</option>
  							<option value="Passport">{{translate('Passport')}}</option>
  							<option value="Driving License">{{translate('Driving License')}}</option>
  							<option value="Voter ID">{{translate('Voter ID')}}</option>
  							<option value="Other">{{translate('Other')}}</option>
  						</select>
  		    </div>
          <div class="form-group ">
              <label class="form-label" for="name">{{translate('Enter Name As per on Id')}} <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="title"  placeholder="{{translate('Title')}}" required>
              @error('title')
                  <small class="form-text text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <input type="hidden"  name="details" value="0"  class="form-control">
              @error('details')
                  <small class="form-text text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label class="from-label" for="name">{{translate('Enter Id Number')}} <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="partner_name"  placeholder="{{translate(' Number')}}" required>
              @error('partner_name')
                  <small class="form-text text-danger">{{ $message }}</small>
              @enderror
          </div>
          <div class="form-group">
              <label class="form-label" for="signinSrEmail">{{translate(' Photo(Aadhar/PAN/Passport..)')}} <span class="text-danger">*</span></label>
              <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="true">
                  <div class="input-group-prepend">
                      <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                  </div>
                  <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                  <input type="hidden" name="photos" class="selected-files" required>
              </div>
              <div class="file-preview box sm">
              </div>
              @error('photos')
                  <small class="form-text text-danger">{{ $message }}</small>
              @enderror
            <small class="text-muted text-primary">{{translate("After Submiting All The Details Goes under Screening for admin approval.")}}</small>
          </div>
          
 
          <div class="form-group mb-0 text-right">
              <button type="submit" class="btn btn-primary">{{translate('Save')}}</button>
          </div>
        </form>
        </div>
    </div>


