@extends('layout')

@section("content")
<div class="flex flex-row">
    <div class="w-[300px] bg-[#FEFFFE] p-2">
        <h1 class="text-center text-2xl font-bold text-[#434B6A]">{{ $web_title }}</h1>
    </div>
    <div class="flex-1 bg-[#F3F3F3] h-[100vh]">
        @yield("home_content")
    </div>
</div>
@endsection