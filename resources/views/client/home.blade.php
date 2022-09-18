@extends('layouts.client')

@section('content')
<div class="flex justify-center">
    <div class="mx-12 w-[1100px] h-[500px]">
        <div class="grid grid-cols-2 h-[500px] gap-4">
            <div class="flex flex-column justify-center items-center">
                <div class="text-4xl w-[350px] font-bold text-slate-900">
                    PENDETEKSI LEVEL
                    ANAK AUTIS
                </div>
                <div class="text-lg w-[350px] mt-3">
                    merupakan sebuah aplikasi pendeteksi level anak autis melalui pertanyaan yang dibuat oleh expert dalam mendeteksi tingkat
                    penyakit autis pada anak
                </div>
                <div class="text-lg mt-3 flex w-[350px] justify-start">
                    <a href="{{ url('/') }}">
                        <button class="py-2 px-4 bg-[#FF0000] hover:font-bold transition text-white shadow-xl font-medium" >
                            Mulai Survei
                        </button>
                        </a>
                    </div>
            </div>
            <div>
                <img src="{{URL::asset('/image/autis-example.png')}}" class="w-[500px]">
            </div>
          </div>
    </div>
</div>
@endsection