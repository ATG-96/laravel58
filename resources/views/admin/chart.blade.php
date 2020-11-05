@extends('layouts.master')

@section('title')
  Body Temperature Dashboard
@endsection

@section('l3')
    class="active "
@endsection

@section('content')
<div>
    {!!$pie->html() !!}
</div>
  
 
{!! $pie-> scripts() !!}
@endsection

@section('scripts')
    
@endsection