
<div class="relative">
    <select id="{{ @$data['id'] }}" name="{{ @$data['name'] }}"
        class="h-9 border border-gray-300 rounded-lg text-sm w-full bg-transparent focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500 {{ @$data['otherStyle'] }}"
        {{-- required oninvalid="this.setCustomValidity('')" oninput="this.setCustomValidity('')" --}}
        onfocus="moveLabel('{{ @$data['id'] }}')" onblur="checkInput('{{ @$data['id'] }}')">
        <option value="">{{ @$data['defaultLable'] }}</option>
        {{ @$slot }}
    </select>

    <label for="{{ @$data['id'] }}"
        class="p-1.5 absolute text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 origin-[0] px-4 rounded-full text-nowrap shadow-md dark:bg-darkmode bg-white transition-all">
        {{ @$data['defaultLable'] }}
    </label>
</div>

<style>
    .scale-75 {
        transform: scale(0.75);
    }

    .-translate-y-1.5 {
        transform: translateY(-0.7rem);
    }

    .-translate-y-2 {
        transform: translateY(-1.5rem);
    }

    .text-orange-600 {
        color: #d97706;
    }

    .text-sm {
        font-size: 0.75rem; /* ลดขนาดฟอนต์ */
    }

    .h-9 {
        height: 2.25rem; /* ปรับความสูงของ select */
    }

    .label-active {
        transform: scale(0.75) translateY(-1.2rem);
        color: #d97706;
        font-size: 0.6rem;
    }

    select {
        font-size: 0.75rem; /* ปรับขนาดฟอนต์ให้เล็กลง */
    }

    label {
        font-size: 0.75rem; /* ปรับขนาดฟอนต์ label ให้เล็กลง */
    }
</style>


<script>
    function moveLabel(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        label.classList.add('label-active');  // Apply active label styles
    }

    function checkInput(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.classList.remove('label-active');  // Remove active label styles if input is empty
        }
    }
</script>














{{-- <select name="{{ @$data['name'] }}" id="{{ @$data['id'] }}" class="inputGroup {{ @$data['otherStyle'] }} rounded-[10px] h-9 border-gray-400">
    <option value="">{{ @$data['defaultLable'] }}</option>
    {{ @$slot }}
</select> --}}


{{-- <div class="relative">
    <select id="prefix" name="prefix" onfocus="moveLabel('prefix')" onblur="checkInput('prefix')"
        class="h-9 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500"
        required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
        <option value="">คำนำหน้า</option>
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
    </select>

    <label for="prefix"
        class="p-0.5 absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 origin-[0] px-4 rounded-full shadow-md bg-white transition-all">
        คำนำหน้า
    </label>
</div> --}}


{{-- <div class="relative">
    <select id="{{ @$data['id'] }}" name="{{ @$data['name'] }}"
        class="h-9 border border-gray-300 rounded-lg text-sm w-full focus:outline-none focus:border-orange-600 focus:ring-0 text-gray-500 {{ @$data['otherStyle'] }}"
        required oninvalid="this.setCustomValidity('กรุณาเลือกคำนำหน้า')" oninput="this.setCustomValidity('')">
        <option value="">{{ @$data['defaultLable'] }}</option>
        {{ @$slot }}
    </select>

    <label for="{{ @$data['id'] }}"
        class="p-0.5 absolute text-lg text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 origin-[0] px-4 rounded-full shadow-md bg-white transition-all">
        {{ @$data['defaultLable'] }}
    </label>
</div>


<style>
    .scale-75 {
        transform: scale(0.75);
    }

    .-translate-y-1.5 {
        transform: translateY(-0.7rem);
    }

    .-translate-y-2 {
        transform: translateY(-1rem);
    }

    .text-orange-600 {
        color: #d97706;
    }

    .text-sm {
        font-size: 0.875rem;
    }
</style>


<script>
    function moveLabel(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        label.style.transform = 'scale(0.75) translateY(-1.2rem)';
        label.style.color = '#d97706';
        label.style.fontSize = '0.875rem';
    }

    function checkInput(id) {
        const input = document.getElementById(id);
        const label = input.nextElementSibling;

        if (input.value.trim() === '') {
            label.style.transform = '';
            label.style.color = '';
            label.style.fontSize = '';
        }
    }
</script> --}}

