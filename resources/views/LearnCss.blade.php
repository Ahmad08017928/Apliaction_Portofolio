<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Learn Css</title>
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
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">Belajar singkat tentang Layout Css</h1>
                    <img src="{{ asset('img/web-desain.jpg') }}" alt="Css" class="mb-4">
                </header>
                <div class="selection:bg-lime-600 selection:text-gray-100 text-slate-600 mb-3 text-lg">
                    <p class="mb-2">CSS (Cascading Style Sheets) itu bahasa yang dipakai buat <strong>ngatur tampilan dan tata letak elemen-elemen di halaman web.</strong> 
                        Salah satu hal penting dari CSS adalah cara kita ngatur layout atau tata letak halaman biar terlihat rapi dan menarik. Nah, di 
                        artikel ini kita bakal bahas dasar-dasar layout CSS dengan cara yang santai dan gampang dipahami.</p>
                    {{-- <h2 class="text-lg font-semibold mb-2">Apa itu sih Php Native ? </h2> --}}
                    <p class="mb-2">Layout CSS itu cara kita ngatur posisi dan tampilan elemen-elemen di halaman web. <strong>Mulai dari cara elemen yang ditampilkan 
                        secara horizontal atau vertikal, sampai gimana mereka (tampilan) bisa menyesuaikan diri di berbagai ukuran layar.</strong> Dengan ngerti layout CSS, 
                        kita bisa bikin halaman web yang responsif dan enak dilihat di mana aja, dari laptop sampai HP</p>
                    <p class="mb-2">Sebelum kita masuk ke teknik layout yang lebih canggih, penting banget buat ngerti perbedaan antara elemen block dan inline</p>
                    <div class="text-slate-600 mx-3">
                        <ul class="list-disc list-outside">
                            <li class="mb-2">
                                <p><strong>Block:</strong> Elemen block, kayak &lt;div&gt; atau &lt;p&gt;, akan memenuhi seluruh lebar halaman dan otomatis mulai di baris baru.</p>
                            </li>
                            <li class="mb-2">
                                <p><strong>Inline:</strong> Elemen inline, kayak &lt;span&gt; atau &lt;a&gt;, cuma mengambil ruang sesuai kontennya dan nggak mulai di baris baru.</p>
                            </li>
                        </ul>
                        <img src="{{ asset('img/display-css.png') }}" alt="display css" class="my-4 mx-auto">
                    </div>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Flexbox itu salah satu cara yang paling sering dipakai dan <strong>cara simpel buat ngatur layout. Dengan Flexbox, 
                        kita bisa gampang ngatur elemen-elemen biar sejajar secara horizontal atau vertikal</strong>, plus ngatur jarak antar elemen. </p>
                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Contoh paling Flexbox </p>
                    <img src="{{ asset('img/flex.png') }}" alt="flexbox" class="mx-auto mt-4 mb-6">
                    <p class="font-light text-xl text-slate-600 my-2">Contoh di atas bikin elemen-elemen di dalam .container berada di tengah-tengah, baik secara horizontal maupun vertikal. Gampang, kan?</p>
                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Grid Layout</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">CSS Grid itu teknik layout yang lebih keren dan kompleks dibanding Flexbox. 
                        Dengan Grid, kita bisa bikin layout dengan baris dan kolom, mirip kayak tabel tapi <strong>jauh lebih fleksibel.</strong></p>
                    <img src="{{ asset('img/grid-css.png') }}" alt="grid css" class="my-4 mx-auto">
                    <p class="font-light text-xl text-slate-600 mb-4 mx-2">Di sini, .container bakal punya tiga kolom yang masing-masing ukurannya sama, dan ada jarak 10px di antara kolom-kolom itu.</p>

                    <ul class="list-disc list-outside">
                        <li class="mb-2 mx-3">
                            <h3 class="font-semibold text-lg">Positioning</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Selain Flexbox dan Grid, CSS juga punya properti position yang bikin kita bisa <strong>ngatur posisi elemen secara lebih spesifik</strong>.</p>
                     <ol class="list-decimal list-outside">
                            <li class="mb-2 mx-3">
                                <p><strong>Static (default) : </strong>Elemen ditempatkan sesuai aliran dokumen biasa.</p>
                            </li>
                            <li class="mb-2 mx-3">
                                <p><strong>Relative : </strong>Elemen diposisikan relatif terhadap posisi awalnya.</p>
                            </li>
                            <li class="mb-2 mx-3">
                                <p><strong>Absolute : </strong>Elemen diposisikan relatif terhadap elemen induknya yang 
                                    paling dekat dengan position: relative.</p>
                            </li>
                            <li class="mb-2 mx-3">
                                <p><strong>Fixed : </strong> Elemen diposisikan relatif terhadap viewport, alias tetap 
                                    di tempat meskipun halaman di-scroll.</p>
                            </li>
                        </ul>
                    <img src="{{ asset('img/position.png') }}" alt="position" class="my-4 mx-auto">

                    <ul class="list-disc list-outside">
                        <li class="mb-3 mx-3">
                            <h3 class="font-semibold text-lg">Media Queries</h3>
                        </li>
                    </ul>

                    <p class="font-light text-xl text-slate-600 my-2 mx-2">Biar layout kita kelihatan oke di semua 
                        perangkat, kita perlu pakai media queries. Media queries bikin kita bisa ngatur tampilan yang 
                        beda-beda tergantung ukuran layar.</p>
                    <img src="{{ asset('img/media-css.png') }}" alt="media Queries" class="mt-4 mb-6 mx-auto">
                    <p class="mb-4">Kalau lebar layar lebih kecil dari 768px, .container cuma bakal punya satu kolom, jadi layout-nya lebih ramah buat mobile.</p>

                    <div>
                        <p class="mb-3">Mengerti tentang CSS Layout itu penting banget buat bikin website yang nggak cuma fungsional tapi juga enak dilihat. Dengan pakai Flexbox, Grid, dan 
                            teknik positioning, kita bisa ngatur elemen-elemen di halaman web jadi rapi dan responsif.</p>
                        <p>Buat makin jago, coba-coba aja bikin layout untuk berbagai tipe halaman web, dari landing page, blog, sampai e-commerce. Semakin sering 
                            latihan, makin luwes deh kamu ngatur layout pakai CSS!</p>
                    </div>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>