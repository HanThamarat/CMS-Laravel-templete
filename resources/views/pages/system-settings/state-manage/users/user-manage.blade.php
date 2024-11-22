<div class="w-full">
    <div class="flex items-center justify-between">
        <div class="font-primaryMedium text-[16px] flex items-center gap-x-2">
            <img src="{{ URL::asset('assets/images/gif/users.gif') }}" class="w-[45px]" alt="">
            <span>User Management</span>
        </div>
        @include('pages.system-settings.state-manage.users.model')
    </div>
    <div class="mt-4 overflow-x-auto no-scrollbar">
        @include('pages.system-settings.state-manage.users.table')
    </div>
</div>
