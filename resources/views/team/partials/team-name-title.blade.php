<div class="flex items-center mb-4 flex-col md:flex-row">
    <input class="ff-baloo text-gray-900 text-4xl mr-4 border-0 focus:outline-none w-64" value="Team Members" readonly>
    <div x-data="{ open: false }" class="flex flex-col md:flex-row gap-2">
        <div x-show="open" class="mr-1">
            <button type="button" class="bg-gray-900 font-bold text-white rounded-md p-2 w-28">Save</button>
        </div>
        <button @click="open = !open" x-text="open==true  ? 'Cancel' : 'Edit'" type="button" class="bg-white border-2 border-gray-900 rounded-md w-28 p-1.5"></button>
    </div>
</div>