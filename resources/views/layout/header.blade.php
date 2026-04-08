<div class="bg-olsc-teal text-white text-sm">

    <div class="max-w-7xl mx-auto px-4 md:px-6 py-3
                flex flex-col md:flex-row
                items-center justify-center
                gap-2 md:gap-3
                text-center">

        <span class="font-semibold uppercase tracking-wide">
            Réabonnements ouverts
        </span>

        <span class="hidden md:inline text-white/70">
            |
        </span>

        <span class="text-white/90">
            Les souscriptions pour la saison 2025-2026 sont actuellement ouvertes.
        </span>

        <a href="#"
           class="font-semibold underline underline-offset-4 hover:text-olsc-yellow transition">

            En savoir plus

        </a>

    </div>

</div>


<header class="sticky top-0 z-50">

    <!-- TOP HEADER -->

    <div class="bg-white border-b border-gray-200 text-sm hidden md:block">

        <div class="max-w-7xl mx-auto px-6 py-2 flex justify-between items-center">

            <div class="flex items-center gap-6 text-gray-600">

                <a href="#" class="hover:text-olsc-red transition">
                    Souscriptions
                </a>

                <a href="#" class="hover:text-olsc-red transition">
                    Billetterie
                </a>

                <a href="#" class="hover:text-olsc-red transition">
                    Membership
                </a>

                <a href="#" class="hover:text-olsc-red transition">
                    Activités
                </a>

            </div>

            <a href="#" class="text-olsc-red font-semibold hover:text-olsc-teal transition">
                Devenir membre
            </a>

        </div>

    </div>

    <!-- MAIN HEADER -->

    <div class="bg-olsc-red text-white shadow-md">

        <div class="max-w-7xl mx-auto px-6 py-3 md:py-4 flex justify-between items-center">

            <!-- LOGO -->

            <img src="{{asset('storage/logo.png')}}"
                 class="h-12 md:h-16 w-auto">

            <!-- DESKTOP NAV -->

            <nav class="hidden md:flex items-center gap-8 font-semibold">

                <a href="#" class="hover:text-olsc-yellow transition">
                    Accueil
                </a>

                <a href="#" class="hover:text-olsc-yellow transition">
                    Association
                </a>

                <a href="#" class="hover:text-olsc-yellow transition">
                    Billetterie
                </a>

                <a href="#" class="hover:text-olsc-yellow transition">
                    Guide Liverpool
                </a>

                <a href="#" class="hover:text-olsc-yellow transition">
                    FAQ
                </a>

                <a href="#" class="hover:text-olsc-yellow transition">
                    Contact
                </a>

                <a href="#"
                   class="bg-white text-olsc-red px-6 py-2 font-bold tracking-wide hover:bg-gray-100 transition">

                    Forum

                </a>

            </nav>

            <!-- MOBILE BUTTON -->

            <button id="menuBtn"
                    class="md:hidden text-2xl">

                ☰

            </button>

        </div>

        <!-- MOBILE MENU -->

        <div id="mobileMenu"
             class="hidden md:hidden bg-olsc-red border-t border-red-700">

            <nav class="flex flex-col p-6 gap-5 font-semibold">

                <a href="#" class="hover:text-olsc-yellow">
                    Accueil
                </a>

                <a href="#">
                    Association
                </a>

                <a href="#">
                    Billetterie
                </a>

                <a href="#">
                    Guide Liverpool
                </a>

                <a href="#">
                    FAQ
                </a>

                <a href="#">
                    Contact
                </a>

                <a href="#"
                   class="bg-white text-olsc-red text-center py-3 font-bold">

                    Forum

                </a>

            </nav>

        </div>

    </div>

</header>
