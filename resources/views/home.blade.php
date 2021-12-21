@if(Auth::user()->role->name == "Admin") @include('layouts.admin_main')
@elseif(Auth::user()->role->name == "User") @include('layouts.user_main')
@else
@endif
