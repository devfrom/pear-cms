@extends('partials.layout')
@section('content')
<div class="third-page">
  <div class="half-page-content mt-20">
    <h4 class="text-header text-upper">
      GM Panel
    </h4>
    <p class="text-beige col-md-6 col-center">
      This is the Gamemaster Panel. You can do all sort of things here!
    </p>
  </div>
</div>
<div class="container col-md-6 text-grey mt-20">
<div class="row">
  <div class="col-md-12 no-padding">
  <h5 class="border-bottom mb-10">
    Management Tools
  </h5>
</div>
<a class="button border orange col-sm" href="{{url('/gm/account/list')}}">
  Account List
</a>
<div class="col-md-12 mt-20 no-padding">
<h5 class="border-bottom mb-10 text-grey">
  Server Tools
</h5>
</div>
<a class="button border orange col-sm" href="{{url('')}}">
  Restart Server
</a>
<a class="button border orange col-sm" href="{{url('')}}">
  Shutdown Server
</a>
<a class="button border orange col-sm" href="{{url('')}}">
  Send Announcement
</a>
</div>
</div>
@endsection