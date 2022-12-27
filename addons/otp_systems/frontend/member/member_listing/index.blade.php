@extends('frontend.layouts.app')
@section('content')
<section class="py-4 py-lg-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-3">
                        @include('frontend.member.member_listing.advanced_search')
                    </div>
                    <div class="col-xl-9">
                        <div class="d-flex">
                            <h1 class="h5 fw-600 mb-3 text-body">{{ translate("All Active Members") }}</h1>
                            <div class="d-xl-none ml-auto mb-1 ml-xl-3 mr-0 align-self-end">
                                <button type="button" class="btn btn-icon p-0" data-toggle="class-toggle" data-target=".aiz-filter-sidebar">
                                    <i class="la la-list la-2x"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-5">
                            @foreach ($users as $key => $user)
                                <div class=" col-12 bg-white row no-gutters border border-dark-500  rounded hov-shadow-md mb-2 has-transition position-relative" id="block_id_{{ $user->id }}">
                                    <div class="col-md-auto mb-1">
                                        <div class="text-center text-md-left pt-2 pt-md-1  border-gray-500">
                                          @php
                                              $profile_picture_show = 'ok';
                                              $profile_picture_privacy = $user->member->profile_picture_privacy;

                                              if($profile_picture_privacy  == '0')
                                              {
                                                $profile_picture_show = 'no';
                                              }
                                              elseif($profile_picture_privacy == 2)
                                              {
                                                if(Auth::user()->membership == 1)
                                                {
                                                  $profile_picture_show = 'no';
                                                }
                                              }
                                          @endphp
                                            <img
                                                @if($profile_picture_show == 'ok')
                                                src="{{ uploaded_asset($user->photo) }}"
                                                @else
                                                src="{{ static_asset('assets/img/avatar-place.png') }}"
                                                @endif
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/avtar-common.png') }}';"
                                                class="img-fit mw-100 size-150px size-md-200px rounded-circle md-rounded-0"
                                            >
                                            <span class="absolute-top-right px-4 py-3">
                                        
                                            @if($user->membership == 2)
                                            <span class="badge badge-inline badge-success">{{ translate('Preminum') }}</span>
                                            @endif
                                            </span>
                                            
                                           
                                            
                                        </div>
                                    </div>                            
                                        <div class="px-md-4 p-2 flex-grow-1"> 
                                        
                                            <table class="table-striped table-bordered mb-2" style="font-size: 12px;">
                                              <tbody>
                                                <tr>
                                                    <td width="250" height="30" style="padding-left: 5px;" class="font-dark text-center" >
                                                        <span>{{ translate(' Member ID:') }}</span>
                                                    </td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="font-dark text-primary text-center" colspan="3">
                                                        <b>{{ $user->code }}</b>
                                                        @if ( $user->verify == 1)
                                                        <img src="{{ static_asset('assets/img/v33.png') }}"
                                                        class="size-15px rounded-circle img-fit mr-2" title="Verified Profile">
                                                        @endif
                                                        
                                                    </td>
                                                
                                                </tr>
                                                <tr>
                                                    <td width="150" height="30" style="padding-left: 5px;" class="text-dark"><b>Age</b></td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark">{{ \Carbon\Carbon::parse($user->member->birthday)->age }}</td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark"><b>Height</b></td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark">@if(!empty( $user->physical_attributes->height))
                                                            {{ $user->physical_attributes->height }}
                                                        @endif</td>
                                                </tr>
                                                <tr>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark"><b>Religion</b></td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark">@if(!empty($user->spiritual_backgrounds->religion_id))
                                                            {{ $user->spiritual_backgrounds->religion->name }}
                                                        @endif</td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark"><b>Caste</b></td>
                                                    <td width="120" height="30" style="padding-left: 5px;" class="text-dark">@if(!empty($user->spiritual_backgrounds->caste_id))
                                                            {{ $user->spiritual_backgrounds->caste->name }}
                                                        @endif</td>
                                                </tr>
                                            <tr>
                                                <td width="120" height="30" style="padding-left: 5px;" class="text-dark"><b>First Language</b></td>
                                                <td width="120" height="30" style="padding-left: 5px;" class="text-dark"> @if($user->member->mothere_tongue != null)
                                                            {{ \App\Models\MemberLanguage::where('id',$user->member->mothere_tongue)->first()->name }}
                                                        @endif</td>
                                                <td width="180" height="30" style="padding-left: 5px;"  class="text-dark"><b>Marital Status</b></td>
                                                <td width="120" height="30" style="padding-left: 5px;" class="text-dark">@if($user->member->marital_status_id != null)
                                                            {{ $user->member->marital_status->name }}
                                                        @endif</td>
                                                </tr>
                                                <tr>
                                                <td width="120" height="30" style="padding-left: 5px;" class="text-dark"><b>Location</b></td>
                                                <td colspan="3" height="30" style="padding-left: 5px;" class="text-dark">@php
                                                            $present_address    = \App\Models\Address::where('type','present')->where('user_id', $user->id)->first();
                                                        @endphp
                                                        @if(!empty($present_address->country_id))
                                                            {{ $present_address->country->name }}
                                                        @endif</td>
                                            </tr>  
                                              
                                              </tbody>
                                            </table>
                                
                                            <div class="row gutters-5 text-center">
                                                <div class="col-3">
                                                    <a
                                                        @if(get_setting('full_profile_show_according_to_membership') == 0 && Auth::user()->membership == 1)
                                                            href="javascript:void(0);" onclick="package_update_alert()"
                                                        @else
                                                            href="{{ route('member_profile', $user->id) }}"
                                                        @endif
                                                        class="text-reset c-pointer"
                                                    >
                                                        <i class="las la-user fs-20 text-primary"></i>
                                                        <span class="d-block fs-10  text-black">{{ translate('Full Profile') }}</span>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    @php
                                                      $interest_class    = "text-primary";
                                                      $do_expressed_interest = \App\Models\ExpressInterest::where('user_id', $user->id)->where('interested_by',Auth::user()->id)->first();
                                                      $received_expressed_interest = \App\Models\ExpressInterest::where('user_id', Auth::user()->id)->where('interested_by',$user->id)->first();
                                                      if(empty($do_expressed_interest) && empty($received_expressed_interest))
                                                      {
                                                          $interest_onclick  = 1;
                                                          $interest_text     = translate('Interest');
                                                          $interest_class    = "fw-700  text-body";
                                                      }
                                                      elseif(!empty($received_expressed_interest))
                                                      {
                                                          $interest_onclick  = 'do_response';
                                                          $interest_text     = $received_expressed_interest->status == 0 ? translate('Response to Interest') : translate('You Accepted Interest');
                                                      }
                                                      else
                                                      {
                                                          $interest_onclick  = 0;
                                                          $interest_text     = $do_expressed_interest->status == 0 ? translate('Interest Expressed') : translate('Interest Accepted');
                                                      }
                                                    @endphp

                                                    <a id="interest_a_id_{{ $user->id }}"
                                                        @if($interest_onclick == 1)
                                                            onclick="express_interest({{ $user->id }})"
                                                        @elseif($interest_onclick == 'do_response')
                                                            href="{{ route('interest_requests') }}"
                                                        @endif
                                                        class="text-reset c-pointer"
                                                    >
                                                        <i class="la la-heart-o fs-20 text-primary"></i>
                                                        <span id="interest_id_{{ $user->id }}" class="d-block fs-10 opacity-60 {{ $interest_class }}">
                                                            {{ $interest_text }}
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    @php
                                                      $shortlist = \App\Models\Shortlist::where('user_id', $user->id)->where('shortlisted_by',Auth::user()->id)->first();
                                                      if(empty($shortlist)){
                                                          $shortlist_onclick  = 1;
                                                          $shortlist_text     = translate('Shortlist');
                                                          $shortlist_class    = "fw-700  text-body";
                                                      } 
                                                      else{
                                                          $shortlist_onclick  = 0;
                                                          $shortlist_text     = translate('Shortlisted');
                                                          $shortlist_class    = "text-primary";
                                                      }
                                                    @endphp
                                                    <a id="shortlist_a_id_{{ $user->id }}"
                                                      @if($shortlist_onclick == 1)
                                                        onclick="do_shortlist({{ $user->id }})"
                                                      @else
                                                        onclick="remove_shortlist({{ $user->id }})"
                                                      @endif
                                                        class="text-reset c-pointer"
                                                    >
                                                        <i class="las la-list fs-20 text-primary"></i>
                                                        <span id="shortlist_id_{{ $user->id }}" class="d-block fs-10 opacity-60 {{ $shortlist_class }}">
                                                            {{ $shortlist_text }}
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    <a onclick="ignore_member({{ $user->id }})" class="text-reset c-pointer">
                                                      <span class="text-dark">
                                                        <i class="las la-ban fs-20 text-primary"></i>
                                                        <span class="d-block fs-10  text-black">{{ translate('Ignore') }}</span>
                                                      </span>
                                                    </a>
                                                </div>
                                                <div class="col-2">
                                                    @php
                                                      $profile_reported = \App\Models\ReportedUser::where('user_id', $user->id)->where('reported_by',Auth::user()->id)->first();
                                                      if(empty($profile_reported)){
                                                          $report_onclick  = 1;
                                                          $report_text     = translate('Report');
                                                          $report_class    = "fw-700  text-body";
                                                      }
                                                      else{
                                                          $report_onclick  = 0;
                                                          $report_text     = translate('Reported');
                                                          $report_class    = "text-primary";
                                                      }
                                                    @endphp
                                                    <a id="report_a_id_{{ $user->id }}"
                                                      @if($report_onclick == 1)
                                                        onclick="report_member({{ $user->id }})"
                                                      @endif
                                                        class="text-reset c-pointer"
                                                    >
                                                      <span id="report_id_{{ $user->id }}" class="{{ $report_class }}">
                                                        <i class="las la-info-circle fs-20 text-primary"></i>
                                                        <span class="d-block fs-10 opacity-60">{{ $report_text }}</span>
                                                      </span>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
        
                                </div>
                            @endforeach
                        </div>
                        <div class="aiz-pagination">
                            {{ $users->appends(request()->input())->links() }}
                        </div>
                        <br></br>
                                    <h1 class="h5 fw-600 mb-3 text-body text-primary text-center">{{ translate("Browse Other Services") }}</h1>
                                
                                        <div class="card-columns">
                                            <div class="card">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding2.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Makeup Artist</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                               <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding3.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Wedding Decorator</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding1.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Hall Booking</div>
                                                    </div>
                                                </div>
                                            </div>
                                       
                                            <div class="card">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding4 (1).jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Mehendi</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding6 (2).jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Photography</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding5 (1).jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                <div class="overlay">
                                                    <div class="absolute-center mt-5">
                                                        <div class="centered text-white">Wedding Planner</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class=" mx-auto text-center">
							                    <a target="_blank" href="http://services.minehalf.com/services/" class="btn btn-light btn-primary border">See More</a>																					
							                </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('modal')
    @include('modals.package_update_alert_modal')
    @include('modals.confirm_modal')

    <!-- Ignore Modal -->
    <div class="modal fade ignore_member_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h6">{{ translate('Ignore Member!') }}</h5>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>{{ translate('Are you sure that you want to ignore this member?') }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">{{ translate('Close') }}</button>
                    <button type="submit" class="btn btn-primary" id="ignore_button">{{ translate('Ignore') }}</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Profile -->
    <div class="modal fade report_modal" id="modal-zoom">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title h6">{{ translate('Report Member!') }}</h5>
                    <button type="button" class="close" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('reportusers.store') }}" id="report-modal-form" method="POST">
                        @csrf
                        <input type="hidden" name="member_id" id="member_id" value="">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">{{ translate('Report Reason') }}<span
                                    class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <textarea name="reason" rows="4" class="form-control"
                                    placeholder="{{ translate('Report Reason') }}" required></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <button type="button" class="btn btn-primary"
                        onclick="submitReport()">{{ translate('Report') }}</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            get_castes_by_religion();
            get_sub_castes_by_caste();
            get_states_by_country();
            get_cities_by_state()
        });

        // Get Castes and Subcastes
        function get_castes_by_religion() {
            var religion_id = $('#religion_id').val();
            $.post('{{ route('castes.get_caste_by_religion') }}', {
                _token: '{{ csrf_token() }}',
                religion_id: religion_id
            }, function(data) {
                $('#caste_id').html(null);
                $('#caste_id').append($('<option>', {
                    value: '',
                    text: 'Choose One'
                }));
                for (var i = 0; i < data.length; i++) {
                    $('#caste_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#caste_id > option").each(function() {
                    if (this.value == '{{ $caste_id }}') {
                        $("#caste_id").val(this.value).change();
                    }
                });
                AIZ.plugins.bootstrapSelect('refresh');

                get_sub_castes_by_caste();
            });
        }

        function get_sub_castes_by_caste() {
            var caste_id = $('#caste_id').val();
            $.post('{{ route('sub_castes.get_sub_castes_by_religion') }}', {
                _token: '{{ csrf_token() }}',
                caste_id: caste_id
            }, function(data) {
                $('#sub_caste_id').html(null);
                $('#sub_caste_id').append($('<option>', {
                    value: '',
                    text: 'Choose One'
                }));
                for (var i = 0; i < data.length; i++) {
                    $('#sub_caste_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#sub_caste_id > option").each(function() {
                    if (this.value == '{{ $sub_caste_id }}') {
                        $("#sub_caste_id").val(this.value).change();
                    }
                });
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }

        $('#religion_id').on('change', function() {
            get_castes_by_religion();
        });

        $('#caste_id').on('change', function() {
            get_sub_castes_by_caste();
        });

        // Get Countries and States
        function get_states_by_country() {
            var country_id = $('#country_id').val();
            $.post('{{ route('states.get_state_by_country') }}', {
                _token: '{{ csrf_token() }}',
                country_id: country_id
            }, function(data) {
                $('#state_id').html(null);
                $('#state_id').append($('<option>', {
                    value: '',
                    text: 'Choose One'
                }));
                for (var i = 0; i < data.length; i++) {
                    $('#state_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#state_id > option").each(function() {
                    if (this.value == '{{ $state_id }}') {
                        $("#state_id").val(this.value).change();
                    }
                });

                AIZ.plugins.bootstrapSelect('refresh');

                get_cities_by_state();
            });
        }

        function get_cities_by_state() {
            var state_id = $('#state_id').val();
            $.post('{{ route('cities.get_cities_by_state') }}', {
                _token: '{{ csrf_token() }}',
                state_id: state_id
            }, function(data) {
                $('#city_id').html(null);
                $('#city_id').append($('<option>', {
                    value: '',
                    text: 'Choose One'
                }));
                for (var i = 0; i < data.length; i++) {
                    $('#city_id').append($('<option>', {
                        value: data[i].id,
                        text: data[i].name
                    }));
                }
                $("#city_id > option").each(function() {
                    if (this.value == '{{ $city_id }}') {
                        $("#city_id").val(this.value).change();
                    }
                });
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }

        $('#country_id').on('change', function() {
            get_states_by_country();
        });

        $('#state_id').on('change', function() {
            get_cities_by_state();
        });

        // Full Profile view
        function package_update_alert() {
            $('.package_update_alert_modal').modal('show');
        }

        // Express Interest
        var package_validity = {{ package_validity(Auth::user()->id) }};
        var remaining_interest = {{ get_remaining_package_value(Auth::user()->id, 'remaining_interest') }};

        function express_interest(id) {
            if (package_validity == 0 || remaining_interest < 1) {
                $('.package_update_alert_modal').modal('show');
            } else {
                $('.confirm_modal').modal('show');
                $("#confirm_modal_title").html("{{ translate('Confirm Express Interest!') }}");
                $("#confirm_modal_content").html("<p class='fs-14'>{{ translate('Remaining Express Interest') }}: " +
                    remaining_interest +
                    " {{ translate('Times') }}</p><small class='text-danger'>{{ translate('**N.B. Expressing An Interest Will Cost 1 From Your Remaining Interests**') }}</small>"
                    );
                $("#confirm_button").attr("onclick", "do_express_interest(" + id + ")");
            }
        }

        function do_express_interest(id) {
            $("#interest_a_id_" + id).removeAttr("onclick");
            $("#interest_id_" + id).html("{{ translate('Processing') }}..");
            $.post('{{ route('express-interest.store') }}', {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                function(data) {
                    // console.log(data);
                    if (data == 1) {
                        $('.confirm_modal').modal('toggle');
                        $("#interest_id_" + id).html("{{ translate('Interest Expressed') }}");
                        $("#interest_id_" + id).attr("class", "d-block fs-10 opacity-60 text-primary");
                        AIZ.plugins.notify('success', '{{ translate('Interest Expressed Sucessfully') }}');
                    } else {
                        $("#interest_id_" + id).html("{{ translate('Interest') }}");
                        AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                    }
                }
            );
        }

        // Shortlist
        function do_shortlist(id) {
            $("#shortlist_a_id_" + id).removeAttr("onclick");
            $("#shortlist_id_" + id).html("{{ translate('Shortlisting') }}..");
            $.post('{{ route('member.add_to_shortlist') }}', {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                function(data) {
                    if (data == 1) {
                        $("#shortlist_id_" + id).html("{{ translate('Shortlisted') }}");
                        $("#shortlist_id_" + id).attr("class", "d-block fs-10 opacity-60 text-primary");
                        $("#shortlist_a_id_" + id).attr("onclick", "remove_shortlist(" + id + ")");
                        AIZ.plugins.notify('success', '{{ translate('You Have Shortlisted This Member.') }}');
                    } else {
                        $("#shortlist_id_" + id).html("{{ translate('Shortlist') }}");
                        AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                    }
                }
            );
        }

        function remove_shortlist(id) {
            $("#shortlist_a_id_" + id).removeAttr("onclick");
            $("#shortlist_id_" + id).html("{{ translate('Removing') }}..");
            $.post('{{ route('member.remove_from_shortlist') }}', {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                function(data) {
                    if (data == 1) {
                        $("#shortlist_id_" + id).html("{{ translate('Shortlist') }}");
                        $("#shortlist_id_" + id).attr("class", "d-block fs-10 opacity-60 text-dark");
                        $("#shortlist_a_id_" + id).attr("onclick", "do_shortlist(" + id + ")");
                        AIZ.plugins.notify('success',
                            '{{ translate('You Have Removed This Member From Your Shortlist.') }}');
                    } else {
                        AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                    }
                }
            );
        }

        // Ignore
        function ignore_member(id) {
            $('.ignore_member_modal').modal('show');
            $("#ignore_button").attr("onclick", "do_ignore(" + id + ")");
        }

        function do_ignore(id) {
            $.post('{{ route('member.add_to_ignore_list') }}', {
                    _token: '{{ csrf_token() }}',
                    id: id
                },
                function(data) {
                    if (data == 1) {
                        $("#block_id_" + id).hide();
                        $('.ignore_member_modal').modal('toggle');
                        AIZ.plugins.notify('success', '{{ translate('You Have Ignored This Member.') }}');
                    } else {
                        AIZ.plugins.notify('danger', '{{ translate('Something went wrong') }}');
                    }
                }
            );
        }

        function report_member(id) {
            $('.report_modal').modal('show');
            $('#member_id').val(id);
        }

        function submitReport() {
            $('#report-modal-form').submit();
        }
    </script>
@endsection
