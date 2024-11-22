<x-app-layout>
    <x-breadcrumb :links="$breadcrumbs" :pagename="'การตั่งค่าระบบ (System Configs)'" />
    <div class="xl:flex w-full gap-x-2">
        <div class="w-full xl:w-[30%]">
            @include('pages.system-settings.menu')
        </div>
        <div class="w-full mt-2 xl:mt-0 xl:w-[70%]">
            @component('components.content-cards.default-card')
                @component('components.content-loader.spinner')
                @endcomponent
                <div id="display-content" class="w-full">
                    <div class="w-full flex justify-center items-center py-[100px]">
                        <img src="{{ URL::asset('assets/images/svg/server-config.svg') }}" class="w-[450px]" alt="">
                    </div>
                </div>
            @endcomponent
        </div>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $(".cardRadio").change(function(e) {
            $(".loaders").removeClass("hidden");
            $("#display-content").addClass("hidden");
            let pages = $('input[name="contents"]:checked').val();

            $.ajax({
                type: "GET",
                url: "{{ route('systems.index') }}",
                data: {
                    page: pages,
                    _token: "{{ csrf_token() }}",
                },
                success: function (res) {
                    $(".loaders").addClass("hidden");
                    $("#display-content").removeClass("hidden");
                    $('#display-content').html(res.render).slideDown('slow');
                },
                error: function (err) {
                    $(".loaders").addClass("hidden");
                    $("#display-content").removeClass("hidden");
                    console.log(err);
                }
            });
        })
    });
</script>
