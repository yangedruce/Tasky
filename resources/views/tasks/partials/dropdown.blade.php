<div x-data="{ open: false }" class="mt-1">
    <button @click="open = !open">
        <svg width="3" height="13" viewBox="0 0 3 13" fill="#0C0B0B" xmlns="http://www.w3.org/2000/svg">
            <circle cx="1.5" cy="1.5" r="1.5" fill="#0C0B0B"/>
            <circle cx="1.5" cy="6.5" r="1.5" fill="#0C0B0B"/>
            <circle cx="1.5" cy="11.5" r="1.5" fill="#0C0B0B"/>
        </svg>
    </button>

    <ul class="absolute z-10 origin-bottom-left w-32 -translate-x-32 focus:outline-none" x-show="open">
        <li class="bg-white border-2 border-gray-900 rounded-md w-32 p-2"><a href="#">View task</a></li>
        <li class="bg-white border-2 border-gray-900 rounded-md w-32 p-2"><a href="#">Delete task</a></li>
    </ul>
</div>