<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Team Members
            </div><!-- /.card-header -->

            <div class="card-body">

                <form action="{{ route('account.subscription.team.member.store') }}" class="form-inline float-right" method="POST">
                    @csrf

                    <div class="form-group mb-2 mx-sm-2">
                        <label for="email" class="sr-only">Add member by email</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Add member by email">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <button type="submit" class="btn btn-default mb-2">Add member</button>
                </form>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Member name</th>
                            <th>Member email</th>
                            <th>Added</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($team->members->count())
                            @foreach($team->members as $member)
                                <tr>
                                    <td>{{ $member->id }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->pivot->created_at->toDateString() }}</td>
                                    <td>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('remove-member-{{ $member->id }}').submit()">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" align="center">
                                    There are no team members at the moment
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                @if($team->members->count())
                    @foreach($team->members as $member)
                        <form action="{{ route('account.subscription.team.member.destroy', $member) }}" id="remove-member-{{ $member->id }}" class="hidden" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    @endforeach
                @endif

            </div><!-- /.card-body -->
        </div><!-- /.card -->
    </div>
</div>