<div>
    <div class="flex justify-between">
        <div class="p-2 text-green-700">
            <div role="status" wire:loading>
                <div id="toast-simple" class="flex items-center w-full max-w-xs p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-[#3b5998] rounded-lg shadow-sm dark:text-blue-800 dark:divide-[#3b5998] dark:bg-[#3b5998]" role="alert">
                    <svg aria-hidden="true" class="inline w-4 h-4 text-white animate-spin dark:text-white fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <div class="ps-4 text-sm font-normal pl-2"> Loading....</div>
                </div>
            </div>
        </div>
        <div class="grid justify-items-end p-2 text-green-700">
            <button type="button" wire:click="exportExcel" wire:loading.attr="disabled" wire:target="exportExcel" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 me-2 mb-2">
                
                

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m.75 12 3 3m0 0 3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                </svg>
                Export to excel
            </button>
        </div>
    </div>
    
    <div class="relative overflow-x-auto p-2">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        ANNUAL SURVEY CONSOLIDATION   YEAR:
                    </th>
                    <th class="flex flex-row-reverse pr-2">
                    <select id="resultYear" wire:model.lazy="resultYear" class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Choose a Year</option>
                        @foreach ($yearList as $yr)
                            <option value="{{$yr->year}}">{{$yr->year}}</option>
                        @endforeach
                    </select>
                    </th>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        BARANGAY:
                    </th>
                    <th class="flex flex-row-reverse">
                        <select id="resultBrgy" wire:model.lazy="resultBrgy" class="block py-2.5 px-2 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
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
        <div class="overflow-x-auto h-screen p-2 ">
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfLivelihood($ll->id,$purok->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('religion',$purok->id, $rl->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('uriNgBahay',$purok->id, $unbl->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('bahay',$purok->id, $bl->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('lote',$purok->id, $lotl->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 10000, 'above')}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 9000, 9900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 8000, 8900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 7000, 7900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 6000, 6900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 5000, 5900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 4000, 4900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 3000, 3900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 2000, 2900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 1000, 1900)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->income($purok->id, 999, 'below')}}</td>
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
                    PILLS
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 1)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 1)}}</td>
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
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 2)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    LAM
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 3)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 3)}}</td>
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
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 4)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 4)}}</td>
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
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 5)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 5)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    VASECTOMY
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 6)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 6)}}</td>
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
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 7)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 7)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    BASAL BODY TEMPERATURE
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 8)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 8)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    STANDARD DAYS METHOD
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 9)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 9)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    CERVICAL MUCUS M
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 10)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 10)}}</td>
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
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 11)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 11)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    WALA
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->familyPlanning(1, $purok->id, 0)}}</td>
                    <td class="border text-center">{{$this->familyPlanning(2, $purok->id, 0)}}</td>
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
                @for ($x = 0; $x <= 81; $x++)
                @php
                    if($x == 0) {
                        $age = "0-11 months";
                    } elseif($x == 81) {
                        $age = "81 above";
                    } else {
                        $age = $x;
                    }
                @endphp
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    {{$age}} years old
                    </th>
                    @foreach ($puroks as $purok)
                    <td class="border text-center">{{$this->edadKasarian($purok->id, 'Male', $x)}}</td>
                    <td class="border text-center">{{$this->edadKasarian($purok->id, 'Female', $x)}}</td>
                    @endforeach
                </tr>
                @endfor
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
                        <td colspan="2" class="border text-center">{{$this->uriNgPalikuran($purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->uriNgPalikuran($purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->uriNgPalikuran($purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Public Toilet
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">{{$this->uriNgPalikuran($purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-2 w-96 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                    </svg>
                    Open Defacation
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2" class="border text-center">{{$this->uriNgPalikuran($purok->id, 5)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagbubukod',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagbubukod',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pangongolekta',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pangongolekta',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pangongolekta',$purok->id, 3)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pangongolekta',$purok->id, 4)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagtatapon',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagtatapon',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagtatapon',$purok->id, 3)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('pagtatapon',$purok->id, 4)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('watersource',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('watersource',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('watersource',$purok->id, 3)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('watersource',$purok->id, 4)}}</td>
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
                            <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('waterrefilling',$purok->id, $wr->id)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('watersource',$purok->id, 5)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('doubtfulsource',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('doubtfulsource',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('doubtfulsource',$purok->id, 3)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('doubtfulsource',$purok->id, 4)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('wastewater',$purok->id, 1)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('wastewater',$purok->id, 2)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('wastewater',$purok->id, 3)}}</td>
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
                        <td colspan="2" class="border text-center">{{$this->getNumberOfHouse('establishment',$purok->id, $est->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        
    </div>
</div>
