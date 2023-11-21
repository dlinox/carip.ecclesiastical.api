<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $countries = [
            [
                "name" => "Afganistán",
                "dial_code" => "+93",
                "continent" => "África",
                "code" => "AF"
            ],
            [
                "name" => "Åland",
                "dial_code" => "+358",
                "continent" => "Europa",
                "code" => "AX"
            ],
            [
                "name" => "Albania",
                "dial_code" => "+355",
                "continent" => "Europa",
                "code" => "AL"
            ],
            [
                "name" => "Argelia",
                "dial_code" => "+213",
                "continent" => "África",
                "code" => "DZ"
            ],
            [
                "name" => "Samoa Americana",
                "dial_code" => "+1684",
                "continent" => "Oceanía",
                "code" => "AS"
            ],
            [
                "name" => "Andorra",
                "dial_code" => "+376",
                "continent" => "Europa",
                "code" => "AD"
            ],
            [
                "name" => "Angola",
                "dial_code" => "+244",
                "continent" => "África",
                "code" => "AO"
            ],
            [
                "name" => "Anguilla",
                "dial_code" => "+1264",
                "continent" => "América del Norte",
                "code" => "AI"
            ],
            [
                "name" => "Antártida",
                "dial_code" => "+672",
                "continent" => "Antártida",
                "code" => "AQ"
            ],
            [
                "name" => "Antigua y Barbuda",
                "dial_code" => "+1268",
                "continent" => "América del Norte",
                "code" => "AG"
            ],
            [
                "name" => "Argentina",
                "dial_code" => "+54",
                "continent" => "América del Sur",
                "code" => "AR"
            ],
            [
                "name" => "Armenia",
                "dial_code" => "+374",
                "continent" => "Asia",
                "code" => "AM"
            ],
            [
                "name" => "Aruba",
                "dial_code" => "+297",
                "continent" => "América del Norte",
                "code" => "AW"
            ],
            [
                "name" => "Ascensión Island",
                "dial_code" => "+247",
                "continent" => "África",
                "code" => "AC"
            ],
            [
                "name" => "Australia",
                "dial_code" => "+61",
                "continent" => "Oceanía",
                "code" => "AU"
            ],
            [
                "name" => "Austria",
                "dial_code" => "+43",
                "continent" => "Europa",
                "code" => "AT"
            ],
            [
                "name" => "Azerbaiyán",
                "dial_code" => "+994",
                "continent" => "Asia",
                "code" => "AZ"
            ],
            [
                "name" => "Bahamas",
                "dial_code" => "+1242",
                "continent" => "América del Norte",
                "code" => "BS"
            ],
            [
                "name" => "Baréin",
                "dial_code" => "+973",
                "continent" => "Asia",
                "code" => "BH"
            ],
            [
                "name" => "Bangladés",
                "dial_code" => "+880",
                "continent" => "Asia",
                "code" => "BD"
            ],
            [
                "name" => "Barbados",
                "dial_code" => "+1246",
                "continent" => "América del Norte",
                "code" => "BB"
            ],
            [
                "name" => "Bielorrusia",
                "dial_code" => "+375",
                "continent" => "Europa",
                "code" => "BY"
            ],
            [
                "name" => "Bélgica",
                "dial_code" => "+32",
                "continent" => "Europa",
                "code" => "BE"
            ],
            [
                "name" => "Belice",
                "dial_code" => "+501",
                "continent" => "América del Norte",
                "code" => "BZ"
            ],
            [
                "name" => "Benin",
                "dial_code" => "+229",
                "continent" => "África",
                "code" => "BJ"
            ],
            [
                "name" => "Bermudas",
                "dial_code" => "+1441",
                "continent" => "América del Norte",
                "code" => "BM"
            ],
            [
                "name" => "Bután",
                "dial_code" => "+975",
                "continent" => "Asia",
                "code" => "BT"
            ],
            [
                "name" => "Bolivia",
                "dial_code" => "+591",
                "continent" => "América del Sur",
                "code" => "BO"
            ],
            [
                "name" => "Bonaire, San Eustaquio y Saba",
                "dial_code" => "+599",
                "continent" => "América del Norte",
                "code" => "BQ"
            ],
            [
                "name" => "Bosnia y Herzegovina",
                "dial_code" => "+387",
                "continent" => "Europa",
                "code" => "BA"
            ],
            [
                "name" => "Botsuana",
                "dial_code" => "+267",
                "continent" => "África",
                "code" => "BW"
            ],
            [
                "name" => "Brasil",
                "dial_code" => "+55",
                "continent" => "América del Sur",
                "code" => "BR"
            ],
            [
                "name" => "Territorio Británico del Océano Índico",
                "dial_code" => "+246",
                "continent" => "Asia",
                "code" => "IO"
            ],
            [
                "name" => "Brunéi",
                "dial_code" => "+673",
                "continent" => "Asia",
                "code" => "BN"
            ],
            [
                "name" => "Bulgaria",
                "dial_code" => "+359",
                "continent" => "Europa",
                "code" => "BG"
            ],
            [
                "name" => "Burkina Faso",
                "dial_code" => "+226",
                "continent" => "África",
                "code" => "BF"
            ],
            [
                "name" => "Burundi",
                "dial_code" => "+257",
                "continent" => "África",
                "code" => "BI"
            ],
            [
                "name" => "Camboya",
                "dial_code" => "+855",
                "continent" => "Asia",
                "code" => "KH"
            ],
            [
                "name" => "Camerún",
                "dial_code" => "+237",
                "continent" => "África",
                "code" => "CM"
            ],
            [
                "name" => "Canadá",
                "dial_code" => "+1",
                "continent" => "América del Norte",
                "code" => "CA"
            ],
            [
                "name" => "Cabo Verde",
                "dial_code" => "+238",
                "continent" => "África",
                "code" => "CV"
            ],
            [
                "name" => "Islas Caimán",
                "dial_code" => "+1345",
                "continent" => "América del Norte",
                "code" => "KY"
            ],
            [
                "name" => "República Centroafricana",
                "dial_code" => "+236",
                "continent" => "África",
                "code" => "CF"
            ],
            [
                "name" => "Chad",
                "dial_code" => "+235",
                "continent" => "África",
                "code" => "TD"
            ],
            [
                "name" => "Chile",
                "dial_code" => "+56",
                "continent" => "América del Sur",
                "code" => "CL"
            ],
            [
                "name" => "China",
                "dial_code" => "+86",
                "continent" => "Asia",
                "code" => "CN"
            ],
            [
                "name" => "Isla de Navidad",
                "dial_code" => "+61",
                "continent" => "Asia",
                "code" => "CX"
            ],
            [
                "name" => "Islas Cocos",
                "dial_code" => "+61",
                "continent" => "Asia",
                "code" => "CC"
            ],
            [
                "name" => "Colombia",
                "dial_code" => "+57",
                "continent" => "América del Sur",
                "code" => "CO"
            ],
            [
                "name" => "Comoras",
                "dial_code" => "+269",
                "continent" => "África",
                "code" => "KM"
            ],
            [
                "name" => "Congo",
                "dial_code" => "+242",
                "continent" => "África",
                "code" => "CG"
            ],
            [
                "name" => "Islas Cook",
                "dial_code" => "+682",
                "continent" => "Oceanía",
                "code" => "CK"
            ],
            [
                "name" => "Costa Rica",
                "dial_code" => "+506",
                "continent" => "América del Norte",
                "code" => "CR"
            ],
            [
                "name" => "Croacia",
                "dial_code" => "+385",
                "continent" => "Europa",
                "code" => "HR"
            ],
            [
                "name" => "Cuba",
                "dial_code" => "+53",
                "continent" => "América del Norte",
                "code" => "CU"
            ],
            [
                "name" => "Curazao",
                "dial_code" => "+599",
                "continent" => "América del Norte",
                "code" => "CW"
            ],
            [
                "name" => "Chipre",
                "dial_code" => "+357",
                "continent" => "Europa",
                "code" => "CY"
            ],
            [
                "name" => "Chequia",
                "dial_code" => "+420",
                "continent" => "Europa",
                "code" => "CZ"
            ],
            [
                "name" => "Costa de Marfil",
                "dial_code" => "+225",
                "continent" => "África",
                "code" => "CI"
            ],
            [
                "name" => "Dinamarca",
                "dial_code" => "+45",
                "continent" => "Europa",
                "code" => "DK"
            ],
            [
                "name" => "Yibuti",
                "dial_code" => "+253",
                "continent" => "África",
                "code" => "DJ"
            ],
            [
                "name" => "Dominica",
                "dial_code" => "+1767",
                "continent" => "América del Norte",
                "code" => "DM"
            ],
            [
                "name" => "República Dominicana",
                "dial_code" => "+1849",
                "continent" => "América del Norte",
                "code" => "DO"
            ],
            [
                "name" => "Ecuador",
                "dial_code" => "+593",
                "continent" => "América del Sur",
                "code" => "EC"
            ],
            [
                "name" => "Egipto",
                "dial_code" => "+20",
                "continent" => "África",
                "code" => "EG"
            ],
            [
                "name" => "El Salvador",
                "dial_code" => "+503",
                "continent" => "América del Norte",
                "code" => "SV"
            ],
            [
                "name" => "Guinea Ecuatorial",
                "dial_code" => "+240",
                "continent" => "África",
                "code" => "GQ"
            ],
            [
                "name" => "Eritrea",
                "dial_code" => "+291",
                "continent" => "África",
                "code" => "ER"
            ],
            [
                "name" => "Estonia",
                "dial_code" => "+372",
                "continent" => "Europa",
                "code" => "EE"
            ],
            [
                "name" => "Suazilandia",
                "dial_code" => "+268",
                "continent" => "África",
                "code" => "SZ"
            ],
            [
                "name" => "Etiopía",
                "dial_code" => "+251",
                "continent" => "África",
                "code" => "ET"
            ],
            [
                "name" => "Islas Malvinas",
                "dial_code" => "+500",
                "continent" => "América del Sur",
                "code" => "FK"
            ],
            [
                "name" => "Islas Feroe",
                "dial_code" => "+298",
                "continent" => "Europa",
                "code" => "FO"
            ],
            [
                "name" => "Fiyi",
                "dial_code" => "+679",
                "continent" => "Oceanía",
                "code" => "FJ"
            ],
            [
                "name" => "Finlandia",
                "dial_code" => "+358",
                "continent" => "Europa",
                "code" => "FI"
            ],
            [
                "name" => "Francia",
                "dial_code" => "+33",
                "continent" => "Europa",
                "code" => "FR"
            ],
            [
                "name" => "Guayana Francesa",
                "dial_code" => "+594",
                "continent" => "América del Sur",
                "code" => "GF"
            ],
            [
                "name" => "Polinesia Francesa",
                "dial_code" => "+689",
                "continent" => "Oceanía",
                "code" => "PF"
            ],
            [
                "name" => "Territorios Australes Franceses",
                "dial_code" => "+262",
                "continent" => "Antártida",
                "code" => "TF"
            ],
            [
                "name" => "Gabón",
                "dial_code" => "+241",
                "continent" => "África",
                "code" => "GA"
            ],
            [
                "name" => "Gambia",
                "dial_code" => "+220",
                "continent" => "África",
                "code" => "GM"
            ],
            [
                "name" => "Georgia",
                "dial_code" => "+995",
                "continent" => "Asia",
                "code" => "GE"
            ],
            [
                "name" => "Alemania",
                "dial_code" => "+49",
                "continent" => "Europa",
                "code" => "DE"
            ],
            [
                "name" => "Ghana",
                "dial_code" => "+233",
                "continent" => "África",
                "code" => "GH"
            ],
            [
                "name" => "Gibraltar",
                "dial_code" => "+350",
                "continent" => "Europa",
                "code" => "GI"
            ],
            [
                "name" => "Grecia",
                "dial_code" => "+30",
                "continent" => "Europa",
                "code" => "GR"
            ],
            [
                "name" => "Groenlandia",
                "dial_code" => "+299",
                "continent" => "América del Norte",
                "code" => "GL"
            ],
            [
                "name" => "Granada",
                "dial_code" => "+1473",
                "continent" => "América del Norte",
                "code" => "GD"
            ],
            [
                "name" => "Guadalupe",
                "dial_code" => "+590",
                "continent" => "América del Norte",
                "code" => "GP"
            ],
            [
                "name" => "Guam",
                "dial_code" => "+1671",
                "continent" => "Oceanía",
                "code" => "GU"
            ],
            [
                "name" => "Guatemala",
                "dial_code" => "+502",
                "continent" => "América del Norte",
                "code" => "GT"
            ],
            [
                "name" => "Guernsey",
                "dial_code" => "+44",
                "continent" => "Europa",
                "code" => "GG"
            ],
            [
                "name" => "Guinea",
                "dial_code" => "+224",
                "continent" => "África",
                "code" => "GN"
            ],
            [
                "name" => "Guinea-Bissau",
                "dial_code" => "+245",
                "continent" => "África",
                "code" => "GW"
            ],
            [
                "name" => "Guyana",
                "dial_code" => "+592",
                "continent" => "América del Sur",
                "code" => "GY"
            ],
            [
                "name" => "Haití",
                "dial_code" => "+509",
                "continent" => "América del Norte",
                "code" => "HT"
            ],
            [
                "name" => "Islas Heard y McDonald",
                "dial_code" => "+672",
                "continent" => "Antártida",
                "code" => "HM"
            ],
            [
                "name" => "Honduras",
                "dial_code" => "+504",
                "continent" => "América del Norte",
                "code" => "HN"
            ],
            [
                "name" => "Hong Kong",
                "dial_code" => "+852",
                "continent" => "Asia",
                "code" => "HK"
            ],
            [
                "name" => "Hungría",
                "dial_code" => "+36",
                "continent" => "Europa",
                "code" => "HU"
            ],
            [
                "name" => "Islandia",
                "dial_code" => "+354",
                "continent" => "Europa",
                "code" => "IS"
            ],
            [
                "name" => "India",
                "dial_code" => "+91",
                "continent" => "Asia",
                "code" => "IN"
            ],
            [
                "name" => "Indonesia",
                "dial_code" => "+62",
                "continent" => "Asia",
                "code" => "ID"
            ],
            [
                "name" => "Irán",
                "dial_code" => "+98",
                "continent" => "Asia",
                "code" => "IR"
            ],
            [
                "name" => "Irak",
                "dial_code" => "+964",
                "continent" => "Asia",
                "code" => "IQ"
            ],
            [
                "name" => "Irlanda",
                "dial_code" => "+353",
                "continent" => "Europa",
                "code" => "IE"
            ],
            [
                "name" => "Isla de Man",
                "dial_code" => "+44",
                "continent" => "Europa",
                "code" => "IM"
            ],
            [
                "name" => "Israel",
                "dial_code" => "+972",
                "continent" => "Asia",
                "code" => "IL"
            ],
            [
                "name" => "Italia",
                "dial_code" => "+39",
                "continent" => "Europa",
                "code" => "IT"
            ],
            [
                "name" => "Jamaica",
                "dial_code" => "+1 876",
                "continent" => "América del Norte",
                "code" => "JM"
            ],
            [
                "name" => "Japón",
                "dial_code" => "+81",
                "continent" => "Asia",
                "code" => "JP"
            ],
            [
                "name" => "Jersey",
                "dial_code" => "+44",
                "continent" => "Europa",
                "code" => "JE"
            ],
            [
                "name" => "Jordania",
                "dial_code" => "+962",
                "continent" => "Asia",
                "code" => "JO"
            ],
            [
                "name" => "Kazajistán",
                "dial_code" => "+7 7",
                "continent" => "Asia",
                "code" => "KZ"
            ],
            [
                "name" => "Kenia",
                "dial_code" => "+254",
                "continent" => "África",
                "code" => "KE"
            ],
            [
                "name" => "Kiribati",
                "dial_code" => "+686",
                "continent" => "Oceanía",
                "code" => "KI"
            ],
            [
                "name" => "Kosovo",
                "dial_code" => "+383",
                "continent" => "Europa",
                "code" => "XK"
            ],
            [
                "name" => "Kuwait",
                "dial_code" => "+965",
                "continent" => "Asia",
                "code" => "KW"
            ],
            [
                "name" => "Kirguistán",
                "dial_code" => "+996",
                "continent" => "Asia",
                "code" => "KG"
            ],
            [
                "name" => "Laos",
                "dial_code" => "+856",
                "continent" => "Asia",
                "code" => "LA"
            ],
            [
                "name" => "Letonia",
                "dial_code" => "+371",
                "continent" => "Europa",
                "code" => "LV"
            ],
            [
                "name" => "Líbano",
                "dial_code" => "+961",
                "continent" => "Asia",
                "code" => "LB"
            ],
            [
                "name" => "Lesoto",
                "dial_code" => "+266",
                "continent" => "África",
                "code" => "LS"
            ],
            [
                "name" => "Liberia",
                "dial_code" => "+231",
                "continent" => "África",
                "code" => "LR"
            ],
            [
                "name" => "Libia",
                "dial_code" => "+218",
                "continent" => "África",
                "code" => "LY"
            ],
            [
                "name" => "Liechtenstein",
                "dial_code" => "+423",
                "continent" => "Europa",
                "code" => "LI"
            ],
            [
                "name" => "Lituania",
                "dial_code" => "+370",
                "continent" => "Europa",
                "code" => "LT"
            ],
            [
                "name" => "Luxemburgo",
                "dial_code" => "+352",
                "continent" => "Europa",
                "code" => "LU"
            ],
            [
                "name" => "Macao",
                "dial_code" => "+853",
                "continent" => "Asia",
                "code" => "MO"
            ],
            [
                "name" => "Madagascar",
                "dial_code" => "+261",
                "continent" => "África",
                "code" => "MG"
            ],
            [
                "name" => "Malawi",
                "dial_code" => "+265",
                "continent" => "África",
                "code" => "MW"
            ],
            [
                "name" => "Malasia",
                "dial_code" => "+60",
                "continent" => "Asia",
                "code" => "MY"
            ],
            [
                "name" => "Maldivas",
                "dial_code" => "+960",
                "continent" => "Asia",
                "code" => "MV"
            ],
            [
                "name" => "Mali",
                "dial_code" => "+223",
                "continent" => "África",
                "code" => "ML"
            ],
            [
                "name" => "Malta",
                "dial_code" => "+356",
                "continent" => "Europa",
                "code" => "MT"
            ],
            [
                "name" => "Islas Marshall",
                "dial_code" => "+692",
                "continent" => "Oceanía",
                "code" => "MH"
            ],
            [
                "name" => "Martinica",
                "dial_code" => "+596",
                "continent" => "América del Norte",
                "code" => "MQ"
            ],
            [
                "name" => "Mauritania",
                "dial_code" => "+222",
                "continent" => "África",
                "code" => "MR"
            ],
            [
                "name" => "Mauricio",
                "dial_code" => "+230",
                "continent" => "África",
                "code" => "MU"
            ],
            [
                "name" => "Mayotte",
                "dial_code" => "+262",
                "continent" => "África",
                "code" => "YT"
            ],
            [
                "name" => "México",
                "dial_code" => "+52",
                "continent" => "América del Norte",
                "code" => "MX"
            ],
            [
                "name" => "Micronesia",
                "dial_code" => "+691",
                "continent" => "Oceanía",
                "code" => "FM"
            ],
            [
                "name" => "Moldavia",
                "dial_code" => "+373",
                "continent" => "Europa",
                "code" => "MD"
            ],
            [
                "name" => "Mónaco",
                "dial_code" => "+377",
                "continent" => "Europa",
                "code" => "MC"
            ],
            [
                "name" => "Mongolia",
                "dial_code" => "+976",
                "continent" => "Asia",
                "code" => "MN"
            ],
            [
                "name" => "Montenegro",
                "dial_code" => "+382",
                "continent" => "Europa",
                "code" => "ME"
            ],
            [
                "name" => "Montserrat",
                "dial_code" => "+1664",
                "continent" => "América del Norte",
                "code" => "MS"
            ],
            [
                "name" => "Marruecos",
                "dial_code" => "+212",
                "continent" => "África",
                "code" => "MA"
            ],
            [
                "name" => "Mozambique",
                "dial_code" => "+258",
                "continent" => "África",
                "code" => "MZ"
            ],
            [
                "name" => "Myanmar",
                "dial_code" => "+95",
                "continent" => "Asia",
                "code" => "MM"
            ],
            [
                "name" => "Namibia",
                "dial_code" => "+264",
                "continent" => "África",
                "code" => "NA"
            ],
            [
                "name" => "Nauru",
                "dial_code" => "+674",
                "continent" => "Oceanía",
                "code" => "NR"
            ],
            [
                "name" => "Nepal",
                "dial_code" => "+977",
                "continent" => "Asia",
                "code" => "NP"
            ],
            [
                "name" => "Países Bajos",
                "dial_code" => "+31",
                "continent" => "Europa",
                "code" => "NL"
            ],
            [
                "name" => "Nueva Caledonia",
                "dial_code" => "+687",
                "continent" => "Oceanía",
                "code" => "NC"
            ],
            [
                "name" => "Nueva Zelanda",
                "dial_code" => "+64",
                "continent" => "Oceanía",
                "code" => "NZ"
            ],
            [
                "name" => "Nicaragua",
                "dial_code" => "+505",
                "continent" => "América del Norte",
                "code" => "NI"
            ],
            [
                "name" => "Níger",
                "dial_code" => "+227",
                "continent" => "África",
                "code" => "NE"
            ],
            [
                "name" => "Nigeria",
                "dial_code" => "+234",
                "continent" => "África",
                "code" => "NG"
            ],
            [
                "name" => "Niue",
                "dial_code" => "+683",
                "continent" => "Oceanía",
                "code" => "NU"
            ],
            [
                "name" => "Isla Norfolk",
                "dial_code" => "+672",
                "continent" => "Oceanía",
                "code" => "NF"
            ],
            [
                "name" => "Corea del Norte",
                "dial_code" => "+850",
                "continent" => "Asia",
                "code" => "KP"
            ],
            [
                "name" => "Macedonia del Norte",
                "dial_code" => "+389",
                "continent" => "Europa",
                "code" => "MK"
            ],
            [
                "name" => "Islas Marianas del Norte",
                "dial_code" => "+1670",
                "continent" => "Oceanía",
                "code" => "MP"
            ],
            [
                "name" => "Noruega",
                "dial_code" => "+47",
                "continent" => "Europa",
                "code" => "NO"
            ],
            [
                "name" => "Omán",
                "dial_code" => "+968",
                "continent" => "Asia",
                "code" => "OM"
            ],
            [
                "name" => "Pakistán",
                "dial_code" => "+92",
                "continent" => "Asia",
                "code" => "PK"
            ],
            [
                "name" => "Palaos",
                "dial_code" => "+680",
                "continent" => "Oceanía",
                "code" => "PW"
            ],
            [
                "name" => "Palestina",
                "dial_code" => "+970",
                "continent" => "Asia",
                "code" => "PS"
            ],
            [
                "name" => "Panamá",
                "dial_code" => "+507",
                "continent" => "América del Norte",
                "code" => "PA"
            ],
            [
                "name" => "Papúa Nueva Guinea",
                "dial_code" => "+675",
                "continent" => "Oceanía",
                "code" => "PG"
            ],
            [
                "name" => "Paraguay",
                "dial_code" => "+595",
                "continent" => "América del Sur",
                "code" => "PY"
            ],
            [
                "name" => "Perú",
                "dial_code" => "+51",
                "continent" => "América del Sur",
                "code" => "PE"
            ],
            [
                "name" => "Filipinas",
                "dial_code" => "+63",
                "continent" => "Asia",
                "code" => "PH"
            ],
            [
                "name" => "Islas Pitcairn",
                "dial_code" => "+64",
                "continent" => "Oceanía",
                "code" => "PN"
            ],
            [
                "name" => "Polonia",
                "dial_code" => "+48",
                "continent" => "Europa",
                "code" => "PL"
            ],
            [
                "name" => "Portugal",
                "dial_code" => "+351",
                "continent" => "Europa",
                "code" => "PT"
            ],
            [
                "name" => "Puerto Rico",
                "dial_code" => "+1939",
                "continent" => "América del Norte",
                "code" => "PR"
            ],
            [
                "name" => "Catar",
                "dial_code" => "+974",
                "continent" => "Asia",
                "code" => "QA"
            ],
            [
                "name" => "Rumania",
                "dial_code" => "+40",
                "continent" => "Europa",
                "code" => "RO"
            ],
            [
                "name" => "Rusia",
                "dial_code" => "+7",
                "continent" => "Europa",
                "code" => "RU"
            ],
            [
                "name" => "Ruanda",
                "dial_code" => "+250",
                "continent" => "África",
                "code" => "RW"
            ],
            [
                "name" => "Reunión",
                "dial_code" => "+262",
                "continent" => "África",
                "code" => "RE"
            ],
            [
                "name" => "San Bartolomé",
                "dial_code" => "+590",
                "continent" => "América del Norte",
                "code" => "BL"
            ],
            [
                "name" => "Santa Elena",
                "dial_code" => "+290",
                "continent" => "África",
                "code" => "SH"
            ],
            [
                "name" => "San Cristóbal y Nieves",
                "dial_code" => "+1869",
                "continent" => "América del Norte",
                "code" => "KN"
            ],
            [
                "name" => "Santa Lucía",
                "dial_code" => "+1758",
                "continent" => "América del Norte",
                "code" => "LC"
            ],
            [
                "name" => "San Martín",
                "dial_code" => "+590",
                "continent" => "América del Norte",
                "code" => "MF"
            ],
            [
                "name" => "San Pedro y Miquelón",
                "dial_code" => "+508",
                "continent" => "América del Norte",
                "code" => "PM"
            ],
            [
                "name" => "San Vicente y las Granadinas",
                "dial_code" => "+1784",
                "continent" => "América del Norte",
                "code" => "VC"
            ],
            [
                "name" => "Samoa",
                "dial_code" => "+685",
                "continent" => "Oceanía",
                "code" => "WS"
            ],
            [
                "name" => "San Marino",
                "dial_code" => "+378",
                "continent" => "Europa",
                "code" => "SM"
            ],
            [
                "name" => "Santo Tomé y Príncipe",
                "dial_code" => "+239",
                "continent" => "África",
                "code" => "ST"
            ],
            [
                "name" => "Arabia Saudita",
                "dial_code" => "+966",
                "continent" => "Asia",
                "code" => "SA"
            ],
            [
                "name" => "Senegal",
                "dial_code" => "+221",
                "continent" => "África",
                "code" => "SN"
            ],
            [
                "name" => "Serbia",
                "dial_code" => "+381",
                "continent" => "Europa",
                "code" => "RS"
            ],
            [
                "name" => "Seychelles",
                "dial_code" => "+248",
                "continent" => "África",
                "code" => "SC"
            ],
            [
                "name" => "Sierra Leona",
                "dial_code" => "+232",
                "continent" => "África",
                "code" => "SL"
            ],
            [
                "name" => "Singapur",
                "dial_code" => "+65",
                "continent" => "Asia",
                "code" => "SG"
            ],
            [
                "name" => "Sint Maarten",
                "dial_code" => "+1721",
                "continent" => "América del Norte",
                "code" => "SX"
            ],
            [
                "name" => "Eslovaquia",
                "dial_code" => "+421",
                "continent" => "Europa",
                "code" => "SK"
            ],
            [
                "name" => "Eslovenia",
                "dial_code" => "+386",
                "continent" => "Europa",
                "code" => "SI"
            ],
            [
                "name" => "Islas Salomón",
                "dial_code" => "+677",
                "continent" => "Oceanía",
                "code" => "SB"
            ],
            [
                "name" => "Somalia",
                "dial_code" => "+252",
                "continent" => "África",
                "code" => "SO"
            ],
            [
                "name" => "Sudáfrica",
                "dial_code" => "+27",
                "continent" => "África",
                "code" => "ZA"
            ],
            [
                "name" => "Islas Georgias del Sur y Sandwich del Sur",
                "dial_code" => "+500",
                "continent" => "Antártida",
                "code" => "GS"
            ],
            [
                "name" => "Corea del Sur",
                "dial_code" => "+82",
                "continent" => "Asia",
                "code" => "KR"
            ],
            [
                "name" => "Sudán del Sur",
                "dial_code" => "+211",
                "continent" => "África",
                "code" => "SS"
            ],
            [
                "name" => "España",
                "dial_code" => "+34",
                "continent" => "Europa",
                "code" => "ES"
            ],
            [
                "name" => "Sri Lanka",
                "dial_code" => "+94",
                "continent" => "Asia",
                "code" => "LK"
            ],
            [
                "name" => "Sudán",
                "dial_code" => "+249",
                "continent" => "África",
                "code" => "SD"
            ],
            [
                "name" => "Surinam",
                "dial_code" => "+597",
                "continent" => "América del Sur",
                "code" => "SR"
            ],
            [
                "name" => "Svalbard y Jan Mayen",
                "dial_code" => "+47",
                "continent" => "Europa",
                "code" => "SJ"
            ],
            [
                "name" => "Suecia",
                "dial_code" => "+46",
                "continent" => "Europa",
                "code" => "SE"
            ],
            [
                "name" => "Suiza",
                "dial_code" => "+41",
                "continent" => "Europa",
                "code" => "CH"
            ],
            [
                "name" => "Siria",
                "dial_code" => "+963",
                "continent" => "Asia",
                "code" => "SY"
            ],
            [
                "name" => "Taiwán",
                "dial_code" => "+886",
                "continent" => "Asia",
                "code" => "TW"
            ],
            [
                "name" => "Tayikistán",
                "dial_code" => "+992",
                "continent" => "Asia",
                "code" => "TJ"
            ],
            [
                "name" => "Tanzania",
                "dial_code" => "+255",
                "continent" => "África",
                "code" => "TZ"
            ],
            [
                "name" => "Tailandia",
                "dial_code" => "+66",
                "continent" => "Asia",
                "code" => "TH"
            ],
            [
                "name" => "Timor-Leste",
                "dial_code" => "+670",
                "continent" => "Asia",
                "code" => "TL"
            ],
            [
                "name" => "Togo",
                "dial_code" => "+228",
                "continent" => "África",
                "code" => "TG"
            ],
            [
                "name" => "Tokelau",
                "dial_code" => "+690",
                "continent" => "Oceanía",
                "code" => "TK"
            ],
            [
                "name" => "Tonga",
                "dial_code" => "+676",
                "continent" => "Oceanía",
                "code" => "TO"
            ],
            [
                "name" => "Trinidad y Tobago",
                "dial_code" => "+1868",
                "continent" => "América del Norte",
                "code" => "TT"
            ],
            [
                "name" => "Tristán de Acuña",
                "dial_code" => "+290",
                "continent" => "África",
                "code" => "TA"
            ],
            [
                "name" => "Túnez",
                "dial_code" => "+216",
                "continent" => "África",
                "code" => "TN"
            ],
            [
                "name" => "Turkmenistán",
                "dial_code" => "+993",
                "continent" => "Asia",
                "code" => "TM"
            ],
            [
                "name" => "Islas Turcas y Caicos",
                "dial_code" => "+1649",
                "continent" => "América del Norte",
                "code" => "TC"
            ],
            [
                "name" => "Tuvalu",
                "dial_code" => "+688",
                "continent" => "Oceanía",
                "code" => "TV"
            ],
            [
                "name" => "Turquía",
                "dial_code" => "+90",
                "continent" => "Asia",
                "code" => "TR"
            ],
            [
                "name" => "Uganda",
                "dial_code" => "+256",
                "continent" => "África",
                "code" => "UG"
            ],
            [
                "name" => "Ucrania",
                "dial_code" => "+380",
                "continent" => "Europa",
                "code" => "UA"
            ],
            [
                "name" => "Emiratos Árabes Unidos",
                "dial_code" => "+971",
                "continent" => "Asia",
                "code" => "AE"
            ],
            [
                "name" => "Reino Unido",
                "dial_code" => "+44",
                "continent" => "Europa",
                "code" => "GB"
            ],
            [
                "name" => "Estados Unidos",
                "dial_code" => "+1",
                "continent" => "América del Norte",
                "code" => "US"
            ],
            [
                "name" => "Uruguay",
                "dial_code" => "+598",
                "continent" => "América del Sur",
                "code" => "UY"
            ],
            [
                "name" => "Uzbekistán",
                "dial_code" => "+998",
                "continent" => "Asia",
                "code" => "UZ"
            ],
            [
                "name" => "Vanuatu",
                "dial_code" => "+678",
                "continent" => "Oceanía",
                "code" => "VU"
            ],
            [
                "name" => "Ciudad del Vaticano",
                "dial_code" => "+379",
                "continent" => "Europa",
                "code" => "VA"
            ],
            [
                "name" => "Venezuela",
                "dial_code" => "+58",
                "continent" => "América del Sur",
                "code" => "VE"
            ],
            [
                "name" => "Vietnam",
                "dial_code" => "+84",
                "continent" => "Asia",
                "code" => "VN"
            ],
            [
                "name" => "Islas Vírgenes Británicas",
                "dial_code" => "+1284",
                "continent" => "América del Norte",
                "code" => "VG"
            ],
            [
                "name" => "Islas Vírgenes de los Estados Unidos",
                "dial_code" => "+1340",
                "continent" => "América del Norte",
                "code" => "VI"
            ],
            [
                "name" => "Wallis y Futuna",
                "dial_code" => "+681",
                "continent" => "Oceanía",
                "code" => "WF"
            ],
            [
                "name" => "Sahara Occidental",
                "dial_code" => "+212",
                "continent" => "África",
                "code" => "EH"
            ],
            [
                "name" => "Yemen",
                "dial_code" => "+967",
                "continent" => "Asia",
                "code" => "YE"
            ],
            [
                "name" => "Zambia",
                "dial_code" => "+260",
                "continent" => "África",
                "code" => "ZM"
            ],
            [
                "name" => "Zimbabue",
                "dial_code" => "+263",
                "continent" => "África",
                "code" => "ZW"
            ]
        ];


        foreach ($countries as $country) {

            Country::insert($country);
        }

        Person::create([
            'name' => "RICHARD",
            'paternal_name' => "CALLAPANI",
            'maternal_name' => "CONDORI",
            'document_type' => "DNI",
            'document_number' => "70000001",
        ]);



        User::create([
            'person_id' => 1,
            'fullname' => "RICARDO CALLAPANI CONDORI",
            'email' => "richard@gmail.com",
            'password' => "password",
            'role' => "Administrador",
        ]);

        Person::create([
            'name' => "JUAN CARLOS",
            'paternal_name' => "RIOS",
            'maternal_name' => "CASTILLO",
            'document_type' => "DNI",
            'document_number' => "70000002",
        ]);
        
        User::create([
            'person_id' => 2,
            'fullname' => "JUAN CARLOS RIOS CASTILLO",
            'email' => "juan@gmail.com",
            'password' => "password",
            'role' => "Secretaria",
        ]);
    }
}
