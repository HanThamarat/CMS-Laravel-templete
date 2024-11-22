<!-- Date Picker Container -->
<div class="relative group w-full max-w-md mx-auto">
    <input id="{{ @$data['id'] }}" name="{{ @$data['name'] }}" value="{{ @$data['value'] }}"
        class="h-9 w-full px-4 py-3 rounded-lg border-1 border-gray-200
             text-gray-700 transition-all duration-300
             placeholder-gray-400 shadow-sm
             focus:border-blue-500 focus:ring-2 focus:ring-blue-200 focus:outline-none
             hover:border-blue-300
             bg-transparent
             peer"
        style="font-size: 0.6rem;" placeholder=" " />

    <!-- Floating Label -->
    <label
        class="absolute left-2 -top-2.5 bg-white dark:bg-darkmode px-2 transition-all duration-300
             peer-placeholder-shown:text-gray-400
             peer-placeholder-shown:top-3 peer-placeholder-shown:left-4
             peer-focus:-top-2.5 peer-focus:left-2
             peer-focus:text-blue-500 text-gray-500
             pointer-events-none"
        style="font-size: 0.6rem;">
        {{ @$data['label'] }}
    </label>
</div>




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const datepicker{{ @$data['id'] }} = flatpickr("#{{ @$data['id'] }}", {
            dateFormat: "Y-m-d",
            animate: true,
            disableMobile: true
        });

        // Styling the date picker
        const calendarContainer{{ @$data['id'] }} = datepicker{{ @$data['id'] }}.calendarContainer;
        const calendarMonthNav{{ @$data['id'] }} = datepicker{{ @$data['id'] }}.monthNav;
        const calendarNextMonthNav{{ @$data['id'] }} = datepicker{{ @$data['id'] }}.nextMonthNav;
        const calendarPrevMonthNav{{ @$data['id'] }} = datepicker{{ @$data['id'] }}.prevMonthNav;
        const calendarDaysContainer{{ @$data['id'] }} = datepicker{{ @$data['id'] }}.daysContainer;

        // Enhanced Calendar Container
        calendarContainer{{ @$data['id'] }}.className = `
      ${calendarContainer{{ @$data['id'] }}.className}
      bg-white p-6 border border-gray-100 rounded-xl
      shadow-lg shadow-gray-200/20
      font-sans text-sm text-gray-600
      transform opacity-0 scale-95 transition-all duration-200
      data-[state=open]:opacity-100 data-[state=open]:scale-100
      focus:outline-none
    `;

        // Month Navigation
        calendarMonthNav{{ @$data['id'] }}.className = `
      ${calendarMonthNav{{ @$data['id'] }}.className}
      flex items-center justify-between mb-4
      font-medium text-gray-700
      [&>div.flatpickr-month]:translate-y-0
      [&>div.flatpickr-month]:transition-transform
      [&>div.flatpickr-month]:duration-200
    `;

        // Next Month Button
        calendarNextMonthNav{{ @$data['id'] }}.className = `
      ${calendarNextMonthNav{{ @$data['id'] }}.className}
      absolute !top-3 !right-3
      h-8 w-8
      flex items-center justify-center
      rounded-lg
      bg-transparent hover:bg-gray-50
      text-gray-600 hover:text-gray-900
      transition-all duration-200
      cursor-pointer
    `;

        // Previous Month Button
        calendarPrevMonthNav{{ @$data['id'] }}.className = `
      ${calendarPrevMonthNav{{ @$data['id'] }}.className}
      absolute !top-3 !left-3
      h-8 w-8
      flex items-center justify-center
      rounded-lg
      bg-transparent hover:bg-gray-50
      text-gray-600 hover:text-gray-900
      transition-all duration-200
      cursor-pointer
    `;

        // Days Container
        calendarDaysContainer{{ @$data['id'] }}.className = `
      ${calendarDaysContainer{{ @$data['id'] }}.className}
      [&_span.flatpickr-day]:rounded-lg
      [&_span.flatpickr-day]:transition-all
      [&_span.flatpickr-day]:duration-200
      [&_span.flatpickr-day.selected]:!bg-blue-500
      [&_span.flatpickr-day.selected]:!border-blue-500
      [&_span.flatpickr-day.selected]:text-white
      [&_span.flatpickr-day:hover]:!bg-gray-100
      [&_span.flatpickr-day.today]:!bg-blue-50
      [&_span.flatpickr-day.today]:!border-blue-200
      [&_span.flatpickr-day.today]:text-blue-600
    `;
    });
</script>
