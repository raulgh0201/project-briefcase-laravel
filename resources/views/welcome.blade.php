
@extends('admin.layouts.app')
@section('title') 
{{$client->name}}
@endsection
@section('style')
    <link href="{{asset('assets/css/CRM/Admin/contact/common/contact/contact-global.css')}}" rel="stylesheet">
@endsection
@section('left-menu')
    @include('admin.layouts.menus.sidebar')
@endsection

@section('content')
@endsection

