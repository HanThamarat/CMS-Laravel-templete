<div class="w-full">
    <span class="font-primaryMedium">{{ @$data['label'] }}</span>
    <input
        type="{{ empty(@$data['type']) || @$data['type'] === null ? 'text' : @$data['type'] }}"
        name="{{ @$data['name'] }}"
        id="{{ @$data['id'] }}"
        class="h-9 border border-gray-300 mt-1 bg-transparent rounded-lg text-[14px] w-full peer placeholder-transparent focus:outline-none focus:border-orange-600 focus:ring-0 transition-all duration-300"
        placeholder=""
    >
</div>
