<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/typewriter-effect@latest/dist/core.js"></script>
    <title>Ilham A.p</title>
  </head>
  <body class="selection:bg-lime-500">
    @if(session('success'))
      <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
          <span class="font-medium">Success alert!</span>
      </div>
      </div>
  @elseif(session('error'))
      <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
          <span class="font-medium">Belum ditambah</span>
      </div>
      </div>
  @endif
      <x-Header/>
      <x-home/>
      <x-about/>
      <x-portofolio/>
      <x-sertifikat/>
      <x-language-and-framework/>
      <x-blog/>
      <x-contact/>
      <x-footer/>
      <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>