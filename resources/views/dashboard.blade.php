@extends("home")

@section("home_content")
<div class="p-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-screen-md">
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl relative flex flex-col justify-center pl-4">
            <x-antdesign-tag-o class="h-24 absolute right-[10px] top-[50px]" fill="#434B6A" />
            <h1 class="text-5xl text-[#434B6A] mb-3">3</h1>
            <h2 class="text-2xl font-medium text-[#434B6A] mb-2">Kategori</h2>
            <h3 class="text-xl font-light text-[#434B6A]">Total kategori</h3>
        </div>
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl relative">
            <x-bi-box class="h-24 w-24 absolute right-[20px] top-[50px]" fill="#434B6A" />
        </div>
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl relative">
            <x-bi-calendar-week class="h-24 w-24 absolute right-[20px] top-[50px]" fill="#434B6A" />
        </div>

    </div>
</div>
@endsection