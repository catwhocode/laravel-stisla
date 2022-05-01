@extends('layouts.master')

@section('content')
  <div id="output-status"></div>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Jump To</h4>
        </div>
        <div class="card-body">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item"><a href="{{ route('setting.profile.index') }}" class="nav-link @if(\Route::currentRouteName() == "setting.profile.index") active @endif">Update Profile</a></li>
            <li class="nav-item"><a href="{{ route('setting.password.index') }}" class="nav-link @if(\Route::currentRouteName() == "setting.password.index") active @endif">Update Password</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      @yield('content-child')

    </div>
  </div>
@endsection

@push('css')
  <!--- Contoh Stylesheet --->
@endpush

@push('js')
  <!--- Contoh Javascript --->
@endpush
