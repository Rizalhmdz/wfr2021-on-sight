@if(Auth::user()->role_id == 1) @include('admin.main')
@elseif(Auth::user()->role_id == 2) @include('user.main')
@else @include('layouts.user_main')
@endif
