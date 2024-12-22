@extends('layout')

@section("content")
<div class="flex flex-row">
    <div class="w-[300px] bg-[#FEFFFE] px-8 py-4 flex flex-col gap-8">
        <h1 class="text-center text-2xl font-bold text-[#434B6A]">JOHN BAG SHOP</h1>
        <div class="h-[200px] w-[200px] rounded-[50%] bg-[#F3F3F3] flex justify-center items-center self-center">
            <x-far-user class="h-[120px]" fill="#434B6A" />
        </div>
        <p class="text-lg font-bold text-center">{{$user_info->name}}</p>
        <div class="flex flex-col w-full gap-4" id="sidebar">
            <a class="flex flex-row items-center gap-4 p-2 {{ explode('.', Route::currentRouteName())[0] == 'dashboard' ? 'active-navbar' : '' }}" href="/">
                <x-antdesign-home-o class="h-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Dashboard</p>
            </a>
            <a href="/category" class="flex flex-row items-center gap-4 p-2 {{ explode('.', Route::currentRouteName())[0] == 'category' ? 'active-navbar' : '' }}">
                <x-antdesign-tag-o class="h-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Kategori</p>
            </a>
            <a href="/product" class="flex flex-row items-center gap-4 p-2 {{ explode('.', Route::currentRouteName())[0] == 'product' ? 'active-navbar' : '' }}">
                <x-bi-box class="h-8 w-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Produk</p>
            </a>
            <div class="flex flex-row items-center gap-4 p-2">
                <x-bi-bag class="h-8 w-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Transaksi</p>
            </div>
            <div class="flex flex-row items-center gap-4 p-2">
                <x-antdesign-calendar-o class="h-8 w-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Laporan</p>
            </div>
            <div class="flex flex-row items-center gap-4 p-2">
                <x-bi-sliders class="h-8 w-8" fill="#434B6A" />
                <p class="text-xl text-[#434B6A]">Setting</p>
            </div>
        </div>
    </div>
    <div class="flex-1 bg-[#F3F3F3] h-[100vh] pl-2">
        <div class="h-[50px] bg-white flex flex-row justify-between px-5 items-center">
            <p>{{ $web_title }}</p>
            <a href="/auth/logout" class="flex gap-2">
                <x-tabler-logout />
                <p class="text-[#808080]">LOGOUT</p>
            </a>
        </div>
        @yield("home_content")
    </div>
</div>
@endsection