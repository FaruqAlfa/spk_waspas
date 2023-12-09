@extends('master')
@section('content')
    <div class="flex flex-col items-center pb-10">
        <h5 class="mb-1 text-xl font-medium text-black dark:text-white py-3">Tambah Data Alternatif</h5>
        <div
            class="max-w-sm py-3 px-20 bg-[#726274] border border-gray-200 rounded-lg shadow dark:bg-[#726274] dark:border-gray-700">
            <div class="input-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{ route('data-alternatif.store') }}" id="myForm" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group py-2">
                        <label for="nama_alternatif" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Alternatif</label>
                        <input type="text" name="nama_alternatif" id="nama_alternatif" aria-describedby="nama_alternatif"
                            class="formcontrol bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-logo focus:border-green-logo block w-full p-2.5 dark:bg-white dark:border-gray-600">
                    </div>
                    <br>
                    <button type="submit"
                        class="text-[#41403D] bg-[#E9E2D0] hover:bg-[#BEBAAE] focus:ring-2 focus:ring-gray-700 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
