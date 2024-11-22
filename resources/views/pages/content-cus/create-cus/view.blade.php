<x-app-layout>
    <x-breadcrumb :links="$breadcrumbs" :pagename="'สร้างลูกค้าใหม่ (Create new customer)'" />
    <div class="w-full bg-white relative rounded-md dark:bg-darkmode flex">
        <div class="w-[100%] h-full hidden md:flex justify-between absolute">
            <div class="w-[80%] h-full rounded-md">

            </div>
            <div class="w-[20%] h-full bg-blue-500 flex items-end rounded-md">
                <img src="{{ URL::asset('assets/images/svg/teamUp.svg') }}" class="object-cover mt-5" alt="">
            </div>
        </div>
        @component('components.content-cards.default-card')
            @slot('data', [
                'otherStyle' => 'mx-[10px] lg:ml-[20px] lg:mr-[100px] 2xl:mr-[250px] my-5
                shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] relative',
                ])
                <div class="w-full">
                    <div class="my-2 flex items-center gap-x-3">
                        <div>
                            <img src="{{ URL::asset('assets/images/gif/add.gif') }}" class="w-[50px]" alt="">
                        </div>
                        <div>
                            <span class="text-[16px] block font-primaryMedium">Create New Customer</span>
                            <span class="text-[14px] block font-primaryMedium">สร้างลูกค้าใหม่</span>
                        </div>
                    </div>
                    <form id="cusData" class="p-2">
                        @include('pages.content-cus.create-cus.form')
                    </form>
                </div>
            @endcomponent
        </div>
    </x-app-layout>


    <script>
        $(document).ready(function() {
            // Event listener for form submission
            $("#cusForm").click(function(e) {
                e.preventDefault();

                // Validate the form
                if (validateCustomerForm()) {
                    // Collect form data
                    let data = {};
                    $("#cusData").serializeArray().map(function(d) {
                        data[d.name] = d.value;
                    });

                    // AJAX request
                    $.ajax({
                        type: "POST",
                        url: "{{ route('customers.store') }}",
                        data: {
                            page: 'create-cus',
                            data: data,
                            _token: "{{ csrf_token() }}",
                        },
                        success: async function(res) {
                            // Show success message
                            await Swal.fire({
                                icon: 'success',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500
                            });

                            // Reset form fields
                            $("#cusData").serializeArray().map(function(d) {
                                $('#' + d.name).val('');
                            });
                        },
                        error: async function(err) {
                            // Show error message
                            await Swal.fire({
                                icon: 'error',
                                text: err.responseJSON.message || 'เกิดข้อผิดพลาด',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    </script>




    {{-- function validateForms(dataform) {
			var isvalid = false;
			Array.prototype.slice.call(dataform).forEach(function(form) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();

					form.classList.add('was-validated');
					isvalid = false;
					$('.cl-select2').addClass('border border-danger');

					// แสดงข้อความแจ้งเตือนสำหรับฟิลด์ที่ไม่ผ่านการตรวจสอบ
					Array.prototype.slice.call(form.elements).forEach(function(input) {
						if (!input.checkValidity()) {
							// input.classList.add('border-danger');
							console.log("Field without data:", input.name); // แสดงชื่อฟิลด์ที่ไม่มีข้อมูล
						} else {
							// input.classList.remove('border-danger');
						}
					});

				} else {
					isvalid = true;
				}
			});
			return isvalid;
		}

        var dataform = document.querySelectorAll('#cusData');
		var validate = validateForms(dataform);

        $("#cusForm").click(function(e) {
            e.preventDefault(); --}}

    {{-- <script>
        $(document).ready(function() {
            var form = document.querySelectorAll("cusData")
            var validate = validateForms(form)
            $("#cusForm").click(function(e) {

                e.preventDefault();
                let data = {};
                $("#cusData").serializeArray().map(function(d) {
                    data[d.name] = d.value;
                });
                if (validate === true) {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('customers.store') }}",
                        data: {
                            page: 'create-cus',
                            data: data,
                            _token: "{{ csrf_token() }}",
                        },
                        success: async function(res) {
                            await Swal.fire({
                                icon: 'success',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500
                            });

                            // reset all value in the input fields in form referencely
                            $("#cusData").serializeArray().map(function(d) {
                                $('#' + d.name).val('');
                            });
                        },
                        error: async function(err) {
                            await Swal.fire({
                                icon: 'error',
                                text: res.message,
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        text: 'res.message',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }

            });
        });
    </script> --}}
