<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-3 mb-2">
        <div>
            <label for="may_kubeta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kubeta</label>
            <select wire:model.lazy="may_kubeta" id="may_kubeta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="1">Meron</option>
                <option value="2">Wala</option>
            </select>
        </div>
        <div class="col-span-2">
        <div class="grid gap-6 md:grid-cols-2 mb-2">
            @switch($may_kubeta)
                @case(1)
                <div>
                    <label for="uri_kubeta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Uri ng kubeta?</label>
                    <select wire:model.lazy="uri_kubeta" id="uri_kubeta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value=""></option>
                        <option value="1">Flush</option>
                        <option value="2">De buhos</option>
                        <option value="3">Pit Privy</option>
                    </select>
                </div>
                <div>
                    <label for="klase_ng_toilet" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Klase ng toilet bowl?</label>
                    <select wire:model.lazy="klase_ng_toilet" id="klase_ng_toilet" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value=""></option>
                        <option value="1">Porcelain</option>
                        <option value="2">Plastic Bowl</option>
                        <option value="3">Semento</option>
                    </select>
                </div>
                    @break
                
                @case(2)
                    <div>
                        <label for="saan_tae" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Saan nadumi?</label>
                        <select wire:model.lazy="saan_tae" id="saan_tae" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Nakikisama</option>
                            <option value="2">Public Toilet</option>
                            <option value="3">Open Defecation</option>
                        </select>
                    </div>
                    @break
            
                @default
                    
                    @break
            @endswitch
        </div>
        </div>
    </div>
</div>
