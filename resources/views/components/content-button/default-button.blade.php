<button
    id="{{ @$data['btnId'] }}"
    name="{{ @$data['btnName'] }}"
    type="{{ @$data['type'] }}"
    class="{{ @$data['otherStyle'] === null || empty(@$data['otherStyle']) ? 'bg-orange-500 text-white hover:bg-orange-600' : @$data['otherStyle'] }}
    py-2 px-5 duration-100 ease-in-out rounded-md transform hover:-translate-y-1 shadow-md hover:shadow-lg">
    {{ @$data['label'] }}
</button>




{{-- <button
    id="{{ @$data['btnId'] }}"
    name="{{ @$data['btnName'] }}"
    type="{{ @$data['type'] }}"
    class="{{ @$data['otherStyle'] === null || empty(@$data['otherStyle']) ? 'bg-orange-500 text-white hover:bg-orange-600' : @$data['otherStyle'] }} py-2 px-5 duration-100 ease-in-out rounded-md">
    {{ @$data['label'] }}
</button> --}}
