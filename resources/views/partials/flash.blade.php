@if($message = session('message'))
  <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">{!! $message !!}</div>
@endif