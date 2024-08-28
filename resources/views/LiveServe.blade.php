<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Live Serve</title>
</head>
<body>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased rounded-3xl drop-shadow-2xl selection:bg-amber-400 text-justify">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue">
                <header class="mb-4 lg:mb-6 not-format">
                        <a href="/" class="font-medium text-sm text-blue-500 hover:underline">&laquo; Back To Page</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                            <div>
                                <h1 class="text-xl font-bold text-gray-900">Ilham Adi Purnomo</h1>
                                <p class="text-base text-gray-500 ">Rabu, 28-08-2024</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">Tips Praktis: Menampilkan project web Laravel di HP Tanpa Ribet!</h1>
                    <img src="{{ asset('img/live-serve.jpg') }}" alt="Live serve" class="mb-4 w-full">
                </header>
                <div class="selection:bg-lime-600 selection:text-gray-100 text-slate-600 mb-3 text-lg">
                    <p class="mb-2">Ingin tahu cara menampilkan project web app Laravel langsung di smartphone? Ini 
                        adalah panduan simpel yang bakal bikin kamu bisa cek hasil coding Laravel kamu tanpa ribet, 
                        langsung dari ponsel. Yuk, simak langkah-langkahnya!</p>
                    </div>
                    <ul class="list-none list-outside">
                        <li class="mb-3">
                            <h3 class="font-semibold text-lg">1. Pastikan Laravel Berjalan di Server Lokal</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Pertama-tama, pastikan project Laravel 
                        kamu sudah berjalan di server lokal. Kamu bisa menjalankannya dengan perintah berikut di 
                        terminal</p>
                    {{-- <img src="{{ asset('img/grid-css.png') }}" alt="grid css" class="my-4 mx-auto"> --}}
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">`php artisan serve`</p>
                    <p class="font-light text-xl text-slate-600 mb-4 mx-2">Biasanya, Laravel akan berjalan di localhost:8000 pada komputer kamu</p>

                    <ul class="list-none list-outside">
                        <li class="mb-3">
                            <h3 class="font-semibold text-lg">2. Temukan Alamat IP Komputer</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Untuk mengakses Laravel dari smartphone, kamu butuh alamat IP dari komputer yang menjalankan server Laravel.</p>
                    <p class="font-semibold text-xl text-slate-600 my-2 mx-2">Caranya : </p>
                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <p><strong>Windows : </strong>Buka Command Prompt, ketik ipconfig, dan cari alamat IPv4 di bagian koneksi jaringan aktif.</p>
                        </li>
                        <li class="mb-3 mx-3">
                            <p><strong>Mac/Linux : </strong>Buka terminal, ketik ifconfig dan cari alamat IP di bagian koneksi jaringan.</p>
                        </li>
                    </ul>
                    <p class="font-light text-xl text-slate-600 mb-4 mx-2">Alamat IP ini biasanya berbentuk 192.168.x.x.</p>

                    <ul class="list-none list-outside">
                        <li class="mb-3">
                            <h3 class="font-semibold text-lg">3. Setting file package.json</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Setelah kamu mengetahui alamat IPv4 dari komputer yang menjalankan 
                        server Laravel, langkah berikutnya adalah masuk ke file package.json di dalam project Laravel kamu. Di dalam file tersebut, 
                        cari bagian scripts, dan temukan key yang bernama vite. Sesuaikan konfigurasi di bagian vite seperti yang dijelaskan atau 
                        ditunjukkan pada gambar berikutnya dalam artikel ini.</p>
                    <img src="{{ asset('img/host.png') }}" alt="package.json" class="my-4 mx-auto">
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Setelah kamu mengubah konfigurasi vite, langkah selanjutnya adalah menjalankan perintah berikut di terminal</p>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">`php artisan serve --host 0.0.0.0`</p>
                    <p class="font-light text-xl text-slate-600 mb-4 mx-2">Jika perintah tersebut berhasil dijalankan, maka server Laravel kamu akan siap diakses dari perangkat lain.</p>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Sekarang, buka browser di smartphone kamu, masukkan alamat IPv4 yang tadi kamu dapatkan, dan tambahkan port :8000 di akhir alamat tersebut. Misalnya</p>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">`http://192.168.x.x:8000`</p>
                    <p class="font-light text-xl text-slate-600 mt-5 mx-2">Dengan cara ini, kamu bisa langsung melihat hasil project Laravel kamu di smartphone, memudahkanmu untuk menguji tampilan dan fungsionalitas aplikasi di perangkat mobile.</p>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>