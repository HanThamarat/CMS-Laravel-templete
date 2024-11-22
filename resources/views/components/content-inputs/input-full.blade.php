<div class="relative">
    <input
        type="{{ empty(@$data['type']) || @$data['type'] === null ? 'text' : @$data['type'] }}"
        name="{{ @$data['name'] }}"
        id="{{ @$data['id'] }}"
        class="h-9 border border-gray-300 bg-transparent rounded-lg text-sm w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
        placeholder=" "
        {{-- required --}}
        autocomplete="off"
        onfocus="moveLabel('{{ @$data['id'] }}')"
        onblur="checkInput('{{ @$data['id'] }}')"
        value="{{ @$data['value'] }}"
        {{-- oninvalid="this.setCustomValidity('กรุณากรอกข้อมูล')"
        oninput="this.setCustomValidity('')" --}}
    >
    <label for="{{ @$data['id'] }}"
        class="p-1.5 absolute text-gray-500 duration-300 transform translate-y-1/2 scale-75 left-2 top-[-8] origin-[0] px-2 rounded-full shadow-md dark:bg-darkmode bg-white transition-all">
        {{ @$data['label'] }}
    </label>
</div>



