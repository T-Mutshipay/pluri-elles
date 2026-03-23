@extends('layouts.app')

@section('title', 'Services - Pluri\'elles SAS')
<section class="relative h-[450px] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img alt="Expertise RSE Pluri'elles" class="w-full h-full object-cover scale-105" src="#" />

        <div class="absolute inset-0 bg-slate-900/60"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-transparent to-primary/90"></div>

        <div class="absolute inset-0 opacity-10"
            style="background-image: radial-gradient(#ffffff 0.5px, transparent 0.5px); background-size: 24px 24px;">
        </div>
    </div>

    <div class="relative z-10 text-center px-6 max-w-4xl">
        <div class="mb-6 flex flex-col items-center gap-2">
            <span
                class="px-4 py-1 bg-secondary-container/20 backdrop-blur-md border border-secondary-container/30 text-secondary-fixed font-label uppercase tracking-[0.3em] text-[10px] font-bold rounded-full">
                Expertise & Engagement
            </span>
            <nav class="flex items-center gap-2 text-white/50 text-[10px] uppercase tracking-widest mt-2">
                <a href="{{ route('home') }}" class="hover:text-secondary-fixed transition-colors">Accueil</a>
                <span class="material-symbols-outlined text-[12px]">chevron_right</span>
                <span class="text-white">Nos Services</span>
            </nav>
        </div>

        <h1 class="font-headline font-black text-6xl md:text-7xl text-white tracking-tighter mb-4">
            Nos <span class="text-secondary-fixed italic font-light">Services</span>
        </h1>

        <div class="flex justify-center items-center gap-4 mt-8">
            <div class="w-12 h-[1px] bg-white/20"></div>
            <div class="w-3 h-3 border border-secondary-fixed rotate-45"></div>
            <div class="w-12 h-[1px] bg-white/20"></div>
        </div>

        <p class="mt-6 text-white/80 font-body text-lg max-w-2xl mx-auto leading-relaxed">
            Des solutions agiles et structurées pour transformer vos enjeux RSE en leviers de performance durable.
        </p>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-16 bg-surface clip-path-banner"></div>
</section>

<style>
    .clip-path-banner {
        clip-path: polygon(0 100%, 100% 100%, 100% 0, 0 100%);
    }
</style>
<section class="relative py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="max-w-3xl">
            <span
                class="font-label text-on-surface-variant uppercase tracking-widest text-[0.75rem] mb-4 block">Expertise
                et Conseil</span>
            <h1 class="font-headline font-extrabold text-[3.5rem] leading-[1.1] text-primary tracking-tight mb-8">
                Des prestations RSE adaptées à vos ambitions territoriales.
            </h1>
            <p class="text-on-surface-variant text-lg leading-relaxed max-w-2xl font-body">
                Nous accompagnons les acteurs publics et privés dans la définition et l'exécution de leurs
                stratégies d'impact, avec une approche pragmatique et ancrée dans le réel.
            </p>
        </div>
    </div>
    <div class="absolute top-0 right-0 w-1/3 h-full bg-surface-container-low -z-10 hidden lg:block"></div>
