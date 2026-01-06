<header class="absolute inset-x-0 top-0 z-50 bg-white shadow">
    <nav class="flex items-center justify-between p-6 lg:px-8">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Gestion Stock Matériaux</span>
                <img
                    src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                    alt="Logo"
                    class="h-8 w-auto"
                />
            </a>
        </div>

        <!-- Mobile button -->
        <div class="flex lg:hidden">
            <button type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Ouvrir le menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5" class="size-6">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>

        <!-- Desktop menu -->
        <div class="hidden lg:flex lg:gap-x-12 text-lg font-semibold text-gray-900">
            <a href="#">Accueil</a>
            <a href="#">Produits</a>
            <a href="#">Fournisseurs</a>
            <a href="#">À propos</a>
        </div>

        <!-- Auth -->
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            @auth
                <a href="#" class="text-lg font-semibold text-gray-900">
                    Dashboard →
                </a>
            @else
                <a href="#" class="text-lg font-semibold text-gray-900">
                    Se connecter →
                </a>
            @endauth
        </div>
    </nav>
</header>
