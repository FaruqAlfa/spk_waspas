@extends('master')

@section('title', 'Index')

@section('main-content')
<div class="p-4 border border-purple mt-14 dark:border-none shadow-md rounded-lg bg-gray-100 dark:bg-secondary">
    <div class="row">
        <div class="flex flex-col col-lg-6 margin-tb m-6">
            <div class="pull-left px-6 py-2">
                <div class="text-primary dark:text-purple m-4 font-semibold text-2xl tracking-wide">ALTERNATIF</div>
            </div>
            <div class="fixed right-8 mt-2">
                <a class="text-white text-semibold bg-[#726274] hover:bg-[#47384B] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                    href="{{ route('data-alternatif.create') }}">Tambah Alternatif</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md rounded-lg md:mx-20">
        <table class="w-full text-sm">
            <thead class="text-xs text-primary dark:text-purple uppercase bg-purple dark:bg-table-head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Alternatif
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            @foreach ($alternatif as $Alternatif)
                <tbody class="text-xs md:text-base">
                    @if ($alternatif->isEmpty())
                    <tr>
                        <td colspan="6" class="dark:bg-primary text-center py-4 text-primary dark:text-purple">
                            List Alternatif Kosong
                        </td>
                    </tr>
                    @else
                    <tr class="bg-gray-100 dark:bg-primary border-b border-primary dark:border-purple last:border-0 text-primary dark:text-purple">
                        <th scope="row" class="text-center py-4 font-medium whitespace-nowrap dark:text-white">
                            {{ $Alternatif->id }}
                        </th>
                        <td class="text-center py-4">
                            {{ $Alternatif->nama_alternatif }}
                        </td>
                        <td class="text-center py-4">
                            <form action="{{ route('data-alternatif.destroy', $Alternatif->id) }}" method="POST"
                                onsubmit="return confirm('Apakah anda yakin untuk menghapus data {{ $Alternatif->nama_alternatif }}?')">
                                <a class="text-[#41403D] bg-[#E9E2D0] hover:bg-[#BEBAAE] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#E9E2D0] dark:hover:bg-[#BEBAAE] focus:outline-none dark:focus:ring-blue-800" href="{{ route('data-alternatif.edit', $Alternatif->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-[#41403D] bg-[#E9E2D0] hover:bg-[#BEBAAE] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#E9E2D0] dark:hover:bg-[#BEBAAE] focus:outline-none dark:focus:ring-blue-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                </tbody>
            @endforeach
        </table>
        <div class="d-flex">
            {{ $alternatif->links() }}
        </div>
    </div>
</div>
@endsection
