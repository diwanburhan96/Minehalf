<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Family Information')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('families.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="father">{{translate('Father Occupation')}}</label>
                    @php $user_father = !empty($member->families->father) ? $member->families->father : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="father" required>
                        <option value="Private Sector" @if($user_father==  'Private Sector') selected @endif >{{translate('Private Sector')}}</option>
                        <option value="Government  Public Sector" @if($user_father== 'Government  Public Sector') selected @endif >{{translate('Government / Public Sector')}}</option>
                        <option value="Civil Services" @if($user_father== 'Civil Services') selected @endif >{{translate('Civil Services')}}</option>
                        <option value="Defense" @if($user_father== 'Defense') selected @endif >{{translate('Defense')}}</option>
                        <option value="Business  Self Employed" @if($user_father== 'Business  Self Employed') selected @endif >{{translate('Business / Self Employed')}}</option>
                        <option value="Freelance  Part time" @if($user_father== 'Freelance  Part time') selected @endif >{{translate('Freelance / Part time')}}</option>
                        <option value="Retired" @if($user_father== 'Retired') selected @endif >{{translate('Retired')}}</option>
                        <option value="Not Employed" @if($user_father== 'Not Employed') selected @endif >{{translate('Not Employed')}}</option>
                        <option value="Expired" @if($user_father== 'Expired') selected @endif >{{translate('Expired')}}</option>
                        <option value="Other" @if($user_father == 'Other') selected @endif >{{translate('Other')}}</option>
                        
                    @error('father')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mother">{{translate('Mother Occupation')}}</label>
                    @php $user_mother = !empty($member->families->mother) ? $member->families->mother : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="mother" required>
                        <option value="Housewife" @if($user_mother ==  'Housewife') selected @endif >{{translate('Housewife')}}</option>
                        <option value="Private Sector" @if($user_mother == 'Private Sector') selected @endif >{{translate('Private Sector')}}</option>
                        <option value="Government / Public Sector" @if($user_mother == 'Government / Public Sector') selected @endif >{{translate('Government / Public Sector')}}</option>
                        <option value="Civil Services" @if($user_mother == 'Civil Services') selected @endif >{{translate('Civil Services')}}</option>
                        <option value=" Teacher" @if($user_mother == 'Teacher') selected @endif >{{translate(' Teacher')}}</option>
                        <option value="Business / Self Employed" @if($user_mother == 'Business / Self Employed') selected @endif >{{translate('Business / Self Employed')}}</option>
                        <option value="Freelance / Part time" @if($user_mother == 'Freelance / Part time') selected @endif >{{translate('Freelance / Part time')}}</option>
                        <option value="Retired" @if($user_mother == 'Retired') selected @endif >{{translate('Retired')}}</option>
                        <option value="Not Employed" @if($user_mother == 'Not Employed') selected @endif >{{translate('Not Employed')}}</option>
                        <option value="Expired" @if($user_mother == 'Expired') selected @endif >{{translate('Expired')}}</option>
                        <option value="Other" @if($user_mother == 'Other') selected @endif >{{translate('Other')}}</option>
                    
                    
                    @error('mother')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="sibling">{{translate('Sibling')}}</label>
                    @php $user_sibling = !empty($member->families->sibling) ? $member->families->sibling : ""; @endphp
                   <select class="form-control aiz-selectpicker" name="sibling" required>
                        <option value="0" @if($user_sibling ==  '0') selected @endif >{{translate('0')}}</option>
                        <option value="1" @if($user_sibling == '1')  selected @endif >{{translate('1')}}</option>
                        <option value="2" @if($user_sibling == '2')  selected @endif >{{translate('2')}}</option>
                        <option value="3" @if($user_sibling == '3')  selected @endif >{{translate('3')}}</option>
                        <option value="4" @if($user_sibling == '4')  selected @endif >{{translate('4')}}</option>
                        <option value="5" @if($user_sibling == '5')  selected @endif >{{translate('5')}}</option>
                        <option value="6" @if($user_sibling == '6')  selected @endif >{{translate('6')}}</option>
                        <option value="7" @if($user_sibling == '7')  selected @endif >{{translate('7')}}</option>
                        <option value="8" @if($user_sibling == '8')  selected @endif >{{translate('8')}}</option>
                        <option value="9" @if($user_sibling == '9')  selected @endif >{{translate('9')}}</option>
                        <option value="10" @if($user_sibling == '10')  selected @endif >{{translate('10')}}</option>
                    @error('sibling')
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
