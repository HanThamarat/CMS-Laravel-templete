@component('components.content-cards.default-card')
<!-- Header Section -->
<div class="flex justify-between items-center p-2">
    <span class="text-sm font-semibold text-orange-500">
        <i class="fa-regular fa-user mr-2"></i>ข้อมูลลูกค้า (Customer Details)
    </span>

    @component('components.content-modals.icon-model')
        @slot('data', [
            'icon' => 'fa-regular fa-pen-to-square',
            ])
    @endcomponent

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div id="customer-info-right" class="flex flex-col space-y-4">
            {{-- ข้อมูลด้านขวา --}}
            <div class="flex justify-between items-center border-b border-gray-300 pb-2">
                <strong class="text-gray-800">
                    <i class="fas fa-calendar-alt pr-1"></i>วันเดือนปีเกิด :
                </strong>
                @php
                    $parsedDate = \Carbon\Carbon::createFromFormat('M d Y h:i:s A', $cus[0]->Birthday);
                @endphp
                <span class="text-right pl-0">{{ \Carbon\Carbon::parse($parsedDate)->locale('th')->isoFormat('D MMMM YYYY') }}</span>
            </div>

            <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                <strong class="text-gray-800"><i class="fas fa-venus-mars pr-1"></i>เพศ :</strong>
                <span class="text-right pl-0">{{ $cus[0]->gender_name }}</span>
            </div>


            <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                <strong class="text-gray-800"><i class="fas fa-flag pr-1"></i>สัญชาติ :</strong>
                <span class="text-right pl-0">{{ $cus[0]->nationality_name }}</span>
            </div>

            <div class="flex justify-between items-center mt-[-10] border-b border-gray-300 pb-2">
                <strong class="text-gray-800"><i class="fas fa-cross pr-1"></i>ศาสนา :</strong>
                <span class="text-right pl-0">{{ $cus[0]->religion_name }}</span>
            </div>

            <div class="flex justify-between items-center mt-[-10] ">
                <strong class="text-gray-800"><i class="fas fa-heart pr-1"></i>สถานะสมรส :</strong>
                <span class="text-right pl-0">{{ $cus[0]->marital_status_name }}</span>
            </div>
        </div>


        <div class="flex flex-col mt-1">
            <strong class="italic">หมายเหตุ :</strong>
            <textarea disabled
                class="mt-0 w-full border border-orange-500 rounded-lg p-2 resize-none focus:ring-2 focus:ring-orange-500 focus:border-orange-600 bg-gray-200 italic"
                rows="7" id="customer-note">{{ $cus[0]->note }}</textarea>
        </div>

    </div>
    <style>
        #customer-info-right {
            background-color: #ffffff;
            border: 1px solid #ff833f;
            border-radius: 20px;
            padding: 16px;
        }
    </style>
@endcomponent

@component('components.content-cards.default-card')
    @slot('data', [
        'otherStyle' => 'mt-3 fixed-height',
    ])
    @include('pages.content-cus.cus-info.card-detail')
@endcomponent
