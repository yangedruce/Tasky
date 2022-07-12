<div class="relative">
    <div class="flex items-center bg-gray-100 rounded-md w-full h-32 px-8 mb-3">
        <div>
            <h1 class="ff-baloo text-gray-900 text-4xl">Hello Josh!</h1>
            <p class="text-base">You have <span>10</span> tasks to do for today.</p>
        </div>

        
    </div>

    <div class="grid grid-cols-1">
        <div class="flex flex-col md:flex-row items-center justify-between bg-gray-100 rounded-md w-full py-4 md:py-0 md:px-8 h-32 md:h-16">
            <div class="mb-2 md:mb-0">
                <h3 class="ff-baloo text-xl">Illustration for Tasky</h3>
                <div class="flex items-center">
                    <p class="text-xs mr-1">Due:</p>
                    <p class="text-xs">20/08/2021</p>
                </div>
            </div>

            <x-task-modal></x-task-modal>
        </div>
    </div>
</div>

<div class="relative">
    <div class="flex flex-col md:flex-row items-center justify-between bg-gray-100 rounded-md w-full py-4 md:py-0 px-8 mb-3 h-36 md:h-32">
        <div class="flex items-center">
            <div class="ff-baloo text-6xl mr-2 mt-2">51</div>
            <div>
                <h1 class="ff-baloo text-gray-900 text-xl">Tasks completed!</h1>
                <p class="text-xs">Well done, <span>Josh!</span> Keep up your hard work.</p>
            </div>
        </div>

        <a href="{{ route('tasks.index' )}}" class="bg-gray-900 text-white text-center font-bold rounded-md p-2 w-28">View more</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        <div class="flex items-center bg-gray-100 rounded-md w-full px-8 h-16">
            <div class="flex items-center">
                <div class="ff-baloo text-6xl mr-2 mt-1">11</div>
                <div>
                    <h1 class="ff-baloo text-gray-900 text-xs">Tasks</h1>
                    <p class="text-xs">cancelled</p>
                </div>
            </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-md w-full px-8 h-16">
            <div class="flex items-center">
                <div class="ff-baloo text-6xl mr-2 mt-1">4</div>
                <div>
                    <h1 class="ff-baloo text-gray-900 text-xs">Tasks</h1>
                    <p class="text-xs">in progress</p>
                </div>
            </div>
        </div>
        <div class="flex items-center bg-gray-100 rounded-md w-full px-8 h-16">
            <div class="flex items-center">
                <div class="ff-baloo text-6xl mr-2 mt-1">2</div>
                <div>
                    <h1 class="ff-baloo text-gray-900 text-xs">Tasks</h1>
                    <p class="text-xs">in pending</p>
                </div>
            </div>
        </div>
    </div>
</div>