<header id="main-header"
    class="fixed top-0 w-full z-50 bg-white/90 backdrop-blur-xl border-b border-outline-variant/30 transition-all duration-300 shadow-md">

    <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">


        <a href="{{ route('home') }}" class="flex items-center gap-3 group shrink-0">
            <div
                class="w-10 h-10 bg-primary flex items-center justify-center rounded-lg rotate-3 group-hover:rotate-0 transition-transform duration-300 shadow-md">
                <span class="text-white font-black text-xl italic font-headline">P</span>
            </div>
            <span class="text-xl font-black tracking-tighter text-primary font-headline uppercase">
                Pluri’elles <span class="text-secondary font-light italic">SAS</span>
            </span>
        </a>

        <nav class="hidden lg:flex items-center gap-2">
            @php
                $links = [
                    ['route' => 'home', 'label' => 'Accueil'],
                    ['route' => 'services', 'label' => 'Services'],
                    ['route' => 'about', 'label' => 'Qui sommes-nous'],
                    ['route' => 'news', 'label' => 'Actualités'],
                ];
            @endphp

            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                    class="relative px-4 py-2 text-[11px] font-bold tracking-[0.15em] uppercase font-label transition-all duration-300 group
                          {{ request()->routeIs($link['route']) ? 'text-secondary' : 'text-on-surface-variant hover:text-primary' }}">

                    {{ $link['label'] }}

                    <span
                        class="absolute bottom-0 left-1/2 -translate-x-1/2 h-0.5 bg-secondary rounded-full transition-all duration-300
                          {{ request()->routeIs($link['route']) ? 'w-8' : 'w-0 group-hover:w-6' }}">
                    </span>
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-4">
            <a href="{{ route('contact') }}"
                class="hidden md:inline-flex bg-primary text-on-primary px-6 py-2.5 rounded-xl font-bold text-xs uppercase tracking-widest hover:shadow-lg hover:shadow-primary/20 hover:-translate-y-0.5 active:scale-95 transition-all">
                Nous contacter
            </a>

            <button id="menu-btn" type="button"
                class="lg:hidden p-2 text-primary hover:bg-primary/5 rounded-lg transition-colors">
                <span class="material-symbols-outlined text-3xl">menu_open</span>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden lg:hidden bg-white border-t border-outline-variant/20 shadow-xl overflow-hidden transition-all duration-300">
        <div class="px-6 py-8 flex flex-col gap-6">
            @foreach ($links as $link)
                <a href="{{ route($link['route']) }}"
                    class="flex items-center justify-between text-lg font-headline font-bold {{ request()->routeIs($link['route']) ? 'text-secondary' : 'text-primary' }}">
                    {{ $link['label'] }}
                    @if (request()->routeIs($link['route']))
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                    @endif
                </a>
            @endforeach
            <hr class="border-outline-variant/10">
            <a href="{{ route('contact') }}"
                class="w-full text-center bg-primary text-white py-4 rounded-xl font-bold uppercase tracking-widest">
                Nous contacter
            </a>
        </div>
    </div>
</header>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>
