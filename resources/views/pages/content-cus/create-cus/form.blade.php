<div class="container mx-auto p-2">
    <div class="flex flex-col lg:flex-row gap-6">
      <!-- Left Column -->
      <div class="w-full lg:w-1/2">
        <div class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Prefix Name -->
                @component('components.content-inputs.select-option')
                    @slot('data', [
                        "name" => "prefixName",
                        "id" => "prefixName",
                        "defaultLable" => "คำนำหน้าชื่อ",
                    ])
                    @foreach (@$prefixName as $item)
                        <option value="{{ @$item->id }}">{{ @$item->Name_TH }}</option>
                    @endforeach
                @endcomponent

                <!-- Thai Name -->
                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "firstName_TH",
                        "id" => "firstName_TH",
                        "label" => "ชื่อ",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "lastName_TH",
                        "id" => "lastName_TH",
                        "label" => "นามสกุล",
                    ])
                @endcomponent
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Phone_Primary",
                        "id" => "Phone_Primary",
                        "label" => "เบอร์โทรติดต่อ (หลัก)",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Phone_Secondary",
                        "id" => "Phone_Secondary",
                        "label" => "เบอร์โทรติดต่อ (สำรอง)",
                    ])
                @endcomponent
            </div>
        </div>

        <!-- ID Card Information Section -->
        <div class="mb-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "IDCard",
                        "id" => "IDCard",
                        "label" => "เลขบัตร",
                    ])
                @endcomponent

                @component('components.content-inputs.datepicker')
                    @slot('data', [
                        "name" => "card_issue_date",
                        "id" => "card_issue_date",
                        "label" => "วันออกบัตร",
                        "datepicker_class" => "issue-date",
                    ])
                @endcomponent

                @component('components.content-inputs.datepicker')
                    @slot('data', [
                        "name" => "card_expire_date",
                        "id" => "card_expire_date",
                        "label" => "วันหมดอายุบัตร",
                        "datepicker_class" => "expire-date",
                    ])
                @endcomponent
            </div>
        </div>

        <!-- Personal Details Section -->
        <div class="mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                @component('components.content-inputs.datepicker')
                    @slot('data', [
                        "name" => "birthdate",
                        "id" => "birthdate",
                        "label" => "วันเดือนปีเกิด",
                        "datepicker_class" => "birth-date",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "age",
                        "id" => "age",
                        "label" => "อายุ",
                    ])
                @endcomponent

                @component('components.content-inputs.select-option')
                    @slot('data', [
                        "name" => "gender",
                        "id" => "gender",
                        "defaultLable" => "เพศ",
                    ])
                    @foreach (@$gender as $item)
                        <option value="{{ @$item->id }}">{{ @$item->Name_TH }}</option>
                    @endforeach
                @endcomponent

                @component('components.content-inputs.select-option')
                    @slot('data', [
                        "name" => "Nationality",
                        "id" => "Nationality",
                        "defaultLable" => "สัญชาติ",
                    ])
                    @foreach (@$nationality as $item)
                        <option value="{{ @$item->id }}">{{ @$item->Name_TH }}</option>
                    @endforeach
                @endcomponent
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-4">
                @component('components.content-inputs.select-option')
                    @slot('data', [
                        "name" => "Religion",
                        "id" => "Religion",
                        "defaultLable" => "ศาสนา",
                    ])
                    @foreach (@$religion as $item)
                        <option value="{{ @$item->id }}">{{ @$item->Name_TH }}</option>
                    @endforeach
                @endcomponent

                @component('components.content-inputs.select-option')
                    @slot('data', [
                        "name" => "Driver_Licence",
                        "id" => "Driver_Licence",
                        "defaultLable" => "ใบขับขี่",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Social_Facebook",
                        "id" => "Social_Facebook",
                        "label" => "Facebook",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Social_Line",
                        "id" => "Social_Line",
                        "label" => "Line",
                    ])
                @endcomponent
            </div>
        </div>
    </div>


      <!-- Right Column -->
      <div class="w-full lg:w-1/2">
          <div class="grid grid-cols-1 gap-4">

            @component('components.content-inputs.select-option')
                @slot('data', [
                    "name" => "Marital_Status",
                    "id" => "Marital_Status",
                    "defaultLable" => "สถานะสมรส",
                ])

            @foreach (@$marital_status as $item)
                <option value="{{ @$item->id }}">{{ @$item->name_status_marital_th }}</option>
            @endforeach
            @endcomponent

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Spouse_Name",
                        "id" => "Spouse_Name",
                        "label" => "ชื่อนามสกุลคู่สมรส",
                    ])
                @endcomponent

                @component('components.content-inputs.input-full')
                    @slot('data', [
                        "type" => "text",
                        "name" => "Spouse_Phone",
                        "id" => "Spouse_Phone",
                        "label" => "เบอร์โทรคู่สมรส",
                    ])
                @endcomponent
            </div>

            @component('components.content-inputs.textera')
                @slot('data', [
                    "type" => "text",
                    "name" => "note",
                    "id" => "note",
                    "label" => "หมายเหตุ",
                ])
            @endcomponent

            </div>

          </div>
      </div>
    </div>
  </div>

