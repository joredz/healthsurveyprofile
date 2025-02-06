
<div>
    <div class="lg:flex p-2">
        <div class="pr-2">
        <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Year</label>
        <input type="text" wire:model.lazy="year" id="year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="pr-2">
        <label for="barangay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Barangay</label>
        <select id="barangay" wire:model.lazy="barangay" wire:change="selectPurok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Select Barangay..</option>
            @foreach($barangays as $brgy)
                <option value="{{$brgy->id}}">{{$brgy->name}}</option>
            @endforeach
        </select>
        </div>
        <div>
        <label for="purok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Purok/Sitio/Sona</label>
        <select id="purok" wire:model.lazy="purok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="">Select Purok..</option>
            @foreach($puroks as $prk)
                <option value="{{$prk->id}}">{{$prk->name}}</option>
            @endforeach
        </select>
        </div>
    </div>
    <div class="lg:flex p-2">
        <ul class="flex-column space-y space-y-2 text-sm font-medium text-gray-500 dark:text-gray-400 md:me-4 mb-4 md:mb-0">
            <li>
                <sub>I. IMPORMASYON TUNGKOL SA PAMILYA</sub>
            </li>
            <li>
                <a href="#" wire:click="changeTab(0)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 0) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full " aria-current="page">
                    I-A. Impormasyon
                </a>
            </li>
            <li>
                <sub>II. PANGKALAHATANG KALINISAN NG PAMILYA</sub>
            </li>
            <li>
                <a href="#" wire:click="changeTab(1)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 1) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-A. Kubeta
                </a>
            </li>
            <li>
                <a href="#" wire:click="changeTab(2)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 2) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-B. Basurahan
                </a>
            </li>
            <li>
                <a href="#" wire:click="changeTab(3)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 3) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-C. Water Sanitation
                </a>
            </li>
            <li>
                <a href="#" wire:click="changeTab(4)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 4) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-D. Waste Water Management
                </a>
            </li>
            <li>
                <a href="#" wire:click="changeTab(5)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 5) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-E. Establishementong pangpagkain
                </a>
            </li>
            <li>
                <a href="#" wire:click="changeTab(6)" class="inline-flex items-center px-12 py-3 text-white {{($tab == 6) ? 'bg-blue-700 dark:bg-blue-600' : 'bg-gray-700 dark:bg-gray-600'}} rounded-lg active w-full" aria-current="page">
                    II-F. Others
                </a>
            </li>
        </ul>
        <div class="p-6 bg-gray-50 text-medium text-gray-500 dark:text-gray-400 dark:bg-gray-800 rounded-lg w-full" id="tabs-1">
            @switch($tab)
                @case(1)
                    <livewire:form.kubeta />
                    @break
                @case(2)
                    <livewire:form.basurahan />
                    @break
                @case(3)
                    <livewire:form.water-sanitation />
                    @break
                @case(4)
                    <livewire:form.waste-water-management />
                    @break
                @case(5)
                    <livewire:form.establishementong-pangpagkaen />
                    @break
                @case(6)
                    <livewire:form.others />
                    @break
                @default
                    <livewire:form.family-information />
                    @break    
            @endswitch
        </div>
    </div>
    <div class="flex justify-end">
        <div>
            @if (session()->has('message'))
                <div id="toast-success" class="flex items-center w-full max-w-xs pr-2 pl-2 pt-1 pb-1 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{ session('message') }}</div>
                </div>
            @endif
            </div>
            <div>
                @if (session()->has('empty'))
                    <div id="toast-empty" class="flex items-center w-full max-w-xs pr-2 pl-2 pt-1 pb-1 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
                        </svg>
                        <span class="sr-only">Warning icon</span>
                    </div>
                        <div class="ms-3 text-sm font-normal">{{ session('empty') }}</div>
                    </div>
                @endif
            </div>
        <button type="button" wire:click="saveData" wire:confirm="Are you sure?" class="text-white ml-4 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-6 py-2.5 text-center me-2 mb-2">Save</button>
    </div>
</div>