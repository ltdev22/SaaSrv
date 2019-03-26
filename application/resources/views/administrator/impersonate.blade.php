@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Impersonate a user</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.impersonate.start') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-form-label">{{ __('User\'s e-mail address') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <button type="submit" class="btn btn-primary">
                            Impersonate
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
