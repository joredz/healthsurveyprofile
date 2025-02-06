<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-1 mb-2">
        <div>
            <label for="waste_water" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Saan pumupunta ang maruming tubig na galing sa kusina at banyo?</label>
            <select wire:model.lazy="waste_water" id="waste_water" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="1">Blind Drainage</option>
                <option value="2">Backyard o itinatapon sa bakuran</option>
                <option value="3">Open Canal</option>
            </select>
        </div>
    </div>
</div>