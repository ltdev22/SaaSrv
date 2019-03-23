<form action="{{ route('account.twofactor.verify') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="token">Verification code</label>
        <input type="text" name="token" id="token" class="form-control{{ $errors->has('token') ? ' is-invalid' : '' }}">
        @if($errors->has('token'))
            <div class="invalid-feedback">{{ $errors->first('token') }}</div>
        @endif
    </div>
    
    <button type="submit" class="btn btn-primary">
        Verify
    </button>
</form>