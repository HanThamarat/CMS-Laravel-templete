{{-- <script>
    function validateForms(dataform) {
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
</script> --}}



<script>
    function validateForms(dataform) {
        var isValid = false;
        Array.prototype.slice.call(dataform).forEach(function(form) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();

                form.classList.add('was-validated');
                isValid = false;

                // เพิ่มการแจ้งเตือนสำหรับ Select2
                $('.cl-select2').addClass('border border-danger');

                // แสดงข้อความแจ้งเตือนสำหรับฟิลด์ที่ไม่ผ่านการตรวจสอบ
                Array.prototype.slice.call(form.elements).forEach(function(input) {
                    if (!input.checkValidity()) {
                        console.log(`Field ${input.name} is invalid.`); // ระบุชื่อฟิลด์ที่ไม่ผ่าน
                        showValidationMessage(input.name, "กรุณากรอกข้อมูลให้ครบถ้วน"); // ใช้ฟังก์ชันแจ้งเตือน
                        input.classList.add('border-danger');
                    } else {
                        input.classList.remove('border-danger');
                        hideValidationMessage(input.name); // ซ่อนข้อความแจ้งเตือนเมื่อฟิลด์ถูกต้อง
                    }
                });
            } else {
                isValid = true;
            }
        });
        return isValid;
    }

    function showValidationMessage(fieldName, message) {
        var errorMessage = document.getElementById(`${fieldName}-error`);
        if (!errorMessage) {
            const errorElement = document.createElement("div");
            errorElement.id = `${fieldName}-error`;
            errorElement.className = "text-danger small mt-1";
            errorElement.innerText = message;

            var inputElement = document.querySelector(`[name="${fieldName}"]`);
            if (inputElement && inputElement.parentElement) {
                inputElement.parentElement.appendChild(errorElement);
            }
        }
    }

    function hideValidationMessage(fieldName) {
        var errorMessage = document.getElementById(`${fieldName}-error`);
        if (errorMessage) {
            errorMessage.remove();
        }
    }
</script>

