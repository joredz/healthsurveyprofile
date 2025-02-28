<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-2 mb-2">
        <div>
            <label for="may_basurahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Basurahan</label>
            <select wire:model.lazy="may_basurahan" id="may_basurahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Meron</option>
                <option value="2">Wala</option>
            </select>
        </div>
        <div class="col-span-2">
            <label for="pagbubukod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nagsasagawa ba ng pagbubukod ng basurang nabubulok at di-nabubulok? </label>
            <select wire:model.lazy="pagbubukod" id="pagbubukod" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Oo</option>
                <option value="2">Hindi</option>
            </select>
        </div>
        <div class="col-span-2">
            <label for="paraan_pangongolekta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paraan ng pagkolekta ng basura papunta sa dumpsite o Material Recovery Facility? </label>
            <select wire:model.lazy="paraan_pangongolekta" id="paraan_pangongolekta" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Kinukolekta ng dump truck ng munisipyo</option>
                <option value="2">Kinukolekta ng dump truck ng barangay</option>
                <option value="3">Kinukolekta ng segregation cart ng barangay</option>
                <option value="4">Sariling tapon sa open dumping site</option>
            </select>
        </div>
        <div class="col-span-2">
            <label for="paraan_pagtatapon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paraan ng pagtatapon ng basura? </label>
            <select wire:model.lazy="paraan_pagtatapon" id="paraan_pagtatapon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Pagtatambak</option>
                <option value="2">Pagbabaon</option>
                <option value="3">Pagbubulok</option> 
                <option value="4">Pagsusunog</option> 
            </select>
        </div>
    </div>
</div>
