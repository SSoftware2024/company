@extends('layout.admin', ['tab_title' => 'Projetos'])

@section('content')
    <div class="flex justify-center w-full">
        <div class="w-full sm:w-[800px]">
            <x-card.header title="Cadastrar Projeto">
                <livewire:admin.project.form>
            </x-card.header>
        </div>
    </div>
@endsection
