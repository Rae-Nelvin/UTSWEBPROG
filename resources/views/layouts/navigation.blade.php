<nav class="bg-white sm:px-16 py-1 border-b-[1px] border-gray-200">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="{{ asset('images/logo/LOGO-1.png') }}" class="w-60" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col p-4 mt-4 border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:border-0 md:bg-white">
                <li>
                    <a href="/"
                        class="block py-2 pl-3 pr-4 font-semibold text-[#21295C] text-xl md:hover:text-blue-700 md:bg-transparent md:p-0"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-semibold text-[#21295C] text-xl rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">
                        Dropdown
                        <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="z-10 hidden font-normal bg-white divide-y divide-gray-400 rounded shadow w-44">
                        <ul class="py-1 text-[#21295C] text-xl" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{ route('book-category', 6) }}"
                                    class="block px-4 py-2 text-[#21295C] text-base font-normal hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">Horror</a>
                            </li>
                            <li>
                                <a href="{{ route('book-category', 2) }}"
                                    class="block px-4 py-2 text-[#21295C] text-base font-normal hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">Fiction</a>
                            </li>
                            <li>
                                <a href="{{ route('book-category', 1) }}"
                                    class="block px-4 py-2 text-[#21295C] text-base font-normal hover:bg-gray-500 hover:text-white transition-all duration-300 ease-in-out">Fantasy</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('publisher') }}"
                        class="block py-2 pl-3 pr-4 font-semibold text-[#21295C] text-xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Publisher</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="block py-2 pl-3 pr-4 font-semibold text-[#21295C] text-xl hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
