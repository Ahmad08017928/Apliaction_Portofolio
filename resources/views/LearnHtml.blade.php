<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Learn Html</title>
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
                                <p class="text-base text-gray-500 ">Selasa, 27-08-2024</p>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">Belajar Html Selama Lima menit</h1>
                    <img src="{{ asset('img/web-programmer.jpg') }}" alt="Html">
                </header>
                <div class="selection:bg-lime-600 selection:text-gray-100 text-slate-600 mb-3 text-lg">
                    <p class="mb-2">HTML (HyperText Markup Language) adalah fondasi dari setiap halaman web. Jika Anda baru memulai 
                        perjalanan dalam pengembangan web, HTML adalah tempat terbaik untuk memulai. Dalam artikel ini, kita akan 
                        belajar dasar-dasar HTML hanya dalam lima menit.</p>

                    <p class="mb-2"><span class="font-bold text-lg">Apa itu Html ?</span> HTML adalah bahasa markup yang digunakan 
                        untuk membuat struktur halaman web. Elemen-elemen HTML membentuk blok bangunan dari halaman web, seperti 
                        teks, gambar, dan tautan</p>

                    <p class="mb-2">Setiap dokumen HTML dimulai dengan &lt;!DOCTYPE html&gt; dan diikuti dengan elemen 
                        &lt;html&gt;, yang merupakan pembungkus seluruh konten. Di dalamnya, terdapat dua bagian utama: 
                        &lt;head&gt; dan &lt;body&gt;.</p>
                    
                    <p class="font-light text-2xl mb-2">Contoh Stuktur Html</p>
                    <img src="{{ asset('img/StrukturHtml.png') }}" alt="strukturhtml" class="my-2 mx-3">
                    <p class="font-light text-2xl mb-2">Mari kita kenalan dengan beberapa elemen HTML dasar yang sering kamu gunakan saat membuat halaman web.</p>
                    <div class="text-slate-600 mx-2">
                        <ul class="list-disc list-outside">
                            <li class="mb-2">
                                <p>&lt;h1&gt; hingga &lt;h6&gt;: Ini adalah judul-judul yang bisa kamu gunakan. Mulai dari &lt;h1&gt; yang paling besar dan mencolok, hingga &lt;h6&gt; 
                                    yang lebih kecil. Cocok untuk mengatur hierarki informasi di halaman kamu!</p>
                            </li>
                            <li class="mb-2">
                                <p>&lt;p&gt;: Digunakan untuk menulis paragraf. Sangat berguna untuk menjelaskan ide atau memberikan informasi kepada pengunjung.</p>
                            </li>
                            <li class="mb-2">
                                <p>&lt;a&gt;: Elemen ini bikin kamu bisa membuat tautan (link). Misalnya, kalau mau mengarahkan pengunjung ke situs lain, kamu bisa pakai 
                                    &lt;a href="https://www.example.com">Kunjungi Situs Ini&lt;a&gt;.</p>
                            </li>
                            <li class="mb-2">
                                <p>&lt;img&gt;: Mau menampilkan gambar? Gunakan elemen ini! Contohnya: &lt;img src="gambar.jpg" alt="Deskripsi Gambar"&gt;. Jangan lupa tambahkan 
                                    deskripsi gambar agar lebih informatif!</p>
                            </li>
                            <li class="mb-2">
                                <p>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;: Ini untuk membuat daftar. Punya daftar belanja? Pakai &lt;ul&gt; untuk daftar tanpa angka (bullet list) dan &lt;ol&gt; untuk 
                                    daftar berurutan (numbered list).</p>
                            </li>
                        </ul>
                    </div>
                    <p class="mb-2">Dengan elemen-elemen dasar ini, kamu sudah siap untuk membuat halaman web sederhana! Berikut contoh yang lebih lengkap agar kamu bisa 
                        langsung coba.</p>
                    <img src="{{ asset('img/Html.png') }}" alt="code html" class="my-3 mx-3">
                </div>
                <p class="font-light text-xl text-slate-600 my-2 mx-2">Dalam lima menit, kamu sudah mengenal dasar-dasar HTML! Sekarang, saatnya berlatih lebih banyak dengan membuat halaman web sederhana. Ingat, HTML itu 
                    seperti pintu gerbang menuju dunia pengembangan web yang lebih seru, jadi jangan ragu untuk bereksperimen dan mencoba hal-hal baru!
                    Sekarang kamu sudah punya bekal untuk membangun struktur halaman web kamu sendiri. Selamat mencoba, dan semoga seru!</p>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>