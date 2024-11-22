@component('components.content-modals.icon-model')
    @slot('data', [
        "icon" => "fa-solid fa-plus",
        "title" => "สร้่างข้อมูลผู้ใช้งาน"
    ])
    <form id="UserData" class="w-full">
        <div class="grid grid-cols-2 gap-3 mt-2">
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "text",
                    "name" => "Name",
                    "id" => "Name",
                    "label" => "Full Name",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "text",
                    "name" => "username",
                    "id" => "username",
                    "label" => "Username",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "password",
                    "name" => "password",
                    "id" => "password",
                    "label" => "Password",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "password",
                    "name" => "passwordConfirm",
                    "id" => "passwordConfirm",
                    "label" => "Confirm Password",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "email",
                    "name" => "email",
                    "id" => "email",
                    "label" => "Email",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "password",
                    "name" => "passwordTeam",
                    "id" => "passwordTeam",
                    "label" => "Password team",
                ])
            @endcomponent
        </div>
        <div class="w-full flex justify-end items-center mt-3">
            @component('components.content-button.default-button')
                @slot('data', [
                    "otherStyle" => "",
                    "btnId" => "CrateUser",
                    "btnName" => "CrateUser",
                    "label" => "เพิ่มสถานะผู้ใช้งาน",
                ])
            @endcomponent
        </div>
    </form>
@endcomponent
