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
    <section class="max-w-7xl mx-auto px-8 pb-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">
            <div class="lg:col-span-4 space-y-12">
                <div class="space-y-8">
                    <div class="group">
                        <div class="flex items-center gap-4 mb-3">
                            <span class="material-symbols-outlined text-secondary text-2xl" data-icon="mail">mail</span>
                            <h3 class="font-headline font-bold text-primary uppercase text-xs tracking-widest">Email
                            </h3>
                        </div>
                        <p class="text-on-surface text-xl font-medium group-hover:text-secondary transition-colors">
                            contact@plurielles-sas.f
                        </p>
                    </div>
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
                            XXXXXXXXXXXXXXXXX<br />
                            75008 Kinshasa, République Démocratique du Congo
                        </p>
                    </div>
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
                <div class="relative h-64 w-full rounded-2xl overflow-hidden bg-surface-container-highest group">
                    <img alt="Bureau moderne collaboratif"
                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                        data-alt="Modern minimalist collaborative office space interior"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAX5fOlkdXtPI5k1Gv17rjF9WgtHlv1fXWrs0zYRI-yE1VgbltGgXB5y3PPWsxIRnp6-PRFn6tQKIFnSu1QLcoz9MQc1fgeKxKFQNlKTIMdAicuxJB4z6mE6lTdG-1LvmkkV6x6oqaygH-fU6uozJ_Own0BgADkwJKEVZFn_xU-chJCiuA4KOD-rLIzc8-rzYfSDconLiPcNh1BLT6sjPXaxT2Uc9VjlewR53r4LOG-_WOSN-A235gT5O1MaRT9AoMLYQb9C0bYF40" />
                    <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
                </div>
            </div>
            <div class="lg:col-span-8 bg-surface-container-low p-8 md:p-12 rounded-2xl">
                <form action="mailto:votre-email@domaine.com" method="post" enctype="text/plain" class="space-y-10">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="nom">Nom</label>
                            <input
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none"
                                id="nom" name="Nom" placeholder="Votre nom" type="text" required />
                        </div>
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="prenom">Prénom</label>
                            <input
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none"
                                id="prenom" name="Prenom" placeholder="Votre prénom" type="text" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="organisation">Organisation</label>
                            <input
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none"
                                id="organisation" name="Organisation" placeholder="Nom de l'entreprise" type="text" />
                        </div>
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="email">Email</label>
                            <input
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none"
                                id="email" name="Email" placeholder="email@exemple.com" type="email" required />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="telephone">Téléphone</label>
                            <input
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none"
                                id="telephone" name="Telephone" placeholder="+33 0 00 00 00 00" type="tel" />
                        </div>
                        <div class="space-y-2">
                            <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                                for="objet">Sujet de la demande</label>
                            <select
                                class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none appearance-none cursor-pointer"
                                id="objet" name="Sujet">
                                <option value="Expertise RSE">Expertise RSE</option>
                                <option value="Gestion de Projet">Gestion de Projet</option>
                                <option value="Partenariat">Partenariat</option>
                                <option value="Autre">Autre demande</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="font-label text-xs uppercase tracking-widest text-on-surface-variant block"
                            for="message">Votre Message</label>
                        <textarea
                            class="w-full bg-transparent border-b border-outline/30 focus:border-primary focus:ring-0 px-0 py-3 transition-all outline-none resize-none"
                            id="message" name="Message" placeholder="Détaillez votre demande ici..." rows="4" required></textarea>
                    </div>

                    <div class="pt-6 flex flex-col md:flex-row items-center justify-between gap-8">
                        <p class="text-[10px] text-on-surface-variant/70 leading-tight max-w-sm text-center md:text-left">
                            En cliquant sur envoyer, votre application de messagerie s'ouvrira pour finaliser l'envoi vers
                            Pluri’elles SAS.
                        </p>
                        <button type="submit"
                            class="w-full md:w-auto bg-primary text-white px-10 py-4 rounded-xl font-bold uppercase text-xs tracking-[0.2em] flex items-center justify-center gap-3 hover:shadow-2xl hover:-translate-y-1 transition-all active:scale-95 shadow-lg shadow-primary/20">
                            Envoyer le message
                            <span class="material-symbols-outlined text-lg">send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
