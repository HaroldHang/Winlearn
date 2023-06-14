<div class="py-5 sm:py-8 text-white">
    <nav class="flex items-center justify-between container">
        <a href="index.html" class="logo-design" aria-label=roadmap.sh>
            Win<span class="text-indigo-800 ">Learn</span>
        </a>
        <ul class="hidden sm:flex sm:items-center space-x-5 text-slate-800">
            <li>
                <a href="roadmaps.html" class="nav-link">Languages</a>
            </li>
            <li>
                <a href="best-practices.html" class="nav-link">Ressources</a>
            </li>
            <li class="hidden lg:inline">
                <a href="guides.html" class="nav-link">Contact</a>
            </li>
            {{-- <li class="hidden lg:inline">
                <a href="videos.html" class="hover:text-white text-gray-400">Videos</a>
            </li> --}}

        </ul>
        <ul class="items-center h-8 gap-5 justify-end sm:flex w-[172px]">
            <li  data-guest-required>
                <a href="login.html" class="my-btn">Login</a>
            </li>
            <li>
                <div class="hidden relative" data-auth-required>
                    <button class="flex items-center font-medium text-white bg-gradient-to-r h-8 justify-center px-4 py-2 rounded-full text-sm w-28 from-purple-500 hover:from-purple-500 hover:to-purple-600 to-purple-700" type=button data-account-button>
                        <span class="inline-flex items-center gap-1.5">Account
                            <svg viewBox="0 0 24 24" class="h-3 w-3 relative stroke-[3px] top-[0.5px]" xmlns=http://www.w3.org/2000/svg fill=none stroke=currentColor stroke-width=1.5>
                                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-linecap=round stroke-linejoin=round></path>
                            </svg>
                        </span>
                    </button>
                    <div class="hidden right-0 absolute bg-slate-800 mt-2 py-1 rounded-md shadow-xl w-48 z-10" data-account-dropdown>
                        <ul>
                            <li class=px-1>
                                <a href="account.html" class="block py-2 font-medium hover:bg-slate-700 px-4 rounded text-slate-100 text-sm">Profile</a>
                            </li>
                            <li class=px-1>
                                <button class="block py-2 font-medium hover:bg-slate-700 px-4 rounded text-slate-100 text-sm text-left w-full" data-logout-button type=button>Logout</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="signup.html" class="flex items-center font-medium text-white bg-gradient-to-r h-8 justify-center px-4 py-2 rounded-full text-sm w-28 cursor-pointer from-blue-500 hidden hover:from-blue-500 hover:to-blue-600 to-blue-700" data-guest-required>
                    <span>Sign Up</span>
                </a>
            </li>
        </ul>
        <button class="block sm:hidden text-gray-400 cursor-pointer hover:text-gray-50" aria-label=Menu data-show-mobile-nav>
            <svg viewBox="0 0 24 24" class="h-5 w-5" focusable=false aria-hidden=true>
                <path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z" fill=currentColor></path>
            </svg>
        </button>
        <div class="flex items-center bg-slate-900 bottom-0 fixed hidden left-0 right-0 top-0 z-40" data-mobile-nav>
            <button class="block hover:text-gray-50 cursor-pointer text-gray-400 absolute right-6 top-6" aria-label="Close Menu" data-close-mobile-nav>
                <svg viewBox="0 0 20 20" class="h-5 w-5" xmlns=http://www.w3.org/2000/svg fill=#c6c7c7 aria-hidden=true>
                    <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule=evenodd fill-rule=evenodd></path>
                </svg>
            </button>
            <ul class="flex items-center flex-col gap-2 md:gap-3 w-full">
                <li>
                    <a href="roadmaps.html" class="md:text-lg text-xl hover:text-blue-300">Roadmaps</a>
                </li>
                <li>
                    <a href="best-practices.html" class="md:text-lg text-xl hover:text-blue-300">Best Practices</a>
                </li>
                <li>
                    <a href="guides.html" class="md:text-lg text-xl hover:text-blue-300">Guides</a>
                </li>
                <li>
                    <a href="videos.html" class="md:text-lg text-xl hover:text-blue-300">Videos</a>
                </li>
                <li class=hidden data-auth-required>
                    <a href="account.html" class="md:text-lg text-xl hover:text-blue-300">Account</a>
                </li>
                <li class=hidden data-auth-required>
                    <button class="md:text-lg text-xl hover:text-red-400 text-red-300" data-logout-button>Logout</button>
                </li>
                <li>
                    <a href="login.html" class="hidden text-white md:text-lg text-xl" data-guest-required>Login</a>
                </li>
                <li>
                    <a href="signup.html" class="hidden md:text-lg text-xl hover:text-green-400 text-green-300" data-guest-required>Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
