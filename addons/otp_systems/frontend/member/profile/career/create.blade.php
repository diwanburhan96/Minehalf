<form action="{{ route('career.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Add New Career Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="user_id" value="{{ $member_id }}">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Employed In/Company')}}</label>
            <div class="col-md-9">
                <input type="text" name="company"  placeholder="{{ translate('company') }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate(' Designation')}}</label>
            <div class="col-md-9">
                <select class="form-control aiz-selectpicker" name="designation" required>
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
								<option value="Private Sector">Private Sector</option>
								<option value="Goverment Sector">Goverment Sector</option>
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
        <div class="form-group row">
            
            <div class="col-md-9">
                <input type="hidden" name="career_start" value="0" class="form-control" placeholder="{{translate('Year of Joining')}}">
            </div>
        </div>
        <div class="form-group row">
            
            <div class="col-md-9">
                <input type="hidden" name="career_end" value="0"  placeholder="{{ translate(' To') }}" class="form-control">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Add New Career Info')}}</button>
    </div>
</form>
