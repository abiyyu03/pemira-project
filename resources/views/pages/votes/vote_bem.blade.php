@extends('layouts.vote')

@section('content')
    <h1 class="text-4xl mb-4 text-white text-center">
        Vote Presma dan Wapresma
    </h1>
    <div class="grid grid-cols-2 grid-gap-2">
        @foreach ($candidates as $item)
            <!-- cards -->
            <div
                class="shadow rounded-xl bg-background p-6 mx-2 text-center transition ease-in-out delay-100 hover:scale-105">
                <a href="#" onclick="my_modal_{{ $item->id }}.showModal()">
                    <img src="{{ asset('img/candidate/paslon2.jpg') }}" alt="" width="200" class="mx-auto" />
                    <h1 class="my-6 text-3xl text-secondary">
                        {{ $item->leader->name }}<br> &<br>
                        {{ $item->vice_leader->name }}</h1>
                </a>
                <!-- <a href="#" class="bg-secondary text-white p-3 rounded-lg">Visi & Misi</a> -->
            </div>
            <dialog id="my_modal_{{ $item->id }}" class="modal">
                <div class="modal-box">
                    <form method="dialog">
                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">
                            ✕
                        </button>
                    </form>
                    <h3 class="font-bold text-lg mb-4">
                        Apakah Kamu sudah yakin ?
                    </h3>
                    <p class="py-4">{!! $item->vision_mission !!}</p>
                    <div class="modal-action">
                        <form action="{{ route('temp_vote') }}" method="post">
                            @csrf
                            <input type="hidden" name="candidate_id" value="{{ $item->id }}">
                            <button type="submit" class="btn bg-green-500 text-secondary">Ya, Vote !</button>
                        </form>
                    </div>
                </div>
            </dialog>
        @endforeach
    </div>
    <div class="mx-auto text-center">
        <ul class="steps mt-12 flex justify-center bg-grey max-w-fit p-2 rounded-lg">
            <li class="step text-white step-primary font-bold" data-content="1">
                BEM
            </li>
            <li class="step text-white font-bold" data-content="2">HIMA</li>
        </ul>
    </div>
@endsection
