<div>
        <table>
            <tbody>
                <tr>
                    <th>
                        ANNUAL SURVEY CONSOLIDATION   YEAR:
                    </th>
                    <th class="text-right">
                        {{$resultYear}}
                    </th>
                </tr>
                <tr>
                    <th>
                        BARANGAY:
                    </th>
                    <th>
                        {{$resultBrgy}}
                    </th>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <th scope="row">
                        PUROKS:
                    </th>
                    @foreach ($puroks as $purok)
                        <th colspan="2">{{$purok->name}}</th>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        No. of Houses:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('numberOfHouses',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        No. of House Only:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('numberOfHouseOnly',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        No. of Household:
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('numberOfHousehold',$purok->id)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Source of Livelihood (No. of Head of Family na ang Trabaho ay)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($livelihoodList as $ll)
                <tr>
                    <th scope="row">
                    {{$ll->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfLivelihood($ll->id,$purok->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Religion
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($religionList as $rl)
                <tr>
                    <th scope="row">
                    {{$rl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('religion',$purok->id, $rl->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Uri ng Bahay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($uriNgBahayList as $unbl)
                <tr>
                    <th scope="row">
                    {{$unbl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('uriNgBahay',$purok->id, $unbl->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Bahay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($bahayList as $bl)
                <tr>
                    <th scope="row">
                    {{$bl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('bahay',$purok->id, $bl->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Lote
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($loteList as $lotl)
                <tr>
                    <th scope="row">
                    {{$lotl->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('lote',$purok->id, $lotl->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Household Income (Buwanang Kita ng Pamilya)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    10,000 and above
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 10000, 'above')}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    9,000 - 9,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 9000, 9900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    8,000 - 8,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 8000, 8900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    7,000 - 7,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 7000, 7900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    6,000 - 6,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 6000, 6900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    5,000 - 5,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 5000, 5900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    4,000 - 4,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 4000, 4900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    3,000 - 3,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 3000, 3900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    2,000 - 2,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 2000, 2900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    1,000 - 1,900
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 1000, 1900)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    1,000 and below
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->income($purok->id, 999, 'below')}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        OTHERS
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        Family Planning
                    </th>
                    @foreach ($puroks as $purok)
                        <td>Center</td>
                        <td>Buying</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    PILLS
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 1)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    DMPA
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 2)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    LAM
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 3)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    IUD
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 4)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    TUBAL LIGATION (TL)
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 5)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 5)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    VASECTOMY
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 6)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 6)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    CONDOM
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 7)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 7)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    BASAL BODY TEMPERATURE
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 8)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 8)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    STANDARD DAYS METHOD
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 9)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 9)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    CERVICAL MUCUS M
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 10)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 10)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    IMPLANT
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 11)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 11)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    WALA
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->familyPlanning(1, $purok->id, 0)}}</td>
                    <td>{{$healthSureveyResult->familyPlanning(2, $purok->id, 0)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Bilang ng populasyon ayon sa Edad at Kasarian
                    </th>
                    @foreach ($puroks as $purok)
                        <td>Male</td>
                        <td>Female</td>
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
                <tr>
                    <th scope="row">
                    {{$age}} years old
                    </th>
                    @foreach ($puroks as $purok)
                    <td>{{$healthSureveyResult->edadKasarian($purok->id, 'Male', $x)}}</td>
                    <td>{{$healthSureveyResult->edadKasarian($purok->id, 'Female', $x)}}</td>
                    @endforeach
                </tr>
                @endfor
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        PANGKALAHATANG KALINISAN NG PAMILYA
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        Uri ng Palikuran
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Water Sealed Toilet (Flush, De Buhos)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->uriNgPalikuran($purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Pit Privy
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->uriNgPalikuran($purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Nakikisama
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->uriNgPalikuran($purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Public Toilet
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->uriNgPalikuran($purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Open Defacation
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->uriNgPalikuran($purok->id, 5)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Basurahan
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Nagbubukod
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagbubukod',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Hindi nagbubukod
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagbubukod',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Paraan ng pagkolekta ng basura
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Kinokolekta ng dump ng munisipyo
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pangongolekta',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Kinokolekta ng dump ng barangay
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pangongolekta',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Kinokolekta ng segregation cart ng brgy
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pangongolekta',$purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Sariling tapon sa open dumping site
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pangongolekta',$purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        Paraan ng pagtatapon ng basura
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Pagtatambak
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagtatapon',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Pagbabaon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagtatapon',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Pagbubulok
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagtatapon',$purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Pagsusunog
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('pagtatapon',$purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        WATER SANITATION
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        Kinukunan ng Tubig na inumin
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Level I
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('watersource',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Level II
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('watersource',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Level III (Water District)
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('watersource',$purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Water Refilling Station
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('watersource',$purok->id, 4)}}</td>
                    @endforeach
                </tr>
                @foreach ($waterRefillingList as $wr)
                    <tr>
                        <th scope="row">
                        {{$wr->name}}
                        </th>
                        @foreach ($puroks as $purok)
                            <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('waterrefilling',$purok->id, $wr->id)}}</td>
                        @endforeach
                    </tr>
                @endforeach
                <tr>
                    <th scope="row">
                    Doubtful Source
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('watersource',$purok->id, 5)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Open well  / Balon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('doubtfulsource',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Bukal / Salulo
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('doubtfulsource',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Ilog
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('doubtfulsource',$purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Rain Collector
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('doubtfulsource',$purok->id, 4)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        WASTE WATER MANAGEMENT
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                        Saan pumupunta ang maruming tubig galing banyo at kusina?
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Blind Drainage
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('wastewater',$purok->id, 1)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Backyard o Itinatapon
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('wastewater',$purok->id, 2)}}</td>
                    @endforeach
                </tr>
                <tr>
                    <th scope="row">
                    Open Canal
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('wastewater',$purok->id, 3)}}</td>
                    @endforeach
                </tr>
                <tr><th></th></tr>
                <tr>
                    <th scope="row">
                        FOOD ESTABLISHMENT
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2"></td>
                    @endforeach
                </tr>
                @foreach ($establishmentList as $est)
                <tr>
                    <th scope="row">
                    {{$est->name}}
                    </th>
                    @foreach ($puroks as $purok)
                        <td colspan="2">{{$healthSureveyResult->getNumberOfHouse('establishment',$purok->id, $est->id)}}</td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
</div>