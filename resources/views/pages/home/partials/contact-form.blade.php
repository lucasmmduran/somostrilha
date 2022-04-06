<section class="lg:py-20 py-10 bg-white">
  <div class="container mx-auto lg:px-4 px-2">
    <div class="flex items-center justify-center lg:space-x-2 space-x-0">
      <div class="lg:w-full hidden lg:block">
        <img src="{{ asset('img/logo_footer.jpg')}}"
          class="object-cover object-center h-108  rounded-tl-lg rounded-bl-lg w-full" />
      </div>
      <div class="w-full bg-gray-100">
        @livewire('contact-form')
      </div>
    </div>
  </div>
</section>