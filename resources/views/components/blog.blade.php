<section id="blog" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class=" mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary">blog</h4>
                <h2 class="font-bold text-dark text text-3xl mb-4 sm:text-4xl lg:text-5xl">latest Article</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, nulla magni! Assumenda, aliquam.</p>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="{{ asset('img/github.jpg') }}" alt="github" class="w-full"/>
                    <div class="py-8 px-6">
                        <a href="{{ url('/BlogGithub') }}" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">
                            <h3>Tips Hosting website di github FREE!!</h3>
                        </a>
                        <p class="font-medium text-base text-secondary mb-6">Cara Mudah Hosting website gratis di github dengan tips praktis dan tutorial yang lengkap</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="{{ asset('img/live-serve.jpg') }}" alt="live serve" class="w-full"/>
                    <div class="py-8 px-6">
                        <a href="{{ url('/LiveServe') }}" class="block mb-3 font-semibold text-xl text-dark hover:text-primary">
                            <h3>Tips Praktis: Menampilkan project web Laravel kita di HP Tanpa Ribet!</h3>
                        </a>
                        <p class="font-medium text-base text-secondary mb-6">Jangan pusing lagi! Pelajari cara menampilkan hasil coding Laravel di HP dengan 
                             langkah² praktis.</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="{{ asset('img/blog-php.jpg') }}" alt="blog php" class="w-full"/>
                    <div class="py-8 px-6">
                        <a href="{{ url('/LearnPhp') }}" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">
                            <h3>Belajar singkat tentang PHP Native</h3>
                        </a>
                        <p class="font-medium text-base text-secondary mb-6">Belajar cepat PHP Native untuk pemula, langsung praktik dengan contoh sederhana</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="{{ asset('img/web-desain.jpg') }}" alt="web desain" class="w-full"/>
                    <div class="py-8 px-6">
                        <a href="{{ url('/LearnCss') }}" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">
                            <h3>Belajar singkat tentang layout Css</h3>
                        </a>
                        <p class="font-medium text-base text-secondary mb-6">Panduan cepat mempelajari css layout, atur tampilan website dengan mudah dan rapi</p>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="{{ asset('img/web-programmer.jpg') }}" alt="learn html" class="w-full"/>
                    <div class="py-8 px-6">
                        <a href="{{ url('/LearnHtml') }}" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">
                            <h3>Belajar Html Selama Lima menit</h3>
                        </a>
                        <p class="font-medium text-base text-secondary mb-6">Pelajari Html dasar hanya dalam 5 (lima) menit, efektif dan mudah di pahami</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>