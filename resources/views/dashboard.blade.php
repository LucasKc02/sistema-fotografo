<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-violet-500 to-fuchsia-600 text-white shadow-lg shadow-violet-500/20">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-6 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor"
                         stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="8.5" cy="8.5" r="1.5"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="m21 15-5-5L5 21"/>
                    </svg>
                </div>

                <div>
                    <h2 class="text-lg font-black tracking-tight text-white">
                        Pixel Moments
                    </h2>
                    <p class="text-xs text-gray-400">
                        Seu espaço criativo
                    </p>
                </div>
            </div>

            <div class="hidden items-center gap-2 rounded-full border border-emerald-400/20 bg-emerald-400/5 px-4 py-2 sm:flex">
                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                <span class="text-xs font-semibold text-emerald-300">
                    Galeria online
                </span>
            </div>
        </div>
    </x-slot>

    <div class="min-h-screen bg-[#0b0a12] py-10 text-white sm:py-14">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- Apresentação --}}
            <section class="relative mb-12 overflow-hidden rounded-[2rem] border border-white/[0.08] bg-gradient-to-br from-[#191329] via-[#15111f] to-[#101019] p-7 shadow-2xl shadow-black/20 sm:p-12">
                <div class="pointer-events-none absolute -right-16 -top-24 h-72 w-72 rounded-full bg-violet-600/20 blur-[100px]"></div>
                <div class="pointer-events-none absolute -bottom-24 left-1/3 h-48 w-48 rounded-full bg-fuchsia-500/10 blur-[80px]"></div>

                <div class="relative z-10 max-w-2xl">
                    <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-violet-400/20 bg-violet-400/10 px-3 py-1.5">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-4 w-4 text-violet-300" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor"
                             stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3v2m0 14v2M3 12h2m14 0h2M5.64 5.64l1.42 1.42m9.88 9.88 1.42 1.42m0-12.72-1.42 1.42m-9.88 9.88-1.42 1.42"/>
                            <circle cx="12" cy="12" r="4"/>
                        </svg>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-violet-200">
                            Seu universo visual
                        </span>
                    </div>

                    <h1 class="text-4xl font-black leading-tight tracking-tight sm:text-6xl">
                        Momentos que
                        <span class="bg-gradient-to-r from-violet-400 via-fuchsia-300 to-pink-400 bg-clip-text text-transparent">
                            merecem
                        </span>
                        ser lembrados.
                    </h1>

                    <p class="mt-5 max-w-xl text-sm leading-7 text-gray-400 sm:text-base">
                        Compartilhe suas fotografias favoritas, descubra novas perspectivas e transforme instantes em memórias.
                    </p>

                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="#publicar"
                           class="inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-fuchsia-600 px-5 py-3 text-sm font-bold text-white shadow-lg shadow-violet-600/20 transition duration-300 hover:-translate-y-1 hover:shadow-violet-500/30">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-5 w-5" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor"
                                 stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 4v16m8-8H4"/>
                            </svg>
                            Publicar momento
                        </a>

                        <div class="flex items-center gap-3 rounded-xl border border-white/[0.08] bg-white/[0.03] px-4 py-3">
                            <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-violet-500/10 text-violet-300">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor"
                                     stroke-width="1.8">
                                    <rect x="3" y="3" width="18" height="18" rx="3"/>
                                    <circle cx="8.5" cy="8.5" r="1.5"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m21 15-5-5L5 21"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xl font-black text-white">
                                    {{ $fotos->count() }}
                                </p>
                                <p class="text-xs text-gray-500">
                                    {{ $fotos->count() === 1 ? 'foto publicada' : 'fotos publicadas' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Formulário de publicação --}}
            <section id="publicar" class="mb-16 scroll-mt-8">
                <div class="mb-6 flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-violet-500/10 text-violet-300">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor"
                             stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 16V4m0 0L7 9m5-5 5 5M4 16v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-white">
                            Compartilhe uma memória
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                            Uma imagem pode contar mil histórias.
                        </p>
                    </div>
                </div>

                <div class="overflow-hidden rounded-3xl border border-white/[0.08] bg-[#12111b] shadow-xl shadow-black/10">
                    <form action="{{ route('foto.save') }}"
                          method="POST"
                          enctype="multipart/form-data"
                          class="space-y-6 p-6 sm:p-8">
                        @csrf

                        <div>
                            <x-input-label for="title"
                                :value="__('Título da foto')"
                                class="mb-2 text-sm font-semibold text-gray-300"/>

                            <x-text-input
                                id="title"
                                type="text"
                                name="title"
                                :value="old('title')"
                                placeholder="Ex.: Um dia inesquecível..."
                                class="block w-full rounded-xl border border-white/10 bg-[#0c0b13] px-4 py-3.5 text-sm text-white placeholder-gray-600 shadow-none transition focus:border-violet-500 focus:ring-4 focus:ring-violet-500/10"
                            />

                            <x-input-error :messages="$errors->get('title')"
                                class="mt-2"/>
                        </div>

                        <div>
                            <x-input-label for="photo"
                                :value="__('Arquivo da imagem')"
                                class="mb-2 text-sm font-semibold text-gray-300"/>

                            <label for="photo"
                                   class="group flex cursor-pointer flex-col items-center justify-center rounded-2xl border border-dashed border-white/15 bg-[#0c0b13] px-5 py-10 text-center transition duration-300 hover:border-violet-400/60 hover:bg-violet-500/[0.04]">
                                <span class="mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-violet-500/10 text-violet-300 transition duration-300 group-hover:scale-110 group-hover:bg-violet-500/20">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="h-7 w-7" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor"
                                         stroke-width="1.6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 16V4m0 0L7 9m5-5 5 5M4 16v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3"/>
                                    </svg>
                                </span>

                                <span class="text-sm font-bold text-gray-200">
                                    Clique para escolher uma imagem
                                </span>
                                <span class="mt-2 text-xs text-gray-500">
                                    PNG, JPG, JPEG ou outro formato de imagem aceito pelo servidor
                                </span>

                                <input
                                    id="photo"
                                    type="file"
                                    name="photo"
                                    accept="image/*"
                                    required
                                    class="sr-only"
                                />
                            </label>

                            <x-input-error :messages="$errors->get('photo')"
                                class="mt-2"/>
                        </div>

                        <div class="flex flex-col-reverse gap-3 border-t border-white/[0.07] pt-5 sm:flex-row sm:items-center sm:justify-between">
                            <p class="text-xs leading-5 text-gray-500">
                                Publique suas memórias favoritas.
                            </p>

                            <button
                                type="submit"
                                class="inline-flex items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-violet-600 to-fuchsia-600 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-violet-600/20 transition duration-300 hover:-translate-y-0.5 hover:shadow-violet-500/30 active:translate-y-0">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="h-5 w-5" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor"
                                     stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 4v16m8-8H4"/>
                                </svg>
                                Publicar fotografia
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            {{-- Galeria --}}
            <section>
                <div class="mb-8 flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.25em] text-violet-400">
                            Coleção pessoal
                        </span>

                        <h3 class="mt-2 text-3xl font-black tracking-tight text-white sm:text-4xl">
                            Sua galeria<span class="text-violet-400">.</span>
                        </h3>

                        <p class="mt-2 text-sm text-gray-500">
                            Todos os seus momentos reunidos em um só lugar.
                        </p>
                    </div>

                    <div class="rounded-xl border border-white/[0.08] bg-[#15141f] px-4 py-2.5 text-sm text-gray-400">
                        <span class="font-bold text-white">{{ $fotos->count() }}</span>
                        {{ $fotos->count() === 1 ? 'fotografia' : 'fotografias' }}
                    </div>
                </div>

                @if($fotos->isEmpty())
                    <div class="rounded-3xl border border-dashed border-white/10 bg-[#12111b] px-6 py-20 text-center">
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-3xl border border-violet-400/10 bg-violet-500/[0.07] text-violet-300">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-9 w-9" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor"
                                 stroke-width="1.4">
                                <rect x="3" y="3" width="18" height="18" rx="3"/>
                                <circle cx="8.5" cy="8.5" r="1.5"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m21 15-5-5L5 21"/>
                            </svg>
                        </div>

                        <h4 class="mt-6 text-xl font-bold text-white">
                            Sua história começa aqui
                        </h4>

                        <p class="mx-auto mt-3 max-w-sm text-sm leading-6 text-gray-500">
                            Você ainda não publicou nenhuma foto. Escolha sua primeira imagem e comece a construir sua coleção.
                        </p>

                        <a href="#publicar"
                           class="mt-6 inline-flex items-center gap-2 rounded-xl border border-violet-400/20 bg-violet-500/10 px-5 py-3 text-sm font-bold text-violet-300 transition hover:bg-violet-500/20">
                            Adicionar primeira foto
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 class="h-4 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor"
                                 stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 12h14m-7-7 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        @foreach ($fotos as $foto)
                            @php
                                $curtida = $foto->like()
                                    ->where('user_id', Auth::id())
                                    ->exists();

                                $totalCurtidas = $foto->like->count();
                            @endphp

                            <article class="group flex min-w-0 flex-col overflow-hidden rounded-2xl border border-white/[0.08] bg-[#13121c] transition duration-300 hover:-translate-y-1 hover:border-violet-400/30 hover:shadow-2xl hover:shadow-violet-950/20">

                                {{-- Imagem --}}
                                <div class="relative aspect-[4/3] overflow-hidden bg-[#1b1928]">
                                    <img
                                        src="{{ asset('storage/' . $foto->photo) }}"
                                        alt="{{ $foto->title }}"
                                        loading="lazy"
                                        class="h-full w-full object-cover transition duration-700 group-hover:scale-110"
                                    />

                                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-70 transition duration-300 group-hover:opacity-100"></div>

                                    <div class="absolute left-3 top-3">
                                        <span class="rounded-lg border border-white/15 bg-black/40 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-white backdrop-blur-md">
                                            Fotografia
                                        </span>
                                    </div>
                                </div>

                                {{-- Informações --}}
                                <div class="flex flex-1 flex-col p-5">
                                    <h4 class="min-h-12 break-words text-base font-bold leading-6 text-gray-100 [overflow-wrap:anywhere]">
                                        {{ $foto->title }}
                                    </h4>

                                    <div class="mt-4 flex items-center justify-between gap-3 border-t border-white/[0.07] pt-4">
                                        <span class="text-xs text-gray-500">
                                            Curtidas
                                        </span>

                                        <form action="{{ route('foto.like', $foto) }}"
                                              method="POST">
                                            @csrf

                                            <button
                                                type="submit"
                                                aria-label="{{ $curtida ? 'Descurtir foto' : 'Curtir foto' }}"
                                                aria-pressed="{{ $curtida ? 'true' : 'false' }}"
                                                class="flex items-center gap-2 rounded-xl px-3.5 py-2 text-sm font-bold transition duration-200 active:scale-90
                                                {{ $curtida
                                                    ? 'bg-pink-500/10 text-pink-400 hover:bg-pink-500/20'
                                                    : 'bg-white/[0.04] text-gray-400 hover:bg-pink-500/10 hover:text-pink-400' }}">

                                                @if($curtida)
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5" viewBox="0 0 24 24"
                                                         fill="currentColor">
                                                        <path d="M11.645 20.91a.75.75 0 0 0 .71 0C17.14 18.12 21 13.97 21 9.75A5.25 5.25 0 0 0 11.99 6.4 5.25 5.25 0 0 0 3 9.75c0 4.22 3.86 8.37 8.645 11.16Z"/>
                                                    </svg>
                                                @else
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         class="h-5 w-5" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor"
                                                         stroke-width="1.8">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78Z"/>
                                                    </svg>
                                                @endif

                                                <span>{{ $totalCurtidas }}</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </section>

            {{-- Rodapé --}}
            <footer class="mt-16 border-t border-white/[0.07] pt-6 text-center">
                <p class="text-xs text-gray-600">
                    Pixel Moments · Guarde o que importa.
                </p>
            </footer>

        </div>
    </div>
</x-app-layout>