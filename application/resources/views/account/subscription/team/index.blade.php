@extends('account.layouts.default')

@section('account.content')

    @include('account.subscription.team.partials._edit_team')

    <br>

    @include('account.subscription.team.partials._team_members')

@endsection