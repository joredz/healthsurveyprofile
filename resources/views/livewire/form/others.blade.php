<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-3 mb-2">
        <div>
            <label for="family_planning" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ginagamit sa Family Planning?</label>
            <select wire:model.lazy="family_planning" id="family_planning" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Pills</option>
                <option value="2">DMPA</option>
                <option value="3">LAM</option>
                <option value="4">IUD</option>
                <option value="5">Tubal Ligation</option>
                <option value="6">Vasectomy</option>
                <option value="7">Condom</option>
                <option value="8">Basal Body Temperature</option>
                <option value="9">Standard Days Method</option>
                <option value="10">Cervical Mucus M</option>
                <option value="11">Implant</option>
            </select>
        </div>
        <div>
            <label for="family_planning_saan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Saan nakuha?</label>
            <select wire:model.lazy="family_planning_saan" id="family_planning_saan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Center</option>
                <option value="2">Buying</option>
            </select>
        </div>
        <div>
            <label for="asin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asin</label>
            <select wire:model.lazy="asin" id="asin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Ordinaryo</option>
                <option value="2">Iodized Salt</option>
            </select>
        </div>
        <div>
            <label for="alagang_hayop" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mga Alagang Hayop (count) </label>
            <input type="number" wire:model.lazy="alagang_hayop" id="alagang_hayop" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0" />
        </div>
        <div>
            <label for="mga_tanim" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mga tanim na gulay at purtas </label>
            <input type="text" wire:model.lazy="mga_tanim" id="mga_tanim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
        <div>
            <label for="halamang_gamot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mga tanim na halamang gamot </label>
            <input type="text" wire:model.lazy="halamang_gamot" id="halamang_gamot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
        <div>
            <label for="gumagamit_gamot" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gumagamit ba ng halamang gamot?</label>
            <select wire:model.lazy="gumagamit_gamot" id="gumagamit_gamot" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Oo</option>
                <option value="2">Hindi</option>
            </select>
        </div>
        <div>
            <label for="may_kuryente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">May kuryente ba ang inyong bahay?</label>
            <select wire:model.lazy="may_kuryente" id="may_kuryente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">Meron</option>
                <option value="2">Wala</option>
            </select>
        </div>
    </div>
    <hr>
    <sub>Cellphone number ng mga miyembro ng pamilya.</sub>
    <div class="grid gap-6 md:grid-cols-4 mb-2 mt-2">
        <div>
            <input type="text" wire:model.lazy="cp_one" id="cp_one" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63" />
        </div>
        <div>
            <input type="text" wire:model.lazy="cp_two" id="cp_two" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63" />
        </div>
        <div>
            <input type="text" wire:model.lazy="cp_three" id="cp_three" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63" />
        </div>
        <div>
            <input type="text" wire:model.lazy="cp_four" id="cp_four" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+63" />
        </div>
    </div>
    <hr>
    <div class="grid gap-6 md:grid-cols-3 mb-2 mt-2">
        <div>
            <label for="philhealth_member" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Philhealth Member </label>
            <input type="text" wire:model.lazy="philhealth_member" id="philhealth_member" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
        <div>
            <label for="philhealth_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Philhealth Number </label>
            <input type="text" wire:model.lazy="philhealth_number" id="philhealth_member" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
        </div>
        <div>
            <label for="phil_category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Philhealh category</label>
            <select wire:model.lazy="phil_category" id="phil_category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="1">NHTS</option>
                <option value="2">Senior citizen</option>
                <option value="3">4p's</option>
                <option value="4">Self employed</option>
            </select>
        </div>
    </div>
</div>