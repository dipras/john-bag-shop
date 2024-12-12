@extends('layout')

@section("content")
<div class="flex flex-row">
    <div class="w-[300px] bg-[#FEFFFE] p-2">
        <h1 class="text-center text-2xl font-bold text-[#434B6A]">{{ $web_title }}</h1>
    </div>
    <div class="flex-1 bg-[#F3F3F3] h-[100vh]  pl-2">
        <div class="h-[50px] bg-white flex flex-row justify-end px-5 items-center">
            <div class="flex gap-2">
                <x-tabler-logout />
                <a href="/auth/logout" class="text-[#808080]">LOGOUT</a>
            </div>
        </div>
        @yield("home_content")
    </div>
</div>
@endsection