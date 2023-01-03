@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', 'Verify Email')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">

    <!-- Logo -->
    <div class="app-brand justify-content-center mb-5">
      <a href="{{url('/')}}" class="app-brand-link">
        <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
        <span class="app-brand-text demo text-body fw-bold">{{config('variables.templateName')}}</span>
      </a>
    </div>
    <!-- /Logo -->

    <!-- Verify Email -->
    <div class="card">
      <div class="card-body">
        <h4 class="mb-3">Verify your email ✉️</h4>

        @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
          <div class="alert-body">
            A new verification link has been sent to the email address you provided during registration.
          </div>
        </div>
        @endif
        <p class="text-start">
          Account activation link sent to your email address: <strong>{{Auth::user()->email}}</strong> Please follow the link inside to continue.
        </p>
        <div class="mt-4 d-flex flex-column justify-content-between gap-2">
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="w-100 btn btn-label-secondary">
              click here to request another
            </button>
          </form>

          <form method="POST" action="{{route('logout')}}">
            @csrf

            <button type="submit" class="w-100 btn btn-danger">
              Log Out
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Verify Email -->
  </div>
</div>
@endsection