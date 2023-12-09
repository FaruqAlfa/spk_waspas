@extends('master')
@section('content')
    <div class="row">
        <div class="flex flex-col col-lg-6 margin-tb m-6">
            <div class="pull-left px-6 py-2">
                <p class="text-2xl font-bold">KRITERIA</p>
            </div>
            <div class="fixed right-8 mt-2">
                <a class="text-white text-semibold bg-[#726274] hover:bg-[#47384B] font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2"
                    href="{{ route('data-kriteria.create') }}">Tambah Kriteria</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-[#726274] dark:text-white">
                <tr>
                    <th scope="col" class="px-6 py-2">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Nama Kriteria
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Bobot Kriteria
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Jenis Kriteria
                    </th>
                    <th scope="col" class="px-6 py-2">
                        Action
                    </th>
                </tr>
            </thead>
            @foreach ($kriteria as $Kriteria)
                <tbody>
                    <tr class="bg-white border-b dark:bg-white dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-gray-900">
                            {{ $Kriteria->id }}
                        </th>
                        <td class="px-6 py-2 text-gray-900">
                            {{ $Kriteria->nama_kriteria }}
                        </td>
                        <td class="px-6 py-2 text-gray-900">
                            {{ $Kriteria->bobot_kriteria }}
                        </td>
                        <td class="px-6 py-2 text-gray-900  ">
                            {{ $Kriteria->jenis_kriteria }}
                        </td>
                        <td class="px-6 py-2">
                            <form action="{{ route('data-kriteria.destroy', $Kriteria->id) }}" method="POST"
                                onsubmit="return confirm('Apakah anda yakin untuk menghapus data {{ $Kriteria->nama_kriteria }}?')">
                                <a class="text-[#41403D] bg-[#E9E2D0] hover:bg-[#BEBAAE] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#E9E2D0] dark:hover:bg-[#BEBAAE] focus:outline-none dark:focus:ring-blue-800" href="{{ route('data-kriteria.edit', $Kriteria->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-[#41403D] bg-[#E9E2D0] hover:bg-[#BEBAAE] focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-[#E9E2D0] dark:hover:bg-[#BEBAAE] focus:outline-none dark:focus:ring-blue-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="d-flex">
            {{ $kriteria->links() }}
        </div>
    </div>
@endsection
