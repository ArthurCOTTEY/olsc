@extends('layout.default')

@section('body')

    <section class="relative min-h-[500px] md:min-h-[650px] flex items-center">

        <!-- IMAGE BACKGROUND -->

        <div class="absolute inset-0">

            <img src="{{asset('storage/groupe.jpg')}}"
                 class="w-full h-full object-cover">

            <div class="absolute inset-0 bg-olsc-red/50"></div>

        </div>

        <!-- CONTENT -->

        <div class="relative max-w-7xl mx-auto px-4 md:px-6
                py-16 md:py-24 text-white">

            <h1 class="text-3xl sm:text-4xl md:text-6xl
                   font-bold max-w-3xl leading-tight">

                Official Liverpool Supporters Club France

            </h1>

            <p class="mt-3 md:mt-4
                  text-xl md:text-2xl
                  text-olsc-yellow font-semibold tracking-wide">

                You'll Never Walk Alone

            </p>

            <p class="mt-5 md:mt-6
                  text-base md:text-lg
                  text-white/90
                  max-w-2xl
                  leading-relaxed">

                Association officielle reconnue par Liverpool FC, OLSC France permet aux supporters
                français d'accéder à la billetterie officielle, d'organiser leurs déplacements à
                Liverpool et de participer aux événements de la communauté des Reds en France.

            </p>

            <div class="mt-8 md:mt-10
                    flex flex-col sm:flex-row
                    gap-4 md:gap-6">

                <a href="#"
                   class="bg-white text-olsc-red
                      px-6 md:px-8
                      py-3 md:py-4
                      text-center
                      font-semibold
                      hover:bg-gray-100 transition">

                    Rejoindre le forum

                </a>

                <a href="#"
                   class="border-2 border-white
                      px-6 md:px-8
                      py-3 md:py-4
                      text-center
                      font-semibold
                      hover:bg-white
                      hover:text-olsc-red
                      transition">

                    Voir la billetterie

                </a>

            </div>

        </div>

    </section>



    <section class="bg-white">

        <div class="max-w-7xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <!-- TITLE -->

            <div class="mb-12 md:mb-16 max-w-3xl">

                <p class="text-olsc-red font-semibold uppercase tracking-widest text-xs md:text-sm mb-3 md:mb-4">
                    Communauté des supporters
                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl
                       font-bold text-gray-900 leading-tight">

                    Tout ce qu’il faut pour vivre pleinement l’expérience Liverpool FC

                </h2>

                <div class="w-16 md:w-20 h-1 bg-olsc-red mt-5 md:mt-6 mb-5 md:mb-6"></div>

                <p class="text-gray-600 text-base md:text-lg leading-relaxed">
                    Billetterie pour les matchs à Anfield, événements entre supporters,
                    déplacements à Liverpool et vie associative : OLSC France accompagne
                    les fans français des Reds dans leur passion au quotidien.
                </p>

            </div>


            <!-- GRID -->

            <div class="grid md:grid-cols-3 gap-6 md:gap-8">

                <!-- BIG CARD -->

                <div class="md:col-span-2 relative overflow-hidden group
                        min-h-[320px] md:min-h-[420px]
                        hover:-translate-y-2 hover:shadow-2xl
                        transition duration-300">

                    <!-- BACKGROUND -->

                    <img src="{{asset('storage/rassemblement.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover
                            group-hover:scale-105 transition duration-700">

                    <!-- OVERLAY -->

                    <div class="absolute inset-0 bg-olsc-red/50
                            group-hover:bg-olsc-red/85 transition duration-500"></div>

                    <!-- CONTENT -->

                    <div class="relative text-white
                            p-6 md:p-14
                            flex flex-col
                            justify-between
                            h-full">

                        <div>

                            <h3 class="text-xl md:text-2xl font-bold mb-4 md:mb-6">
                                👥 Rejoindre OLSC France
                            </h3>

                            <p class="text-white/90
                                  text-base md:text-lg
                                  max-w-lg
                                  leading-relaxed">

                                Devenez membre de l'Official Liverpool Supporters Club France
                                et accédez à la billetterie officielle et aux événements.

                            </p>

                        </div>

                        <div class="mt-6 md:mt-10">

                            <a href="#"
                               class="inline-block bg-white text-olsc-red
                                  px-6 md:px-8
                                  py-3 md:py-4
                                  text-sm md:text-base
                                  font-semibold
                                  hover:bg-gray-100 transition">

                                Devenir membre

                            </a>

                        </div>

                    </div>

                </div>


                <!-- RIGHT COLUMN -->

                <div class="grid sm:grid-cols-2 md:grid-cols-1 gap-6 md:gap-8">

                    <!-- BILLETTERIE -->

                    <div class="bg-gray-50 border border-gray-200
                            p-6 md:p-10
                            hover:border-olsc-red hover:shadow-lg transition">

                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3 md:mb-4">
                            🎟 Billetterie
                        </h3>

                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">
                            Accédez aux matchs via OLSC.
                        </p>

                        <a href="#" class="text-olsc-red font-semibold text-sm md:text-base">
                            Voir →
                        </a>

                    </div>


                    <!-- ACTIVITES -->

                    <div class="bg-gray-50 border border-gray-200
                            p-6 md:p-10
                            hover:border-olsc-red hover:shadow-lg transition">

                        <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-3 md:mb-4">
                            ⚽ Activités
                        </h3>

                        <p class="text-gray-600 mb-4 md:mb-6 text-sm md:text-base">
                            Découvrez les événements OLSC.
                        </p>

                        <a href="#" class="text-olsc-red font-semibold text-sm md:text-base">
                            Découvrir →
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <!-- HEADER -->

            <div class="flex flex-col md:flex-row
                    md:justify-between
                    md:items-end
                    gap-6
                    mb-12 md:mb-16">

                <div>

                    <p class="text-olsc-red font-semibold
                          uppercase tracking-widest
                          text-xs md:text-sm
                          mb-2 md:mb-3">

                        Actualités

                    </p>

                    <h2 class="text-2xl sm:text-3xl md:text-4xl
                           font-bold text-gray-900">

                        Dernières nouvelles OLSC & Liverpool FC

                    </h2>

                </div>

                <a href="#"
                   class="text-olsc-red font-semibold
                      hover:underline
                      text-sm md:text-base">

                    Voir toutes les actualités →

                </a>

            </div>


            <!-- NEWS GRID -->

            <div class="grid
                    sm:grid-cols-2
                    md:grid-cols-3
                    gap-6 md:gap-8">

                @for($i = 0; $i < 3; $i++)

                    <a href="#"
                       class="group relative overflow-hidden block
                          aspect-[4/4] md:aspect-square
                          transform transition-all duration-300
                          hover:-translate-y-2 hover:shadow-2xl">

                        <!-- IMAGE -->

                        <img src="{{asset('storage/anfield.jpg')}}"
                             class="absolute inset-0 w-full h-full object-cover
                                group-hover:scale-105 transition duration-700">

                        <!-- OVERLAY -->

                        <div class="absolute inset-0
                                bg-black/60
                                group-hover:bg-black/70
                                transition duration-500"></div>

                        <!-- CONTENT -->

                        <div class="absolute inset-0
                                p-5 md:p-8
                                flex flex-col
                                justify-end
                                text-white">

                            <p class="text-xs md:text-sm text-white/70 mb-2">
                                OLSC France • 2025
                            </p>

                            <h3 class="text-lg md:text-xl
                                   font-bold mb-2 md:mb-3
                                   group-hover:text-olsc-yellow
                                   transition">

                                Ouverture des souscriptions 2025

                            </h3>

                            <span class="text-xs md:text-sm
                                     font-semibold text-olsc-yellow
                                     group-hover:translate-x-1
                                     transition transform">

                            Lire l'article →

                        </span>

                        </div>

                    </a>

                @endfor

            </div>

        </div>

    </section>


    <section class="relative min-h-[420px] md:min-h-[550px] flex items-center">

        <!-- BACKGROUND -->

        <img src="{{asset('storage/pont.jpg')}}"
             class="absolute inset-0 w-full h-full object-cover">

        <div class="absolute inset-0 bg-olsc-red/50"></div>


        <!-- CONTENT -->

        <div class="relative max-w-5xl mx-auto
                px-4 md:px-6
                py-16 md:py-24
                text-center text-white">

            <p class="text-olsc-yellow
                  font-semibold
                  uppercase tracking-widest
                  text-xs md:text-sm
                  mb-4 md:mb-6">

                OLSC France

            </p>

            <h2 class="text-2xl sm:text-3xl md:text-5xl
                   font-bold
                   leading-tight
                   mb-6 md:mb-8">

                Plus qu’un club, une communauté de supporters

            </h2>

            <p class="text-base md:text-xl
                  text-white/90
                  max-w-3xl
                  mx-auto
                  leading-relaxed
                  mb-8 md:mb-12">

                Depuis plus de 20 ans, OLSC France rassemble les supporters français
                de Liverpool FC autour d’une même passion : vivre l’expérience Reds
                ensemble et transmettre l’esprit You'll Never Walk Alone.

            </p>

            <a href="#"
               class="inline-block
                  bg-white text-olsc-red
                  px-7 md:px-10
                  py-3 md:py-5
                  text-sm md:text-base
                  font-semibold
                  hover:bg-gray-100
                  transition">

                Rejoindre la communauté

            </a>

        </div>

    </section>


    <section class="bg-white">

        <div class="max-w-5xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <div class="mb-12 md:mb-16">

                <p class="text-olsc-red
                      font-semibold
                      uppercase tracking-widest
                      text-xs md:text-sm
                      mb-3 md:mb-4">

                    Membership OLSC

                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl
                       font-bold text-gray-900
                       leading-tight">

                    Pourquoi rejoindre OLSC France

                </h2>

                <div class="w-16 md:w-20 h-1 bg-olsc-red mt-5 md:mt-6 mb-5 md:mb-6"></div>

                <p class="text-gray-600
                      text-base md:text-lg
                      max-w-2xl
                      leading-relaxed">

                    Rejoindre l'Official Liverpool Supporters Club France permet
                    de vivre Liverpool FC au sein d'une communauté officielle
                    et passionnée.

                </p>

            </div>


            <div class="divide-y divide-gray-200">

                <div class="py-6 md:py-8 group">

                    <h3 class="text-lg md:text-xl
                           font-bold text-gray-900
                           mb-2 md:mb-3
                           group-hover:text-olsc-red
                           transition">

                        Billetterie officielle

                    </h3>

                    <p class="text-gray-600
                          leading-relaxed
                          text-sm md:text-base">

                        Accédez aux matchs de Liverpool FC grâce aux places
                        réservées aux membres OLSC.

                    </p>

                </div>


                <div class="py-6 md:py-8 group">

                    <h3 class="text-lg md:text-xl
                           font-bold text-gray-900
                           mb-2 md:mb-3
                           group-hover:text-olsc-red
                           transition">

                        Une communauté de supporters

                    </h3>

                    <p class="text-gray-600
                          leading-relaxed
                          text-sm md:text-base">

                        Partagez votre passion avec des supporters français
                        qui vivent l'esprit You'll Never Walk Alone.

                    </p>

                </div>


                <div class="py-6 md:py-8 group">

                    <h3 class="text-lg md:text-xl
                           font-bold text-gray-900
                           mb-2 md:mb-3
                           group-hover:text-olsc-red
                           transition">

                        Événements et rencontres

                    </h3>

                    <p class="text-gray-600
                          leading-relaxed
                          text-sm md:text-base">

                        Participez aux événements organisés par OLSC France
                        tout au long de l'année.

                    </p>

                </div>


                <div class="py-6 md:py-8 group">

                    <h3 class="text-lg md:text-xl
                           font-bold text-gray-900
                           mb-2 md:mb-3
                           group-hover:text-olsc-red
                           transition">

                        L'expérience Liverpool

                    </h3>

                    <p class="text-gray-600
                          leading-relaxed
                          text-sm md:text-base">

                        Organisez vos déplacements à Liverpool et vivez
                        l'expérience Anfield.

                    </p>

                </div>

            </div>

        </div>

    </section>


    <section class="bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 md:px-6 py-14 md:py-20">

            <div class="grid
                    grid-cols-2
                    md:grid-cols-4
                    gap-8 md:gap-10
                    text-center">

                <div class="p-4">

                    <p class="text-2xl sm:text-3xl md:text-4xl
                          font-bold text-olsc-red mb-1 md:mb-2">

                        20+

                    </p>

                    <p class="text-gray-600
                          font-semibold
                          text-sm md:text-base">

                        Années d'existence

                    </p>

                </div>

                <div class="p-4">

                    <p class="text-2xl sm:text-3xl md:text-4xl
                          font-bold text-olsc-red mb-1 md:mb-2">

                        500+

                    </p>

                    <p class="text-gray-600
                          font-semibold
                          text-sm md:text-base">

                        Membres actifs

                    </p>

                </div>

                <div class="p-4">

                    <p class="text-2xl sm:text-3xl md:text-4xl
                          font-bold text-olsc-red mb-1 md:mb-2">

                        150+

                    </p>

                    <p class="text-gray-600
                          font-semibold
                          text-sm md:text-base">

                        Matchs organisés

                    </p>

                </div>

                <div class="p-4">

                    <p class="text-2xl sm:text-3xl md:text-4xl
                          font-bold text-olsc-red mb-1 md:mb-2">

                        50+

                    </p>

                    <p class="text-gray-600
                          font-semibold
                          text-sm md:text-base">

                        Événements OLSC

                    </p>

                </div>

            </div>

        </div>

    </section>



    <section class="relative text-white min-h-[400px] md:min-h-[520px] flex items-center">

        <!-- BACKGROUND -->

        <img src="{{asset('storage/hills.jpg')}}"
             class="absolute inset-0 w-full h-full object-cover grayscale opacity-90">

        <!-- OVERLAY -->

        <div class="absolute inset-0 bg-black/50"></div>

        <!-- CONTENT -->

        <div class="relative max-w-5xl mx-auto
                px-4 md:px-6
                py-16 md:py-32
                text-center">

            <h2 class="text-2xl sm:text-3xl md:text-4xl
                   font-light
                   tracking-wide
                   mb-5 md:mb-6">

                Hillsborough – 15 April 1989

            </h2>

            <div class="w-12 md:w-16 h-px bg-white/40 mx-auto mb-6 md:mb-8"></div>

            <p class="text-base md:text-lg
                  text-white/85
                  max-w-2xl
                  mx-auto
                  leading-relaxed
                  mb-5 md:mb-6">

                En mémoire des 97 supporters de Liverpool FC.
                Nous n'oublierons jamais.

            </p>

            <p class="text-white/70
                  text-sm md:text-base
                  mb-8 md:mb-10">

                En mémoire également des membres OLSC France et de tous les supporters
                des Reds qui nous ont quittés.

            </p>

            <p class="text-olsc-yellow
                  font-semibold
                  uppercase tracking-widest
                  text-xs md:text-sm">

                Justice for the 97 • You'll Never Walk Alone

            </p>

        </div>

    </section>



    <section class="bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <div class="mb-12 md:mb-16 max-w-3xl">

                <p class="text-olsc-red font-semibold
                      uppercase tracking-widest
                      text-xs md:text-sm
                      mb-3 md:mb-4">

                    Guide Liverpool

                </p>

                <h2 class="text-2xl sm:text-3xl md:text-4xl
                       font-bold text-gray-900">

                    Préparez votre déplacement à Liverpool

                </h2>

                <div class="w-16 md:w-20 h-1 bg-olsc-red mt-5 md:mt-6 mb-5 md:mb-6"></div>

                <p class="text-gray-600
                      text-base md:text-lg
                      leading-relaxed">

                    Découvrez nos conseils pour organiser votre voyage,
                    visiter la ville et vivre l’expérience Anfield.

                </p>

            </div>

            <div class="grid
                    grid-cols-1
                    sm:grid-cols-2
                    md:grid-cols-4
                    gap-5 md:gap-6">

                <a href="#"
                   class="bg-white
                      p-6 md:p-8
                      border border-gray-200
                      hover:border-olsc-red
                      hover:-translate-y-1
                      hover:shadow-lg
                      transition
                      flex flex-col
                      justify-between
                      min-h-[220px] md:aspect-square">

                    <div>

                        <h3 class="font-bold text-base md:text-lg mb-2 md:mb-3">
                            🏟 Visiter Anfield
                        </h3>

                        <p class="text-gray-600
                              text-sm
                              leading-relaxed">

                            Découvrez le stade mythique de Liverpool FC,
                            le musée et l’expérience matchday à Anfield.

                        </p>

                    </div>

                    <span class="text-olsc-red font-semibold mt-4 md:mt-6 text-sm md:text-base">
                    Découvrir →
                </span>

                </a>


                <a href="#"
                   class="bg-white
                      p-6 md:p-8
                      border border-gray-200
                      hover:border-olsc-red
                      hover:-translate-y-1
                      hover:shadow-lg
                      transition
                      flex flex-col
                      justify-between
                      min-h-[220px] md:aspect-square">

                    <div>

                        <h3 class="font-bold text-base md:text-lg mb-2 md:mb-3">
                            🍻 Où manger
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            Les meilleurs pubs et restaurants pour supporters
                            près d’Anfield et dans Liverpool.
                        </p>

                    </div>

                    <span class="text-olsc-red font-semibold mt-4 md:mt-6 text-sm md:text-base">
                    Découvrir →
                </span>

                </a>


                <a href="#"
                   class="bg-white
                      p-6 md:p-8
                      border border-gray-200
                      hover:border-olsc-red
                      hover:-translate-y-1
                      hover:shadow-lg
                      transition
                      flex flex-col
                      justify-between
                      min-h-[220px] md:aspect-square">

                    <div>

                        <h3 class="font-bold text-base md:text-lg mb-2 md:mb-3">
                            📋 Matchday guide
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            Tous nos conseils pour vivre un jour de match
                            de Liverpool FC comme un vrai supporter.
                        </p>

                    </div>

                    <span class="text-olsc-red font-semibold mt-4 md:mt-6 text-sm md:text-base">
                    Découvrir →
                </span>

                </a>


                <a href="#"
                   class="bg-white
                      p-6 md:p-8
                      border border-gray-200
                      hover:border-olsc-red
                      hover:-translate-y-1
                      hover:shadow-lg
                      transition
                      flex flex-col
                      justify-between
                      min-h-[220px] md:aspect-square">

                    <div>

                        <h3 class="font-bold text-base md:text-lg mb-2 md:mb-3">
                            🚆 Se déplacer
                        </h3>

                        <p class="text-gray-600 text-sm leading-relaxed">
                            Transport, hôtels et conseils pratiques
                            pour votre séjour à Liverpool.
                        </p>

                    </div>

                    <span class="text-olsc-red font-semibold mt-4 md:mt-6 text-sm md:text-base">
                    Découvrir →
                </span>

                </a>

            </div>

        </div>

    </section>

    <section class="bg-white">

        <div class="max-w-3xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <div class="mb-12 md:mb-16">

                <p class="text-olsc-red
                      font-semibold
                      uppercase tracking-widest
                      text-xs md:text-sm
                      mb-3 md:mb-4">

                    FAQ

                </p>

                <h2 class="text-2xl md:text-3xl
                       font-bold text-gray-900">

                    Questions fréquentes

                </h2>

                <div class="w-16 md:w-20 h-1 bg-olsc-red mt-5 md:mt-6"></div>

            </div>

            <div class="divide-y divide-gray-200">

                <details class="group py-5 md:py-6">

                    <summary class="flex justify-between items-center
                                cursor-pointer
                                font-semibold
                                text-base md:text-lg
                                text-gray-900
                                hover:text-olsc-red
                                transition
                                gap-4">

                        Comment devenir membre OLSC France ?

                        <svg class="w-4 h-4 md:w-5 md:h-5
                                text-olsc-red
                                transition duration-300
                                group-open:rotate-180
                                flex-shrink-0"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>

                        </svg>

                    </summary>

                    <div class="grid grid-rows-[0fr]
                            group-open:grid-rows-[1fr]
                            transition-all duration-300">

                        <div class="overflow-hidden">

                            <p class="text-gray-600
                                  mt-3 md:mt-4
                                  leading-relaxed
                                  text-sm md:text-base">

                                Il suffit de remplir le formulaire de souscription et de régler
                                la cotisation annuelle.

                            </p>

                        </div>

                    </div>

                </details>


                <details class="group py-5 md:py-6">

                    <summary class="flex justify-between items-center
                                cursor-pointer
                                font-semibold
                                text-base md:text-lg
                                text-gray-900
                                hover:text-olsc-red
                                transition
                                gap-4">

                        Comment obtenir des billets Liverpool ?

                        <svg class="w-4 h-4 md:w-5 md:h-5
                                text-olsc-red
                                transition duration-300
                                group-open:rotate-180
                                flex-shrink-0"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>

                        </svg>

                    </summary>

                    <div class="grid grid-rows-[0fr]
                            group-open:grid-rows-[1fr]
                            transition-all duration-300">

                        <div class="overflow-hidden">

                            <p class="text-gray-600
                                  mt-3 md:mt-4
                                  leading-relaxed
                                  text-sm md:text-base">

                                Les membres OLSC peuvent accéder aux quotas de billets
                                disponibles selon les matchs.

                            </p>

                        </div>

                    </div>

                </details>


                <details class="group py-5 md:py-6">

                    <summary class="flex justify-between items-center
                                cursor-pointer
                                font-semibold
                                text-base md:text-lg
                                text-gray-900
                                hover:text-olsc-red
                                transition
                                gap-4">

                        Faut-il un membership Liverpool FC ?

                        <svg class="w-4 h-4 md:w-5 md:h-5
                                text-olsc-red
                                transition duration-300
                                group-open:rotate-180
                                flex-shrink-0"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M19 9l-7 7-7-7"/>

                        </svg>

                    </summary>

                    <div class="grid grid-rows-[0fr]
                            group-open:grid-rows-[1fr]
                            transition-all duration-300">

                        <div class="overflow-hidden">

                            <p class="text-gray-600
                                  mt-3 md:mt-4
                                  leading-relaxed
                                  text-sm md:text-base">

                                Oui, un LFC Membership est recommandé pour accéder aux ventes
                                de billets Liverpool FC.

                            </p>

                        </div>

                    </div>

                </details>

            </div>

        </div>

    </section>


    <section class="bg-gray-50">

        <div class="max-w-7xl mx-auto px-4 md:px-6 py-16 md:py-24">

            <div class="mb-12 md:mb-16 max-w-3xl">

                <p class="text-olsc-red
                      font-semibold
                      uppercase tracking-widest
                      text-xs md:text-sm
                      mb-3 md:mb-4">

                    Communauté OLSC

                </p>

                <h2 class="text-2xl md:text-3xl
                       font-bold text-gray-900">

                    La communauté des Reds en images

                </h2>

                <div class="w-16 md:w-20 h-1 bg-olsc-red mt-5 md:mt-6 mb-5 md:mb-6"></div>

                <p class="text-gray-600
                      text-base md:text-lg
                      leading-relaxed">

                    Découvrez les moments partagés par les membres d’OLSC France :
                    déplacements à Anfield, événements entre supporters et la passion
                    Liverpool FC vécue ensemble.

                </p>

            </div>

            <div class="grid
                    grid-cols-1
                    sm:grid-cols-2
                    md:grid-cols-3
                    gap-4 md:gap-6">

                <!-- BIG -->

                <div class="relative
                        sm:col-span-2
                        md:col-span-2
                        h-64 sm:h-80 md:h-96
                        overflow-hidden">

                    <img src="{{asset('storage/donation.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700">

                </div>

                <!-- RIGHT -->

                <div class="relative
                        h-64 sm:h-80 md:h-96
                        overflow-hidden">

                    <img src="{{asset('storage/istanbul.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700">

                </div>

                <!-- BOTTOM -->

                <div class="relative
                        h-52 md:h-64
                        overflow-hidden">

                    <img src="{{asset('storage/lush.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700">

                </div>

                <div class="relative
                        h-52 md:h-64
                        overflow-hidden">

                    <img src="{{asset('storage/kop.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700">

                </div>

                <div class="relative
                        h-52 md:h-64
                        overflow-hidden">

                    <img src="{{asset('storage/shankly.jpg')}}"
                         class="absolute inset-0 w-full h-full object-cover hover:scale-105 transition duration-700">

                </div>

            </div>

        </div>

    </section>



@endsection
