{{-- Success Alert --}}
@if (session('status'))
<div class="removable-alert alert alert-info border-2 d-flex align-items-center" role="alert">
    <div class="bg-info mr-3 icon-item">
        <span class="fa fa-info-circle fa-lg text-white">
        </span>
    </div>
    <p class="mb-0 flex-1 mr-3 font-weight-bold text-white" style="font-size: 1.1rem; word-break: break-all;">{!! session('status') !!}</p>
    <button class="close text-white" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif

{{-- Success Alert --}}
@if (session('success'))
<div class="removable-alert alert alert-success border-2 d-flex align-items-center" role="alert">
    <div class="bg-success mr-3 icon-item">
        <span class="fa fa-check-circle-o fa-lg text-white">
        </span>
    </div>
    <p class="mb-0 flex-1 mr-3 font-weight-bold text-white" style="font-size: 1.1rem; word-break: break-all;">{!! session('success') !!}</p>
    <button class="close text-white" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif

{{-- Error Alert --}}
@if (session('error'))
<div class="removable-alert alert alert-danger border-2 d-flex align-items-center" role="alert">
    <div class="bg-danger mr-3 icon-item">
        <span class="fa fa-exclamation-circle fa-lg text-white">
        </span>
    </div>
    <p class="mb-0 flex-1 mr-3 font-weight-bold text-white" style="font-size: 1.1rem; word-break: break-all;">{!! session('error') !!}</p>
    <button class="close text-white" type="button" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
@endif
