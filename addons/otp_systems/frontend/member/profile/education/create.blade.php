<form action="{{ route('education.store') }}" method="POST">
    @csrf
    <div class="modal-header">
        <h5 class="modal-title h6">{{translate('Add New Education Info')}}</h5>
        <button type="button" class="close" data-dismiss="modal">
        </button>
    </div>
    <div class="modal-body">
        <input type="hidden" name="user_id" value="{{ $member_id }}">
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Degree')}}</label>
            <div class="col-9">
				<div class="banner__inputlist">
						<select class="form-control aiz-selectpicker" name="degree" required>
						  
								<option value="B.Arch">B.Arch</option>
								<option value="B.des">B.des</option>
								<option value="B.E/B.Tech">B.E/B.Tech</option>
								<option value="B.Pharma">B.Pharma</option>
								<option value="M.Arch">M.Arch</option>
								<option value="M.des">M.des</option>
								<option value="M.E/M.Tech">M.E/M.Tech</option>
								<option value="M.BA">M.BA</option>
								<option value="M.Pharma">M.Pharma</option>
								<option value="M.S (Engineering )">M.S (Engineering )</option>
								<option value="B.IT">B.IT</option>
								<option value="BCA">BCA</option>
								<option value="MCA/PGDCA">MCA/PGDCA</option>
								<option value="B.com">B.com</option>
								<option value="CA">CA</option>
								<option value="CFA">CFA</option>
								<option value="CS">CS</option>
								<option value="ICWA">ICWA</option>
								<option value="M.Com">M.Com</option>
								<option value="BBA">BBA</option>
								<option value="BHM">BHM</option>
								<option value="MBA/PGDM">MBA/PGDM</option>
								<option value="BAMS">BAMS</option>
								<option value="BDS">BDS</option>
								<option value="BHMS">BHMS</option>
								<option value="BPT">BPT</option>
								<option value="BVSc.">BVSc.</option>
								<option value="DM">DM</option>
								<option value="M.D">M.D</option>
								<option value="M.S. (Medicine)">M.S. (Medicine)</option>
								<option value="MBBS">MBBS</option>
								<option value="MCh">MCh</option>
								<option value="MDS">MDS</option>
								<option value="MPT">MPT</option>
								<option value="MVSc.">MVSc.</option>
								<option value="BL/LLB">BL/LLB</option>
								<option value="ML/LLM">ML/LLM</option>
								<option value="B.A">B.A</option>
								<option value="B.Ed">B.Ed</option>
								<option value="B.Sc">B.Sc</option>
								<option value="BFA">BFA</option>
								<option value="BJMC">BJMC</option>
								<option value="M.A">M.A</option>
								<option value="M.Ed">M.Ed</option>
								<option value="M.Sc">M.Sc</option>
								<option value="MFA">MFA</option>
								<option value="MJMC">MJMC</option>
								<option value="MSW">MSW</option>
								<option value="M.Phil">M.Phil</option>
								<option value="Ph.D">Ph.D</option>
								<option value="High School">High School</option>
								<option value="Trade School">Trade School</option>
								<option value="Diploma">Diploma</option>
								<option value="Others">Others</option>
								
								
						</select>					
				</div>
			</div>
        </div>
        <div class="form-group row">
            <label class="col-md-3 col-form-label">{{translate('Institution')}}</label>
            <div class="col-md-9">
                <input type="text" name="institution"  placeholder="{{ translate('Institution') }}" class="form-control" required>
            </div>
        </div>
        <div class="form-group row">
            
            <div class="col-md-9">
                <input type="hidden" name="education_start" value="0" class="form-control" placeholder="{{translate('Start')}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-9">
                <input type="hidden" name="education_end" value="0"  placeholder="{{ translate('End') }}" class="form-control">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Close')}}</button>
        <button type="submit" class="btn btn-primary">{{translate('Add New Education Info')}}</button>
    </div>
</form>
