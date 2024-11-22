@component('components.content-modals.icon-model')
    @slot('data', [
        "icon" => "fa-solid fa-plus",
        "title" => @$data['title'],
    ])
    <form id="roleData">
        <div class="w-full grid grid-cols-2 gap-3 my-2">
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "text",
                    "name" => "Name_TH",
                    "id" => "Name_TH",
                    "label" => "ชื่อสถานะผู้ใช้งาน (TH)",
                ])
            @endcomponent
            @component('components.content-inputs.normal-input')
                @slot('data', [
                    "type" => "text",
                    "name" => "Name_EN",
                    "id" => "Name_EN",
                    "label" => "ชื่อสถานะผู้ใช้งาน (EN)",
                ])
            @endcomponent
        </div>
        <div class="w-full mt-5">
            @component('components.content-inputs.textera')
                @slot('data', [
                    "type" => "text",
                    "name" => "permissions",
                    "id" => "permissions",
                    "label" => "ความสามารถผู้ใช้งาน",
                ])
            @endcomponent
        </div>
        <div class="w-full flex justify-end items-center mt-3">
            @component('components.content-button.default-button')
                @slot('data', [
                    "otherStyle" => "",
                    "btnId" => "CrateRole",
                    "btnName" => "CrateRole",
                    "label" => "เพิ่มสถานะผู้ใช้งาน",
                ])
            @endcomponent
        </div>
    </form>
@endcomponent

<script>
    $(document).ready(function() {
        $("#CrateRole").click(function(e) {
            e.preventDefault();
            $("#table-spin").removeClass("hidden");
            $("#table-body").addClass("hidden");

            let data = {};
            $("#roleData").serializeArray().map(function(d) {
                data[d.name] = d.value;
            });

            $.ajax({
                type: "POST",
                url: "{{ route('systems.store') }}",
                data: {
                    condition: '{{ @$data["condition"] }}',
                    data: data,
                    _token: "{{ csrf_token() }}"
                },
                success: async function (res) {
                    await $("#table-spin").removeClass("hidden");
                    await $("#table-body").addClass("hidden");
                    await Swal.fire({
                        icon: 'success',
                        text: res.message,
                        showConfirmButton: false,
                        timer: 1500
                    });

                    $("#roleData").serializeArray().map(function(d) {
                        $('#' + d.name).val('');
                    });

                    // used for close model.
                    $("#close").click();

                    // rendering content html element from backend.
                    $('#role-table').html(res.render).slideDown('slow');
                },
                error: async function (err) {
                    await $("#table-spin").removeClass("hidden");
                    await $("#table-body").addClass("hidden");
                    await Swal.fire({
                        icon: 'error',
                        text: err.responseJSON.message || 'เกิดข้อผิดพลาด',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    });
</script>
