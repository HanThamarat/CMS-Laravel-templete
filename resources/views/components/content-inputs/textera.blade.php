<div class="texera-relative">
    <textarea name="{{ @$data['name'] }}" id="{{ @$data['id'] }}"
        class="texera-input h-36 border border-gray-300 bg-transparent rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
        placeholder=" "onfocus="moveLabel('{{ @$data['id'] }}')"
        onblur="checkInput('{{ @$data['id'] }}')" oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')"
        oninput="this.setCustomValidity('')">{{ @$data['value'] ?? '' }}</textarea>
    <label for="{{ @$data['id'] }}"
        class="texera-label p-1.5 absolute dark:bg-darkmode text-gray-500 duration-300 transform -translate-y-4 scale-75 left-2 top-0 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
        {{ @$data['label'] }}
    </label>
</div>

<style>
    .texera-relative {
        position: relative;
    }

    .texera-input {
        padding: 0.5rem;
        resize: vertical; /* อนุญาตให้ผู้ใช้ปรับขนาดแนวตั้ง */
        min-height: 4rem; /* ความสูงขั้นต่ำ */
    }

    .texera-label {
        background-color: #ffffff;
        pointer-events: none;
    }

    .texera-input:focus ~ .texera-label,
    .texera-input:not(:placeholder-shown) ~ .texera-label {
        transform: translateY(-1.0rem) scale(0.9);
        color: #f97316; /* สีส้ม */
    }
</style>











{{-- <div class="texera-relative">
    <textarea name="{{ @$data['name'] }}" id="{{ @$data['id'] }}"
        class="texera-input h-36 border border-gray-300 rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
        placeholder=" " required autocomplete="off" onfocus="moveLabel('{{ @$data['id'] }}')"
        onblur="checkInput('{{ @$data['id'] }}')" oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')"
        oninput="this.setCustomValidity('')">{{ @$data['value'] ?? '' }}</textarea>
    <label for="{{ @$data['id'] }}"
        class="texera-label p-1.5 absolute text-gray-500 duration-300 transform -translate-y-4 scale-75 left-2 top-0 origin-[0] px-2 rounded-full shadow-md bg-white transition-all">
        {{ @$data['label'] }}
    </label>
</div>

<style>
    .texera-relative {
        position: relative;
    }

    .texera-input {
        padding: 0.5rem;
        resize: vertical; /* อนุญาตให้ผู้ใช้ปรับขนาดแนวตั้ง */
        min-height: 4rem; /* ความสูงขั้นต่ำ */
    }

    .texera-label {
        background-color: #ffffff;
        pointer-events: none;
    }

    .texera-input:focus ~ .texera-label,
    .texera-input:not(:placeholder-shown) ~ .texera-label {
        transform: translateY(-1.0rem) scale(0.9);
        color: #f97316; /* สีส้ม */
    }
</style> --}}
