<!-- BEGIN: Info Area -->
<div data-simplebar class="rounded-md bg-white dark:bg-slate-800 h-full">
    <div class="p-4">
        <div class="rounded-full mx-auto mb-4" style="width: 100px; height: 100px">
            <img src="{{ asset('images/users/user-3.jpg') }}" alt="" class="bblock w-full h-full object-cover rounded-full mx-auto">
        </div>
        <div class="text-center">
            <h5 class="text-base text-slate-600 dark:text-slate-300 font-medium mb-1">Mercedes Yemelyany</h5>
            <h6 class="text-xs text-slate-600 dark:text-slate-300 font-normal">{{ __('Frontend Developer') }}</h6>
        </div>
        <ul class="list-item mt-5 space-y-4 border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6">
            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                    <iconify-icon icon="heroicons-outline:location-marker"></iconify-icon>
                    <span>{{ __('Location') }}</span>
                </div>
                <div class="font-medium">Bangladesh</div>
            </li>
            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                    <iconify-icon icon="heroicons-outline:user"></iconify-icon>
                    <span>{{ __('Members since') }}</span>
                </div>
                <div class="font-medium">Oct 2021</div>
            </li>
            <li class="flex justify-between text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <div class="flex space-x-2 items-start rtl:space-x-reverse">
                    <iconify-icon icon="ion:language-outline"></iconify-icon>
                    <span>{{ __('Language') }}</span>
                </div>
                <div class="font-medium">English</div>
            </li>
        </ul>
        <ul class="list-item space-y-3 border-b border-slate-100 dark:border-slate-700 pb-5 -mx-6 px-6 mt-5">
            <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <button class="flex space-x-2 rtl:space-x-reverse">
                    <iconify-icon icon="bxl:facebook-circle"></iconify-icon>
                    <span class="capitalize font-normal text-slate-600 dark:text-slate-300">facebook</span>
                </button>
            </li>
            <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <button class="flex space-x-2 rtl:space-x-reverse">
                    <iconify-icon icon="radix-icons:twitter-logo"></iconify-icon>
                    <span class="capitalize font-normal text-slate-600 dark:text-slate-300">twitter</span>
                </button>
            </li>
            <li class="text-sm text-slate-600 dark:text-slate-300 leading-[1]">
                <button class="flex space-x-2 rtl:space-x-reverse">
                    <iconify-icon icon="bxl:instagram"></iconify-icon>
                    <span class="capitalize font-normal text-slate-600 dark:text-slate-300">instagram</span>
                </button>
            </li>
        </ul>
        <h4 class="py-4 text-sm text-secondary-500 dark:text-slate-300 font-normal">{{ __('Shared Documents') }}</h4>
        <ul class="grid grid-cols-3 gap-2">
            <li class="h-[46px]" style="height: 46px">
                <img src="{{asset('images/chat/sd1.png')}}" alt="" class="w-full h-full object-cover rounded-[3px]">
            </li>
            <li class="h-[46px]" style="height: 46px">
                <img src="{{asset('images/chat/sd2.png')}}" alt="" class="w-full h-full object-cover rounded-[3px]">
            </li>

        </ul>
    </div>
</div>
<!-- END: Info Area -->
