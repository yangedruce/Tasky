<div x-data="{show:false}" class="">
    <div class="flex fixed items-center right-0 bottom-0 mb-3 md:mb-8 mr-3 md:mr-8">
        <div class="block mr-3">
            <p class="text-base text-gray-900">Add member</p>
        </div>
        <button @click="show=true" class="block text-gray-900 border-2 border-gray-900 bg-white rounded-full p-4" type="button">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="#0C0B0B" viewBox="0 0 24 24" style="height: 20px; width: 20px;">
                <path d="M 11 3 L 11 11 L 3 11 L 3 13 L 11 13 L 11 21 L 13 21 L 13 13 L 21 13 L 21 11 L 13 11 L 13 3 L 11 3 z"></path>
            </svg>
        </button>
    </div>

    <div x-show="show" class="inset-0 flex items-center justify-center bg-gray-700 bg-opacity-50 fixed h-full top-0">
        <div @click.away="show = false" class="w-11/12 md:w-2/3 lg:w-3/5 xl:w-1/3 p-6 bg-white rounded-md">
            <div class="flex justify-between items-center">
                <h3 class="text-2xl ff-baloo">Add members to Team</h3>
                <svg @click="show=false" class="w-3 h-3 cursor-pointer" width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.92969 3.63281L5.80469 0.546875H7.49219L4.72656 4.72656L7.57812 9H5.90625L3.95312 5.83594L2 9H0.320312L3.17188 4.72656L0.40625 0.546875H2.07812L3.92969 3.63281Z" fill="#0C0B0B"/>
                </svg>
            </div>
            <div>
                <h4 class="text-base">Invite member by email address</h4>
            </div>            
            <div class="mt-4">
                <div class="relative group z-0 w-full mb-3">
                    <x-label for="team_name" :value="__('Team name')" class="text-base ff-baloo"></x-label>
                    <x-input id="team_name" class="block w-full" type="text" name="team_name" :value="old('team_name')" autofocus />
                </div>

                <div class="relative group z-0 w-full mt-12 mb-3">
                    <x-label for="email" :value="__('Email 1')" class="text-base ff-baloo"></x-label>
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" autofocus />
                </div>
                <div class="relative group z-0 w-full mb-3">
                    <x-label for="email" :value="__('Email 2')" class="text-base ff-baloo"></x-label>
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" autofocus />
                </div>
                <div class="relative group z-0 w-full mb-3">
                    <x-label for="email" :value="__('Email 3')" class="text-base ff-baloo"></x-label>
                    <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" autofocus />
                </div>

                <div class="px-4">
                    <a href="#" class="text-[10px] text-gray-900">+  Add new</a>
                </div>

                {{-- <button @click="show=false" class="px-4 py-2 text-white bg-red-600 rounded">Cancel</button> --}}
                <div class="flex justify-center mt-6">
                    <button class="font-bold text-[13px] text-white bg-gray-900 p-2 w-28 rounded-md" type="button">Send invite</button>
                </div>
            </div>
        </div>
    </div>
</div>
