<div>
    <div class="flex  w-full bg-white justify-center  rounded-md  p-6 shadow dark:bg-slate-900 dark:shadow-gray-700">
        <img src="{{ $connection['base64'] }}" alt="Scan Qrcode">
    </div>
    <div class="flex  w-full bg-white justify-center  rounded-md  shadow dark:bg-slate-900 dark:shadow-gray-700">
       or
    </div>

    <div class="flex  py-4 w-full bg-white justify-center  rounded-md  shadow dark:bg-slate-900 dark:shadow-gray-700">
        <span class="font-semibold">Pairing Code:&nbsp;&nbsp; </span> {{ $connection['pairingCode'] }}
     </div>
</div>
