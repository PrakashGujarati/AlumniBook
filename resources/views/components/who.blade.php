@if (Auth::guard('web')->check())
  USER
{{--
@else
  <p class="text-danger">
    You are Logged Out as a <strong>USER</strong>
  </p>
  --}}
@endif


@if (Auth::guard('admin')->check())
  ADMIN

{{--@else
  <p class="text-danger">
    You are Logged Out as a <strong>ADMIN</strong>
  </p>
--}}
@endif