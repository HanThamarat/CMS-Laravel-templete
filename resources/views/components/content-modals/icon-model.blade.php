<style>
    .modal {
        z-index: 1000;
    }
</style>
<div class=" flex items-center justify-center modal">
    <div x-data="{ showModal: false, email: '' }">
      <!-- Button to open the modal -->
      <button
        id="{{ @$data['btnId'] }}"
        @click="showModal = true"
        class="duration-100 ease-in-out {{ @$data['otherStyles'] === "" || empty(@$data['otherStyles']) ? "w-[45px] h-[45px] rounded-full bg-orange-500 hover:bg-orange-600 text-white" : @$data['otherStyles'] }}"
        >
        <i class="{{ @$data['icon'] }}"></i>
    </button>
      <!-- Background overlay -->
      <div x-show="showModal" class="fixed inset-0 transition-opacity" aria-hidden="true" @click="showModal = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <!-- Modal -->
      <div x-show="showModal" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="fixed z-10 inset-0 overflow-y-auto" x-cloak>
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!-- Modal panel -->
          <div class="w-full inline-block align-bottom bg-white dark:bg-darkmode rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-7xl sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="bg-white dark:bg-darkmode px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex justify-between items-center">
                    <div class="font-primaryMedium text-[16px]">
                        <span>{{ @$data['title'] }}</span>
                    </div>
                    <button id="close" @click="showModal = false" type="button" class="bg-gray-100 dark:bg-gray-600 w-[30px] h-[30px] rounded-full hover:bg-slate-300 duration-200 ease-in-out"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="w-full">
                    {{ @$slot }}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
