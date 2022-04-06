<div class="fixed z-10 w-full text-base  text-gray-900 border border-b border-gray-200 bg-white lg:py-2 py-1">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center" x-data="{showMenu : false}">

      <a href="/">
        <div class="flex space-x-4 items-center">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Android_O_Preview_Logo.png/768px-Android_O_Preview_Logo.png"
            class="h-14" />
        </div>
      </a>

      <div class="hidden lg:block">
        <div class="flex space-x-3">
          @include('layouts.links')
        </div>
      </div>

      <div class="block lg:hidden" @click="showMenu = !showMenu ">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
          <path :class="{
                            hidden: showMenu,
                            'inline-flex': !showMenu,
                          }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16" />
          <path :class="{
                            hidden: !showMenu,
                            'inline-flex': showMenu,
                          }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18L18 6M6 6l12 12" />
        </svg>
        @include('layouts.hamburger-menu')
      </div>

    </div>
  </div>
</div>