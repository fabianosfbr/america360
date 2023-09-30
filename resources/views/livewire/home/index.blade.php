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

                    {{-- <h4 class="mb-5 mt-2 text-4xl font-semibold leading-normal lg:text-4xl lg:leading-normal">
                        Faça parte da nova geração.<br /> Entre para a próxima turma
                        com bônus exclusivo
                    </h4> --}}

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

                    {{-- <p class="max-w-xl text-lg text-slate-400">Faça parte da nova geração. Entre para a próxima turma
                        com bônus exclusivo.</p> --}}

                    {{-- <div class="relative mt-10">
                        <a href=""
                            class="me-1 inline-block rounded-full border border-indigo-600 bg-indigo-600 px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">Get
                            Started</a>
                        <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                            class="lightbox inline-flex h-12 w-12 items-center justify-center rounded-full border-indigo-600 bg-indigo-600 text-center align-middle text-base tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6 align-middle">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                            </svg>

                        </a><small class="ms-2 align-middle text-sm font-bold uppercase">Watch Now</small>
                    </div> --}}
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
                <h6 class="mb-2 text-sm font-bold uppercase text-indigo-600">Features</h6>
                <h3 class="mb-4 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Business
                    strategies
                    and top <br> permormance ideas</h3>

                <p class="mx-auto max-w-xl text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>
            </div>
            <!--end grid-->

            <div class="mt-8 grid grid-cols-1 gap-[30px] md:grid-cols-3">
                <div class="group text-center">
                    <div
                        class="mx-auto flex h-20 w-20 rotate-45 items-center justify-center rounded-lg bg-indigo-600/5 align-middle text-indigo-600 shadow-sm dark:shadow-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6 rotate-[-45deg]">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                        </svg>

                    </div>

                    <div class="mt-8">
                        <a href="page-services.html"
                            class="title h5 text-lg font-medium hover:text-indigo-600">Profitable Marketing</a>

                        <p class="mt-4 text-slate-400">We develop digital strategies, products and services appreciated
                            by clients.</p>

                        <div class="mt-4">
                            <a href=""
                                class="relative inline-block border-none text-center align-middle text-base font-semibold tracking-wide duration-500 ease-in-out after:absolute after:bottom-0 after:end-0 after:start-0 after:h-px after:w-0 after:bg-indigo-600 after:duration-500 after:content-[''] hover:text-indigo-600 hover:after:end-auto hover:after:w-full">Read
                                More <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
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
                        <a href="page-services.html" class="title h5 text-lg font-medium hover:text-indigo-600">SEO
                            Specialists</a>

                        <p class="mt-4 text-slate-400">We develop digital strategies, products and services appreciated
                            by clients.</p>

                        <div class="mt-4">
                            <a href=""
                                class="relative inline-block border-none text-center align-middle text-base font-semibold tracking-wide duration-500 ease-in-out after:absolute after:bottom-0 after:end-0 after:start-0 after:h-px after:w-0 after:bg-indigo-600 after:duration-500 after:content-[''] hover:text-indigo-600 hover:after:end-auto hover:after:w-full">Read
                                More <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
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
                            class="title h5 text-lg font-medium hover:text-indigo-600">Audience
                            Analysis</a>

                        <p class="mt-4 text-slate-400">We develop digital strategies, products and services appreciated
                            by clients.</p>

                        <div class="mt-4">
                            <a href=""
                                class="relative inline-block border-none text-center align-middle text-base font-semibold tracking-wide duration-500 ease-in-out after:absolute after:bottom-0 after:end-0 after:start-0 after:h-px after:w-0 after:bg-indigo-600 after:duration-500 after:content-[''] hover:text-indigo-600 hover:after:end-auto hover:after:w-full">Read
                                More <i class="uil uil-arrow-right align-middle"></i></a>
                        </div>
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
                        <h4 class="mb-6 text-2xl font-medium leading-normal md:text-3xl lg:leading-normal">We are the
                            largest <br> Business expert </h4>
                        <p class="max-w-xl text-slate-400">Start working with Tailwind CSS that can provide everything
                            you need to generate awareness, drive traffic, connect. Dummy text is text that is used in
                            the publishing industry or by web designers to occupy the space which will later be filled
                            with 'real' content. This is required when, for example, the final text is not yet
                            available. Dummy texts have been in use by typesetters since the 16th century.</p>
                        <a href=""
                            class="mt-3 inline-block rounded-md border border-indigo-600 bg-indigo-600 px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">Buy
                            Now <i class="mdi mdi-chevron-right align-middle"></i></a>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative mt-16 md:mt-24">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 text-2xl font-semibold leading-normal md:text-3xl md:leading-normal">Key Features</h3>

                <p class="mx-auto max-w-xl text-slate-400">Start working with Tailwind CSS that can provide everything
                    you need to generate awareness, drive traffic, connect.</p>
            </div>
            <!--end grid-->

            <div class="mt-8 grid grid-cols-1 gap-[30px] md:grid-cols-12">
                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-monitor class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Fully Responsive</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-heart class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Browser Compatibility</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-eye class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Retina Ready</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-layout class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Based On Tailwindcss 3</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-feather class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Feather Icons</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-code class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Built With SASS</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-user-check class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">W3c Valid Code</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-globe class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Browsers Compatible</h4>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-6 lg:col-span-4">
                    <div
                        class="flex items-center rounded-md bg-white p-3 shadow duration-500 ease-in-out hover:scale-105 hover:shadow-md dark:bg-slate-900 dark:shadow-gray-800 dark:hover:shadow-gray-700">
                        <div
                            class="me-3 flex h-[45px] min-w-[45px] -rotate-45 items-center justify-center rounded-full bg-gradient-to-r from-transparent to-indigo-600/10 text-center text-indigo-600">
                            <x-feathericon-settings class="rotate-45" />
                        </div>
                        <div class="flex-1">
                            <h4 class="mb-0 text-lg font-medium">Easy to customize</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 justify-center">
                <div class="mt-6 text-center">
                    <a href=""
                        class="relative inline-block border-none text-center align-middle text-base font-semibold tracking-wide text-indigo-600 duration-500 ease-in-out after:absolute after:bottom-0 after:end-0 after:start-0 after:h-px after:w-0 after:bg-indigo-600 after:duration-500 after:content-[''] hover:text-indigo-600 hover:after:end-auto hover:after:w-full">See
                        More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div>
        </div>
        <!--end contanier-->
    </section>

    {{-- CTA --}}
    <section class="relative py-16 pt-0 md:py-24 md:pt-0">
        <div class="container relative">
            <div class="grid grid-cols-1 justify-center">
                <div class="relative z-1">
                    <div class="grid grid-cols-1 justify-center text-center md:text-start lg:grid-cols-12">
                        <div class="lg:col-span-10 lg:col-start-2">
                            <div class="relative">
                                <img src="{{ asset('images/cta-bg.jpg') }}" class="rounded-md shadow-lg"
                                    alt="">
                                <div class="absolute bottom-2/4 end-0 start-0 translate-y-2/4 text-center">
                                    <a href="#!" data-type="youtube" data-id="S_CGed6E610"
                                        class="lightbox inline-flex h-20 w-20 items-center justify-center rounded-full bg-white text-indigo-600 shadow-lg dark:bg-slate-900 dark:text-white dark:shadow-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" class="h-6 w-6">
                                            <path fill-rule="evenodd"
                                                d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                                clip-rule="evenodd" />
                                        </svg>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content md:mt-8">
                        <div class="grid grid-cols-1 justify-center text-center md:text-start lg:grid-cols-12">
                            <div class="lg:col-span-10 lg:col-start-2">
                                <div class="grid grid-cols-1 items-center md:grid-cols-2">
                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <h6 class="text-lg font-semibold text-white/50">Team</h6>
                                            <h3
                                                class="mt-2 text-2xl font-semibold leading-normal text-white md:text-3xl md:leading-normal">
                                                Meet Experience <br> Team Member</h3>
                                        </div>
                                    </div>

                                    <div class="mt-8">
                                        <div class="section-title text-md-start">
                                            <p class="mx-auto mb-2 max-w-xl text-white/50">Start working with Techwind
                                                that can provide everything you need to generate awareness, drive
                                                traffic, connect.</p>
                                            <a href="" class="text-white">Read More <i
                                                    class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row -->
        </div>
        <!--end container-->

        <div class="absolute bottom-0 end-0 start-0 h-4/5 bg-gradient-to-b from-indigo-500 to-indigo-600 sm:h-2/3">
        </div>
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
                                    <img src="assets/images/logo-light.png" alt="">
                                </a>
                                <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide
                                    everything you need to generate awareness, drive traffic, connect.</p>
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
                                    <li class="inline"><a href="http://linkedin.com/company/shreethemes"
                                            target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="inline"><a href="mailto:support@shreethemes.in"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-envelope align-middle" title="email"></i></a></li>
                                    <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank"
                                            class="inline-flex h-8 w-8 items-center justify-center rounded-md border border-gray-800 text-center align-middle text-base tracking-wide duration-500 hover:border-indigo-600 hover:bg-indigo-600 dark:hover:border-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-file align-middle" title="customization"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-2">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Company</h5>
                                <ul class="footer-list mt-6 list-none">
                                    <li><a href="page-aboutus.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> About us</a></li>
                                    <li class="mt-[10px]"><a href="page-services.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Services</a></li>
                                    <li class="mt-[10px]"><a href="page-team.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Team</a></li>
                                    <li class="mt-[10px]"><a href="page-pricing.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Pricing</a></li>
                                    <li class="mt-[10px]"><a href="portfolio-creative-four.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Project</a></li>

                                    <li class="mt-[10px]"><a href="auth-login.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Login</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-3">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Usefull Links</h5>
                                <ul class="footer-list mt-6 list-none">
                                    <li><a href="page-terms.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                    <li class="mt-[10px]"><a href="page-privacy.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                    <li class="mt-[10px]"><a href="documentation.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Documentation</a></li>
                                    <li class="mt-[10px]"><a href="changelog.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Changelog</a></li>
                                    <li class="mt-[10px]"><a href="widget.html"
                                            class="text-gray-300 duration-500 ease-in-out hover:text-gray-400"><i
                                                class="uil uil-angle-right-b"></i> Widget</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="md:col-span-4 lg:col-span-3">
                                <h5 class="font-semibold tracking-[1px] text-gray-100">Newsletter</h5>
                                <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="grid grid-cols-1">
                                        <div class="my-3">
                                            <label class="form-label">Write your email <span
                                                    class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="absolute start-4 top-3 h-4 w-4"></i>
                                                <input type="email"
                                                    class="form-input h-10 w-full rounded border-0 bg-gray-800 px-3 py-2 ps-12 text-gray-100 placeholder:text-gray-200 focus:shadow-none focus:ring-0"
                                                    placeholder="Email" name="email" required="">
                                            </div>
                                        </div>

                                        <button type="submit" id="submitsubscribe" name="send"
                                            class="inline-block rounded-md border border-indigo-600 bg-indigo-600 px-5 py-2 text-center align-middle text-base font-semibold tracking-wide text-white duration-500 hover:border-indigo-700 hover:bg-indigo-700">Subscribe</button>
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
    <div class="cookie-popup fixed bottom-3 end-3 start-3 z-50 mx-auto w-full px-6 py-5 sm:start-0">
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
    </div>
</div>
<!--Note: Cookies Js including in plugins.init.js (path like; assets/js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- End Cookie Popup -->
<!-- Back to top -->

<!-- Back to top -->
</div>
