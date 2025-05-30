@extends('layout.master')
@section('content')
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Image Related</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Certification</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">@if(!is_null($certification)) Update @else Add @endif Certification</h6>
        </nav>
      
      </div>
    </nav>
    <!-- End Navbar -->
    @livewire('edit-create-certification-component',['certification'=> $certification])
  </div>
@endsection
