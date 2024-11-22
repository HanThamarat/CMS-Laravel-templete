<button class="{{ @$data['otherStyle'] === null || empty(@$data['otherStyle']) ? 'bg-orange-500 text-white hover:bg-orange-600' : @$data['otherStyle'] }} w-full py-2 px-5 duration-100 ease-in-out rounded-md">
    {{ @$data['label'] }}
</button>
