<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-3 mb-2">
        <div class="col-span-3">
            <label for="water_source" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kinukunan ng tubig?</label>
            <select wire:model.lazy="water_source" id="water_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="1">Level I ( Poso, Spring box )</option>
                <option value="2">Level II ( Spring, Deep well )</option>
                <option value="3">Level III ( Water District )</option>
                <option value="4">Water Refilling Station</option>
                <option value="5">Doubtful Source</option>
            </select>
        </div>
        <div class="col-span-3">
            @switch($water_source)
                @case(1)
                    <div>
                        <label for="one_klase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose one..</label>
                        <select wire:model.lazy="one_klase" id="one_klase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Poso</option>
                            <option value="2">Spring box na may isang gripo</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="one_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ito ba'y?</label>
                        <select wire:model.lazy="one_type" id="one_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Public</option>
                            <option value="2">Private</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="one_caretaker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sino ang may-ari o caretaker?</label>
                        <input type="text" wire:model.lazy="one_caretaker" id="one_caretaker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <sup>(NOTE: Isulat ang pangalan ng Water system at Caretake, Halimbawa: Gilbert Parafina, Purok 1 Barangay Zone 1)</sup>
                    @break
                @case(2)
                    <div>
                        <label for="two_klase" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose one..</label>
                        <select wire:model.lazy="two_klase" id="two_klase" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Brgy. Water System (source: Spring)</option>
                            <option value="2">Brgy. Water System (source: Deep well)</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="two_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ito ba'y?</label>
                        <select wire:model.lazy="two_type" id="two_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Public</option>
                            <option value="2">Private</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="two_caretaker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sino ang may-ari o caretaker?</label>
                        <input type="text" wire:model.lazy="two_caretaker" id="two_caretaker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <sup>(NOTE: Isulat ang pangalan ng Water system at Caretake, Halimbawa:Nabak-an Water System c/o Armando Gunida, Brgy. Malinao Ilaya)</sup>
                    @break
                @case(3)
                    
                    @break
                @case(4)
                    <div>
                        <label for="refilling_station" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose one..</label>
                        <select wire:model.lazy="refilling_station" id="refilling_station" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            @foreach ($stations as $station)
                                <option value="{{$station->id}}">{{$station->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($is_other_refilling)
                    <div class="pt-2">
                        <label for="other_refilling_station" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other refilling station</label>
                        <input type="text" wire:model.lazy="other_refilling_station" id="other_refilling_station" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    @endif
                    @break
                @case(5)
                    <div>
                        <label for="doubtful_source" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose one..</label>
                        <select wire:model.lazy="doubtful_source" id="doubtful_source" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Open Well / Balon</option>
                            <option value="2">Bukal / Salulo</option>
                            <option value="3">Ilog</option>
                            <option value="4">Rain Collector</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="doubtful_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ito ba'y?</label>
                        <select wire:model.lazy="doubtful_type" id="doubtful_type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value=""></option>
                            <option value="1">Public</option>
                            <option value="2">Private</option>
                        </select>
                    </div>
                    <div class="pt-2">
                        <label for="doubtful_caretaker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sino ang may-ari o caretaker?</label>
                        <input type="text" wire:model.lazy="doubtful_caretaker" id="doubtful_caretaker" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <sup>(NOTE: Isulat kung saan nakatayo ang kinukunan ng tubig inumin, Halimbawa: Gilbert Parafina Purok 1 Barangay Zone I )</sup>
                    @break
            
                @default
                    @break
            @endswitch
        </div>
    </div>
</div>