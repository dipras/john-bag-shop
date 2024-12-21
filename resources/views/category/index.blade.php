@extends("home")

@section("home_content")
<div class="p-2">
    <div class="py-5">
        <button class="bg-[#19427D] text-white px-6 py-2 flex text-md items-center gap-1 rounded">
            <x-bi-plus class="w-8 h-8" />
            Insert Data
        </button>
    </div>
    <div class="bg-white rounded overflow-hidden">
        <div class="bg-[#434B6A] p-3 flex flex-row gap-2 items-center">
            <x-bi-box class="" fill="#FFF" />
            <h4 class="text-white">Data produk</h4>
        </div>
        <div class="px-6 pb-4">
            <table id="myTable" class="display responsive nowrap">
                <thead>
                    <tr>
                        <th style="width: 10%">No Kategori</th>
                        <th>Kategori</th>
                        <th>Dibuat pada</th>
                        <th>Diubah pada</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{sprintf("K%04d", $cat->id);}}</td>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->created_at}}</td>
                        <td>{{$cat->updated_at}}</td>
                        <td>
                            <button class="bg-[#F2A007] text-white px-2 py-1 rounded">Edit</button>
                            <button class="bg-[#EF3A25] text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection