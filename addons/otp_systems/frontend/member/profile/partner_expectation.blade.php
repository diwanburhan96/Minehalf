<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Partner Expectation')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('partner_expectations.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="general">{{translate('About Desired Partner')}}</label>
                    <input type="text" name="general" value="{{ !empty($member->partner_expectations->general) ? $member->partner_expectations->general : "" }}"  class="form-control" placeholder="{{translate('What are you looking into a partner?')}}" required>
                </div>
                <div class="col-md-6">
                    <label for="residence_country_id">{{translate('Residence Country')}}</label>
                    @php $partner_residence_country = !empty($member->partner_expectations->residence_country_id) ? $member->partner_expectations->residence_country_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="residence_country_id" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_residence_country) selected @endif >{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('residence_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_height">{{translate('Min Height')}}  ({{ translate('In Feet') }})</label>
                    <input type="number" name="partner_height" value="{{ !empty($member->partner_expectations->height) ? $member->partner_expectations->height : "" }}" step="any"  placeholder="{{ translate('Height') }}" class="form-control" required>
                    @error('partner_height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_weight">{{translate('Max Weight')}}  ({{ translate('In Kg') }})</label>
                    <input type="number" name="partner_weight" value="{{ !empty($member->partner_expectations->weight) ? $member->partner_expectations->weight : "" }}" step="any" class="form-control" placeholder="{{translate('Weight')}}" required>
                    @error('partner_weight')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_marital_status">{{translate(' Marital Status')}}</label>
                    @php $partner_marital_status_id = !empty($member->partner_expectations->marital_status_id) ? $member->partner_expectations->marital_status_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_marital_status" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        @foreach ($marital_statuses as $marital_status)
                        <option value="{{$marital_status->id}}" @if($partner_marital_status_id == $marital_status->id) selected @endif>{{$marital_status->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_marital_status')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_children_acceptable">{{translate('Children Acceptable')}}</label>
                    @php $children_acceptable = !empty($member->partner_expectations->children_acceptable) ? $member->partner_expectations->children_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_children_acceptable" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($children_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($children_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($children_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_children_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_religion_id">{{translate('Religion')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_religion_id" id="partner_religion_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($religions as $religion)
                            <option value="{{$religion->id}}" @if($religion->id == $partner_religion_id) selected @endif> {{ $religion->name }} </option>
                        @endforeach
                    </select>
                    @error('partner_religion_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_caste_id">{{translate('Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_caste_id" id="partner_caste_id" data-live-search="true">

                    </select>
                    @error('partner_caste_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_sub_caste_id">{{translate('Sub Caste')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_sub_caste_id" id="partner_sub_caste_id" data-live-search="true">

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="language_id">{{translate('Language')}}</label>
                    @php $partner_language = !empty($member->partner_expectations->language_id) ? $member->partner_expectations->language_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="language_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" @if($language->id == $partner_language) selected @endif> {{ $language->name }} </option>
                        @endforeach
                    </select>
                    @error('language_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="pertner_education">{{translate('Education')}}</label>
                    
                    @php $pertner_education = !empty($member->partner_expectations->education) ? $member->partner_expectations->education : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="pertner_education" data-live-search="true" required>
                                <option value="">{{ translate('Choose One') }}</option>
								<option value="B.Arch" @if($pertner_education ==  'B.Arch') selected @endif >{{translate('B.Arch')}}</option>
								
								<option value="B.des"  @if($pertner_education ==  'B.des') selected @endif >{{translate('B.des')}}</option>
								<option value="B.E/B.Tech" @if($pertner_education ==  'B.E/B.Tech') selected @endif >{{translate('B.E/B.Tech')}}</option>
								<option value="B.Pharma" @if($pertner_education ==  'B.Pharma') selected @endif >{{translate('B.Pharma')}}</option>
								<option value="M.Arch" @if($pertner_education ==  'M.Arch') selected @endif >{{translate('M.Arch')}}</option>
								<option value="M.des" @if($pertner_education ==  'M.des') selected @endif >{{translate('M.des')}}</option>
								<option value="M.E/M.Tech" @if($pertner_education ==  'M.E/M.Tech') selected @endif >{{translate('M.E/M.Tech')}}</option>
								<option value="M.S (Engineering )" @if($pertner_education ==  'M.S (Engineering )') selected @endif >{{translate('M.S (Engineering ')}}</option>
								<option value="M.Pharma" @if($pertner_education ==  'M.Pharma') selected @endif >{{translate('M.Pharma')}}</option>
								<option value="B.IT" @if($pertner_education ==  'B.IT') selected @endif >{{translate('B.IT')}}</option>
								<option value="BCA" @if($pertner_education ==  'BCA') selected @endif >{{translate('BCA')}}</option>
								<option value="MCA/PGDCA" @if($pertner_education ==  'MCA/PGDCA') selected @endif >{{translate('MCA/PGDCA')}}</option>
								<option value="B.com" @if($pertner_education ==  'B.com') selected @endif >{{translate('B.com')}}</option>
								<option value="CA" @if($pertner_education ==  'CA') selected @endif >{{translate('CA')}}</option>
								<option value="CFA" @if($pertner_education ==  'CFA') selected @endif >{{translate('CFA')}}</option>
								<option value="CS" @if($pertner_education ==  'CS') selected @endif >{{translate('CS')}}</option>
								<option value="ICWA" @if($pertner_education ==  'ICWA') selected @endif >{{translate('ICWA')}}</option>
								<option value="M.Com" @if($pertner_education ==  'M.Com') selected @endif >{{translate('M.Com')}}</option>
								<option value="BBA" @if($pertner_education ==  'BBA') selected @endif >{{translate('BBA')}}</option>
								<option value="BHM" @if($pertner_education ==  'BHM') selected @endif >{{translate('BHM')}}</option>
								<option value="MBA/PGDM" @if($pertner_education ==  'MBA/PGDM') selected @endif >{{translate('MBA/PGDM')}}</option>
								<option value="BAMS" @if($pertner_education ==  'BAMS') selected @endif >{{translate('BAMS')}}</option>
								<option value="BDS" @if($pertner_education ==  'BDS') selected @endif >{{translate('BDS')}}</option>
								<option value="BHMS" @if($pertner_education ==  'BHMS') selected @endif >{{translate('BHMS')}}</option>
								<option value="BPT" @if($pertner_education ==  'BPT') selected @endif >{{translate('BPT')}}</option>
								<option value="BVSc." @if($pertner_education ==  'BVSc') selected @endif >{{translate('BVSc')}}</option>
								<option value="DM" @if($pertner_education ==  'DM') selected @endif >{{translate('DM')}}</option>
								<option value="M.D" @if($pertner_education ==  'M.D') selected @endif >{{translate('M.D')}}</option>
								<option value="M.S. (Medicine)" @if($pertner_education ==  'M.S. (Medicine)') selected @endif >{{translate('M.S. (Medicine)')}}</option>
								<option value="MBBS" @if($pertner_education ==  'MBBS') selected @endif >{{translate('MBBS')}}</option>
								<option value="MCh" @if($pertner_education ==  'MCh') selected @endif >{{translate('MCh')}}</option>
								<option value="MDS" @if($pertner_education ==  'MDS') selected @endif >{{translate('MDS')}}</option>
								<option value="MPT" @if($pertner_education ==  'MPT') selected @endif >{{translate('MPT')}}</option>
								<option value="MVSc" @if($pertner_education ==  'MVSc') selected @endif >{{translate('MVSc')}}</option>
								<option value="BL/LLB" @if($pertner_education ==  'BL/LLB') selected @endif >{{translate('BL/LLB')}}</option>
								<option value="ML/LLM" @if($pertner_education ==  'ML/LLM') selected @endif >{{translate('ML/LLM')}}</option>
								<option value="B.A" @if($pertner_education ==  'B.A') selected @endif >{{translate('B.A')}}</option>
								<option value="B.Ed" @if($pertner_education ==  'B.Ed') selected @endif >{{translate('B.Ed')}}</option>
								<option value="B.Sc" @if($pertner_education ==  'B.Sc') selected @endif >{{translate('B.Sc')}}</option>
								<option value="BFA" @if($pertner_education ==  'BFA') selected @endif >{{translate('BFA')}}</option>
								<option value="BJMC" @if($pertner_education ==  'BJMC') selected @endif >{{translate('BJMC')}}</option>
								<option value="M.A" @if($pertner_education ==  'M.A') selected @endif >{{translate('M.A')}}</option>
								<option value="M.Ed" @if($pertner_education ==  'M.Ed') selected @endif >{{translate('M.Ed')}}</option>
								<option value="M.Sc" @if($pertner_education ==  'M.Sc') selected @endif >{{translate('M.Sc')}}</option>
		
								<option value="MFA" @if($pertner_education ==  'MFA') selected @endif >{{translate('MFA')}}</option>
								<option value="MJMC" @if($pertner_education ==  'MJMC') selected @endif >{{translate('MJMC')}}</option>
								<option value="MSW" @if($pertner_education ==  'MSW') selected @endif >{{translate('MSW')}}</option>
								<option value="M.Phil" @if($pertner_education ==  'M.Phil') selected @endif >{{translate('M.Phil')}}</option>
								<option value="Ph.D" @if($pertner_education ==  'Ph.D') selected @endif >{{translate('Ph.D')}}</option>
								<option value="High School" @if($pertner_education ==  'High School') selected @endif >{{translate('High School')}}</option>
								<option value="Trade School" @if($pertner_education ==  'Trade School') selected @endif >{{translate('Trade School')}}</option>
								<option value="Diploma" @if($pertner_education ==  'Diploma') selected @endif >{{translate('Diploma')}}</option>
								<option value="Others" @if($pertner_education ==  'Others') selected @endif >{{translate('Others')}}</option>
			
						</select>					
                    
                    @error('pertner_education')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_profession">{{translate('Profession')}}</label>
    
                    <select class="form-control aiz-selectpicker" name="partner_profession" data-live-search="true" required>
                                <option value="">{{ translate('Choose One') }}</option>
								<option value="Admin Professional">Admin Professional</option>
								<option value="Clerk">Clerk</option>
								<option value="Operator/Technician">Operator/Technician</option>
								<option value="Secretary/Front Office">Secretary/Front Office</option>
								<option value="Actor/model">Actor/model</option>
								<option value="Advertising Professional">Advertising Professional</option>
								<option value="Film/Entertainment Professional">Film/Entertainment Professional</option>
								<option value="Journalist">Journalist</option>
								<option value="Media Professional">Media Professional</option>
								<option value="PR Professional">PR Professional</option>
								<option value="Agriculture Professional">Agriculture Professional</option>
								<option value="Farming">Farming</option>
								<option value="Airline Professional">Airline Professional</option>
								<option value="Flight Attendant">Flight Attendant</option>
								<option value="Pilot">Pilot</option>
								<option value="Architect">Architect</option>
								<option value="Accounting Professional">Accounting Professional</option>
								<option value="Auditor">Auditor</option>
								<option value="Banking Professional">Banking Professional</option>
								<option value="Chartered Accountant">Chartered Accountant</option>
								<option value="Finance Professional">Finance Professional</option>
								<option value="BPO/Ites Professional">BPO/Ites Professional</option>
								<option value="Customer service">Customer service</option>
								
								<option value="Analyst">Analyst</option>
								<option value="Consultant">Consultant</option>
								<option value="Corporate Communication">Corporate Communication</option>
								<option value="Corporate Planning">Corporate Planning</option>
								<option value="Marketing Professional">Marketing Professional</option>
								<option value="Operations Management">Operations Management</option>
								
								<option value="Product manager">Product manager</option>
								<option value="Program manager">Program manager</option>
								<option value="Project Manager -Non IT">Project Manager -Non IT</option>
								<option value="Sales Professional">Sales Professional</option>
								<option value="Sr. Manager / Manager">Sr. Manager / Manager</option>
								<option value="Subject Matter Expert">Subject Matter Expert</option>
								<option value="Dentist">Dentist</option>
								<option value="Doctor">Doctor</option>
								<option value="Surgeon">Surgeon</option>
								<option value="Education Professional">Education Professional</option>
								<option value="Education Institution Owner">Education Institution Owner</option>
								<option value="Librarian">Librarian</option>
								<option value="Professor/Lecturer">Professor/Lecturer</option>
								<option value="Research Assistant">Research Assistant</option>
								<option value="Teacher">Teacher</option>
								<option value="Education Professional">Education Professional</option>
								<option value="Education Institution Owner">Education Institution Owner</option>
								<option value="Librarian">Librarian</option>
								<option value="Electronics Engineer">Electronics Engineer</option>
								<option value="Hardware / Telecom engineer">Hardware / Telecom engineer</option>
								<option value="Non - IT Engineer">Non - IT Engineer</option>
								<option value="Quality Assurance Engineer">Quality Assurance Engineer</option>
								<option value="Hotels/Hospitality Professional">Hotels/Hospitality Professional</option>
								<option value="Lawyer & Legal Professional">Lawyer & Legal Professional</option>
								<option value="Mearchant Neval Officer">Mearchant Neval Officer</option>
								<option value="Medial / Heathcare professional">Medial / Heathcare professional</option>
								<option value="Nurse">Nurse</option>
								<option value="Paramedic">Paramedic</option>
								<option value="Pharmacist">Pharmacist</option>
								<option value="Physotherapist">Physotherapist</option>
								<option value="Psychologist">Psychologist</option>
								<option value="Veterinary Doctor">Veterinary Doctor</option>
								<option value="Animator">Animator</option>
								<option value="Cyber/Network security">Cyber/Network security</option>
								<option value="Project Lead -IT">Project Lead -IT</option>
								<option value="Project Manager - IT">Project Manager - IT</option>
								<option value="Quality Assuarnace Engineer - IT">Quality Assuarnace Engineer - IT</option>
								<option value="Software Professional">Software Professional</option>
								<option value="UI/UX Designer">UI/UX Designer</option>
								<option value="Web/Graphic designer">Web/Graphic designer</option>
								<option value="Top Management">Top Management</option>
								<option value="CxO/ chairman/ President/ Director">CxO/ chairman/ President/ Director</option>
								<option value="VP/ AVP/ GM/ DGM">VP/ AVP/ GM/ DGM</option>
								<option value="Agent">Agent</option>
								<option value="Artist">Artist</option>
								<option value="Beautician">Beautician</option>
								<option value="Broker">Broker</option>
								<option value="Fashion Designer">Fashion Designer</option>
								<option value="Fitness Professional">Fitness Professional</option>
								<option value="Interior Designer">Interior Designer</option>
								<option value="Security Professional">Security Professional</option>
								<option value="Singer">Singer</option>
								<option value="Social Services/NGO?Volunteer">Social Services/NGO?Volunteer</option>
								<option value="Sports person">Sports person</option>
								<option value="Travel Professional">Travel Professional</option>
								<option value="Writer">Writer</option>
								<option value="Others">Others</option>
								
								
				</select>
                  
                  
                  
                  
                    @error('partner_profession')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoking_acceptable">{{translate('Smoking Acceptable')}}</label>
                    @php $partner_smoking_acceptable = !empty($member->partner_expectations->smoking_acceptable) ? $member->partner_expectations->smoking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="smoking_acceptable" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($partner_smoking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_smoking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_smoking_acceptable ==  'dose_not_matter') selected @endif >{{translate('Occasionally')}}</option>
                    </select>
                    @error('smoking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drinking_acceptable">{{translate('Drinking Acceptable')}}</label>
                    @php $partner_drinking_acceptable = !empty($member->partner_expectations->drinking_acceptable) ? $member->partner_expectations->drinking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="drinking_acceptable" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($partner_drinking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_drinking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_drinking_acceptable ==  'dose_not_matter') selected @endif >{{translate('Occasionally')}}</option>
                    </select>
                    @error('drinking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_diet">{{translate('Dieting Acceptable')}}</label>
                    @php $partner_dieting_acceptable = !empty($member->partner_expectations->diet) ? $member->partner_expectations->diet : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_diet" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($partner_dieting_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_dieting_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_dieting_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_diet')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_body_type">{{translate('Body Type')}}</label>
                    @php $partner_body_type = !empty($member->partner_expectations->body_type) ? $member->partner_expectations->body_type : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_body_type" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="Slim" @if($partner_body_type ==  'Slim') selected @endif >{{translate('Slim')}}</option>
                        <option value="Tone" @if($partner_body_type ==  'Tone') selected @endif >{{translate('Tone')}}</option>
                        <option value="Muscular" @if($partner_body_type ==  'Muscular') selected @endif >{{translate('Muscular')}}</option>
                        <option value="Stocky" @if($partner_body_type ==  'Stocky') selected @endif >{{translate('Stocky')}}</option>
                        <option value="Large" @if($partner_body_type ==  'Large') selected @endif >{{translate('Large')}}</option>
                    @error('partner_body_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_personal_value">{{translate('Personal Value')}}</label>
                    <input type="text" name="partner_personal_value" value="{{ !empty($member->partner_expectations->personal_value) ? $member->partner_expectations->personal_value : "" }}" class="form-control" placeholder="{{translate('Personal Value')}}">
                    @error('partner_personal_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_manglik">{{translate('Manglik')}}</label>
                    @php $partner_manglik = !empty($member->partner_expectations->manglik) ? $member->partner_expectations->manglik : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_manglik" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($partner_manglik ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_manglik ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_manglik ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_manglik')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_country_id">{{translate('Preferred Country')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_country_id" id="partner_country_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_country_id) selected @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_state_id">{{translate('Preferred State')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_state_id" id="partner_state_id" data-live-search="true">

                    </select>
                    @error('partner_state_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="family_value_id">{{translate('Family Value')}}</label>
                    <select class="form-control aiz-selectpicker" name="family_value_id" >
                        <option value="">{{ translate('Choose One') }}</option>
                        @foreach ($family_values as $family_value)
                            <option value="{{$family_value->id}}" @if($family_value->id == !empty($member->partner_expectations->family_value_id) ? $member->partner_expectations->family_value_id : "") selected @endif> {{ $family_value->name }} </option>
                        @endforeach
                    </select>
                    @error('family_value_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="pertner_complexion">{{translate('Complexion')}}</label>
                    @php $pertner_complexion = !empty($member->partner_expectations->complexion) ? $member->partner_expectations->complexion : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="pertner_complexion" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="Fair Skin" @if($pertner_complexion ==  'Fair Skin') selected @endif >{{translate('Fair Skin')}}</option>
                        
                        <option value="Extremely fair skin" @if($pertner_complexion ==  'Extremely fair skin') selected @endif >{{translate('Extremely fair skin')}}</option>
                        <option value="Medium skin" @if($pertner_complexion ==  'Medium skin') selected @endif >{{translate('Medium skin')}}</option>
                        <option value="Olive skin" @if($pertner_complexion ==  'Olive skin') selected @endif >{{translate('Olive skin')}}</option>
                        <option value="Brown skin" @if($pertner_complexion ==  'Brown skin') selected @endif >{{translate('Brown skin')}}</option>
                        <option value="Black skin" @if($pertner_complexion ==  'Fair Skin') selected @endif >{{translate('Black skin')}}</option>
                        <option value="Dark Brown" @if($pertner_complexion ==  'Dark Brown') selected @endif >{{translate('Dark Brown')}}</option>
                        <option value="White skin" @if($pertner_complexion ==  'White skin') selected @endif >{{translate('White skin')}}</option>
                        <option value="Medium white to light brown" @if($pertner_complexion ==  'Medium white to light brown') selected @endif >{{translate('Medium white to light brown')}}</option>
                        <option value="Other" @if($pertner_complexion ==  'Other') selected @endif >{{translate('Other')}}</option>
                    @error('pertner_complexion')
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
