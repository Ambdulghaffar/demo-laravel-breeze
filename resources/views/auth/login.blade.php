@extends('layouts.app')

@section('content')
<div class="flex min-h-screen flex-col justify-center px-6 py-12 lg:px-8 bg-gray-100">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img
            src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
            alt="Logo"
            class="mx-auto h-10 w-auto"
        />

        <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
            Connexion à la plateforme
        </h2>

        <p class="mt-2 text-center text-lg text-gray-600">
            Gestion du stock de matériaux de construction
        </p>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form method="POST"  class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block text-lg font-medium text-gray-700">
                    Adresse e-mail
                </label>
                <div class="mt-2">
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        autocomplete="email"
                        class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    />
                </div>
            </div>

            <!-- Password -->
            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-lg font-medium text-gray-700">
                        Mot de passe
                    </label>
                    <div class="text-lg">
                        <a href="{{ route('password.request') }}"
                           class="font-semibold text-indigo-600 hover:text-indigo-500">
                            Mot de passe oublié ?
                        </a>
                    </div>
                </div>
                <div class="mt-2">
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        autocomplete="current-password"
                        class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    />
                </div>
            </div>

            <!-- Submit -->
            <div>
                <button
                    type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-600"
                >
                    Se connecter
                </button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Accès réservé aux utilisateurs autorisés
        </p>
    </div>
</div>

@endsection
