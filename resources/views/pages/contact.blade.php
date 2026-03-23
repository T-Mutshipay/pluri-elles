@extends('layouts.app')

@section('title', 'Contact - Pluri\'elles SAS')

@section('content')
    <section class="mx-auto px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-end">
            <div>
                <span class="font-label text-on-surface-variant uppercase tracking-widest text-xs mb-4 block">Entrons en
                    contact</span>
                <h1 class="font-headline text-5xl md:text-6xl font-extrabold tracking-tight text-primary leading-tight mb-8">
                    Construisons ensemble <br />vos projets de demain.
                </h1>
            </div>
            <div class="pb-2">
                <p class="text-on-surface-variant text-lg leading-relaxed max-w-lg">
                    Que vous souhaitiez initier une démarche RSE, optimiser votre gestion de projet ou explorer de
                    nouvelles opportunités de croissance durable, notre équipe d'experts est à votre écoute.
                </p>
            </div>
        </div>
    </section>
    <!-- Main Content: Form & Details -->
    <section class="max-w-7xl mx-auto px-8 pb-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <!-- Contact Details (The Sidebar) -->
            <div class="lg:col-span-4 space-y-12">
                <div class="space-y-8">
                    <!-- Email -->
                    <div class="group">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="material-symbols-outlined text-secondary text-2xl" data-icon="mail">mail</span>
                            <h3 class="font-headline font-bold text-primary uppercase text-xs tracking-widest">Email
                            </h3>
                        </div>
                        <p class="text-on-surface text-xl font-medium group-hover:text-secondary transition-colors">
                            contact@plurielles-sas.fr</p>
                    </div>
                    <!-- Phone -->
                    <div class="group">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="material-symbols-outlined text-secondary text-2xl" data-icon="call">call</span>
                            <h3 class="font-headline font-bold text-primary uppercase text-xs tracking-widest">Téléphone
                            </h3>
                        </div>
                        <p class="text-on-surface text-xl font-medium">+33 (0)1 23 45 67 89</p>
                    </div>
                    <!-- Address -->
                    <div class="group">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="material-symbols-outlined text-secondary text-2xl"
                                data-icon="location_on">location_on</span>
                            <h3 class="font-headline font-bold text-primary uppercase text-xs tracking-widest">Adresse
                            </h3>
                        </div>
                        <p class="text-on-surface text-lg leading-relaxed">
                            12 Avenue de l'Innovation<br />
                            75008 Paris, France
                        </p>
                    </div>
                    <!-- Hours -->
                    <div class="group p-6 bg-surface-container-low rounded-xl border-l-4 border-secondary">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="material-symbols-outlined text-secondary text-2xl"
                                data-icon="schedule">schedule</span>
                            <h3 class="font-headline font-bold text-primary uppercase text-xs tracking-widest">Horaires
                                d'ouverture</h3>
                        </div>
                        <p class="text-on-surface font-medium">Lundi — Vendredi</p>
                        <p class="text-on-surface-variant">9h00 — 17h00</p>
                    </div>
                </div>
                <!-- Visual Anchor -->
                <div class="relative h-64 w-full rounded-2xl overflow-hidden bg-surface-container-highest group">
                    <img alt="Bureau moderne collaboratif"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Modern minimalist collaborative office space interior"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAX5fOlkdXtPI5k1Gv17rjF9WgtHlv1fXWrs0zYRI-yE1VgbltGgXB5y3PPWsxIRnp6-PRFn6tQKIFnSu1QLcoz9MQc1fgeKxKFQNlKTIMdAicuxJB4z6mE6lTdG-1LvmkkV6x6oqaygH-fU6uozJ_Own0BgADkwJKEVZFn_xU-chJCiuA4KOD-rLIzc8-rzYfSDconLiPcNh1BLT6sjPXaxT2Uc9VjlewR53r4LOG-_WOSN-A235gT5O1MaRT9AoMLYQb9C0bYF40" />
                    <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
                </div>
            </div>
            <!-- Contact Form (The Main Action) -->
            <div class="lg:col-span-8 bg-surface-container-low p-8 md:p-12 rounded-2xl">
                <form action="#" class="space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Nom -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="nom">Nom</label>
                            <input
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none"
                                id="nom" name="nom" placeholder="Votre nom" type="text" />
                        </div>
                        <!-- Prénom -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="prenom">Prénom</label>
                            <input
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none"
                                id="prenom" name="prenom" placeholder="Votre prénom" type="text" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Organisation -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="organisation">Organisation</label>
                            <input
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none"
                                id="organisation" name="organisation" placeholder="Nom de votre entreprise"
                                type="text" />
                        </div>
                        <!-- Email -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="email">Email Professionnel</label>
                            <input
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none"
                                id="email" name="email" placeholder="email@exemple.com" type="email" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Téléphone -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="telephone">Téléphone</label>
                            <input
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none"
                                id="telephone" name="telephone" placeholder="+33 0 00 00 00 00" type="tel" />
                        </div>
                        <!-- Objet -->
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="objet">Objet de votre demande</label>
                            <select
                                class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all text-on-surface-variant outline-none appearance-none"
                                id="objet" name="objet">
                                <option disabled="" selected="" value="">Sélectionnez un sujet</option>
                                <option value="rse">Expertise RSE</option>
                                <option value="project">Gestion de Projet</option>
                                <option value="partnership">Partenariat</option>
                                <option value="other">Autre demande</option>
                            </select>
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="space-y-2">
                        <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                            for="message">Votre Message</label>
                        <textarea
                            class="w-full bg-surface-container-high border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all placeholder:text-outline/50 outline-none resize-none"
                            id="message" name="message" placeholder="Comment pouvons-nous vous aider ?" rows="5"></textarea>
                    </div>
                    <div class="pt-4 flex items-center justify-between gap-4">
                        <p class="text-[10px] text-on-surface-variant/70 leading-tight max-w-sm">
                            En soumettant ce formulaire, vous acceptez que les informations saisies soient exploitées
                            dans le cadre de la demande de contact et de la relation commerciale qui peut en découler.
                        </p>
                        <button
                            class="hero-gradient text-on-primary px-10 py-4 rounded-md font-label text-sm uppercase tracking-widest font-bold flex items-center gap-3 hover:shadow-xl hover:-translate-y-1 transition-all duration-300"
                            type="submit">
                            Envoyer le message
                            <span class="material-symbols-outlined text-lg" data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Map section / Location visual -->
    <section
        class="w-full h-96 bg-surface-container-highest relative grayscale hover:grayscale-0 transition-all duration-700 overflow-hidden">
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none z-10">
            <div class="bg-white p-6 shadow-2xl rounded-lg text-center">
                <p class="font-headline font-bold text-primary">Pluri’elles SAS</p>
                <p class="text-xs font-label uppercase text-on-surface-variant tracking-wider">Siège Social — Paris</p>
            </div>
        </div>
        <img alt="Plan de Paris" class="w-full h-full object-cover opacity-60"
            data-alt="Abstract aerial map view of Paris city streets" data-location="Paris"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgHESpjWZtZ0bq1xKQ0MNzeoqu_ko4Z1ichVRcbMKdXTEvmfRXxtxGuBdcQ-vdfBqtnsBmslg2bptowK2keDNS28Il4-ng8EFUMwX5ijWr5HCfdPnFbzhMSvHKUpiEv3FKrWgEFJAIBBbTGhkVQtCIsIyWRc_5EOcXNdTKkGsSRwuhDNwtUURbrPULfWcBCihHRQqgCSazoqAXP_bUKQID-vYm6XQoRG3sY6ydr1D-3LlwciN6Dnvk5z3pwJ47n6Y1hil0yKn6bsA" />
    </section>
@endsection
