<form action="">
    @csrf
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mt-4">
        <div class="relative group z-0 w-full">
            <x-label for="name" :value="__('Name')" class="text-sm ff-baloo"></x-label>
            <x-input id="name" class="block w-full" type="text" name="name" :value="old('name')" autofocus />
        </div>
        <div class="relative group z-0 w-full">
            <x-label for="email" :value="__('Email')" class="text-sm ff-baloo"></x-label>
            <x-input id="email" class="block w-full" type="email" name="email" :value="old('email')" autofocus />
        </div>
        <div class="relative group z-0 w-full">
            <x-label for="password" :value="__('Password')" class="text-sm ff-baloo"></x-label>
            <x-input id="password" class="block w-full" type="password" name="password" :value="old('password')" autofocus />
        </div>
        <div class="relative group z-0 w-full">
            <x-label for="password" :value="__('Confirm password')" class="text-sm ff-baloo"></x-label>
            <x-input id="password" class="block w-full" type="password" name="password" :value="old('password')" autofocus />
        </div>
    </div>

    <div class="flex justify-center mt-12">
        <button class="px-4 py-2 font-bold text-[13px] w-28 text-white bg-gray-900 rounded-md mr-3" type="button">Save</button>
        <button class="px-4 py-2 font-bold text-[13px] w-28 text-gray-900 border-2 border-gray-900 bg-white rounded-md" type="button">Cancel</button>
    </div>
</form>