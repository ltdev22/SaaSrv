@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                My Profile
            </div><!-- /.panel-heading -->

            <div class="card-body">
                <form action="{{ route('account.profile.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div><!-- /.panel-body -->
        </div><!-- /.panel -->
    </div>
</div>
@endsection