@component('components.content-cards.default-card')
    @slot('data', [
        "otherStyle" => "mb-2"
    ])
@endcomponent
@component('components.content-cards.default-card')
    <div class="rounded-md p-4 relative">
        <h2 class="text-sm font-bold mb-4 text-gray-500">Personal Information</h2>
        <div id="customer-info"></div>
        <div class="mb-6">
            <div class="flex items-center mb-2">
                <i class="fa-regular fa-user mr-4 text-orange-700"></i>
                <div class="text-gray-500 font-semibold text-sm">ชื่อ-นามสกุล</div>
            </div>
            <div class="ml-8 text-gray-400 text-sm">
                {{ $cus[0]->FirstName_TH }} {{ $cus[0]->Lastname_TH }}
            </div>
        </div>


        <div class="mb-6">
            <div class="flex items-center mb-2">
                <i class="fa-solid fa-address-card mr-4 text-orange-700"></i>
                <div class="text-gray-500 font-semibold text-sm">เลขประจำตัวประชาชน</div>
            </div>
            <div class="ml-8 text-gray-400 text-sm">
                {{ $cus[0]->IDCard }}
            </div>
        </div>

        <div class="mb-6">
            <div class="flex items-center mb-2">
                <i class="fa-solid fa-phone mr-4 text-orange-700"></i>
                <div class="text-gray-500 font-semibold text-sm">เบอร์ติดต่อ</div>
            </div>
            <div class="ml-8 text-gray-400 text-sm">
                {{ $cus[0]->PhoneNumber_Primary }}
            </div>
        </div>

        <h2 class="text-sm font-bold mb-4 text-gray-500">General Information</h2>

        <div class="mb-6">
            <div class="flex items-center mb-2">
                <i class="fa-solid fa-calendar-day mr-4 text-orange-700"></i>
                <div class="text-gray-500 font-semibold text-sm">วันที่เข้าระบบ</div>
            </div>

            <div class="ml-8 text-gray-400 text-sm">
                {{ \Carbon\Carbon::parse($cus[0]->created_at)->locale('th')->isoFormat('D MMMM YYYY') }}
            </div>
        </div>
        <div class="mb-6">
            <div class="flex items-center mb-2">
                <i class="fa-solid fa-user mr-4 text-orange-700"></i>
                <div class="text-gray-500 font-semibold text-sm">ผู้ลงบันทึก</div>
            </div>
            <div class="ml-8 text-gray-400 text-sm">
                {{ $cus[0]->userinsert_name }}
            </div>
        </div>
    </div>
@endcomponent
