@extends('frontend.layouts.member_panel')
@section('panel_content')
    <div class="aiz-titlebar mt-2 mb-4">
      <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="h3">{{ translate('Gallery Images') }}</h1>
        </div>
      </div>
    </div>
    <div class="card-columns">
        @foreach ($gallery_images as $key => $gallery_image)
          <div class="card hov-overlay">
            <img src="{{ uploaded_asset($gallery_image->image) }}" class="card-img" alt="{{ translate('Image') }}">
            <div class="overlay">
                <div class="absolute-center">
                    <a target="_blank" href="{{ uploaded_asset($gallery_image->image) }}" class="btn btn-light btn-icon btn-circle btn-sm" title="{{ translate('View') }}">
                        <i class="las la-search"></i>
                    </a>
                    <a onclick="remove_shortlist('{{ route('gallery_image.destroy', $gallery_image->id) }}')" class="btn btn-light btn-icon btn-circle btn-sm" title="{{ translate('Remove') }}">
                        <i class="las la-trash-alt"></i>
                    </a>
                
                </div>
            </div>
          </div>
        @endforeach
    </div>
    
        <div class="card-body">
          <form action="{{ route('gallery-image.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="signinSrEmail">{{translate('Image')}}</label>
                    <div class="col-md-9">
                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="gallery_image" class="selected-files" required>
                        </div>
                        <div class="file-preview box sm">
                        </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col-md-11">
                        <button type="submit" class="btn btn-primary">{{translate('Submit')}}</button>
                    </div>
                </div>
            </form>
        </div>
    
@endsection

@section('modal')

<div class="modal fade report_modal" id="image_delete_modal">
	<div class="modal-dialog modal-dialog-centered modal-dialog-zoom">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{translate('Confirm Delete')}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">{{translate('Are You Sure That You Want To Delete This Image?')}}</p>
                <small class="text-danger">{{ translate('**N.B. Deleting An Image Will Not Refund Your Remaining Gallery Capacity**') }}</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{ translate('Close') }}</button>
                <a id="delete_link" class="btn btn-primary">{{translate('Delete')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function remove_shortlist(url) {
        $("#image_delete_modal").modal("show");
        $("#delete_link").attr("href", url);
    }
</script>
@endsection
