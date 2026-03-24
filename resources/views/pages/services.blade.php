@extends('layouts.app')

@section('title', 'Services - Pluri\'elles SAS')
@section('content')
    <section class="relative h-[450px] flex items-center justify-center mt-6">
        <div class="absolute inset-0 overflow-hidden">
            {{-- <img alt="Expertise RSE Pluri'elles" class="w-full h-full object-cover scale-105" src="#" /> --}}

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
                Des préstations RSE adaptées au besoin des entreprises et des organisations des divers secteurs. </p>
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
                <h1 class="font-headline font-extrabold text-[3.5rem] leading-[1.1] text-primary tracking-tight mb-8">
                    Des prestations RSE adaptées à vos ambitions territoriales.
                </h1>
                <p class="text-on-surface-variant text-lg leading-relaxed max-w-2xl font-body">
                    Nous proposons de prestation de conseil et d'accompagnement et d'appui opérationnel pour aider les
                    eentreprises, les organisations ainsi que les acteurs publics ou privés à structurer, déployer et suivre
                    les démarches RSE.
                </p>
            </div>
        </div>
        <div class="absolute top-0 right-0 w-1/3 h-full bg-surface-container-low -z-10 hidden lg:block"></div>
    </section>
    <section class="py-16 bg-surface-container-low">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">
                <h2 class="font-headline font-bold text-3xl text-primary leading-snug">
                    Un accompagnement modulable en fonction de vos enjeux.
                </h2>

                <p class="text-on-surface-variant leading-relaxed">
                    Chaque organisation aborde la RSE à partir d'une situtation particulière, iée à son activité, à son
                    niveua d'avancement, à ses ressources internes et aux attentes auxquelles elle doit répondre. <br>
                    Pluri'elles accompagne ses clients aux differentes étapes de leur démarche RSE, qu'il s'agisse d'initier
                    une réflexion, de structurer un cadre d'action, de consolider des pratiques existantes ou d'assurer un
                    suivi plus régulier. <br>
                    Notre intervention à pour objet d'apporter de repaires clairs, une méthode de travail adaptée et un
                    appui opérationnel, afin de permettre à nos cliens d'inscrire leur démarche dans un cadre cohérent,
                    lisible et durable.
                </p>
            </div>
        </div>
    </section>
    <section class="py-16 bg-surface-container-lowest">
        <div class="max-w-7xl mx-auto px-8">
            <div class="mb-12 border-l-4 border-primary pl-6">
                <h2 class="text-3xl font-headline font-bold text-primary">Nos Services & Expertises</h2>
                <p class="text-on-surface-variant mt-2">Un accompagnement complet, de l'audit à l'exécution opérationnelle.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="fact_check">fact_check</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Audit RSE</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Service 1 – Audit RSE
                        Nous assistons nos clients dans l’évaluation de leur situation au regard des enjeux RSE, en vue de
                        leur permettre de disposer d’un état des lieux structuré et exploitable.
                        Cette prestation vise à analyser les pratiques existantes, à identifier les enjeux prioritaires et à
                        mettre en évidence les points d’appui ainsi que les axes de progression. Elle permet de disposer
                        d’une base claire pour orienter la suite de la démarche et définir les premières priorités de
                        travail.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="handshake">handshake</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Sous-traitance RSE</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Avec Plurielles SAS, libérez votre potentiel en nous confiant la gestion opérationnelle de votre
                        stratégie RSE. De l'audit de conformité à la mise en œuvre de vos engagements sociaux et
                        environnementaux, nous agissons comme votre département RSE externalisé. Nous garantissons une
                        traçabilité rigoureuse et un impact mesurable pour renforcer votre image de marque.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="account_tree">account_tree</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Structuration Stratégie RSE</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Nous accompagnons nos clients dans la définition des orientations de leur démarche RSE, afin de leur
                        permettre de formaliser un cadre d’action cohérent avec leur activité, leur organisation et leurs
                        responsabilités.
                        Notre intervention peut porter sur l’identification des enjeux structurants, la hiérarchisation des
                        priorités, la formalisation des axes de travail et l’élaboration d’une feuille de route. L’objectif
                        est de permettre à l’organisation de disposer d’une stratégie claire, progressive et adaptée à sa
                        réalité.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="precision_manufacturing">precision_manufacturing</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary"> Agence d'Exécution de Projets</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        ​Nous ne nous contentons pas de conseiller : nous exécutons. Que ce soit pour des projets de
                        développement, des infrastructures ou des initiatives de terrain, Plurielles prend en charge le
                        pilotage intégral, la logistique et le suivi technique. Nous transformons vos cahiers des charges en
                        résultats tangibles, dans le respect de vos délais et budgets
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="rocket_launch">rocket_launch</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Accompagnement & Booster (Entrepreneuriat)
                    </h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        ​Plurielles SAS booste votre croissance, que vous soyez une start-up en création ou une société
                        établie. Notre pôle offre un mentorat stratégique pour les porteurs de projets et des solutions
                        d'optimisation de services pour les entreprises existantes. Nous auditons vos processus et injectons
                        l'innovation nécessaire pour propulser vos performances vers de nouveaux sommets.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="verified_user">verified_user</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Accompagnement à la conformité</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Nous accompagnons nos clients dans la prise en compte de leurs obligations légales, réglementaires
                        et contractuelles en matière de RSE, en vue de leur permettre de mieux comprendre les exigences
                        applicables et d’y répondre de manière structurée.
                        Cet accompagnement a vocation à sécuriser certains volets de la démarche, à faciliter la
                        formalisation des réponses attendues et à renforcer la cohérence entre les engagements affichés, les
                        pratiques existantes et les attentes externes.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="settings_suggest">settings_suggest</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Assistance Opérationnelle</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Nous assistons nos clients dans la mise en œuvre de leur démarche RSE, afin de leur permettre
                        d’assurer un suivi plus régulier des actions engagées et de mieux organiser leur déploiement.
                        Cette prestation peut porter sur l’appui à la formalisation de documents, le suivi de plans
                        d’action, la coordination de certains travaux ou la préparation d’elements utiles au pilotage. Elle
                        vise à soutenir l’avancement de la démarche dans des conditions concrètes et maîtrisées.
                    </p>
                </div>

                <div
                    class="bg-surface-container-low p-8 rounded-xl border-t-4 border-primary shadow-sm hover:shadow-md transition-shadow h-full flex flex-col">
                    <span class="material-symbols-outlined text-primary mb-4 text-3xl"
                        data-icon="admin_panel_settings">admin_panel_settings</span>
                    <h3 class="font-headline font-bold text-xl mb-3 text-primary">Gestion externalisée de missions RSE</h3>
                    <p class="text-on-surface-variant text-sm leading-relaxed">
                        Nous accompagnons nos clients en assurant, de manière externalisée, tout ou partie de certaines
                        missions RSE, en vue de leur permettre de bénéficier d’un appui structuré sans mobiliser
                        immédiatement une ressource dédiée en interne.
                        Cette modalité d’intervention permet d’assurer une continuité dans le suivi, de renforcer
                        l’organisation de la démarche et de soutenir les travaux engagés dans la durée, selon un cadre
                        souple et adapté aux besoins de la structure.
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
@endsection
