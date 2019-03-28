@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Deactivate my account
            </div><!-- /.panel-heading -->

            <div class="card-body">
                @subscriptionNotCancelled
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-circle"></i>
                        This action will also cancell your current subscription.
                    </div>
                @endsubscriptionNotCancelled
                
                <form action="{{ route('account.deactivate.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="password_current">Please type your password</label>
                        <input type="password" name="password_current" id="password_current" class="form-control{{ $errors->has('password_current') ? ' is-invalid' : '' }}">
                        @if($errors->has('password_current'))
                            <div class="invalid-feedback">{{ $errors->first('password_current') }}</div>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-ban"></i>
                        Deactivate
                    </button>
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
@endsection