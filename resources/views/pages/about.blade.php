@extends('layouts.app')

@section('title', 'Qui sommes-nous - Pluri\'elles SAS')

@section('content')
    <section class="relative px-8 py-20 max-w-7xl mx-auto overflow-hidden">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 z-10">
                <span class="font-label text-on-surface-variant uppercase tracking-widest text-[0.75rem] mb-4 block">Notre
                    Identité</span>
                <h1 class="font-headline text-[3.5rem] leading-[1.1] font-extrabold text-primary tracking-tight mb-8">
                    L’architecture d’un <span class="text-secondary">futur responsable.</span>
                </h1>
                <p class="text-body text-on-surface-variant text-lg leading-relaxed max-w-xl">
                    Pluri’elles SAS est un cabinet de conseil spécialisé en RSE et gestion de projet. Nous accompagnons
                    les organisations dans leur transformation durable avec une rigueur méthodologique et une vision
                    humaine.
                </p>
            </div>
            <div class="lg:col-span-5 relative">
                <div class="aspect-[4/5] bg-surface-container-high rounded-lg overflow-hidden relative">
                    <img alt="Modern architectural office space"
                        class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_F7vTIUqeus1mRVXpWkclfuXyTBOP2c_XmBWFo9HORiW9SraMaP1q7tMsEvbd7Q0gRxPfHGv9DqUnfBGxtzmD35F3SbSkdADISbP0K4jZkUL8goZtKXcGfCcLJr5Fc-N7dZ5Lp1dyLsQ1O2NHGwXqYCc48oHyASuIXOf48E_Qt8sBu9Oy-AyQshHheGvd78TXRDhjFR_shJbsKQc3XMVu4EMuD0UagdWjdhaE0sPKBm93XMaxwD5xqVfg6TuuwuzPChSf3ZyFrxQ" />
                </div>
                <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-secondary-container rounded-lg -z-10"></div>
            </div>
        </div>
    </section>
    <!-- Section Cabinet: Vision & Mission -->
    <section class="bg-surface-container-low py-24 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-start">
                <div class="space-y-12">
                    <div>
                        <h2 class="font-headline text-3xl font-bold text-primary mb-6">Notre Vision</h2>
                        <p class="text-on-surface-variant leading-relaxed text-lg">
                            Nous croyons que la performance économique de demain est indissociable de l'impact social et
                            environnemental d'aujourd'hui. Notre ambition est de devenir le partenaire de confiance des
                            leaders qui osent transformer leurs modèles.
                        </p>
                    </div>
                    <div class="bg-surface-container-lowest p-8 rounded-lg shadow-sm border-l-4 border-secondary">
                        <h3 class="font-headline text-xl font-bold text-primary mb-4">Notre Engagement</h3>
                        <p class="text-on-surface-variant">
                            Chaque projet est abordé avec une approche personnalisée, alliant expertise technique et
                            écoute active pour des solutions pérennes et mesurables.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-4">
                        <div class="h-64 bg-surface-container-highest rounded-lg flex items-end p-6">
                            <span class="text-secondary font-headline text-5xl font-black">15+</span>
                        </div>
                        <p class="font-label text-on-surface-variant uppercase text-xs tracking-tighter">Années
                            d'expertise cumulée</p>
                    </div>
                    <div class="space-y-4 mt-12">
                        <div class="h-64 bg-primary rounded-lg flex items-end p-6">
                            <span class="text-secondary-fixed font-headline text-5xl font-black">120</span>
                        </div>
                        <p class="font-label text-on-surface-variant uppercase text-xs tracking-tighter">Projets RSE
                            déployés</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Team: Leadership -->
    <section class="py-24 px-8 max-w-7xl mx-auto">
        <div class="text-center mb-20">
            <span
                class="font-label text-on-surface-variant uppercase tracking-widest text-[0.75rem] mb-4 block">Gouvernance</span>
            <h2 class="font-headline text-4xl font-extrabold text-primary">Les visages de l'expertise</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
            <!-- Team Member 1 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Sophie Lambert"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBn4H1N7nTW0D-jmP2SKRQQOGlL22peMPOzboe5k1qFrIAudvcqq5uA85l_a4vW_KQYTcapdiX1Httdb16Fpc8BQP9gyuqg9mtreqZWpCjKqz0xFo8MvbCUfUW3UyvDax9c38WMx3bJcweySTnHZhbzIeyKS-lqh-TMKecVOHBP0i7ypivpqTwAk-uLb9NTotxouTZTe29UYeJxcAg8J41VhNDw1CLHoU_6mkovcHlsvGv-O65T-RoAOOWal9dB2CGUlG7B1WXIqgo" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Sophie Lambert</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Directrice
                    Associée</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Experte en pilotage de la performance durable
                    et accompagnement au changement.</p>
            </div>
            <!-- Team Member 2 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Marc Durand"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAHGsTt1QJYpPnO2MKDGmG-BkiSha0jmoZCuOZehbEfAAFFca4BIGMOmm2Rn1umENfzhvsoDoyZo-LMdosXaBrh9Wq0X_BGyWbR9DMuntQ8GpZiJ-RiLO91xfjvghxbgZVMSDwcW6neGDaKZRAba8_MKl3r55nhfsVtxnNa9rcc8qQF6c6VQj_kac4cAHl6qBRf3XEJ4PnWqzxGyyDESi0bhCfNVJeYjnO3i8I8W0-9en4sUoq9XJqWnLtdURl3Ns6pRZdjU1uRNXU" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Marc Durand</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Responsable
                    Projets</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Spécialiste de la coordination complexe et du
                    respect des jalons stratégiques.</p>
            </div>
            <!-- Team Member 3 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Elena Rossi"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuABo2Voi7m907obQ_ga-uuslrVK96Go7EtwUz8Wt7TBNa9cHDRHaC2-nZq5Mz-a4nlDs3iCD89V2f4rHn3xmqQmt8BhDRZgPvI_hjlVHRYjxzo052RPnPo_S-MDFjOd334ayD7kbz7c_BPJ0mrSihwN6ZSyz8cdgaTltqsRDK_vkgjf1U2DujfSaw_0BTGqJpfAB0ejHub2Az1O1ByRbq7c6AugmOoe3t3Aaa9pFzV69jnNW7GIqrMxO6dBrkyI3yxKSzDmfidJPEk" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Elena Rossi</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Conseillère
                    Senior</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Dédiée à l'intégration des enjeux sociétaux
                    au cœur des process métiers.</p>
            </div>
            <!-- Team Member 4 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Thomas Bernard"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmYh2X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Thomas Bernard</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Expert RSE
                </p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Accompagne les entreprises dans la définition
                    de leurs indicateurs de performance extra-financière.</p>
            </div>
            <!-- Team Member 5 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Julie Moreau"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAnZk3X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Julie Moreau</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Consultante
                    Stratégie</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Spécialiste en analyse sectorielle et
                    identification d'opportunités de croissance responsable.</p>
            </div>
            <!-- Team Member 6 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Antoine Petit"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoXy1X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Antoine Petit</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Chargé de
                    Mission</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Coordonne les actions de terrain et assure le
                    suivi opérationnel des initiatives durables.</p>
            </div>
            <!-- Team Member 7 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Léa Dubois"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuApWv2X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Léa Dubois</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Assistante
                    Opérationnelle</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Pilier de l'organisation interne,
                    garantissant la fluidité des processus administratifs du cabinet.</p>
            </div>
            <!-- Team Member 8 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Nicolas Lefebvre"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqUz1X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Nicolas Lefebvre</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Consultant
                    Environnement</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Expert en bilan carbone et stratégies de
                    réduction de l'empreinte écologique des entreprises.</p>
            </div>
            <!-- Team Member 9 -->
            <div class="group flex flex-col">
                <div class="aspect-square bg-surface-container-high rounded-lg mb-6 overflow-hidden relative">
                    <img alt="Portrait of Chloé Martin"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuArVz4X7yPqD-2_4N2K2MvH2_8T_G9p4wY7e4f8z1g2j3k4l5m6n7o8p9q0r1s2t3u4v5w6x7y8z9" />
                    <div
                        class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                </div>
                <h3 class="font-headline text-xl font-bold text-primary">Chloé Martin</h3>
                <p class="font-label text-secondary uppercase text-[0.7rem] tracking-widest font-bold mb-2">Responsable
                    Entrepreneuriat</p>
                <p class="text-on-surface-variant text-sm leading-relaxed">Favorise l'innovation sociale et accompagne
                    les porteurs de projets à fort impact.</p>
            </div>
        </div>
    </section>

@endsection
