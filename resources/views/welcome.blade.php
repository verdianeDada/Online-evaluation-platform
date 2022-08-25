@extends('layouts.config') @section('body') @include('auth.login')
<div id="welcome-page" style="font-family:cursive;">
    @include('welcome-page.register-modal')
     @include('welcome-page.about')
    @include('welcome-page.staff')
    @include('welcome-page.news')
   
</div>
@endsection