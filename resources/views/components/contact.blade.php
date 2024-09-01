<section id="contact" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class=" mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary">Contact</h4>
                <h2 class="font-bold text-dark text text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Me</h2>
                <p class="font-medium text-md text-secondary md:text-lg">Hubungi Saya Disini</p>
            </div>
        </div>
        <form action="{{ route('contact_send') }}" method="POST">
            @csrf
            <div class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full px-4 mb-8">
                    <label for="name" class="text-base text-slate-400 ">Full Name</label>
                    <input type="text" id="name" name="nama" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                    <label for="email" class="text-base text-slate-400 ">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                    <label for="pesan" class="text-base text-slate-400 ">Message</label>
                    <textarea type="text" id="pesan" name="pesan" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"></textarea>
                    <div class="w-full px-4">
                        <a href="#">
                            <button class="text-base font-semibold text-white bg-primary py-3 px-10 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500" value="Send">Send</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>