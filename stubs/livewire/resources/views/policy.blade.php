@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Privacy Policy')

@section('page-style')
{{-- Page Css files --}}
@vite('resources/assets/vendor/scss/pages/page-auth.scss')
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-6">
  <div class="authentication-inner py-6">
    <div class="card">
      <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-6">
          <a href="{{url('/')}}" class="app-brand-link">
            <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
            <span class="app-brand-text demo text-heading fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        {!! $policy !!}
      </div>
    </div>
  </div>
</div>
@endsection
