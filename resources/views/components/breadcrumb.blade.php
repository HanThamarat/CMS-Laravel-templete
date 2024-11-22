<div class="block md:flex w-full justify-between mb-3">
    <div class="bg-gray-200 px-2 py-2 rounded-md dark:bg-darkmode">
        <span>{{ $pagename }}</span>
    </div>
    <nav class="mt-2 md:mt-0 flex dark:bg-darkmode text-gray-600 text-sm bg-gray-200 px-2 py-2 rounded-md" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            @foreach ($links as $link)
                @if (!$loop->last)
                    <li class="inline-flex items-center">
                        <a href="{{ $link['url'] }}" class="inline-flex items-center text-gray-700 hover:text-blue-600">
                            @if (isset($link['icon']))
                                <span class="mr-1">{!! $link['icon'] !!}</span>
                            @endif
                            {{ $link['label'] }}
                        </a>
                    </li>
                    <li>
                        <span class="text-gray-500">/</span>
                    </li>
                @else
                    <li class="text-gray-400">{{ $link['label'] }}</li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
