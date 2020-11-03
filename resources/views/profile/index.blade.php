@extends('templates.default')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            @include('user.partials.userblock')
        </div>
        <div class="col-lg-4 col-lg-offset-3">
            <h4>{{ $user->getFirstNameOrUsername() }} друзья.</h4>
            @if(!$user->getAllFriends()->count())
                <p>{{ $user->getFirstNameOrUsername() }} нет друзей.</p>
            @else
                @foreach($user->getAllFriends() as $user)
                    @include('user.partials.userblock')
                @endforeach
            @endif
        </div>
    </div>
@endsection
