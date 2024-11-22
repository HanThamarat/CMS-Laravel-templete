@component('components.content-cards.default-card')
    <div class="w-full flex text-nowrap gap-x-2 xl:grid xl:grid-cols-2 xl:gap-2 xl:min-h-[100px] xl:max-h-[450px] overflow-y-auto no-scrollbar">
        @php
            // you can add radios for show content, here
            $metaData = [
                [
                    "name" => "contents",
                    "value" => "user-manage",
                    "label" => "User Management",
                    "icon" => "fa-solid fa-user",
                ],
                [
                    "name" => "contents",
                    "value" => "role-manage",
                    "label" => "Role Management",
                    "icon" => "fa-solid fa-universal-access",
                ],
                [
                    "name" => "contents",
                    "value" => "role-manage",
                    "label" => "Branch Management",
                    "icon" => "fa-solid fa-code-branch",
                ],
            ]
        @endphp
        @foreach ($metaData as $key => $items)
            @component('components.content-radios.card-radio')
                @slot('data', [
                    "id" => @$key + 1,
                    "name" => @$items['name'],
                    "value" => @$items['value'],
                ])
                <div class="w-full flex justify-center items-center xl:py-2">
                    <div class="flex items-center gap-x-2 xl:block">
                        <i class="{{ @$items['icon'] }} flex justify-center xl:text-[30px]"></i>
                        <span class="block">{{ @$items['label'] }}</span>
                    </div>
                </div>
            @endcomponent
        @endforeach
    </div>
@endcomponent
