@extends('layouts.app')
@section('title', 'View All Users')
@section('content')
  <!--Page Header Start (Blade Component)-->
    <x-header page_title="{{ __('Users') }}" page_meta="{{ __('View All Users') }}" page_button="show" page_button_link="{{ route('users.create') }}" page_button_text="{{ __('Create New User') }}" />
  <!--Page Header End (Blade Component)-->
@endsection
