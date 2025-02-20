<div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ANNUAL SURVEY CONSOLIDATION   YEAR:
                    </th>
                    <th class="text-right">
                    <select id="resultYear" class="block py-2.5 px-2 text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose a Year</option>
                    </select>
                    </th>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        BARANGAY:
                    </th>
                    <th>
                        <select id="resultBrgy" wire:model.lazy="resultBrgy" class="block py-2.5 px-2  text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option>Choose a Barangay</option>
                            @foreach ($barangayList as $brgy)
                                <option value="{{$brgy->id}}">{{$brgy->name}}</option>
                            @endforeach
                        </select>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
        <hr>
        <hr>
        <hr>
        <div class="overflow-x-auto h-screen ">
        <table class="w-full table-auto text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-1/2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        PUROKS:
                    </th>
                    @foreach ($puroks as $purok)
                        <th colspan="2" class="border text-center">{{$purok->name}}</th>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        No. of Houses:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('numberOfHouses',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        No. of House Only:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('numberOfHouseOnly',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        No. of Household:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('numberOfHousehold',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Source of Livelihood (No. of Head of Family na ang Trabaho ay)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($livelihoodList as $ll)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$ll->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Religion
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($religionList as $rl)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$rl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">a</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Uri ng Bahay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($uriNgBahayList as $unbl)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$unbl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Bahay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($bahayList as $bl)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$bl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Lote
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($loteList as $lotl)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$lotl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Household Income (Buwanang Kita ng Pamilya)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    10,000 and above
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    9,000 - 9,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    8,000 - 8,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    7,000 - 7,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    6,000 - 6,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    5,000 - 5,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    4,000 - 4,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    3,000 - 3,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    2,000 - 2,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    1,000 - 1,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    1,000 and below
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        OTHERS
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Family Planning
                    </th>
                    @foreach ($puroks as $purok)
                        <td class="border text-center">Center</td>
                        <td class="border text-center">Buying</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    DMPA
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    PILLS
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    CONDOM
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    TUBAL LIGATION (TL)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    IMPLANT
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    IUD
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    OTHERS
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Bilang ng populasyon ayon sa Edad at Kasarian
                    </th>
                    @foreach ($puroks as $purok)
                        <td class="border text-center">Male</td>
                        <td class="border text-center">Female</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    0-11 months
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    1 year old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    2 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    3 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    4 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    5 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    6 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    7 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    8 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    9 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    10 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    11 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    12 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    13 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    14 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    15 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    16 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    17 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    18 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    19 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    20 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    21 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    22 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    23 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    24 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    25 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    26 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    27 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    28 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    29 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    30 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    31 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    32 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    33 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    34 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    35 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    36 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    37 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    38 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    39 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    40 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    41 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    42 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    43 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    44 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    45 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    46 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    47 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    48 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    49 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    50 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    51 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    52 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    53 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    54 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    55 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    56 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    57 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    58 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    59 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    60 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    61 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    62 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    63 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    64 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    65 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    66 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    67 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    68 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    69 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    70 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    71 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    72 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    73 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    74 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    75 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    76 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    77 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    78 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    79 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    80 years old
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    81 above
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        PANGKALAHATANG KALINISAN NG PAMILYA
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Uri ng Palikuran
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Water Sealed Toilet (Flush, De Buhos)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Pit Privy
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Nakikisama
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Wala
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Basurahan
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Nagbubukod
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Hindi nagbubukod
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Paraan ng pagkolekta ng basura
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Kinokolekta ng dump ng munisipyo
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Kinokolekta ng dump ng barangay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Kinokolekta ng segregation cart ng brgy
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Sariling tapon sa open dumping site
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Paraan ng pagtatapon ng basura
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Pagtatambak
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Pagbabaon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Pagbubulok
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Pagsusunog
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        WATER SANITATION
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Kinukunan ng Tubig na inumin
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Level I
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Level II
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Level III (Water District)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Water Refilling Station
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @foreach ($waterRefillingList as $wr)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                        &nbsp;&nbsp;&nbsp;
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                        </svg>
                        {{$wr->name}}
                        </th>
                        @foreach ($puroks as $purok)
                            <td colspan="2" class="border text-center"></td>
                        @endforeach
                    </tr>
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Doubtful Source
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Open well  / Balon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Bukal / Salulo
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Ilog
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    &nbsp;&nbsp;&nbsp;
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Rain Collector
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        WASTE WATER MANAGEMENT
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Saan pumupunta ang maruming tubig galing banyo at kusina?
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Blind Drainage
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Backyard o Itinatapon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Open Canal
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr class="bg-blue-200 border-b dark:bg-blue-800 dark:border-blue-700 border-blue-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        FOOD ESTABLISHMENT
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($establishmentList as $est)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-auto py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$est->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center"></td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        
    </div>
</div>
