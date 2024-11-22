@props([
    'align' => 'right'
])

<style>
    .dropdownmenu {
        z-index: 9999;
    }
</style>

<div class="relative inline-flex" x-data="{ open: false }">
    <!-- Profile Button -->
    <button
        {{-- class="inline-flex items-center gap-2 p-2 rounded-lg transition-colors duration-150 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 dark:focus:ring-violet-400" --}}
        class="inline-flex items-center gap-2 p-2 rounded-lg transition-colors duration-150"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"
    >
        <img
            class="w-10 h-10 rounded-full object-cover ring-2 ring-white dark:ring-gray-700 shadow-sm"
            src="{{ Auth::user()->profile_photo_url }}"
            width="40"
            height="40"
            alt="{{ Auth::user()->name }}"
        />
        <div class="flex items-center">
            <span class="text-sm font-medium text-gray-700 dark:text-gray-200 group-hover:text-gray-900 dark:group-hover:text-white">
                {{ Auth::user()->name }}
            </span>
            <svg
                class="w-4 h-4 ml-1 text-gray-400 dark:text-gray-500 transition-transform duration-150"
                :class="{'rotate-180': open}"
                viewBox="0 0 12 12"
                fill="currentColor"
            >
                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
            </svg>
        </div>
    </button>

    <!-- Dropdown Menu -->
    <div
        class="absolute dropdownmenu top-full {{$align === 'right' ? 'right-0' : 'left-0'}} w-56 mt-2 bg-white dark:bg-gray-800 rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 dark:ring-gray-700 transform origin-top-right transition-all duration-200"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        x-cloak
    >
        <!-- User Info -->
        <div class="px-4 py-3 border-b border-gray-100 dark:border-gray-700">
            <div class="text-sm font-semibold text-gray-900 dark:text-white">
                {{ Auth::user()->name }}
            </div>
            <div class="text-xs text-gray-500 dark:text-gray-400 mt-0.5">
                Administrator
            </div>
        </div>

        <!-- Menu Items -->
        <div class="py-2">
            <a
                href="{{ route('profile.show') }}"
                class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150"
                @click="open = false"
                @focus="open = true"
                @focusout="open = false"
            >
                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                Settings
            </a>

            {{-- <li>
                <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="{{ route('views.index') }}?page={{ 'system-configs' }}" @click="open = false" @focus="open = true" @focusout="open = false">System configs</a>
            </li> --}}

            <a
                href="{{ route('views.index') }}?page={{ 'system-configs' }}"
                class="flex items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150"
                @click="open = false"
                @focus="open = true"
                @focusout="open = false"
            >
                <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                System Configs
            </a>

            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button
                    type="submit"
                    class="flex w-full items-center px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700/50 transition-colors duration-150"
                    @click.prevent="$root.submit();"
                    @focus="open = true"
                    @focusout="open = false"
                >
                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    {{ __('Sign Out') }}
                </button>
            </form>
        </div>
    </div>

</div>
