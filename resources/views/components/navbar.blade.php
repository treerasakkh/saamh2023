<nav class="bg-blue-800 text-white relative">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="font-prompt font-bold text-xl">
                ส.บ.ม.ม.ห.
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-6">
                @php
                    $menuItems = [
                        ['url' => '/', 'text' => 'หน้าแรก'],
                        ['url' => '/objective', 'text' => 'วัตถุประสงค์'],
                        ['url' => '/committee', 'text' => 'กรรมการ'],
                        ['url' => '/members', 'text' => 'สมาชิก'],
                        ['url' => '/about', 'text' => 'เกี่ยวกับเรา'],
                        // ['url' => '/login', 'text' => 'ล็อคอิน'],
                    ];
                @endphp

                @foreach($menuItems as $item)
                    <a
                        href="{{ url($item['url']) }}"
                        class="font-prompt hover:text-gray-300 transition duration-200"
                    >
                        {{ $item['text'] }}
                    </a>
                @endforeach
            </div>

            <!-- Hamburger Button -->
            <button
                class="md:hidden p-2 hover:bg-gray-700 rounded-lg transition duration-200"
                onclick="toggleMenu()"
                aria-label="Toggle menu"
                id="menuToggle"
            >
                <svg id="menuIcon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="closeIcon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div
            id="mobileMenu"
            class="md:hidden absolute top-16 left-0 right-0 bg-gray-800 transition-all duration-300 ease-in-out opacity-0 invisible z-50"
        >
            <div class="container mx-auto px-4 py-2 space-y-2 shadow-lg">
                @foreach($menuItems as $item)
                    <a
                        href="{{ url($item['url']) }}"
                        class="font-prompt block py-2 px-4 hover:bg-gray-700 rounded-lg transition duration-200"
                        onclick="closeMenu()"
                    >
                        {{ $item['text'] }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Overlay for mobile menu -->
    <div
        id="overlay"
        class="md:hidden fixed inset-0 bg-black bg-opacity-50 z-40 hidden"
        onclick="closeMenu()"
    ></div>
</nav>

<script>
    function toggleMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (mobileMenu.classList.contains('opacity-0')) {
            mobileMenu.classList.remove('opacity-0', 'invisible');
            mobileMenu.classList.add('opacity-100', 'visible');
            overlay.classList.remove('hidden');
            menuIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        } else {
            closeMenu();
        }
    }

    function closeMenu() {
        const mobileMenu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('overlay');
        const menuIcon = document.getElementById('menuIcon');
        const closeIcon = document.getElementById('closeIcon');

        mobileMenu.classList.remove('opacity-100', 'visible');
        mobileMenu.classList.add('opacity-0', 'invisible');
        overlay.classList.add('hidden');
        menuIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
</script>