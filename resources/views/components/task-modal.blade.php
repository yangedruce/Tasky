<div x-data="{show:false}" class="z-50">
    <button @click="show=true" class="bg-gray-900 text-white font-bold rounded-md p-2 w-28" type="button">View task</button>

    <div x-show="show" class="inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50 fixed h-full top-0">
        <div @click.away="show = false" class="w-11/12 md:w-2/3 lg:w-3/5 xl:w-1/3 p-6 bg-gray-100 rounded-md py-4 px-6 h-72">
            <div class="flex justify-between items-center border-b-2 border-gray-900 w-full pb-4">
                <div class="flex items-center">
                    <x-profile-image></x-profile-image>
                    <div class="ml-4">
                        <span class="ff-baloo text-sm text-gray-900">Peter</span>
                        <span class="block text-xs">Admin</span>
                    </div>
                </div>
                <svg @click="show=false" class="w-3 h-3 cursor-pointer" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.92969 3.63281L5.80469 0.546875H7.49219L4.72656 4.72656L7.57812 9H5.90625L3.95312 5.83594L2 9H0.320312L3.17188 4.72656L0.40625 0.546875H2.07812L3.92969 3.63281Z" fill="#0C0B0B"/>
                </svg>
            </div>

            <div class="flex items-center justify-between mt-4 mb-8">
                @include('partials.task-radio')

                @include('partials.task-dropdown')
            </div>

            @include('partials.task-date-input')

            <div class="flex justify-center mt-6">
                <button class="font-bold text-[13px] text-white bg-gray-900 rounded-md p-2 w-28" type="button">Save</button>
            </div>
        </div>
    </div>
</div>
