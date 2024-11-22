<x-app-layout>
    <x-breadcrumb :links="$breadcrumbs" :pagename="'ข้อมูลลูกค้า (Customer Information)'" />
    <div class="w-full flex justify-between gap-x-3">
        <div class="w-[25%]">
            @include('pages.content-cus.cus-info.card-cus-info')
        </div>
        <div class="w-[75%]">
            @include('pages.content-cus.cus-info.cus-detail')
        </div>
    </div>
</x-app-layout>
