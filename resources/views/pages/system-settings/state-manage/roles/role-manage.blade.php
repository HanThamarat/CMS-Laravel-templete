<div class="w-full">
    <div class="w-full flex justify-between items-center">
        <div class="font-primaryMedium text-[16px] flex items-center gap-x-2">
            <img src="{{ URL::asset('assets/images/gif/users.gif') }}" class="w-[45px]" alt="">
            <span>Role Management</span>
        </div>
        @component('pages.system-settings.state-manage.roles.model')
            @slot('data', [
                "condition" => "create-roles",
                "title" => "สร้่างสถานะผู้ใช้งาน",
            ])
        @endcomponent
    </div>
    <div class="mt-4 overflow-x-auto no-scrollbar" id="role-table">
        @include('pages.system-settings.state-manage.roles.table')
    </div>
</div>
