<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center text-[13px] px-8 py-2 bg-gray-900 border border-transparent rounded-md font-bold text-xs text-white tracking-wider hover:bg-gray-800 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-700 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
