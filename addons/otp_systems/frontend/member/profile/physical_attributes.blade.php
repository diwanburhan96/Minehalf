<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Physical Attributes')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('physical-attribute.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          <div class="form-group row">
                <div class="col-md-6">
                  <label for="height">{{translate('Height')}} ({{ translate('In Feeet') }})</label>
                  @php $user_height = !empty($member->physical_attributes->height) ? $member->physical_attributes->height : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="height"  required>
                        <option value="4.0" @if($user_height ==  '4.0') selected @endif >{{translate('4.0"(1.22mts)')}}</option>
                        <option value="4.1" @if($user_height ==  '4.1') selected @endif >{{translate('4.1"(1.24mts)')}}</option>
                        <option value="4.2" @if($user_height ==  '4.2') selected @endif >{{translate('4.2"(1.28mts)')}}</option>
                        <option value="4.3" @if($user_height ==  '4.3') selected @endif >{{translate('4.3"(1.31mts)')}}</option>
                        <option value="4.4" @if($user_height ==  '4.4') selected @endif >{{translate('4.4"(1.34mts)')}}</option>
                        <option value="4.5" @if($user_height ==  '4.5') selected @endif >{{translate('4.5"(1.35mts)')}}</option>
                        <option value="4.6" @if($user_height ==  '4.6') selected @endif >{{translate('4.6"(1.37mts)')}}</option>
                        <option value="4.7" @if($user_height ==  '4.7') selected @endif >{{translate('4.7"(1.40mts)')}}</option>
                        <option value="4.8" @if($user_height ==  '4.8') selected @endif >{{translate('4.8"(1.42mts)')}}</option>
                        <option value="4.9" @if($user_height ==  '4.9') selected @endif >{{translate('4.9"(1.45mts)')}}</option>
                        <option value="4.10" @if($user_height ==  '4.10') selected @endif >{{translate('4.10"(1.47mts)')}}</option>   
                        <option value="4.11" @if($user_height ==  '4.11') selected @endif >{{translate('4.11"(1.50mts)')}}</option>
                        <option value="5.0" @if($user_height ==  '5.0') selected @endif >{{translate('5.0"(1.52mts)')}}</option>
                        <option value="5.1" @if($user_height ==  '5.1') selected @endif >{{translate('5.1"(1.55mts)')}}</option>
                        <option value="5.2" @if($user_height ==  '5.2') selected @endif >{{translate('5.2"(1.58mts)')}}</option>
                        <option value="5.3" @if($user_height ==  '5.3') selected @endif >{{translate('5.3"(1.60mts)')}}</option>
                        <option value="5.4" @if($user_height ==  '5.4') selected @endif >{{translate('5.4"(1.63mts)')}}</option>
                        <option value="5.5" @if($user_height ==  '5.5') selected @endif >{{translate('5.5"(1.65mts)')}}</option>
                        <option value="5.6" @if($user_height ==  '5.6') selected @endif >{{translate('5.6"(1.68mts)')}}</option>
                        <option value="5.7" @if($user_height ==  '5.7') selected @endif >{{translate('5.7"(1.70mts)')}}</option>
                        <option value="5.8" @if($user_height ==  '5.8') selected @endif >{{translate('5.8"(1.73mts)')}}</option>
                        <option value="5.9" @if($user_height ==  '5.9') selected @endif >{{translate('5.9"(1.75mts)')}}</option>
                        <option value="5.10" @if($user_height ==  '5.10') selected @endif >{{translate('5.10"(1.78mts)')}}</option>   
                        <option value="5.11" @if($user_height ==  '5.11') selected @endif >{{translate('5.11"(1.80mts)')}}</option>
                        <option value="6.0" @if($user_height ==  '6.0') selected @endif >{{translate('6.0"(1.83mts)')}}</option>
                        <option value="6.1" @if($user_height ==  '6.1') selected @endif >{{translate('6.1"(1.85mts)')}}</option>
                        <option value="6.2" @if($user_height ==  '6.2') selected @endif >{{translate('6.2"(1.88mts)')}}</option>
                        <option value="6.3" @if($user_height ==  '6.3') selected @endif >{{translate('6.3"(1.91mts)')}}</option>
                        <option value="6.4" @if($user_height ==  '6.4') selected @endif >{{translate('6.4"(1.93mts)')}}</option>
                        <option value="6.5" @if($user_height ==  '6.5') selected @endif >{{translate('6.5"(1.96mts)')}}</option>
                        <option value="6.6" @if($user_height ==  '6.6') selected @endif >{{translate('6.6"(1.96mts)')}}</option>
                        <option value="6.7" @if($user_height ==  '6.7') selected @endif >{{translate('6.7"(2.01mts)')}}</option>
                        <option value="6.8" @if($user_height ==  '6.8') selected @endif >{{translate('6.8"(2.03mts)')}}</option>
                        <option value="6.9" @if($user_height ==  '6.9') selected @endif >{{translate('6.9"(2.06mts)')}}</option>
                        <option value="6.10" @if($user_height ==  '6.10') selected @endif >{{translate('6.10"(2.08mts)')}}</option>   
                        <option value="6.11" @if($user_height ==  '6.11') selected @endif >{{translate('6.11"(2.11mts)')}}</option>
                        <option value="7.0" @if($user_height ==  '7.0') selected @endif >{{translate('7"(2.13mts)plus')}}</option>       
                        @error('height')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
              <div class="col-md-6">
                  <label for="weight">{{translate('Weight')}} ({{ translate('In Kg')}})</label>
                  @php $user_weight = !empty($member->physical_attributes->weight) ? $member->physical_attributes->weight : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="weight" required>
                        <option value="35" @if($user_weight == '35') selected @endif >{{translate('35kg-40kg')}}</option>
                        <option value="40" @if($user_weight == '40') selected @endif >{{translate('40kg-45kg')}}</option>
                        <option value="45" @if($user_weight == '45') selected @endif >{{translate('45kg-50kg')}}</option>
                        <option value="50" @if($user_weight == '50') selected @endif >{{translate('50kg-55kg')}}</option>
                        <option value="55" @if($user_weight == '55') selected @endif >{{translate('55kg-60kg')}}</option>
                        <option value="60" @if($user_weight == '60') selected @endif >{{translate('60kg-65kg')}}</option>
                        <option value="65" @if($user_weight == '65') selected @endif >{{translate('65kg-70kg')}}</option>
                        <option value="70" @if($user_weight == '70') selected @endif >{{translate('70kg-75kg')}}</option>
                        <option value="75" @if($user_weight == '75') selected @endif >{{translate('75kg-80kg')}}</option>
                        <option value="80" @if($user_weight == '80') selected @endif >{{translate('80kg-85kg')}}</option>
                        <option value="85" @if($user_weight == '85') selected @endif >{{translate('85kg-90kg')}}</option>   
                        <option value="90" @if($user_weight == '90') selected @endif >{{translate('90kg-95kg')}}</option>
                        <option value="95" @if($user_weight == '35') selected @endif >{{translate('90kg-95kg')}}</option>
                        <option value="100" @if($user_weight == '100') selected @endif >{{translate('100kg')}}</option>
                        <option value="110" @if($user_weight == '110') selected @endif >{{translate('100-110')}}</option>
                        <option value="120" @if($user_weight == '120') selected @endif >{{translate('110-120')}}</option>
                        <option value="130" @if($user_weight == '130') selected @endif >{{translate('120-130')}}</option>
                    </select>
                 
                  @error('weight')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6">
                  <label for="eye_color">{{translate('Eye color')}}</label>
                  @php $user_eye_color = !empty($member->physical_attributes->eye_color) ? $member->physical_attributes->eye_color : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="eye_color" required>
                        <option value="Amber" @if($user_eye_color ==  'Amber') selected @endif >{{translate('Amber')}}</option>
                        <option value="Black" @if($user_eye_color == 'Black') selected @endif >{{translate('Black')}}</option>
                        <option value="Blue" @if($user_eye_color == 'Blue') selected @endif >{{translate('Blue')}}</option>
                        <option value="Brown" @if($user_eye_color == 'Brown') selected @endif >{{translate('Brown')}}</option>
                        <option value="Grey" @if($user_eye_color == 'Grey') selected @endif >{{translate('Grey')}}</option>
                        <option value="Green" @if($user_eye_color == 'Green') selected @endif >{{translate('Green')}}</option>
                        <option value="Hazel" @if($user_eye_color == 'Hazel') selected @endif >{{translate('Hazel')}}</option>
                        <option value="Red" @if($user_eye_color == 'Red') selected @endif >{{translate('Red')}}</option>
                        <option value="Other" @if($user_eye_color == 'Other') selected @endif >{{translate('Other')}}</option>

                    @error('eye_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                  </select>
              </div>
              <div class="col-md-6">
                  <label for="hair_color">{{translate('Hair Color')}}</label>
                  @php $user_hair_color = !empty($member->physical_attributes->hair_color) ? $member->physical_attributes->hair_color : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="hair_color" required>
                        <option value="Black" @if($user_hair_color ==  'Black') selected @endif >{{translate('Black')}}</option>
                        <option value="Darkest Black" @if($user_hair_color == 'Darkest Black') selected @endif >{{translate('Darkest Black')}}</option>
                        <option value="Brown/Black" @if($user_hair_color == 'Brown/Black') selected @endif >{{translate('Brown/Black')}}</option>
                        <option value="Dark Brown" @if($user_hair_color == 'Dark Brown') selected @endif >{{translate('Dark Brown')}}</option>
                        <option value="Light Brown" @if($user_hair_color == 'Light Brown') selected @endif >{{translate('Light Brown')}}</option>
                        <option value="Dark blond" @if($user_hair_color == 'Dark blond') selected @endif >{{translate('Dark blond')}}</option>
                        <option value="Medium Blond" @if($user_hair_color == 'Medium Blond') selected @endif >{{translate('Medium Blond')}}</option>
                        <option value="Light Blond" @if($user_hair_color == 'Light Blond') selected @endif >{{translate('Light Blond')}}</option>
                        <option value="Other" @if($user_hair_color == 'Other') selected @endif >{{translate('Other')}}</option>

                    @error('hair_color')
                      <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                  </select>
     
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6">
                  <label for="complexion" >{{translate('Complexion')}}</label>                     
                
                  @php $user_complexion = !empty($member->physical_attributes->complexion) ? $member->physical_attributes->complexion : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="complexion" required>
                        <option value="Fair Skin" @if($user_complexion ==  'Fair Skin') selected @endif >{{translate('Fair Skin')}}</option>
                        <option value="Extremely fair skin" @if($user_complexion == 'Extremely fair skin') selected @endif >{{translate('Extremely fair skin')}}</option>
                        <option value="Medium skin" @if($user_complexion == 'Medium skin') selected @endif >{{translate('Medium skin')}}</option>
                        <option value="Olive skin" @if($user_complexion == 'Olive skin') selected @endif >{{translate('Olive skin')}}</option>
                        <option value="Brown skin" @if($user_complexion == 'Brown skin') selected @endif >{{translate('Brown skin')}}</option>
                        <option value="Black skin" @if($user_complexion == 'Black skin') selected @endif >{{translate('Black skin')}}</option>
                        <option value="Dark Brown" @if($user_complexion == 'Dark Brown') selected @endif >{{translate('Dark Brown')}}</option>
                        <option value="White skin" @if($user_complexion == 'White skin') selected @endif >{{translate('White skin')}}</option>
                        <option value="Medium white to light brown" @if($user_complexion == 'Medium white to light brown') selected @endif >{{translate('Medium white to light brown')}}</option>
                        <option value="Other" @if($user_complexion == 'Other') selected @endif >{{translate('Other')}}</option>

                    @error('complexion') 
                      <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                  </select>
            </div>
                <div class="col-md-6">
                  <label for="blood_group">{{translate('Blood Group')}}</label>
                  @php $user_blood_group = !empty($member->physical_attributes->blood_group) ? $member->physical_attributes->blood_group : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="blood_group" required>
                        <option value="A+" @if($user_blood_group ==  'A+') selected @endif >{{translate(' A[pos]')}}</option>
                        <option value="A-" @if($user_blood_group == 'A-') selected @endif >{{translate(' A[neg]')}}</option>
                        <option value="B+" @if($user_blood_group == 'B+') selected @endif >{{translate(' B[pos]')}}</option>
                        <option value="B-" @if($user_blood_group == 'B-') selected @endif >{{translate(' B[neg]')}}</option>
                        <option value="O+" @if($user_blood_group == 'O+') selected @endif >{{translate(' O[pos]')}}</option>
                        <option value="O-" @if($user_blood_group == 'O-') selected @endif >{{translate(' O[neg]')}}</option>
                        <option value="AB+" @if($user_blood_group == 'AB+') selected @endif >{{translate(' AB[pos]')}}</option>
                        <option value="AB-" @if($user_blood_group == 'AB-') selected @endif >{{translate(' AB[neg]')}}</option>

                    @error('blood_group') 
                      <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                  </select>
                </div>
          </div>

          <div class="form-group row">
            <div class="col-md-6">
                <label for="body_type">{{translate('Body Type')}}</label>                  
                
                @php $user_body_type = !empty($member->physical_attributes->body_type) ? $member->physical_attributes->body_type : ""; @endphp
                <select class="form-control aiz-selectpicker" name="body_type" required>
                        <option value="Slim" @if($user_body_type ==  'Slim') selected @endif >{{translate('Slim')}}</option>
                        <option value="Tone" @if($user_body_type ==  'Tone') selected @endif >{{translate('Tone')}}</option>
                        <option value="Muscular" @if($user_body_type ==  'Muscular') selected @endif >{{translate('Muscular')}}</option>
                        <option value="Stocky" @if($user_body_type ==  'Stocky') selected @endif >{{translate('Stocky')}}</option>
                        <option value="Large" @if($user_body_type ==  'Large') selected @endif >{{translate('Large')}}</option>
                        <option value="Other" @if($user_body_type == 'other') selected @endif >{{translate('Other')}}</option>
                  @error('body_type')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
                </select>
            </div>
              <div class="col-md-6">
                  <label for="body_art">{{translate('Body Art')}}</label>
                  <div class="aiz-radio-list">
                        <label class="aiz-radio">
                            
                            <input type="radio" name="body_art" value="Yes" onchange="applyFilter()"> {{ translate('Yes') }}
                            <span class="aiz-rounded-check"></span>
                        </label>
                        <label class="aiz-radio">
                            <input type="radio" name="body_art" value="No" onchange="applyFilter()"> {{ translate('No') }}
                            <span class="aiz-rounded-check"></span>
                        </label>
                    </div>
                  @error('body_art')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="disability">{{translate('Disability')}}</label>
                  @php $user_disability = !empty($member->physical_attributes->disability) ? $member->physical_attributes->disability : ""; @endphp
                  <select class="form-control aiz-selectpicker" name="disability" required>
                        <option value="None" @if($user_disability ==  'None') selected @endif >{{translate('None')}}</option>
                        <option value="Vision" @if($user_disability == 'Vision') selected @endif >{{translate('Vision')}}</option>
                        <option value="Mobility" @if($user_disability == 'Mobility') selected @endif >{{translate('Mobility')}}</option>
                        <option value="Auditory" @if($user_disability == 'Auditory') selected @endif >{{translate('Auditory')}}</option>
                        <option value="Neurological" @if($user_disability == 'Neurological') selected @endif >{{translate('Neurological')}}</option>
                        <option value="Medical" @if($user_disability == 'Medical') selected @endif >{{translate('Medical')}}</option>
                        <option value="Psychological" @if($user_disability == 'Psychological') selected @endif >{{translate('Psychological')}}</option>

                    @error('disability') 
                      <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                  </select>
              </div>
          </div>

          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>