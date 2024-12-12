@extends("home")

@section("home_content")
<div class="p-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-screen-md">
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl relative">
            <x-antdesign-tag-o class="h-24 absolute right-[10px] top-[50px]" fill="#434B6A" />
        </div>
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl relative">
            <x-bi-box class="h-24 w-24 absolute right-[20px] top-[50px]" fill="#434B6A" />
        </div>
        <div class="h-[200px] bg-white border-2 border-[#434B6A] rounded shadow-xl">

        </div>

    </div>
</div>
@endsection