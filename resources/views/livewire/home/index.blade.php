<div>
    {{-- Navbar --}}
    <nav class="border-gray-200 bg-white dark:bg-gray-900">
        <div class="mx-auto flex max-w-screen-xl flex-wrap items-center justify-between p-4">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/logo_450x172.png') }}" class="mr-3 h-16" alt="America 360 Logo" />

            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex h-10 w-10 items-center justify-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="mt-4 flex flex-col rounded-lg border border-gray-100 bg-gray-50 p-4 font-medium dark:border-gray-700 dark:bg-gray-800 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:p-0 md:dark:bg-gray-900">
                    <li>
                        <a href="#"
                            class="block rounded bg-blue-700 py-2 pl-3 pr-4 text-white dark:text-white md:bg-transparent md:p-0 md:text-blue-700 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Sobre
                            nós</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Nossos
                            cursos</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Nossos
                            professores</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block rounded py-2 pl-3 pr-4 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:border-0 md:p-0 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:bg-transparent md:dark:hover:text-blue-500">Fale
                            conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Hero Section --}}
    <section class="relative table w-full bg-gray-50 bg-cover bg-bottom py-36 dark:bg-slate-800 lg:py-44" id="home"
        style="background-image: url('{{ asset('images/backgrounds/bg4.png') }}')">
        <div class="container relative">
            <div class="grid items-center gap-[30px] md:grid-cols-2 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <span class="h-5 rounded bg-indigo-600/5 px-2.5 py-0.5 text-xs font-bold text-indigo-600">Nova
                        geração</span>

                    <h1
                        class="font-display mx-auto max-w-3xl text-5xl font-medium tracking-tight text-slate-900 sm:text-7xl">
                        Inglês inovador,
                        <span class="relative whitespace-nowrap text-red-700">
                            <svg aria-hidden="true" viewBox="0 0 418 42"
                                class="absolute left-0 top-2/3 h-[0.58em] w-full fill-blue-300/70"
                                preserveAspectRatio="none">
                                <path
                                    d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z" />
                            </svg>
                            <span class="relative">simplificado</span>
                        </span>
                        e divertido .
                    </h1>


                </div>

                <div class="lg:col-span-5">

                    <div
                        class="relative z-10 rounded-xl bg-white p-6 shadow dark:bg-slate-900 dark:shadow-gray-800 md:p-8 lg:ms-10">
                        @if (session('status'))
                            <div
                                class="relative my-4 block rounded-md border border-emerald-600/10 bg-emerald-600/10 px-4 py-2 font-medium text-emerald-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h4 class="mb-5 text-2xl font-semibold">Quero fazer parte!</h4>

                        <div class="grid grid-cols-1">
                            <form wire:submit="submit">
                                <div class="mb-5">
                                    <label class="form-label font-medium">Nome completo : <span
                                            class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <x-feathericon-user class="absolute start-4 top-3 h-4 w-4" />
                                        <input type="text" wire:model="name" placeholder="Nome completo"
                                            class="form-input h-10 w-full rounded border border-gray-200 bg-transparent px-3 py-2 ps-12 outline-none focus:border-indigo-600 focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 dark:focus:border-indigo-600">
                                        <div>
                                            @error('name')
                                                <span class="text-sm text-red-400"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label class="form-label font-medium">E-mail : <span
                                            class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <x-feathericon-mail class="absolute start-4 top-3 h-4 w-4" />
                                        <input type="email" wire:model="email" placeholder="E-mail"
                                            class="form-input h-10 w-full rounded border border-gray-200 bg-transparent px-3 py-2 ps-12 outline-none focus:border-indigo-600 focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 dark:focus:border-indigo-600">
                                        <div>
                                            @error('email')
                                                <span class="text-sm text-red-400"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label class="form-label font-medium">Telefone : <span
                                            class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <x-feathericon-phone class="absolute start-4 top-3 h-4 w-4" />
                                        <input type="text" wire:model="phone" x-mask="(99) 99999-9999"
                                            class="form-input h-10 w-full rounded border border-gray-200 bg-transparent px-3 py-2 ps-12 outline-none focus:border-indigo-600 focus:ring-0 dark:border-gray-800 dark:bg-slate-900 dark:text-slate-200 dark:focus:border-indigo-600"
                                            placeholder="(99) 99999-9999">
                                        <div>
                                            @error('phone')
                                                <span class="text-sm text-red-400"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit"
                                        class="inline-block w-full rounded-md border border-indigo-600 bg-indigo-600 px-5 py-2 text-center align-middle text-base tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">
                                        Enviar</button>
                                </div>


                            </form>



                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    {{-- Features --}}
    <section class="relative py-16 md:py-24">
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h6 class="mb-2 text-sm font-bold text-indigo-600">Junte-se a mais de 40 mil alunos</h6>
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Chegou a hora de
                    falar inglês! <br> Aprenda com os melhores professores.</h3>

                <p class="mx-auto max-w-xl text-slate-400">Junte-se à America360 e embarque na jornada para a fluência
                    em inglês.</p>
            </div>
            <!--end grid-->

            <div class="mt-8 grid grid-cols-1 gap-[30px] md:grid-cols-3">
                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                        </svg>


                    </div>

                    <div class="mt-8">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Instrutores qualificados</a>

                        <p class="mt-4 text-slate-400">Todos os nossos instrutores são falantes nativos de inglês com
                            vasta experiência no ensino do idioma.</p>


                    </div>
                </div>
                <!-- Feature End -->

                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.91 11.672a.375.375 0 010 .656l-5.603 3.113a.375.375 0 01-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112z" />
                        </svg>


                    </div>

                    <div class="mt-8">
                        <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Aulas
                            ao vivo</a>

                        <p class="mt-4 text-slate-400">As aulas são realizadas em tempo real, permitindo a interação
                            direta entre os alunos e os instrutores.</p>


                    </div>
                </div>
                <!-- Feature End -->

                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 3v1.5M4.5 8.25H3m18 0h-1.5M4.5 12H3m18 0h-1.5m-15 3.75H3m18 0h-1.5M8.25 19.5V21M12 3v1.5m0 15V21m3.75-18v1.5m0 15V21m-9-1.5h10.5a2.25 2.25 0 002.25-2.25V6.75a2.25 2.25 0 00-2.25-2.25H6.75A2.25 2.25 0 004.5 6.75v10.5a2.25 2.25 0 002.25 2.25zm.75-12h9v9h-9v-9z" />
                        </svg>


                    </div>

                    <div class="mt-8">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Conteúdo personalizado</a>

                        <p class="mt-4 text-slate-400">Os cursos são adaptados às necessidades e objetivos individuais
                            de cada aluno.</p>


                    </div>
                </div>
                <!-- Feature End -->
            </div>

            <div class="mt-8 grid grid-cols-1 gap-[30px] md:grid-cols-3">
                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                        </svg>


                    </div>

                    <div class="mt-8">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Material didático de
                            qualidade</a>

                        <p class="mt-4 text-slate-400">Fornecemos materiais didáticos atualizados, incluindo livros
                            digitais, exercícios interativos e recursos multimídia.</p>


                    </div>
                </div>
                <!-- Feature End -->

                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                        </svg>

                    </div>

                    <div class="mt-8">
                        <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">Acesso
                            24/7</a>

                        <p class="mt-4 text-slate-400">Os alunos têm acesso ao conteúdo e atividades do curso a
                            qualquer momento, permitindo que estudem de acordo com sua própria programação.</p>


                    </div>
                </div>
                <!-- Feature End -->

                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                        </svg>

                    </div>

                    <div class="mt-8">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Suporte individualizado</a>

                        <p class="mt-4 text-slate-400">Nossos instrutores estão disponíveis para fornecer suporte
                            individualizado e feedback regularmente.</p>


                    </div>
                </div>
                <!-- Feature End -->
            </div>
        </div>
        <!--end container-->

        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 items-center gap-[30px] md:grid-cols-12">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="{{ asset('images/company/about2.png') }}" class="mx-auto" alt="">
                        <div class="absolute bottom-2/4 end-0 start-0 translate-y-2/4 text-center">
                            <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                class="lightbox inline-flex h-20 w-20 items-center justify-center rounded-full bg-white text-indigo-600 shadow-lg dark:bg-slate-900 dark:text-white dark:shadow-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="h-6 w-6">
                                    <path fill-rule="evenodd"
                                        d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ms-4">
                        <h4 class="mb-6 text-2xl font-medium leading-normal md:text-3xl lg:leading-normal">Sobre Nós </h4>
                        <p class="max-w-xl text-slate-400">
                            Somos uma escola de inglês on-line especializada em oferecer cursos de qualidade para
                            estudantes de todas as idades e níveis de fluência. Nossa missão é proporcionar aos alunos
                            uma experiência de aprendizagem interativa, personalizada e flexível, tornando o estudo do
                            inglês mais acessível e conveniente.
                        </p>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Nossos Cursos
                </h3>


            </div>
            <!--end grid-->

            <div class="relative mx-auto mt-4 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
                <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <div class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Inglês Básico
                        </div>
                        <div class="mt-2 text-base leading-7 text-gray-600">Este curso é ideal para iniciantes que desejam aprender os fundamentos da língua inglesa, como vocabulário básico, estruturas gramaticais simples e habilidades de conversação.</div>
                    </div>
                    <div class="relative pl-16">
                        <div class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Inglês Intermediário
                        </div>
                        <div class="mt-2 text-base leading-7 text-gray-600">Projetado para estudantes que já possuem conhecimentos básicos do inglês, o curso intermediário ajuda a aprimorar habilidades de comunicação em situações cotidianas e permite maior compreensão de textos e diálogos.</div>
                    </div>
                    <div class="relative pl-16">
                        <div class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Inglês Avançado
                        </div>
                        <div class="mt-2 text-base leading-7 text-gray-600">Este curso é voltado para alunos com habilidades avançadas no idioma, oferecendo a oportunidade de aprimorar o vocabulário, a gramática e a fluência oral. Desafios de escrita e leitura também são abordados.</div>
                    </div>
                    <div class="relative pl-16">
                        <div class="text-base font-semibold leading-7 text-gray-900">
                            <div
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            Preparação para Exames
                        </div>
                        <div class="mt-2 text-base leading-7 text-gray-600">Oferecemos cursos especiais para preparação de exames como TOEFL, IELTS, Cambridge e outros. Esses cursos são projetados para ajudar os alunos a alcançar pontuações mais altas e melhorar suas chances de sucesso.</div>
                    </div>
                </div>


            </div>


        </div>

        <div class="bg-white py-16 sm:py-24">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto max-w-xl text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Depoimentos</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">O que os nossos alunos estão dizendo sobre nossos cursos</p>
              </div>
              <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
                <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                  <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-50 p-8 text-sm leading-6">
                      <blockquote class="text-gray-900">
                        <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut enim doloremque et ipsam.”</p>
                      </blockquote>
                      <figcaption class="mt-6 flex items-center gap-x-4">
                        <img class="h-10 w-10 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        <div>
                          <div class="font-semibold text-gray-900">Leslie Alexander</div>
                          <div class="text-gray-600">@lesliealexander</div>
                        </div>
                      </figcaption>
                    </figure>
                  </div>


                  <!-- More testimonials... -->
                </div>
              </div>
            </div>
          </div>

          <!--end contanier-->
    </section>


    {{-- Footer --}}
    <footer class="footer relative bg-dark-footer text-gray-200 dark:text-gray-200">
        <div class="container relative">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="px-0 py-[60px]">
                        <div class="grid grid-cols-1 gap-[30px] md:grid-cols-12">
                            <div class="md:col-span-12 lg:col-span-4">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img src="{{ asset('images/logo_450x172.png') }}" width="250px" alt="">
                                </a>
                                <p class="mt-6 text-gray-300">Somos uma escola de inglês on-line especializada em oferecer cursos de qualidade para estudantes de todas as idades e níveis de fluência. Nossa missão é proporcionar aos alunos uma experiência de aprendizagem interativa, personalizada e flexível, tornando o estudo do inglês mais acessível e conveniente.</p>
                                <ul class="mt-6 list-none">
                                    <li class="inline"><a href="https://1.envato.market/techwind" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600">
                                            <x-uni-shopping-cart-o class="h-4 w-4" title="Buy Now" />
                                        </a></li>
                                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600">
                                            <x-uni-dribbble-o class="h-4 w-4" title="dribbble" />
                                        </a>
                                    </li>
                                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600">
                                            <x-uni-behance-o class="h-4 w-4" title="dribbble" />
                                        </a></li>

                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-2">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Institucional</h5>
                                <ul class="footer-list mt-6 list-none">
                                    <li><a href="page-aboutus.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Sobre nós</a></li>
                                    <li class="mt-[10px]"><a href="page-services.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Nossos cursos</a></li>
                                    <li class="mt-[10px]"><a href="page-team.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Nosso professores</a></li>
                                    <li class="mt-[10px]"><a href="portfolio-creative-four.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Área de membros</a></li>

                                    <li class="mt-[10px]"><a href="auth-login.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Login</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-3">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Importante</h5>
                                <ul class="footer-list mt-6 list-none">
                                    <li><a href="page-terms.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Termos e Condições</a></li>
                                    <li class="mt-[10px]"><a href="page-privacy.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Política de cancelamento</a></li>
                                    <li class="mt-[10px]"><a href="documentation.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Fale Conosco</a></li>
                                    <li class="mt-[10px]"><a href="changelog.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Trabalhe Conosco</a></li>
                                    <li class="mt-[10px]"><a href="widget.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Programa de fidelidade</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-3">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Newsletter</h5>
                                <p class="mt-6">Cadastre seu e-email.</p>
                                <form>
                                    <div class="grid grid-cols-1">
                                        <div class="my-3">
                                            <div class="form-icon relative mt-2">
                                                <x-feathericon-mail class="absolute start-4 top-3 h-4 w-4" />
                                                <input type="email"
                                                    class="form-input h-10 w-full rounded border-0 bg-gray-800 px-3 py-2 ps-12 text-gray-100 placeholder:text-gray-200 focus:shadow-none focus:ring-0"
                                                    placeholder="Email" name="email" required="">
                                            </div>
                                        </div>

                                        <button type="submit" id="submitsubscribe" name="send"
                                            class="inline-block rounded-md border border-indigo-600 bg-indigo-600 px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">Assinar</button>
                                    </div>
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="border-t border-slate-800 px-0 py-[30px]">
            <div class="container relative text-center">
                <div class="grid items-center md:grid-cols-2">
                    <div class="text-center md:text-start">
                        <p class="mb-0">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> America 360. Todos os direitos reservados
                        </p>
                    </div>

                    <ul class="mt-6 list-none text-center md:mt-0 md:text-end">
                        <li class="inline"><a href=""><img
                                    src="{{ asset('images/payments/american-ex.png') }}" class="inline max-h-6"
                                    title="American Express" alt=""></a></li>
                        <li class="inline"><a href=""><img src="{{ asset('images/payments/discover.png') }}"
                                    class="inline max-h-6" title="Discover" alt=""></a></li>
                        <li class="inline"><a href=""><img
                                    src="{{ asset('images/payments/master-card.png') }}" class="inline max-h-6"
                                    title="Master Card" alt=""></a></li>
                        <li class="inline"><a href=""><img src="{{ asset('images/payments/paypal.png') }}"
                                    class="inline max-h-6" title="Paypal" alt=""></a></li>
                        <li class="inline"><a href=""><img src="{{ asset('images/payments/visa.png') }}"
                                    class="inline max-h-6" title="Visa" alt=""></a></li>
                    </ul>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </div>
    </footer>
    {{-- Cookies --}}
    <!-- Start Cookie Popup -->
    {{-- <div class="cookie-popup fixed bottom-3 end-3 start-3 z-50 mx-auto w-full px-6 py-5 sm:start-0">
        <div class="mx-auto max-w-7xl px-6">
            <div class="rounded-lg bg-yellow-100 p-2">
                <div class="flex flex-wrap items-center justify-between">
                    <div class="hidden w-0 flex-1 items-center md:inline">
                        <p class="cookie-consent__message ml-3 text-black">
                            Utilizamos cookies para aprimorar sua experiência de navegação, exibir anúncios ou conteúdos
                            personalizados e analisar tráfego. <br /> Ao cliar em "Permitir todos", você concorda com
                            nosso uso de cookies
                        </p>
                    </div>
                    <div class="mt-2 w-full flex-shrink-0 sm:mt-0 sm:w-auto">
                        <button
                            class="js-cookie-consent-agree cookie-consent__agree flex cursor-pointer items-center justify-center rounded-md bg-yellow-400 px-4 py-2 text-sm font-medium text-yellow-800 hover:bg-yellow-300">
                            Permitir todos
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->
<!-- Back to top -->

<!-- Back to top -->
</div>
