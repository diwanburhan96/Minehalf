@extends('frontend.layouts.app')
@section('content')
<section class="pt-6 pb-4 bg-white text-center">
    <div class="container">
        <h1 class="mb-0 fw-600 text-dark">{{ translate('Select Your Package') }}</h1>
    </div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="aiz-carousel" data-items="4" data-xl-items="3" data-md-items="2" data-sm-items="1" data-dots='true' data-infinite='true' data-autoplay='true'>
            @foreach ($packages as $key => $package)
                <div class="carousel-box">
                    <div class="overflow-hidden shadow-none border-right">
                        <div class="card-body">
                            <div class="text-center mb-4 mt-3">
                                <img class="mw-100 mx-auto mb-4" src="{{ uploaded_asset($package->image) }}" height="130">
                                <h5 class="mb-3 h5 fw-600">{{$package->name}}</h5>
                            </div>
                            <ul class="list-group list-group-raw fs-15 mb-5">
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                    {{ $package->express_interest }} {{ translate('Express Interests') }}
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                    {{ $package->photo_gallery }} {{ translate('Gallery Photo Upload') }}
                                </li>
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                    {{ $package->contact }} {{ translate('Contact Info View') }}
                                </li>
                                <!--@if(get_setting('profile_picture_privacy') == 'only_me')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                    {{ $package->profile_image_view }} {{ translate('Profile Image View') }}
                                </li>
                                @endif
                                @if(get_setting('gallery_image_privacy') == 'only_me')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                    {{ $package->gallery_image_view }} {{ translate('Gallery Image View') }}
                                </li>
                                @endif-->
                                <li class="list-group-item py-2 text-line-through">
                                    @if( $package->auto_profile_match == 0 )
                                        <i class="las la-lock mr-2 text-primary"></i>
                                        <del class="opacity-60">{{ translate('Show Auto Profile Match') }}</del>
                                    @else
                                        <i class="las la-unlock mr-2 text-primary"></i>
                                        {{ translate('Show Auto Profile Match') }}
                                    @endif
                                </li>
                                @if ($package->name == 'Silver')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                     {{ translate('Verified Tag') }}
                                </li>
                                @endif
                                @if ($package->name == 'Bronze')
                                <li class="list-group-item py-2">
                                    <i class="las la-lock mr-2 text-primary"></i>
                                     <del class="opacity-60">{{ translate('Verified Tag') }}</del>
                                </li>
                                @endif
                                @if ($package->name == 'Gold')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                     {{ translate('Verified Tag') }}
                                </li>
                                @endif
                                @if ($package->name == 'Platinum')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                     {{ translate('Verified Tag') }}
                                </li>
                                @endif
                                @if ($package->name == 'Silver')
                                <li class="list-group-item py-2">
                                    <i class="las la-lock mr-2 text-primary"></i>
                                     <del class="opacity-60">{{ 0 }} {{ translate('Profile Boosting') }}</del>
                                </li>
                                @endif
                                @if ($package->name == 'Bronze')
                                <li class="list-group-item py-2">
                                    <i class="las la-lock mr-2 text-primary"></i>
                                     <del class="opacity-60">{{ 0 }} {{ translate('Profile Boosting') }}</del>
                                </li>
                                @endif
                                @if ($package->name == 'Gold')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                     {{ 1 }} {{ translate('Profile Boosting') }}
                                </li>
                                @endif
                                @if ($package->name == 'Platinum')
                                <li class="list-group-item py-2">
                                    <i class="las la-unlock mr-2 text-primary"></i>
                                     {{ 3 }} {{ translate('Profile Boosting') }}
                                </li>
                                @endif
                                
                            </ul>
                            <div class="mb-5 text-dark text-center">
                                @if ($package->id == 1)
                                    <span class="mb-3 h4 fw-600">{{ translate('Free') }}</span>
                                    <span class="text-secondary d-block">{{$package->validity}} {{translate('Days')}}</span>
                                @endif
                                @if ($package->name == 'Silver')
                                    <span class="mb-3 h4 fw-600">{{single_price($package->price)}}
                                    <del class="mb-3 h6 fw-600">{{1100}}</del>
                                     <span class=" badge badge-inline badge-info bg-primary">{{ translate('60%off') }}</span></span>
                                    <span class="text-secondary d-block">{{$package->validity}} {{translate('Days')}}</span>
                                @endif
                                @if ($package->name == 'Gold')
                                    <span class="mb-3 h4 fw-600">{{single_price($package->price)}}
                                    <del class="mb-3 h6 fw-600">{{4200}}</del>
                                     <span class=" badge badge-inline badge-info bg-primary">{{ translate('80%off') }}</span></span>
                                    <span class="text-secondary d-block">{{$package->validity}} {{translate('Days')}}</span>
                                @endif
                                
                                @if ($package->name == 'Platinum')
                                    <span class="mb-3 h4 fw-600">{{single_price($package->price)}}
                                    <del class="mb-3 h6 fw-600">{{7500}}</del>
                                    <span class=" badge badge-inline badge-info bg-primary">{{ translate('80%off') }}</span></span>
                                    <span class="text-secondary d-block">{{$package->validity}} {{translate('Days')}}</span>
                                @endif
                            
                            </div>
                            <div class="text-center">
                                @if ($package->id != 1)
                                    @if(Auth::check())
                                        <a href="{{ route('package_payment_methods', encrypt($package->id)) }}" type="submit" class="btn btn-primary" >{{translate('Purchase This Package')}}</a>
                                    @else
                                        <button type="submit" onclick="loginModal()" class="btn btn-primary" >{{translate('Purchase This Package')}}</button>
                                    @endif
                                @else
                                    <a href="javascript:void(0);" class="btn btn-light" ><del>{{translate('Purchase This Package')}}</del></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
            
                    
                
</section>
@endsection

@section('modal')
    @include('modals.login_modal')
    @include('modals.package_update_alert_modal')
@endsection

@section('script')
<script type="text/javascript">

	// Login alert
    function loginModal(){
        $('#LoginModal').modal();
    }

    // Package update alert
    function package_update_alert(){
      $('.package_update_alert_modal').modal('show');
    }

</script>
@endsection
