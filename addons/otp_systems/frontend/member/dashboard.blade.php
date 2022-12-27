@extends('frontend.layouts.member_panel')
@section('panel_content')
    @php
        $user = Auth::user();
        $col  = 3;
        $profile_picture_privacy = get_setting('profile_picture_privacy');
        $gallery_image_privacy = get_setting('gallery_image_privacy');
        if($profile_picture_privacy == 'only_me'){
            $col++;
        }
        elseif($gallery_image_privacy == 'only_me') {
            $col++;
        }
    @endphp


    <div class="row gutters-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-16 mb-0">{{  translate(' Current Packages') }}</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4 mt-3">
                        <img class="mw-100 mx-auto mb-4" src="{{ uploaded_asset($user->member->package->image) }}" height="130">
                        <h5 class="mb-3 h5 fw-600">{{$user->member->package->name}}</h5>
                    </div>
                    <ul class="list-group list-group-raw fs-15 mb-4 pb-4 border-bottom">
                        <li class="list-group-item py-2">
                            <i class="las la-unlock mr-2 text-primary"></i>
                            {{ $user->member->package->express_interest }} {{ translate('Express Interests') }}
                        </li>
                        <li class="list-group-item py-2">
                            <i class="las la-unlock mr-2 text-primary"></i>
                            {{ $user->member->package->photo_gallery }} {{ translate('Gallery Photo Upload') }}
                        </li>
                        <li class="list-group-item py-2">
                            <i class="las la-unlock mr-2 text-primary"></i>
                            {{ $user->member->package->contact }} {{ translate('Contact Info View') }}
                        </li>
                        @if($profile_picture_privacy == 'only_me')
                            <li class="list-group-item py-2">
                                <i class="las la-unlock mr-2 text-primary"></i>
                                {{ $user->member->package->profile_image_view }} {{ translate('Profile Image View') }}
                            </li>
                        @endif
                        @if($gallery_image_privacy == 'only_me')
                            <li class="list-group-item py-2">
                                <i class="las la-unlock mr-2 text-primary"></i>
                                {{ $user->member->package->gallery_image_view }} {{ translate('Gallery Image View') }}
                            </li>
                        @endif
                        <li class="list-group-item py-2 text-line-through">
                            @if( $user->member->package->auto_profile_match == 0 )
                                <i class="las la-lock mr-2 text-primary"></i>
                                <del class="opacity-60">{{ translate('Show Auto Profile Match') }}</del>
                            @else
                                <i class="las la-unlock mr-2 text-primary"></i>
                                {{ translate('Show Auto Profile Match') }}
                            @endif
                        </li>
                    </ul>
                    <h4 class="fs-18 mb-3">
                      {{ translate('Package expiry date') }}:
                      @if(package_validity($user->id))
                        {{ $user->member->package_validity }}
                      @else
                          <span class="text-danger">{{translate('Expired')}}</span>
                      @endif
                    </h4>
                    <a href="{{ route('packages') }}" class="btn btn-success d-inline-block">{{ translate('Upgrade Package') }}</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-18 mb-0 text-dark">{{  translate(' Recent Joiner') }}</h2>
                </div>
                @if ( $user->member->gender == 1 )
                <div class="card-body">
                    <div>
                            <a href="https://minehalf.com/member-profile/1196" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                  <img
                                      src="{{ static_asset('assets/img/nm15.jpg') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111196') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1149" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px border border-light">
                                  <img
                                      src="{{ static_asset('assets/img/16.jpg') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111149') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1251" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                  <img
                                      src="{{ static_asset('assets/img/nm8.jpg') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111251') }}</h2>
                                     
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1206" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px border border-light">
                                  <img
                                      src="{{ static_asset('assets/img/nm17.jpg') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111206') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    
                </div>
                @else
                <div class="card-body">
                    <div>
                            <a href="https://minehalf.com/member-profile/1256" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px light">
                                  <img
                                      src="{{ static_asset('assets/img/nm4.jpg') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111256') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1249" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px border border-light">
                                  <img
                                      src="{{ static_asset('assets/img/avatar-place.png') }}" class="img-fit mw-100 h-100px "
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111249') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1275" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px border border-light">
                                  <img
                                      src="{{ static_asset('assets/img/avatar-place.png') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022111275') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    <div>
                            <a href="https://minehalf.com/member-profile/1321" class="text-reset border-light rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px border border-light">
                                  <img
                                      src="{{ static_asset('assets/img/avatar-place.png') }}" class="img-fit mw-100 h-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h2 class="fs-16 text-body text-truncate">{{ translate('Member ID: MH2022121321') }}</h2>
                                      
                                  </div>
                                </div>
                            </a>
                    </div>
                    
                </div>
                @endif
            </div>
        </div>
    </div>
  
    <div class="row gutters-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-16 mb-0">{{  translate(' Matched Profile') }}</h2>
                </div>
                <div class="card-body">
                    @if(Auth::user()->member->auto_profile_match == 1)
                    <div>
                        @forelse ($similar_profiles->shuffle()->take(4) as $similar_profile)
                          @if($similar_profile->user != null)
                            <a href="{{ route('member_profile', $similar_profile->match_id) }}" class="text-reset border rounded row no-gutters align-items-center mb-3">
                                <div class="col-auto w-100px">
                                  @php
                                      $avatar_image = $similar_profile->user->member->gender == 1 ? 'assets/img/avatar-place.png' : 'assets/img/female-avatar-place.png';
                                      $profile_picture_show = show_profile_picture($similar_profile->user);
                                  @endphp
                                  <img
                                      @if ($profile_picture_show)
                                      src="{{ uploaded_asset($similar_profile->user->photo) }}"
                                      @else
                                      src="{{ static_asset($avatar_image) }}"
                                      @endif
                                      onerror="this.onerror=null;this.src='{{ static_asset($avatar_image) }}';"
                                      class="img-fit w-100 size-100px"
                                  >
                                </div>
                                <div class="col">
                                  <div class="p-3">
                                      <h5 class="fs-16 text-body text-truncate">{{ $similar_profile->user->first_name.' '.$similar_profile->user->last_name }}</h5>
                                      <div class="fs-12 text-truncate-3">
                                          <span class="mr-1 d-inline-block">
                                            @if(!empty($similar_profile->user->member->birthday))
                                              {{ \Carbon\Carbon::parse($similar_profile->user->member->birthday)->age }} {{ translate('yrs') }},
                                            @endif
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            @if(!empty($similar_profile->user->physical_attributes->height))
                                              {{ $similar_profile->user->physical_attributes->height }} {{ translate('Feet') }},
                                            @endif
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            @if(!empty($similar_profile->user->member->marital_status->name))
                                              {{ $similar_profile->user->member->marital_status->name }},
                                            @endif
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            {{ !empty($similar_profile->user->spiritual_backgrounds->religion->name) ? $similar_profile->user->spiritual_backgrounds->religion->name.', ' : "" }}
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            {{ !empty($similar_profile->user->spiritual_backgrounds->caste->name) ? $similar_profile->user->spiritual_backgrounds->caste->name.', ' : "" }}
                                          </span>
                                          <span class="mr-1 d-inline-block">
                                            <td class="py-1">{{ !empty($similar_profile->user->spiritual_backgrounds->sub_caste->name) ? $similar_profile->user->spiritual_backgrounds->sub_caste->name : "" }}</td>
                                          </span>
                                      </div>
                                  </div>
                                </div>
                            </a>
                          @endif
                        @empty
                            <div class="alert alert-info">{{  translate('Update your partner expectation for auto match making') }}</div>
                        @endforelse
                    </div>
                    @else
                        <div class="alert alert-info">{{  translate('Upgrade your package for auto match making') }}</div>
                    @endif
                </div>
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="fs-16 mb-0">{{  translate(' Recomended Profile') }}</h2>
                </div>
                <div>
                                @foreach ($similar_profiles->shuffle()->take(50) as $similar_profile)
                                    @if ($similar_profile->user != null)
                                        <a href="{{ route('member_profile', $similar_profile->match_id) }}"
                                            class="text-reset border rounded row no-gutters align-items-center mb-3">
                                            <div class="col-auto w-120px">
                                                @php
                                                    $avatar_image = $similar_profile->user->member->gender == 1 ? 'assets/img/avatar-place.png' : 'assets/img/female-avatar-place.png';
                                                    $profile_picture_show = show_profile_picture($similar_profile->user);
                                                @endphp

                                                <img 
                                                    @if ($profile_picture_show)
                                                    src="{{ uploaded_asset($similar_profile->user->photo) }}"
                                                    @else
                                                    src="{{ static_asset($avatar_image) }}"
                                                    @endif
                                                    onerror="this.onerror=null;this.src='{{ static_asset($avatar_image) }}';"
                                                    class="img-fit w-100 size-120px">
                                            </div>
                                            <div class="col">
                                                <div class="p-3">
                                                    <h5 class="fs-16 text-body text-truncate">
                                                        {{ $similar_profile->user->first_name . ' ' . $similar_profile->user->last_name }}
                                                    </h5>
                                                    <div class="fs-12 text-truncate-3">
                                                        <span class="mr-1 d-inline-block">
                                                            @if (!empty($similar_profile->user->member->birthday))
                                                                {{ \Carbon\Carbon::parse($similar_profile->user->member->birthday)->age }}
                                                                {{ translate('yrs') }},
                                                            @endif
                                                        </span>
                                                        <span class="mr-1 d-inline-block">
                                                            @if (!empty($similar_profile->user->physical_attributes->height))
                                                                {{ $similar_profile->user->physical_attributes->height }}
                                                                {{ translate('Feet') }},
                                                            @endif
                                                        </span>
                                                        <span class="mr-1 d-inline-block">
                                                            @if (!empty($similar_profile->user->member->marital_status->name))
                                                                {{ $similar_profile->user->member->marital_status->name }},
                                                            @endif
                                                        </span>
                                                        <span class="mr-1 d-inline-block">
                                                            {{ !empty($similar_profile->user->spiritual_backgrounds->religion->name) ? $similar_profile->user->spiritual_backgrounds->religion->name . ', ' : '' }}
                                                        </span>
                                                        <span class="mr-1 d-inline-block">
                                                            {{ !empty($similar_profile->user->spiritual_backgrounds->caste->name) ? $similar_profile->user->spiritual_backgrounds->caste->name . ', ' : '' }}
                                                        </span>
                                                        <span class="mr-1 d-inline-block">
                                                            <td class="py-1">
                                                                {{ !empty($similar_profile->user->spiritual_backgrounds->sub_caste->name) ? $similar_profile->user->spiritual_backgrounds->sub_caste->name : '' }}
                                                            </td>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
        </div>
        </div>
          
    
        
                            <br></br>
                            <br></br>
                                <div>
                                    <h1 class="h4 fw-600 mb-3 text-body text-primary text-center">{{ translate("Moments  Made Memorable for  You....") }}</h1>
                                        <div class="card-columns">
                                            <div class="card border border-light">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding2.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                            </div>
                                            <h1 class="h5 fw-600 mb-3 text-body text-dark text-center">{{ translate("Makeup Artist") }}</h1>
                                            <div class="card border border-light">
                                               <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/wedding1.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                                
                                            </div>
                                            <h1 class="h5 fw-600 mb-3 text-body text-dark text-center">{{ translate("Decor") }}</h1>
                                            <div class="card border border-light">
                                                <a target="_blank" href="http://services.minehalf.com/">
                                                <img src="{{ static_asset('assets/img/jewellery.jpg') }}"  class="card-img" alt="{{ translate('Image') }}">
                                            </div>
                                            <h1 class="h5 fw-600 mb-3 text-body text-dark text-center">{{ translate("Jewellery") }}</h1>
                                        </div>
                                </div>
                                       
                                   
    </div>

@endsection

<script>

  alert("Welcome to MineHalf\nComplete Your Profile To Get Free Package.");

</script>