<div class="w-full flex justify-end items-center">
    @component('components.content-button.default-button')
        @slot('data', [
            "otherStyle" => "",
            "btnId" => "cusForm",
            "btnName" => "cusForm",
            "label" => "เพิ่มข้อมูลลูกค้า",
        ])
    @endcomponent
</div>




{{-- กำหนดข้อมูลที่ให้กรอก --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.getElementById('Phone_Primary');
        const phoneSecInput = document.getElementById('Phone_Secondary');
        const IDCardInput = document.getElementById('IDCard');

        phoneInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '');
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });

        phoneSecInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '');
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });

        IDCardInput.addEventListener('input', function () {
            this.value = this.value.replace(/\D/g, '');
            if (this.value.length > 13) {
                this.value = this.value.slice(0, 13);
            }
        });
    });
</script>


{{-- เช็ควันเกิด แปลงเป็นอายุ --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const birthdateInput = document.getElementById('birthdate');
        const ageInput = document.getElementById('age');
        const birthdateLabel = document.querySelector('label[for="birthdate"]'); // รับค่า label ของ birthdate
        const ageLabel = document.querySelector('label[for="age"]'); // รับค่า label ของ age

        birthdateInput.addEventListener('change', function () {
            const birthdateValue = birthdateInput.value;
            if (birthdateValue) {
                const birthdate = new Date(birthdateValue);
                const today = new Date();

                let age = today.getFullYear() - birthdate.getFullYear();
                const monthDiff = today.getMonth() - birthdate.getMonth();
                const dayDiff = today.getDate() - birthdate.getDate();

                if (monthDiff < 0 || (monthDiff === 0 && dayDiff < 0)) {
                    age--; // ลดอายุลงถ้ายังไม่ถึงวันเกิดปีนี้
                }

                ageInput.value = age >= 0 ? age : '';

                // ถ้ามีอายุ ให้ label ของ age ขยับขึ้น
                if (age > 0) {
                    ageLabel.classList.add('translate-up');
                } else {
                    ageLabel.classList.remove('translate-up');
                }
            }
        });
    });
</script>

<style>
    .translate-up {
        transform: translateY(-1.2rem) scale(0.75);
        font-size: 0.7rem;
    }
</style>

{{-- เช็คใบขับขี่ --}}
<script>
    // กำหนดค่าของ select option
    document.addEventListener('DOMContentLoaded', function () {
        const selectElement = document.getElementById('Driver_Licence');

        // เพิ่มตัวเลือก "มีใบขับขี่"
        const option1 = document.createElement('option');
        option1.value = 'มีใบขับขี่';
        option1.text = 'มีใบขับขี่';
        selectElement.appendChild(option1);

        // เพิ่มตัวเลือก "ไม่มีใบขับขี่"
        const option2 = document.createElement('option');
        option2.value = 'ไม่มีใบขับขี่';
        option2.text = 'ไม่มีใบขับขี่';
        selectElement.appendChild(option2);
    });
</script>


{{-- เช็คสถานะสมรส --}}
<style>
    input[disabled] {
        background-color: #f5f5f5; /* สีเทาอ่อน */
        color: #a9a9a9; /* สีเทาของข้อความ */
        border: 1px solid #ccc; /* กรอบสีเทา */
        cursor: not-allowed; /* เปลี่ยนเคอร์เซอร์ */
    }
</style>

@include('components.component-validate.check-value')







{{-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const maritalStatusSelect = document.getElementById("Marital_Status");
        const spouseNameInput = document.getElementById("Spouse_Name");
        const spousePhoneInput = document.getElementById("Spouse_Phone");

        // ฟังก์ชันอัปเดตสถานะของช่อง input
        function updateSpouseFields() {
            const selectedValue = maritalStatusSelect.value;
            if (selectedValue === "2" || selectedValue === "3") { // สมรสจดทะเบียน หรือ สมรสไม่จดทะเบียน
                spouseNameInput.disabled = false;
                spousePhoneInput.disabled = false;
            } else {
                spouseNameInput.disabled = true;
                spousePhoneInput.disabled = true;
                spouseNameInput.value = ""; // ล้างค่าเมื่อ disabled
                spousePhoneInput.value = ""; // ล้างค่าเมื่อ disabled
            }
        }

        // เรียกใช้งานเมื่อ dropdown มีการเปลี่ยนแปลง
        maritalStatusSelect.addEventListener("change", updateSpouseFields);

        // ตั้งค่าเริ่มต้น
        updateSpouseFields();
    });
</script> --}}
