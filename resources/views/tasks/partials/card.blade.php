<div class="bg-gray-100 rounded-md py-4 px-6">
    <div class="border-b-2 border-gray-900 w-full">
        <div class="flex items-center mb-4">
            <x-profile-image></x-profile-image>
            <div class="ml-4">
                <span class="ff-baloo text-sm text-gray-900">Peter</span>
                <span class="block text-xs">Admin</span>
            </div>
        </div>
    </div>

    @include('tasks.partials.button')

    <div class="flex items-center justify-between mt-4">
        @include('tasks.partials.radio')

        @include('tasks.partials.dropdown')
    </div>
</div>