</section>
<section class="py-16 bg-surface-container-low">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex flex-col md:flex-row gap-12 items-start">
            <div class="md:w-1/2">
                <h2 class="font-headline font-bold text-3xl text-primary leading-snug">Un accompagnement modulable
                    pour chaque étape de votre transformation.</h2>
            </div>
            <div class="md:w-1/2">
                <p class="text-on-surface-variant leading-relaxed">
                    Que vous soyez au début de votre réflexion RSE ou en phase d'accélération opérationnelle, nos
                    services sont conçus pour s'imbriquer dans votre structure existante sans friction. Nous
                    privilégions l'action concrète sur les rapports théoriques.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-24">
    <div class="max-w-7xl mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <div
                class="md:col-span-7 bg-editorial-gradient rounded-xl p-10 text-white flex flex-col justify-between shadow-lg relative overflow-hidden group">
                <div class="relative z-10">
                    <span class="material-symbols-outlined text-secondary-fixed text-4xl mb-6"
                        data-icon="rocket_launch">rocket_launch</span>
                    <h3 class="font-headline font-bold text-3xl mb-4">Agence d'Exécution de Projets</h3>
                    <p class="text-blue-100 text-lg mb-8 max-w-lg">
                        Nous ne nous contentons pas de conseiller : nous opérons. Gestion de projets complexes,
                        coordination de parties prenantes et suivi opérationnel rigoureux.
                    </p>
                </div>
                <ul class="relative z-10 space-y-4 mb-8">
                    <li class="flex items-center gap-3 text-sm font-medium">
                        <span class="material-symbols-outlined text-secondary-fixed" data-icon="check_circle"
                            data-weight="fill">check_circle</span>
                        Pilotage de projets à fort impact social
                    </li>
                    <li class="flex items-center gap-3 text-sm font-medium">
                        <span class="material-symbols-outlined text-secondary-fixed" data-icon="check_circle"
                            data-weight="fill">check_circle</span>
                        Coordination d'écosystèmes territoriaux
                    </li>
                </ul>
                <a class="relative z-10 self-start px-6 py-3 bg-secondary-fixed text-on-secondary-container font-bold rounded-md hover:translate-x-2 transition-transform duration-200"
                    href="#">
                    Découvrir notre méthode
                </a>
                <div
                    class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-colors duration-500">
                </div>
            </div>
            <div
                class="md:col-span-5 bg-surface-container-lowest border-l-4 border-primary p-8 flex flex-col justify-center">
                <span class="material-symbols-outlined text-primary mb-4" data-icon="fact_check">fact_check</span>
                <h3 class="font-headline font-bold text-xl mb-3 text-primary">Audit RSE</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed">
                    Évaluation complète de votre maturité extra-financière et identification des leviers de
                    performance durable.
                </p>
            </div>
            <div class="md:col-span-4 bg-surface-container-low p-8 rounded-lg">
                <span class="material-symbols-outlined text-primary mb-4" data-icon="handshake">handshake</span>
                <h3 class="font-headline font-bold text-xl mb-3 text-primary">Sous-traitance RSE</h3>
                <p class="text-on-surface-variant text-sm">
                    Déléguez la gestion de vos obligations et initiatives RSE à nos experts pour une efficacité
                    maximale.
                </p>
            </div>
            <div
                class="md:col-span-8 bg-surface-container p-1 bg-gradient-to-br from-secondary/10 to-transparent rounded-xl">
                <div
                    class="bg-surface-container-lowest h-full w-full rounded-[0.625rem] p-10 flex flex-col md:flex-row gap-8 items-center border border-secondary/20">
                    <div class="md:w-2/3">
                        <span class="material-symbols-outlined text-secondary text-5xl mb-6"
                            data-icon="psychology">psychology</span>
                        <h3 class="font-headline font-extrabold text-3xl mb-4 text-primary">Accompagnement &amp;
                            Booster Entrepreneuriat</h3>
                        <p class="text-on-surface-variant text-lg leading-relaxed mb-6">
                            Propulsez vos projets innovants. Nous offrons un cadre structurant pour transformer vos
                            idées en entreprises résilientes et impactantes.
                        </p>
                        <button
                            class="px-8 py-3 bg-secondary text-on-primary font-bold rounded-md hover:shadow-lg transition-all duration-300">Rejoindre
                            le Booster</button>
                    </div>
                    <div class="md:w-1/3 w-full">
                        <img alt="Entrepreneurs collaborating" class="rounded-lg object-cover h-64 w-full shadow-md"
                            data-alt="Dynamic teamwork in a modern light-filled office space"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCshvS3hdV0gjwmVQhWe0amSQnY34nv16Y9dytkLYhXV3u_bhEPIInUxQvnidiP28CIN7h0eIvAnfjDqCd5TL9byRTStiGc1-PLNWh4oR5QJcdja9K2DPUnPpvL8t7lXu3uSRav_DwWjn3H38JA1qlQ7eZ2dLkH0WFw8nCfHaraLI6K6FE_v-N13Zb0ayBrDK1lQaCK_FXKGO8hFhpC8am_hWky26hFOoptvvJv-DeQwq7lPzTGtAfpyJ51LnkKGxlq-6xo7HRIVZs" />
                    </div>
                </div>
            </div>
            <div
                class="md:col-span-4 bg-surface-container-low p-8 rounded-lg flex flex-col border-b-2 border-primary/20">
                <span class="material-symbols-outlined text-primary mb-4" data-icon="account_tree">account_tree</span>
                <h3 class="font-headline font-bold text-xl mb-3 text-primary">Structuration Stratégie RSE</h3>
                <p class="text-on-surface-variant text-sm">
                    Définition de votre raison d'être et alignement de vos processus métiers sur les enjeux du
                    développement durable.
                </p>
            </div>
            <div
                class="md:col-span-4 bg-surface-container-low p-8 rounded-lg flex flex-col border-b-2 border-primary/20">
                <span class="material-symbols-outlined text-primary mb-4" data-icon="gavel">gavel</span>
                <h3 class="font-headline font-bold text-xl mb-3 text-primary">Accompagnement Conformité</h3>
                <p class="text-on-surface-variant text-sm">
                    Mise en conformité avec les réglementations nationales et européennes (CSRD, Devoir de
                    vigilance).
                </p>
            </div>
            <div
                class="md:col-span-4 bg-surface-container-low p-8 rounded-lg flex flex-col border-b-2 border-primary/20">
                <span class="material-symbols-outlined text-primary mb-4"
                    data-icon="settings_suggest">settings_suggest</span>
                <h3 class="font-headline font-bold text-xl mb-3 text-primary">Assistance Opérationnelle</h3>
                <p class="text-on-surface-variant text-sm">
                    Support technique et administratif ponctuel pour garantir la continuité de vos actions de
                    terrain.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="py-24 bg-primary text-white overflow-hidden relative">
    <div class="max-w-7xl mx-auto px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="font-headline font-bold text-4xl mb-8 leading-tight">Des modalités d’accompagnement
                    adaptées à votre réalité de terrain.</h2>
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="bg-secondary-fixed/20 p-3 rounded-full self-start">
                            <span class="material-symbols-outlined text-secondary-fixed"
                                data-icon="event_available">event_available</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl mb-2">Accompagnement au forfait</h4>
                            <p class="text-blue-100/80">Pour des missions aux objectifs et périmètres clairement
                                définis dès le départ.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="bg-secondary-fixed/20 p-3 rounded-full self-start">
                            <span class="material-symbols-outlined text-secondary-fixed"
                                data-icon="update">update</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl mb-2">Régie et externalisation</h4>
                            <p class="text-blue-100/80">Intégration d'un expert dans vos équipes pour une durée
                                déterminée ou récurrente.</p>
                        </div>
                    </div>
                    <div class="flex gap-6">
                        <div class="bg-secondary-fixed/20 p-3 rounded-full self-start">
                            <span class="material-symbols-outlined text-secondary-fixed"
                                data-icon="model_training">model_training</span>
                        </div>
                        <div>
                            <h4 class="font-headline font-bold text-xl mb-2">Workshops &amp; Ateliers</h4>
                            <p class="text-blue-100/80">Sessions intensives pour débloquer des problématiques
                                spécifiques ou acculturer vos cadres.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div
                    class="bg-white/5 backdrop-blur-sm p-8 rounded-xl border border-white/10 relative z-10 shadow-2xl">
                    <h5 class="text-secondary-fixed font-label uppercase tracking-widest mb-4">L'Impact en chiffres
                    </h5>
                    <div class="space-y-6">
                        <div>
                            <span class="block text-5xl font-extrabold text-white mb-1">15+</span>
                            <span class="text-sm font-label text-blue-100 uppercase tracking-wider">Territoires
                                impactés</span>
                        </div>
                        <div>
                            <span class="block text-5xl font-extrabold text-white mb-1">100%</span>
                            <span class="text-sm font-label text-blue-100 uppercase tracking-wider">Sur-mesure
                                garanti</span>
                        </div>
                        <div>
                            <span class="block text-5xl font-extrabold text-white mb-1">3.5k</span>
                            <span class="text-sm font-label text-blue-100 uppercase tracking-wider">Heures de
                                conseil opérationnel</span>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-secondary/20 rounded-full blur-[100px]">
                </div>
                <div class="absolute -top-10 -left-10 w-48 h-48 bg-blue-500/20 rounded-full blur-[80px]"></div>
            </div>
        </div>
    </div>
</section>
<section class="py-32">
    <div class="max-w-4xl mx-auto px-8 text-center">
        <h2 class="font-headline font-extrabold text-4xl text-primary mb-6">Prêt à structurer votre démarche
            d'impact ?</h2>
        <p class="text-on-surface-variant text-lg mb-10">Nos experts sont à votre disposition pour un premier
            diagnostic sans engagement de vos besoins en RSE et gestion de projet.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <button
                class="px-10 py-4 bg-primary text-white font-bold rounded-md hover:scale-105 transition-all duration-300">Demander
                un devis personnalisé</button>
            <button
                class="px-10 py-4 bg-secondary-container text-on-secondary-container font-bold rounded-md hover:scale-105 transition-all duration-300">Télécharger
                notre brochure</button>
        </div>
    </div>
</section>
@section('content')
@endsection
