<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-1 mb-2">
        <div>
            <label for="est_pangpagkaen" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">May establishementong pangpagkaen?</label>
            <select wire:model.lazy="est_pangpagkaen" id="est_pangpagkaen" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="1">Meron</option>
                <option value="2">Wala</option>
            </select>
        </div>
    </div>
    @if ($est_pangpagkaen == 1)
    <div class="grid gap-6 md:grid-cols-1 mb-2">
        <div>
            <label for="anong_klase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Anong klase?</label>
            <select wire:model.lazy="anong_klase" id="anong_klase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                @foreach ($lists as $list)
                    <option value="{{$list->id}}">{{$list->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    @if ($is_others)
    <div class="grid gap-6 md:grid-cols-1 mb-2">
        <div>
            <label for="other_klase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Others</label>
            <input type="text" wire:model.lazy="other_klase" id="other_klase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Others" />
        </div>
    </div>
        @endif
    @endif
</div>