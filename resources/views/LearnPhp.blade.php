<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Learn Php</title>
</head>
<body>
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 antialiased rounded-3xl drop-shadow-2xl selection:bg-amber-400 text-justify">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-5xl format format-sm sm:format-base lg:format-lg format-blue">
                <header class="mb-4 lg:mb-6 not-format">
                        <a href="/" class="font-medium text-sm text-blue-500 hover:underline">&laquo; Back To Page</a>
                    <address class="flex items-center my-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900">
                            {{-- <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Github"> --}}
                            <div>
                                <h1 class="text-xl font-bold text-gray-900">Ilham Adi Purnomo</h1>
                                {{-- <a href="/posts?category={{ $post->category->slug }}">
                                    <span class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 ml-1 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                        {{ $post->category->name }}
                                    </span>
                                </a> --}}
                                <p class="text-base text-gray-500 ">Rabu, 28-08-2024</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">Belajar singkat tentang PHP Native</h1>
                    <img src="{{ asset('img/blog-php.jpg') }}" alt="Php" class="mb-4">
                </header>
                <div class="selection:bg-lime-600 selection:text-gray-100 text-slate-600 mb-3 text-lg">
                    <p class="mb-2">PHP itu salah satu bahasa pemrograman yang banyak dipakai buat bikin <strong>website 
                        dinamis.</strong> Nah, PHP Native itu artinya kita pakai PHP murni, tanpa bantuan framework kayak 
                        Laravel atau CodeIgniter. Kalau mau ngerti dasar-dasar pemrograman web, belajar PHP Native 
                        ini langkah yang oke banget.</p>
                    <h2 class="text-lg font-semibold mb-2">Apa itu sih Php Native ? </h2>
                    <p class="mb-2">PHP Native adalah cara paling simpel buat pakai PHP. Di sini, kita nulis kode PHP langsung tanpa 
                        framework tambahan. Jadi, kita bisa paham banget gimana PHP bekerja di balik layar dan bisa 
                        ngatur semuanya sesuai keinginan kita.</p>
                    <p class="mb-2">Buat mulai belajar, ada beberapa hal yang perlu disiapkan:</p>
                    <div class="text-slate-600 mx-3">
                        <ul class="list-disc list-outside">
                            <li class="mb-2">
                                <p><strong>Serve lokal:</strong> Bisa pakai XAMPP atau WAMP biar PHP bisa jalan di komputer kamu.</p>
                            </li>
                            <li class="mb-2">
                                <p><strong>Teks editor:</strong> Pakai editor teks kayak VS Code atau Sublime Text buat nulis kodenya.</p>
                            </li>
                            <li class="mb-2">
                                <p><strong>Browser:</strong> Buat lihat hasil kodingan yang udah kamu buat.</p>
                            </li>
                        </ul>
                    </div>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">PHP itu gampang banget dipelajari, apalagi kalau udah tahu sintaks dasarnya.</p>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Contoh paling sederhana </p>
                    <img src="{{ asset('img/php.png') }}" alt="php" class="mx-auto mt-4 mb-6">
                    <p class="font-light text-xl text-slate-600 my-2">Kodingan di atas bakal nampilin tulisan "Hello, World!" di browser kamu.</p>
                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Variabel dan Tipe Data</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Di PHP, variabel selalu diawali dengan tanda $. PHP juga punya berbagai tipe data, kayak integer, string, dan array.</p>
                    <img src="{{ asset('img/VariabelTipeData.png') }}" alt="Varibel&tipe data" class="my-4 mx-auto">
                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Struktur Kendali</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">PHP juga mendukung berbagai struktur kendali kayak if, else, while, dan for.</p>
                    <img src="{{ asset('img/ifelse.png') }}" alt="if else" class="my-4 mx-auto">

                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Bikin Fungsi di PHP</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Fungsi itu kayak blok kode yang bisa dipakai berulang kali. Di PHP, kamu bisa membuat fungsi sendiri.</p>
                    <img src="{{ asset('img/function.png') }}" alt="fuction php" class="my-4 mx-auto">
                    <p class="mt-2 mb-4">Fungsi greet di atas bakal nyapa dengan nama yang kamu masukin.</p>

                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Form HTML dan Pengolahan Data</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">PHP sering banget dipakai buat ngolah data dari form HTML. Contoh form sederhananya adalah</p>
                    <img src="{{ asset('img/form-html.png') }}" alt="form html" class="my-4">
                    <p class="font-light text-xl text-slate-600 mb-2 mx-2">Di file proses.php, kamu bisa akses data yang dikirim lewat variabel global $_POST</p>
                    <img src="{{ asset('img/form-php.png') }}" alt="form php" class="my-4">

                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Koneksi PHP ke Database</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Kalau mau bikin aplikasi yang lebih canggih, kamu mungkin perlu koneksi PHP ke database kayak MySQL. Contoh singkatnya seperti di bawah ini</p>
                    <img src="{{ asset('img/koneksi.png') }}" alt="koneksi" class="mb-6">

                    <div>
                        <p>Belajar PHP Native itu langkah awal yang penting dalam pengembangan web. Meski keliatannya simpel, konsep-konsep dasar ini bakal <strong>berguna banget kalau kamu mau lanjut pakai framework yang lebih kompleks.</strong></p>
                        <p class="mb-4">Nah, kalau udah ngerti PHP Native, kamu bisa coba deh framework-framework PHP yang lebih canggih, salah satunya adalah</p>
                        <h3 class="text-xl font-semibold">Laravel</h3>
                        <p class="mb-4">Laravel adalah framework PHP paling populer yang bikin hidup developer lebih gampang dengan berbagai fitur otomatisasinya.</p>
                        <p>Dengan ngerti PHP dari dasarnya, kamu bakal lebih siap buat menghadapi berbagai tantangan di dunia pengembangan web. Mulai aja dulu dengan proyek-proyek kecil, nanti lama-lama juga makin jago. Semakin sering latihan, semakin mahir juga kamu bikin kode PHP yang keren!</p>
                    </div>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>