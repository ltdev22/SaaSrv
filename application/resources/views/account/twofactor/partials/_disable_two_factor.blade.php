<div class="alert alert-info">
    <i class="fas fa-info-circle"></i>
    The Two Factor Authentication has been enabled for your account.
</div>

<form action="{{ route('account.twofactor.destroy') }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">
        Disable
    </button>
</form>