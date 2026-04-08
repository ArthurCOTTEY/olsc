<section class="overflow-hidden bg-olsc-teal text-white">

    <div class="marquee flex whitespace-nowrap">

        <div class="marquee-content flex items-center
                    gap-8 md:gap-12
                    py-3 md:py-4">

            @for($i = 0; $i < 8; $i++)

                <div class="flex items-center gap-2
                            font-display
                            text-base md:text-xl
                            font-bold">

                    Walk On • Walk On • With Hope In Your Heart •
                    And You'll Never Walk Alone • You'll Never Walk Alone

                </div>

            @endfor

        </div>

    </div>

</section>


<footer class="bg-olsc-red text-white">

    <div class="max-w-7xl mx-auto
                px-4 md:px-6
                py-12 md:py-16
                grid
                sm:grid-cols-2
                md:grid-cols-4
                gap-10 md:gap-12">

        <div>

            <img src="{{asset('storage/logo.png')}}"
                 class="h-12 md:h-14 mb-5 md:mb-6">

            <p class="text-sm text-red-100 leading-relaxed">
                Official Liverpool Supporters Club France depuis 2002.
                Rejoignez la communauté des supporters français des Reds.
                YNWA.
            </p>

        </div>


        <!-- NAVIGATION -->

        <div>

            <h3 class="font-semibold text-white
                       mb-4 md:mb-6
                       tracking-wide
                       text-sm md:text-base">

                Navigation

            </h3>

            <ul class="space-y-2 md:space-y-3 text-sm">

                <li><a href="#" class="hover:text-olsc-yellow transition">Accueil</a></li>

                <li><a href="#" class="hover:text-olsc-yellow transition">Association</a></li>

                <li><a href="#" class="hover:text-olsc-yellow transition">Billetterie</a></li>

                <li><a href="#" class="hover:text-olsc-yellow transition">Guide Liverpool</a></li>

                <li><a href="#" class="hover:text-olsc-yellow transition">FAQ</a></li>

                <li><a href="#" class="hover:text-olsc-yellow transition">Contact</a></li>

            </ul>

        </div>


        <!-- OLSC -->

        <div>

            <h3 class="font-semibold text-white
                       mb-4 md:mb-6
                       tracking-wide
                       text-sm md:text-base">

                OLSC France

            </h3>

            <ul class="space-y-2 md:space-y-3 text-sm">

                <li>
                    <a href="#" class="hover:text-olsc-yellow transition">
                        Souscriptions
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-olsc-yellow transition">
                        Membership
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-olsc-yellow transition">
                        Activités
                    </a>
                </li>

                <li>
                    <a href="#" class="hover:text-olsc-yellow transition">
                        Forum
                    </a>
                </li>

            </ul>

        </div>


        <!-- INFOS -->

        <div class="flex justify-start md:justify-center items-start">

            <img src="{{asset('storage/ynwa.png')}}"
                 class="max-w-[140px] md:max-w-[180px] w-full">

        </div>

    </div>


    <!-- BOTTOM -->

    <div class="bg-olsc-red-dark">

        <div class="max-w-7xl mx-auto
                    px-4 md:px-6
                    py-5 md:py-6
                    flex flex-col md:flex-row
                    justify-between
                    items-center
                    gap-4
                    text-sm">

            <div class="text-red-200 text-center md:text-left">

                © {{date('Y')}} OLSC France - Liverpool France | You'll Never Walk Alone

            </div>

            <div class="flex gap-6 md:gap-8">

                <a href="#" class="hover:text-olsc-yellow transition text-red-200">
                    Mentions légales
                </a>

                <a href="#" class="hover:text-olsc-yellow transition text-red-200">
                    Confidentialité
                </a>

            </div>

        </div>

    </div>

</footer>
