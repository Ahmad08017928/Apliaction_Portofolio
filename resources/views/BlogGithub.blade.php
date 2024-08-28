<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Blog Github</title>
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
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">Tips Hosting website di github FREE!!</h1>
                    <img src="{{ asset('img/github.jpg') }}" alt="github">
                </header>
                <div class="selection:bg-lime-600 selection:text-gray-100 text-slate-600 mb-3">
                    <p class="mb-2">Di era digital yang serba cepat ini, memiliki website pribadi 
                        atau portofolio online bukan lagi sekadar pilihan, melainkan kebutuhan. Namun, salah satu tantangan terbesar yang dihadapi banyak orang, 
                        terutama mereka yang baru memulai, adalah biaya hosting. Untungnya, GitHub menawarkan solusi hosting website secara gratis melalui layanan 
                        GitHub Pages.</p> 

                    <p class="mb-2">Artikel ini ditujukan bagi siapa saja yang ingin mempelajari <span class="font-bold text-lg">cara mudah dan praktis untuk meng-hosting website secara 
                        gratis di GitHub.</span> Kami akan memandu Anda langkah demi langkah dalam proses hosting, mulai dari membuat repository hingga tips praktis yang 
                        dapat membantu Anda mengoptimalkan website Anda.</p>
                        
                    <p class="mb-2">Perlu diketahui bahwa <span class="bg-red-500 text-white text-lg">GitHub hanya mengizinkan satu website yang di-hosting dengan GitHub 
                        Pages per akun pengguna.</span>Website tersebut akan berada di URL yang menggunakan format <code>https://username.github.io</code>. Namun, Anda 
                        masih bisa meng-host lebih dari satu proyek atau halaman web di GitHub dengan menggunakan repository tambahan yang dapat diakses melalui 
                        URL seperti <code>https://username.github.io/nama-proyek</code>. Meskipun URL-nya berbeda, hanya satu website yang dapat di-host dengan 
                        nama domain utama (yaitu <code>username.github.io</code>).</p>

                    <p class="mb-2">Dengan memanfaatkan tips ini, Anda tidak hanya akan dapat mempublikasikan website
                        Anda secara gratis, tetapi juga memastikan bahwa website tersebut berjalan dengan lancar dan efisien. Semoga panduan ini bermanfaat dan membantu 
                        Anda dalam perjalanan membangun presence online Anda sendiri. Selamat membaca dan mencoba!</p>
                </div>
                <h2 class="font-light text-2xl mb-2">Langkah-langkah Hosting Website di GitHub</h2>
                <div class="text-slate-600 mx-2">
                    <p class="font-light text-xl mb-2">Bagi Anda yang belum memiliki akun GitHub, ikuti langkah-langkah berikut untuk membuatnya:</p>
                    <ol class="list-decimal list-outside">
                        <li class="mb-2">
                            <p>Buka peramban Anda dan kunjungi situs GitHub di <a href="https://github.com/signup?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F&source=header-home" class="hover:text-blue-400 no-underline text-inherit">github.com.</a></p>
                        </li>
                        <li class="mb-2">
                            <p>Isi formulir pendaftaran dengan informasi yang diperlukan, seperti username, email, dan password. Pilih username yang unik dan mudah diingat karena ini akan menjadi bagian dari URL website Anda nanti.</p>
                        </li>
                        <li class="mb-2">
                            <p>Setelah mengisi formulir, GitHub akan mengirimkan email verifikasi. Buka email tersebut dan klik link yang disediakan untuk memverifikasi akun Anda.</p>
                        </li>
                        <li class="mb-2">
                            <p>Setelah verifikasi, akun GitHub Anda siap digunakan.</p>
                        </li>
                    </ol>
                </div>
                <p class="font-light text-xl mb-2">Setelah membuat akun atau jika Anda sudah memiliki akun, langkah berikutnya adalah meng-upload folder website Anda ke GitHub.</p>
                <h3 class="font-semibold text-xl mb-2">Step 1 Buat Repository Baru</h3>
                <div class="text-slate-600 mx-2">
                    <ul class="list-disc list-outside">
                        <li class="mb-2">
                            <p>Login ke akun GitHub Anda.</p>
                        </li>
                        <li class="mb-2">
                            <p>Klik tombol "New" di halaman utama GitHub atau dari tab "Repositories".</p>
                        </li>
                        <li class="mb-2">
                            <p>Berikan nama repository sesuai keinginan Anda. Jika ingin meng-hosting di GitHub Pages, gunakan format <code>username.github.io</code>.</p>
                        </li>
                        <li class="mb-2">
                            <p>Tambahkan deskripsi jika diperlukan dan pilih opsi "Public".</p>
                        </li>
                        <li class="mb-2">
                            <p>Klik tombol "Create repository".</p>
                        </li>
                    </ul>
                </div>
                <p class="font-light text-xl mb-2">Sebelum, masuk ke langkah ke 3 saya mempunyai sedikit kalimat untuk kalian semua yang membaca artikel ini sampai di titik ini. <span class="font-bold text-xl"><q>Ingatlah, tidak ada yang instan dalam dunia pemrograman. Kesabaran dan ketekunan adalah kunci untuk menguasai keterampilan ini.</q></span></p>
                <p class="font-light text-xl mb-2">Setelah file website ter-upload, Anda bisa melanjutkan ke langkah hosting dengan GitHub Pages</p>
                <div class="text-slate-600 mx-2">
                    <ul class="list-disc list-outside">
                        <li class="mb-2">
                            <p>Buka repository yang berisi file website Anda.</p>
                        </li>
                        <li class="mb-2">
                            <p>Klik tab "Settings" di bagian atas repository.</p>
                        </li>
                        <li class="mb-2">
                            <p>Gulir ke bawah hingga menemukan bagian "GitHub Pages".</p>
                        </li>
                        <li class="mb-2">
                            <p>Di bagian "Source", pilih "main branch" (atau nama branch lain tempat Anda menyimpan file website) dari dropdown menu.</p>
                        </li>
                        <li class="mb-2">
                            <p>Setelah dipilih, halaman akan otomatis refresh dan URL website Anda akan ditampilkan di bagian atas halaman. URL tersebut biasanya dalam format <code>https://username.github.io</code>.</p>
                        </li>
                    </ul>
                </div>
                <p class="font-light text-xl mb-2">Setelah itu langkah terakhir apabila semua langkah-langkah di atas di lakukan dengan baik. Maka langkah terakhir adalah <q>Kunjungi URL yang telah diberikan untuk memastikan website Anda sudah live.</q></p>
            </article>
        </div>
    </main>
    <x-footer/>
</body>
</html>