
<script>
    // ฟังก์ชันสำหรับ validate form
    function validateCustomerForm() {
        const errors = {};
        let isValid = true;

        // Define field configurations with validation rules
        const fieldConfigs = [{
                name: 'prefixName',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกคำนำหน้าชื่อ'
                }
            },
            {
                name: 'firstName_TH',
                rules: {
                    required: true,
                    message: 'กรุณากรอกชื่อ'
                }
            },
            {
                name: 'lastName_TH',
                rules: {
                    required: true,
                    message: 'กรุณากรอกนามสกุล'
                }
            },
            {
                name: 'Phone_Primary',
                rules: {
                    required: true,
                    pattern: /^[0-9]{10}$/,
                    message: 'กรุณากรอกเบอร์โทรศัพท์หลัก',
                    patternMessage: 'กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง (10 หลัก)'
                }
            },
            {
                name: 'IDCard',
                rules: {
                    required: true,
                    pattern: /^[0-9]{13}$/,
                    message: 'กรุณากรอกเลขบัตร',
                    patternMessage: 'กรุณากรอกเลขบัตรประชาชนให้ถูกต้อง (13 หลัก)'
                }
            },
            {
                name: 'card_issue_date',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกวันออกบัตร',
                    customValidation: (value) => {
                        if (!value) return true;
                        const issueDate = new Date(value);
                        const today = new Date();
                        return issueDate <= today ? true : 'วันออกบัตรต้องไม่เป็นวันในอนาคต';
                    }
                }
            },
            {
                name: 'card_expire_date',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกวันหมดอายุบัตร',
                    customValidation: (value) => {
                        if (!value) return true;
                        const expireDate = new Date(value);
                        const issueDate = new Date(document.querySelector('[name="card_issue_date"]').value);
                        const today = new Date();

                        if (expireDate <= issueDate) {
                            return 'วันหมดอายุบัตรต้องมาหลังวันออกบัตร';
                        }
                        if (expireDate <= today) {
                            return 'บัตรหมดอายุแล้ว กรุณาตรวจสอบ';
                        }
                        return true;
                    }
                }
            },
            {
                name: 'birthdate',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกวันเดือนปีเกิด'
                }
            },
            {
                name: 'gender',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกเพศ'
                }
            },
            {
                name: 'Nationality',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกสัญชาติ'
                }
            },
            {
                name: 'Religion',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกศาสนา'
                }
            },
            {
                name: 'Driver_Licence',
                rules: {
                    required: true,
                    message: 'กรุณาเลือกใบขับขี่'
                }
            }
        ];

        // Validate each field based on its configuration
        fieldConfigs.forEach(config => {
            const element = document.querySelector(`[name="${config.name}"]`);
            if (!element) return;

            const value = element.value;
            const rules = config.rules;

            // Required field validation
            if (rules.required && !value.trim()) {
                errors[config.name] = {
                    message: rules.message,
                    icon: '⚠️'
                };
                element.classList.add('border-red-500');
                isValid = false;
                return;
            }

            // Pattern validation
            if (rules.pattern && value.trim() && !rules.pattern.test(value)) {
                errors[config.name] = {
                    message: rules.patternMessage || rules.message,
                    icon: '❌'
                };
                element.classList.add('border-red-500');
                isValid = false;
                return;
            }

            // Custom validation
            if (rules.customValidation && value.trim()) {
                const customValidationResult = rules.customValidation(value);
                if (customValidationResult !== true) {
                    errors[config.name] = {
                        message: customValidationResult,
                        icon: '❌'
                    };
                    element.classList.add('border-red-500');
                    isValid = false;
                }
            }
        });

        // Display errors function
        const displayError = (fieldName, error) => {
            const element = document.querySelector(`[name="${fieldName}"]`);
            if (!element) return;

            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message text-red-500 text-[10px] mt-1 opacity-0 transform translate-y-2';
            errorDiv.innerHTML = `<span class="error-icon mr-1">${error.icon}</span>${error.message}`;

            const existingError = element.parentElement.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }

            element.parentElement.appendChild(errorDiv);
            element.classList.add('border-red-500');
            element.classList.add('shake-animation');

            setTimeout(() => {
                errorDiv.classList.add('transition-all', 'duration-300', 'ease-in-out');
                errorDiv.classList.remove('opacity-0', 'transform', 'translate-y-2');
            }, 10);

            setTimeout(() => {
                errorDiv.classList.add('opacity-0', 'transform', 'translate-y-2');
                setTimeout(() => {
                    errorDiv.remove();
                }, 300);
            }, 3000);

            setTimeout(() => {
                element.classList.remove('shake-animation');
            }, 500);
        };

        // Clear existing errors and display new ones
        document.querySelectorAll('.error-message').forEach(el => el.remove());
        document.querySelectorAll('.border-red-500').forEach(el => el.classList.remove('border-red-500'));
        document.querySelectorAll('.valid-field').forEach(el => el.classList.remove('valid-field'));
        document.querySelectorAll('.valid-icon').forEach(el => el.remove());

        if (!isValid) {
            Object.entries(errors).forEach(([fieldName, error]) => {
                displayError(fieldName, error);
            });
        } else {
            // Show success state for valid fields
            fieldConfigs.forEach(config => {
                const element = document.querySelector(`[name="${config.name}"]`);
                if (!element) return;

                element.classList.add('valid-field');
                const validIcon = document.createElement('span');
                validIcon.className = 'valid-icon';
                validIcon.innerHTML = '✓';
                element.parentElement.style.position = 'relative';
                element.parentElement.appendChild(validIcon);

                setTimeout(() => {
                    validIcon.remove();
                }, 3000);
            });
        }

        return isValid;
    }

    // Event listener for form submission
    document.getElementById('cusForm').addEventListener('click', function(e) {
        e.preventDefault();
        if (validateCustomerForm()) {
            console.log('Form is valid, proceeding with submission');
        }
    });

    // Real-time validation for phone number
    document.querySelector('[name="Phone_Primary"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
        if (this.value.length === 10) {
            this.classList.add('valid-field');
        } else {
            this.classList.remove('valid-field');
        }
    });

    // Real-time validation for ID card
    document.querySelector('[name="IDCard"]').addEventListener('input', function(e) {
        this.value = this.value.replace(/[^0-9]/g, '');
        if (this.value.length > 13) {
            this.value = this.value.slice(0, 13);
        }
        if (this.value.length === 13) {
            this.classList.add('valid-field');
        } else {
            this.classList.remove('valid-field');
        }
    });
</script>
