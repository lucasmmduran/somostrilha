<div>
  <transition name="hamburger-slide">
    <div x-show="showMenu" class="top-16 lg:top-20 border-t border-gray-200 right-0 w-full bg-white fixed h-full z-50">
      <div class="pl-4">
        <div class="pt-4 space-y-4">
          @include('layouts.links')
        </div>
      </div>
    </div>
  </transition>
</div>

<style>
  .hamburger-slide-leave-active,
  .hamburger-slide-enter-active {
    transition: 0.2s;
  }

  .hamburger-slide-enter {
    transform: translate(100%, 0);
  }

  .hamburger-slide-leave-to {
    transform: translate(100%, 0);
  }
</style>