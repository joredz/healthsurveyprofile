<div class="h-fit overflow-y-auto">
    <div class="grid gap-6 md:grid-cols-2 mb-2">
        <div>
            <label for="bilang_ng_bahay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bilang ng bahay</label>
            <input type="string" wire:model.lazy="bilang_ng_bahay" id="bilang_ng_bahay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bilang ng bahay" />
        </div>
        <div>
            <label for="tirahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tirahan</label>
            <input type="text" wire:model.lazy="tirahan" id="tirahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tirahan" />
        </div>
        <div>
            <label for="bilang_ng_miyembro" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bilang ng miyembro ng pamilya</label>
            <input type="number" wire:model.lazy="bilang_ng_miyembro" id="bilang_ng_miyembro" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bilang ng miyembro ng pamilya" />
        </div>
        <div>
            <label for="ulo_ng_pamilya" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulo ng pamilya</label>
            <input type="text" wire:model.lazy="ulo_ng_pamilya" id="ulo_ng_pamilya" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ulo ng pamilya" />
        </div>
        <div>
            <label for="asawa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Asawa</label>
            <input type="text" wire:model.lazy="asawa" id="asawa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Asawa" />
        </div>
        <div>
            <label for="relihiyon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Relihiyon</label>
            <select id="relihiyon" wire:model.lazy="relihiyon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                @foreach($religions as $religion)
                    <option value="{{$religion->id}}">{{$religion->name}}</option>
                @endforeach
            </select>
        </div>
        @if ($is_others)
        <div>

        </div>
        <div>
            <label for="other_religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Other religion</label>
            <input type="text" wire:model.lazy="other_religion" id="other_religion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Other religion" />
        </div>
        @endif
        <div>
            <label for="civil_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Civil status</label>
            <select id="civil_status" wire:model.lazy="civil_status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value=""></option>
                <option value="0">None</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Widow">Widow</option>
                <option value="Legal separated">Legal separated</option>
            </select>
        </div>
        <div>
            <label for="income_per_month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Income bawat buwan</label>
            <input type="number" wire:model.lazy="income_per_month" id="income_per_month" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Income bawat buwan" />
        </div>
        <div>
            <label for="petsa_ng_kasal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Petsa ng kasal</label>
            <input type="date" wire:model.lazy="petsa_ng_kasal" id="petsa_ng_kasal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Petsa ng kasal" />
        </div>
        <div>
            <label for="g" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">G</label>
            <input type="number" wire:model.lazy="g" id="g" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="G" />
        </div>
        <div>
            <label for="p" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">P</label>
            <input type="number" wire:model.lazy="p" id="p" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="P" />
        </div>
    </div>
    <hr>
    <div class="pt-4">
        <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" wire:click="$dispatch('openModal', {component: 'modal.family-member'})">Add Members</button>
    </div>
    <div>
        

    <div class="relative overflow-x-auto p-2 mb-2">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Pangalan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kapanganakan
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-3 py-3">
                        Sex
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Natapos na pag-aaral
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Hanapbuhay
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Karagdagang impormasyon
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-2">
                            {{$member->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->birthdate) ? '' : $member->birthdate}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->age) ? '' : $member->age}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->sex) ? '' : $member->sex}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->education) ? '' : $member->education}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->works) ? '' : $member->works->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{is_null($member->other_information) ? '' : $member->other_information}}
                        </td>
                        <td>
                            <a href="#" class="text-blue-600" wire:click="$dispatch('openModal', {component: 'modal.family-member', arguments: {id: {{$member->id}}}})">Edit</a> | <a href="#" class="text-red-600" wire:confirm="Are you sure you want to delete this member?" wire:click="deleteMember({{$member->id}})">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <hr>
    <div class="grid gap-6 md:grid-cols-2 mb-2 mt-2">
        <div>
            <label for="bahay" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahay</label>
            <select type="text" wire:model.lazy="bahay" id="bahay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                <option value=""></option>
                <option value="0">None</option>
                @foreach(auth()->user()->bahay as $bahay)
                    <option value="{{$bahay->id}}">{{$bahay->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="lote" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lote</label>
            <select type="text" wire:model.lazy="lote" id="lote" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                <option value=""></option>
                <option value="0">None</option>
                @foreach(auth()->user()->lote as $lote)
                    <option value="{{$lote->id}}">{{$lote->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="uri" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kayarian ng bahay</label>
            <select type="text" wire:model.lazy="uri" id="uri" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                <option value=""></option>
                <option value="0">None</option>
                @foreach(auth()->user()->uriNgBahay as $uri)
                    <option value="{{$uri->id}}">{{$uri->name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="paninirahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tagal ng paninirahan</label>
            <select type="text" wire:model.lazy="paninirahan" id="paninirahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                <option value=""></option>
                <option value="0">None</option>
                @foreach(auth()->user()->paninirahan as $paninirahan)
                    <option value="{{$paninirahan->id}}">{{$paninirahan->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    </div>
</div>
