<x-filament-panels::page>
    <a href="{{ route('filament.admin.pages.device') }}"
        class="flex items-center gap-1 text-gray-500 hover:text-gray-700 font-medium text-xs">
         <x-heroicon-o-arrow-left class="w-4 h-4"/> Back to devices
     </a>
    <div class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-12">
        <div class="md:col-span-6 lg:col-span-8">

            <livewire:instance.qr-code lazy :device="$device" />

        </div>

        <div class="md:col-span-6 lg:col-span-4">
            <div class="rounded-md bg-white p-6 shadow dark:bg-slate-900 dark:shadow-gray-700">
                <h1 class="font-semibold hover:text-indigo-600">How connect</h1>


                <div class="mt-4 flex items-center">
                    <img src="{{ asset('images/devices/scan-demo.gif') }}" alt="Scan Qrcode">
                </div>


                <ol class="relative mt-10 border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-6">
                        <span
                            class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                            <svg class="h-2.5 w-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                            Step 1
                        </h3>
                        <div
                            class="ml-3 mr-2 rounded px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                            Open WhatsApp on your phone
                        </div>


                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                            <svg class="h-2.5 w-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                            Step 2
                        </h3>
                        <div
                            class="ml-3 mr-2 rounded px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                            Tap Menu or Settings and select Linked Devices
                        </div>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                            <svg class="h-2.5 w-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                            Step 3
                        </h3>
                        <div
                            class="ml-3 mr-2 rounded px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                            Tap on Link a Device
                        </div>
                    </li>
                    <li class="mb-10 ml-6">
                        <span
                            class="absolute -left-3 flex h-6 w-6 items-center justify-center rounded-full bg-blue-100 ring-8 ring-white dark:bg-blue-900 dark:ring-gray-900">
                            <svg class="h-2.5 w-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </span>
                        <h3 class="mb-1 flex items-center text-lg font-semibold text-gray-900 dark:text-white">
                            Step 4
                        </h3>
                        <div
                            class="ml-3 mr-2 rounded px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">
                            Point your phone to this screen to capture the code
                        </div>
                    </li>
                </ol>

            </div>
        </div>
    </div>

</x-filament-panels::page>
