@extends('frontend.layouts.app')

@section('content')
@if (Auth::check())
<div class="py-4 py-lg-5" style="background-image: url('{{ static_asset('assets/img/bg-4.jpg') }}')"> 
	<div class="container">
		<div class="row">
			<div class="col-xxl-5 col-xl-5 col-md-8 mx-auto">  
				<div class="card">
					        <div class="card-body">
					            <div class="mb-5 text-center">
							        <h1 class="h3 text-primary mb-0">{{ translate(' Find Your Soul Mate') }}</h1>  
							        
						        </div>      
								<form action="{{ route('member.listing') }}" method="get"> 
									<div class="row">
									   <div class="col-lg-12">
											<div class="form-group mb-3">
												<label class="form-label text-black" for="name">{{ translate(' Looking For') }}</label> 
				
												<select name="religion_id" id="religion_id" class="form-control aiz-selectpicker"  data-live-search="true"  data-container="body"> 
													<option value="">{{translate('Choose One')}}</option> 
													<option value="1">{{translate(' Male')}}</option> 
													<option value="2">{{translate(' Female')}}</option> 
													
			
												</select> 
											</div> 
										</div> 
									</div> 
									<div class="row"> 
										<div class="col-lg-6">
											<div class="form-group mb-3"> 
												<label class="form-label text-black" for="name">{{ translate(' Age From') }}</label> 
												
												<input type="number" name="age_from" placeholder="{{ translate('Enter Age Here') }}" class="form-control" required>                                                 
											</div> 
										</div> 
										<div class="col-lg-6"> 
											<div class="form-group mb-3">
												<label class="form-label text-black" for="name">{{ translate(' 	To') }}</label> 
												<input type="number" name="age_to" placeholder="{{ translate('Enter Age Here') }}" class="form-control" required> 
												
											</div> 
										</div> 
									</div> 
									<div class="row">       
                                        <div class="col-lg-6"> 
                                            <div class="form-group mb-3">   
                                                <label class="form-label" for="name">{{ translate('Min Height') }}</label>
                                                 <input type="number" name="min_height"  class="form-control" min="0" step="0.01">   
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="name">{{ translate('Max Height') }}</label>
                                                <input type="number" name="max_height" class="form-control" min="0" step="0.01">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
										<div class="col-lg-12">
											<div class="form-group mb-3">
                                                    <label class="form-label" for="name">{{ translate('Religion') }}</label>
                                                    @php $religions = \App\Models\Religion::all(); @endphp
                                                <select name="religion_id" id="religion_id" class="form-control aiz-selectpicker"  data-live-search="true" required >
                                                    <option value="">{{translate('Choose One')}}</option>
                                                     @foreach ($religions as $religion)
                                                    <option value="{{ $religion->id }}"> {{ $religion->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
										</div>
									
									</div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group mb-3">
                                                <label class="form-label" for="name">{{ translate('Maritial Status') }}</label>
                                                @php $marital_statuses = \App\Models\MaritalStatus::all(); @endphp
                                                <select class="form-control aiz-selectpicker" name="marital_status" data-live-search="true" required>
                                                    <option value="">{{translate('Select One')}}</option>
                                                    @foreach ($marital_statuses as $marital_status)
                                                        <option value="{{$marital_status->id}}"> {{$marital_status->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
										</div>
										<div class="col-lg-6">
											<div class="form-group mb-3">
                                                    <label class="form-label" for="name">{{ translate('Mother  Tongue') }}</label>
                                                    @php $mother_tongues = \App\Models\MemberLanguage::all(); @endphp
                                                <select class="form-control aiz-selectpicker" name="mother_tongue" data-live-search="true">
                                                    <option value="">{{translate('Select One')}}</option>
                                                    @foreach ($mother_tongues as $mother_tongue_select)
                                                        <option value="{{$mother_tongue_select->id}}"> {{ $mother_tongue_select->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
										</div>
									</div>
									<div class="row">
									    <div class="col-lg-12">
											<div class="form-group mb-3">
                                                    <label class="form-label" for="name">{{ translate('State') }}</label>
                                                   <select class="form-control aiz-selectpicker" name="present_state_id">
										             <option>Select States</option>
										             <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
										             <option value="Andhra Pradesh">Andhra Pradesh</option>
										             <option value="Arunachal Pradesh">Arunachal Pradesh</option>
										             <option value="Assam">Assam</option>
										             <option value="Bihar">Bihar</option>
										             <option value="Chandigarh">Chandigarh</option>
										             <option value="Chhattisgarh">Chhattisgarh</option>
										             <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
										             <option value="Daman and Diu">Daman and Diu</option>
										             <option value="Delhi">Delhi</option>
										             <option value="Goa">Goa</option>
										             <option value="Gujarat">Gujarat</option>
										             <option value="Haryana">Haryana</option>
										             <option value="Himachal Pradesh">Himachal Pradesh</option>
										             <option value="Jammu and Kashmir">Jammu and Kashmir</option>
										             <option value="Jharkhand">Jharkhand</option>
										             <option value="Karnataka">Karnataka</option>
										             <option value="Kenmore">Kenmore</option>
										             <option value="Kerala">Kerala</option>
										             <option value="Lakshadweep">Lakshadweep</option>
										             <option value="Madhya Pradesh">Madhya Pradesh</option>
										             <option value="Maharashtra">Maharashtra</option>
										             <option value="Manipur">Manipur</option>
										             <option value="Meghalaya">Meghalaya</option>
										             <option value="Mizoram">Mizoram</option>
										             <option value="Narora">Narora</option>
										             <option value="Natwar">Natwar</option>
										             <option value="Odisha">Odisha</option>
										             <option value="Paschim Medinipur">Paschim Medinipur</option>
										             <option value="Pondicherry">Pondicherry</option>
										             <option value="Punjab">Punjab</option>
										             <option value="Rajasthan">Rajasthan</option>
										             <option value="Sikkim">Sikkim</option>
										             <option value="Tamil Nadu">Tamil Nadu</option>
										             <option value="Telangana">Telangana</option>
										             <option value="Tripura">Tripura</option>
										             <option value="Uttar Pradesh">Uttar Pradesh</option>
										             <option value="Uttarakhand">Uttarakhand</option>
										             <option value="Sikkim">Sikkim</option>
										             <option value="Vaishali">Vaishali</option>
										             <option value="West Bengal">West Bengal</option>
										             
										           </select>
                                             </div>
										</div>
									
									</div>
									<div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-grohp mb-3">
                                                <label class="form-label" for="name">{{ translate('Profession') }}</label>
                                                
                                                <select class="form-control aiz-selectpicker" name="profession">
                                                    <option value="">{{translate('Select One')}}</option>
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
                                                
                                            </div>
                                        </div>
                                    </div>
									
									
										<div class="mb-5">
								            <button type="submit" class="btn btn-block btn-primary">{{ translate('Search') }}</button>
							            </div>    
										
									</div>
								</form>
							</div>
							
						</div>
			</div>
            @endif
		</div>
	</div>
</div>
@endsection
