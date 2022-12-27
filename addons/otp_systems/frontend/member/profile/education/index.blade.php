<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Education Info')}}</h5>
        <div class="text-right">
            <a onclick="education_add_modal('{{$member->id}}');"  href="javascript:void(0);" class="btn btn-sm btn-primary ">
              <i class="las mr-1 la-plus"></i>
              {{translate('Add New')}}
            </a>
        </div>
    </div>
    <div class="card-body">
        <table class="table aiz-table">
            <tr>
                <th>{{translate('Degree')}}</th>
                <th></th>
                <th>{{translate('Institution')}}</th>
                
                
                <th class="text-right">{{translate('Options')}}</th>
            </tr>

            @php $educations = \App\Models\Education::where('user_id',$member->id)->get(); @endphp
            @foreach ($educations as $key => $education)
            <tr>
                <td>{{ $education->degree }}</td>
                <td></td>
                <td>{{ $education->institution }}</td>
                
                
                <td class="text-right">
                    <a href="javascript:void(0);" class="btn btn-soft-info btn-icon btn-circle btn-sm" onclick="education_edit_modal('{{$education->id}}');" title="{{ translate('Edit') }}">
                        <i class="las la-edit"></i>
                    </a>
                    <a href="javascript:void(0);" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{route('education.destroy', $education->id)}}" title="{{ translate('Delete') }}">
                        <i class="las la-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
