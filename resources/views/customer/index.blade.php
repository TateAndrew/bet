@extends('customer.layouts.master')
@section('title',' DASHBOARD')
@section('main-content')
<section>
  <div class="container">
    <div class="row">
      @include('customer.layouts.sidebar')
      
      <div class="col-9">
        <div class="card">
          @include('customer.layouts.nav')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
@endpush