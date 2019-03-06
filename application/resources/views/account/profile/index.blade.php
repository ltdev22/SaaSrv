@extends('account.layouts.default')

@section('account.content')
    <div class="panel panel-default panel-profile">
        <div class="panel-body">
            <form action="{{ route('account.profile.update') }}" method="POST">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" name="email" value="{{ old('email', auth()->user()->email) }}" id="email" class="form-control">
                </div>
            </form>

            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div><!-- /.panel-profile -->
@endsection