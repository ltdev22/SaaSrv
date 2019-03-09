<div class="row justify-content-center alert-wrapper">
    <div class="col-md-8">
        <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
            <i class="fas fa-{{ $icon }}"></i> {{ $slot }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div><!-- /.alert -->
    </div>
</div><!-- /.alert-wrapper -->