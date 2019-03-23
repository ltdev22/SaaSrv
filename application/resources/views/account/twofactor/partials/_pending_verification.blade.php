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

    <a onclick="event.preventDefault(); document.getElementById('cancel-tfa-form').submit();" class="btn btn-danger" href="#">
        Cancel verification
    </a>
</form>

<form action="{{ route('account.twofactor.destroy') }}" id="cancel-tfa-form" class="hidden" method="POST">
    @csrf
    @method('DELETE')
</form>