@extends('account.layouts.default')

@section('account.content')
    <div class="panel panel-default panel-profile">
        <div class="panel-body">
            <form action="{{ route('account.password.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="password_current">Current password</label>
                    <input type="password" name="password_current" id="password_current" class="form-control{{ $errors->has('password_current') ? ' is-invalid' : '' }}">
                    @if($errors->has('password_current'))
                        <div class="invalid-feedback">{{ $errors->first('password_current') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">New password</label>
                    <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                    @if($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm new password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">
                    @if($errors->has('password_confirmation'))
                        <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>
                
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-lock"></i>
                    Change Password
                </button>
            </form>
        </div>
    </div><!-- /.panel-profile -->
@endsection