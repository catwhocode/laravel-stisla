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
            <li class="nav-item"><a href="#" class="nav-link active">General</a></li>
            <li class="nav-item"><a href="#" class="nav-link">SEO</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Email</a></li>
            <li class="nav-item"><a href="#" class="nav-link">System</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Security</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Automation</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      @yield('content')

    </div>
  </div>
@endsection

@push('css')
  <!--- Contoh Stylesheet --->
@endpush

@push('js')
  <!--- Contoh Javascript --->
@endpush
