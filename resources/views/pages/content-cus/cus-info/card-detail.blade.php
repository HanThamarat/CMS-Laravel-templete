    <div class="border-b border-gray-200">
        <ul class="flex flex-wrap -mb-px" role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-blue-600 border-blue-600 active"
                    id="address-tab" data-tabs-target="#address" type="button" role="tab" aria-controls="address"
                    aria-selected="true">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>ที่อยู่</span>
                    </div>
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                    id="assets-tab" data-tabs-target="#assets" type="button" role="tab" aria-controls="assets"
                    aria-selected="false">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                        <span>สินทรัพย์</span>
                    </div>
                </button>
            </li>
        </ul>
    </div>

    <!-- Tab Contents -->
    <div class="mt-4">
        <!-- Address Tab Content -->
        <div class="p-4 rounded-lg bg-gray-50" id="address" role="tabpanel" aria-labelledby="address-tab">
            <div class="relative">
                <!-- Scroll Buttons -->
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10 hover:bg-gray-100 scroll-btn-left"
                    onclick="scrollCards('address-cards', -300)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10 hover:bg-gray-100 scroll-btn-right"
                    onclick="scrollCards('address-cards', 300)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Cards Container -->
                <div id="address-cards" class="flex space-x-4 overflow-x-auto scroll-smooth hide-scrollbar">
                    <!-- Address Card 1 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">ที่อยู่หลัก</h3>
                                <p class="text-gray-600">123/456 ถนนสุขุมวิท แขวงคลองเตย เขตคลองเตย กรุงเทพฯ 10110</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address Card 2 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">ที่อยู่ที่ทำงาน</h3>
                                <p class="text-gray-600">789 อาคารสำนักงาน ชั้น 15 ถนนสีลม แขวงสีลม เขตบางรัก กรุงเทพฯ
                                    10500</p>
                            </div>
                        </div>
                    </div>

                    <!-- Address Card 3 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">ที่อยู่สำรอง</h3>
                                <p class="text-gray-600">321 หมู่บ้านการ์เด้น ถนนพระราม 9 แขวงห้วยขวาง เขตห้วยขวาง
                                    กรุงเทพฯ 10310</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="addAddressButton"
                    class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold py-2 px-4 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                    เพิ่มที่อยู่
                </button>
            </div>
        </div>



        <!-- Assets Tab Content -->
        <div class="hidden p-4 rounded-lg bg-gray-50" id="assets" role="tabpanel" aria-labelledby="assets-tab">
            <div class="relative">
                <!-- Scroll Buttons -->
                <button
                    class="absolute left-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10 hover:bg-gray-100 scroll-btn-left"
                    onclick="scrollCards('assets-cards', -300)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="absolute right-0 top-1/2 -translate-y-1/2 bg-white p-2 rounded-full shadow-lg z-10 hover:bg-gray-100 scroll-btn-right"
                    onclick="scrollCards('assets-cards', 300)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <!-- Cards Container -->
                <div id="assets-cards" class="flex space-x-4 overflow-x-auto scroll-smooth hide-scrollbar">
                    <!-- Asset Card 1 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">คอนโดมิเนียม</h3>
                                <p class="text-gray-600">มูลค่า: 5,000,000 บาท</p>
                            </div>
                        </div>
                    </div>

                    <!-- Asset Card 2 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">เงินลงทุน</h3>
                                <p class="text-gray-600">มูลค่า: 2,000,000 บาท</p>
                            </div>
                        </div>
                    </div>

                    <!-- Asset Card 3 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">หุ้นสามัญ</h3>
                                <p class="text-gray-600">มูลค่า: 3,500,000 บาท</p>
                            </div>
                        </div>
                    </div>

                    <!-- Asset Card 4 -->
                    <div class="flex-none w-80 p-4 bg-white rounded-lg shadow">
                        <div class="flex items-center">
                            <div class="w-12 h-12 rounded-full bg-red-100 flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold">กองทุนรวม</h3>
                                <p class="text-gray-600">มูลค่า: 1,500,000 บาท</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button id="addAssetButton"
                    class="mt-4 flex items-center bg-gradient-to-r from-orange-400 to-orange-500 text-white font-semibold text-sm py-2 px-3 rounded hover:from-orange-500 hover:to-orange-600 transition duration-200 transform hover:translate-y-[-2px] hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-3 mr-1" fill="currentColor"
                        viewBox="0 0 448 512">
                        <path
                            d="M135.2 117.4L109.1 192l293.8 0-26.1-74.6C372.3 104.6 360.2 96 346.6 96L165.4 96c-13.6 0-25.7 8.6-30.2 21.4zM39.6 196.8L74.8 96.3C88.3 57.8 124.6 32 165.4 32l181.2 0c40.8 0 77.1 25.8 90.6 64.3l35.2 100.5c23.2 9.6 39.6 32.5 39.6 59.2l0 144 0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L96 400l0 48c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-48L0 256c0-26.7 16.4-49.6 39.6-59.2zM128 288a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zm288 32a32 32 0 1 0 0-64 32 32 0 1 0 0 64z">
                        </path>
                    </svg>
                    เพิ่มสินทรัพย์
                </button>
            </div>
        </div>
    </div>
    {{-- </div> --}}

    <style>
        /* Hide scrollbar but keep functionality */
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab switching functionality
            const tabs = document.querySelectorAll('[role="tab"]');
            const tabPanels = document.querySelectorAll('[role="tabpanel"]');

            function initializeScrollContainer(containerId) {
                const container = document.getElementById(containerId);
                if (!container) return;

                // Initialize scroll position tracking
                let isScrolling = false;
                let startX;
                let scrollLeft;

                // Mouse events for drag scrolling
                container.addEventListener('mousedown', (e) => {
                    isScrolling = true;
                    startX = e.pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                    container.style.cursor = 'grabbing';
                });

                container.addEventListener('mouseleave', () => {
                    isScrolling = false;
                    container.style.cursor = 'grab';
                });

                container.addEventListener('mouseup', () => {
                    isScrolling = false;
                    container.style.cursor = 'grab';
                });

                container.addEventListener('mousemove', (e) => {
                    if (!isScrolling) return;
                    e.preventDefault();
                    const x = e.pageX - container.offsetLeft;
                    const walk = (x - startX) * 2;
                    container.scrollLeft = scrollLeft - walk;
                });

                // Touch events for mobile
                container.addEventListener('touchstart', (e) => {
                    isScrolling = true;
                    startX = e.touches[0].pageX - container.offsetLeft;
                    scrollLeft = container.scrollLeft;
                });

                container.addEventListener('touchend', () => {
                    isScrolling = false;
                });

                container.addEventListener('touchmove', (e) => {
                    if (!isScrolling) return;
                    const x = e.touches[0].pageX - container.offsetLeft;
                    const walk = (x - startX) * 2;
                    container.scrollLeft = scrollLeft - walk;
                });

                // Update scroll buttons on container scroll
                container.addEventListener('scroll', () => {
                    updateScrollButtons(containerId);
                });
            }

            // Tab switching with proper scroll initialization
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Deactivate all tabs
                    tabs.forEach(t => {
                        t.classList.remove('text-blue-600', 'border-blue-600');
                        t.classList.add('border-transparent');
                        t.setAttribute('aria-selected', 'false');
                    });

                    // Hide all panels
                    tabPanels.forEach(panel => {
                        panel.classList.add('hidden');
                    });

                    // Activate clicked tab
                    this.classList.add('text-blue-600', 'border-blue-600');
                    this.classList.remove('border-transparent');
                    this.setAttribute('aria-selected', 'true');

                    // Show corresponding panel
                    const panelId = this.getAttribute('data-tabs-target').substring(1);
                    const panel = document.getElementById(panelId);
                    panel.classList.remove('hidden');

                    // Reset scroll position and update buttons for newly visible container
                    const containerId = `${panelId}-cards`;
                    const container = document.getElementById(containerId);
                    if (container) {
                        container.scrollLeft = 0;
                        updateScrollButtons(containerId);
                    }
                });
            });

            // Initialize scroll containers
            initializeScrollContainer('address-cards');
            initializeScrollContainer('assets-cards');

            // Initial update of scroll buttons
            updateScrollButtons('address-cards');
            updateScrollButtons('assets-cards');
        });

        // Scroll functionality for cards
        function scrollCards(containerId, scrollAmount) {
            const container = document.getElementById(containerId);
            if (!container) return;

            container.scrollBy({
                left: scrollAmount,
                behavior: 'smooth'
            });

            // Update buttons after scroll animation
            setTimeout(() => {
                updateScrollButtons(containerId);
            }, 300);
        }

        function updateScrollButtons(containerId) {
            const container = document.getElementById(containerId);
            if (!container) return;

            const leftButtons = container.parentElement.querySelectorAll('.scroll-btn-left');
            const rightButtons = container.parentElement.querySelectorAll('.scroll-btn-right');

            // Calculate scroll positions
            const isAtStart = Math.abs(container.scrollLeft) < 1;
            const isAtEnd = Math.abs(container.scrollLeft + container.clientWidth - container.scrollWidth) < 1;

            // Update button visibility with fade effect
            leftButtons.forEach(btn => {
                btn.style.opacity = isAtStart ? '0' : '1';
                btn.style.visibility = isAtStart ? 'hidden' : 'visible';
                btn.style.transition = 'opacity 0.3s, visibility 0.3s';
            });

            rightButtons.forEach(btn => {
                btn.style.opacity = isAtEnd ? '0' : '1';
                btn.style.visibility = isAtEnd ? 'hidden' : 'visible';
                btn.style.transition = 'opacity 0.3s, visibility 0.3s';
            });
        }
    </script>












    {{-- <!-- Tab Container -->

<!-- Tab Headers -->
<div class="border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px" role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-blue-600 border-blue-600 active"
                id="address-tab" data-tabs-target="#address" type="button" role="tab" aria-controls="address"
                aria-selected="true">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    <span>ที่อยู่</span>
                </div>
            </button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                id="assets-tab" data-tabs-target="#assets" type="button" role="tab" aria-controls="assets"
                aria-selected="false">
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <span>สินทรัพย์</span>
                </div>
            </button>
        </li>
    </ul>
</div>

<!-- Tab Contents -->
<div class="mt-4">
    <!-- Address Tab Content -->
    <div class="p-4 rounded-lg bg-gray-50" id="address" role="tabpanel" aria-labelledby="address-tab">
        <div class="space-y-4">
            <div class="flex items-center p-4 bg-white rounded-lg shadow">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold">ที่อยู่หลัก</h3>
                    <p class="text-gray-600">123/456 ถนนสุขุมวิท แขวงคลองเตย เขตคลองเตย กรุงเทพฯ
                        10110</p>
                </div>
            </div>

            <div class="flex items-center p-4 bg-white rounded-lg shadow">
                <div class="flex-shrink-0 w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold">ที่อยู่ที่ทำงาน</h3>
                    <p class="text-gray-600">789 อาคารสำนักงาน ชั้น 15 ถนนสีลม แขวงสีลม
                        เขตบางรัก กรุงเทพฯ
                        10500</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Assets Tab Content -->
    <div class="hidden p-4 rounded-lg bg-gray-50" id="assets" role="tabpanel" aria-labelledby="assets-tab">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">คอนโดมิเนียม</h3>
                        <p class="text-gray-600">มูลค่า: 5,000,000 บาท</p>
                    </div>
                </div>
            </div>

            <div class="p-4 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-lg font-semibold">เงินลงทุน</h3>
                        <p class="text-gray-600">มูลค่า: 2,000,000 บาท</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- JavaScript for tab functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('[role="tab"]');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Deactivate all tabs
                tabs.forEach(t => {
                    t.classList.remove('text-blue-600', 'border-blue-600');
                    t.classList.add('border-transparent');
                    t.setAttribute('aria-selected', 'false');
                });

                // Hide all panels
                tabPanels.forEach(panel => {
                    panel.classList.add('hidden');
                });

                // Activate clicked tab
                this.classList.add('text-blue-600', 'border-blue-600');
                this.classList.remove('border-transparent');
                this.setAttribute('aria-selected', 'true');

                // Show corresponding panel
                const panelId = this.getAttribute('data-tabs-target').substring(1);
                document.getElementById(panelId).classList.remove('hidden');
            });
        });
    });
</script> --}}
