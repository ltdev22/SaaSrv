@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login - Two Factor Authenitcation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.twofactor.verify') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="token" class="col-sm-4 col-form-label text-md-right">Authentication code</label>

                            <div class="col-md-6">
                                <input id="token" type="text" class="form-control{{ $errors->has('token') ? ' is-invalid' : '' }}" name="token">

                                @if ($errors->has('token'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('token') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div>
    </div>
</div>
@endsection
