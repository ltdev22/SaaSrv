@extends('account.layouts.default')

@section('account.content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Manage Team
            </div><!-- /.card-header -->

            <div class="card-body">
                <form action="{{ route('account.subscription.team.update') }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="name">Team name</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $team->name) }}" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>
@endsection