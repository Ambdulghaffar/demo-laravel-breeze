@extends('layouts.app')

@section('content')

<div class="bg-white">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Gestion Stock Matériaux</span>
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                        alt="Logo" class="h-8 w-auto" />
                </a>
            </div>

            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Ouvrir le menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"
                        class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex lg:gap-x-12 text-xl font-semibold text-gray-900">
                <a href="#" class="{{ route('/') }}">Accueil</a>
                <a href="#" class="">Produits</a>
                <a href="#" class="">Fournisseurs</a>
                <a href="#" class="">À propos</a>
            </div>

            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="{{ route('login') }}" class="text-xl font-semibold text-gray-900">
                    Se connecter <span aria-hidden="true">→</span>
                </a>
            </div>
        </nav>
    </header>

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 text-center">
            <h1 class="text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                Gestion intelligente des matériaux de construction
            </h1>

            <p class="mt-8 text-lg font-medium text-gray-500 sm:text-xl">
                Une application web moderne pour gérer efficacement le stock,
                les commandes, les fournisseurs et la distribution des matériaux
                de construction en toute simplicité.
            </p>

            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow hover:bg-indigo-500">
                    Commencer
                </a>
                <a href="#" class="text-sm font-semibold text-gray-900">
                    En savoir plus →
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- </html> --}}
