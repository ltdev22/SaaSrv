@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Two Factor Authentication
            </div><!-- /.panel-heading -->

            <div class="card-body">
                <form action="{{ route('account.twofactor.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="dial_code">Dial code</label>
                        <select name="dial_code" id="dial_code" class="form-control{{ $errors->has('dial_code') ? ' is-invalid' : '' }}">
                            @foreach($countries as $country)
                                <option value="{{ $country->dial_code }}"{{ old('dial_code') === $country->dial_code ? ' selected="selected"' : '' }}>
                                    {{ $country->name }} (+{{ $country->dial_code }})
                                </option>
                            @endforeach
                        </select>
                        @if($errors->has('dial_code'))
                            <div class="invalid-feedback">{{ $errors->first('dial_code') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone" id="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}">
                        @if($errors->has('phone'))
                            <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary">
                        Enable
                    </button>
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
@endsection