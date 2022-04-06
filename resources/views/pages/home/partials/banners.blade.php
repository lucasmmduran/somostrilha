<div id="home" x-data="{swiper: null}" x-init="swiper = new Swiper($refs.container, {
  autoplay: {
    delay:3000
  },
  loop: true,
  slidesPerView: 1,
  spaceBetween: 0,
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 0,
    },
  },
  grabCursor: true,
  effect: 'creative',
  creativeEffect: {
    prev: {
      shadow: true,
      translate: [0, 0, -100],
    },
    next: {
      translate: ['100%', 0, 0],
    },
  },
 {{--  on: {
    slideChange: function () {
      
      const title_1 = document.getElementById('title_1');
      title_1.classList.remove('animate-left'); // reset animation
      void title_1.offsetWidth; // trigger reflow
      title_1.classList.add('animate-left'); // start animation

      const title_2 = document.getElementById('title_2');
      title_2.classList.remove('animate-top'); // reset animation
      void title_2.offsetWidth; // trigger reflow
      title_2.classList.add('animate-top'); // start animation

      const title_3 = document.getElementById('title_3');
      title_3.classList.remove('animate-left'); // reset animation
      void title_3.offsetWidth; // trigger reflow
      title_3.classList.add('animate-left'); // start animation

      const title_4 = document.getElementById('title_4');
      title_4.classList.remove('animate-left'); // reset animation
      void title_4.offsetWidth; // trigger reflow
      title_4.classList.add('animate-left'); // start animation
    },
  } --}}
})" class="relative w-full pt-0 xl:h-screen h-full">
  {{-- <div class="absolute inset-y-0 left-0 z-10 flex items-center">
    <button @click="swiper.slidePrev()"
      class="bg-white ml-2 flex justify-center items-center w-8 h-8 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-left w-6 h-6">
        <path fill-rule="evenodd"
          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
          clip-rule="evenodd"></path>
      </svg>
    </button>
  </div> --}}

  <div class="swiper" x-ref="container">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        {{-- <div class="absolute w-full xl:h-screen h-full bg-black opacity-40"></div> --}}
        <div class="xl:h-screen h-full w-full flex items-center justify-center">
          <img src="{{ asset('storage/banner1.jpg') }}" />

          <div class="w-full absolute text-center flex items-end justify-center h-52">

          </div>
        </div>
      </div>

      <div class="swiper-slide">
        {{-- <div class="absolute w-full xl:h-screen h-full bg-black opacity-40"></div> --}}
        <div class="xl:h-screen h-full w-full flex items-center justify-center">
          <img src="{{ asset('storage/banner2.jpg') }}" />

          <div class="w-full absolute text-center">
            <div class="lg:mt-10 mt-5">
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        {{-- <div class="absolute w-full xl:h-screen h-full bg-black opacity-40"></div> --}}
        <div class="xl:h-screen h-full w-full flex items-center justify-center">
          <img src="{{ asset('storage/banner3.jpg') }}" />

          <div class="w-full absolute text-center">
            <div class="lg:mt-10 mt-5">
            </div>
          </div>
        </div>
      </div>

      {{-- <div class="swiper-slide">
        <div class="absolute w-full h-screen bg-black opacity-40"></div>
        <div
          class="h-screen w-full bg-cover bg-gradient-to-r from-teal-100 to-teal-300  flex items-center justify-center">
          <img
            src="https://images.unsplash.com/photo-1629666451138-164fd9176999?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2025&q=80&h=1080">

        </div>
      </div> --}}



      {{-- <div class="swiper-slide">
        <div class="absolute w-full h-screen bg-black opacity-40"></div>
        <div class="h-screen w-full bg-gradient-to-r from-teal-100 to-teal-300  flex items-center justify-center">
          <img
            src="https://images.unsplash.com/photo-1587244399104-f12b41169443?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2025&q=80&h=1080">

        </div>
      </div> --}}

    </div>
  </div>

  {{-- <div class="absolute inset-y-0 right-0 z-10 flex items-center">
    <button @click="swiper.slideNext()"
      class="bg-white mr-2 flex justify-center items-center w-8 h-8 rounded-full shadow focus:outline-none">
      <svg viewBox="0 0 20 20" fill="currentColor" class="chevron-right w-6 h-6">
        <path fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd"></path>
      </svg>
    </button>
  </div> --}}
</div>