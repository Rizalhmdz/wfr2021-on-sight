@if(Auth::user()->role->name == "Admin") @include('admin.main')
@elseif(Auth::user()->role->name == "User") @include('user.main')
@else @include('layouts.user_main')
@endif
