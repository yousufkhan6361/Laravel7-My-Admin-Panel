<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CountriesTableSeeder extends Seeder
{
	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array();
	    $countries[] = "Afghanistan,AF,AFN,Afghani";
	    $countries[] = "Albania,AL,ALL,Lek";
	    $countries[] = "Algeria,DZ,DZD,Dinar";
	    $countries[] = "American Samoa,AS,USD,Dollar";
	    $countries[] = "Andorra,AD,EUR,Euro";
	    $countries[] = "Angola,AO,AOA,Kwanza";
	    $countries[] = "Anguilla,AI,XCD,Dollar";
	    $countries[] = "Antigua and Barbuda,AG,XCD,Dollar";
	    $countries[] = "Argentina,AR,ARS,Peso";
	    $countries[] = "Armenia,AM,AMD,Dram";
	    $countries[] = "Aruba,AW,AWG,Guilder";
	    $countries[] = "Australia,AU,AUD,Dollar";
	    $countries[] = "Austria,AT,EUR,Euro";
	    $countries[] = "Azerbaijan,AZ,AZN,Manat";
	    $countries[] = "Bahamas,BS,BSD,Dollar";
	    $countries[] = "Bahrain,BH,BHD,Dinar";
	    $countries[] = "Bangladesh,BD,BDT,Taka";
	    $countries[] = "Barbados,BB,BBD,Dollar";
	    $countries[] = "Belarus,BY,BYR,Ruble";
	    $countries[] = "Belgium,BE,EUR,Euro";
	    $countries[] = "Belize,BZ,BZD,Dollar";
	    $countries[] = "Benin,BJ,XOF,Franc";
	    $countries[] = "Bermuda,BM,BMD,Dollar";
	    $countries[] = "Bhutan,BT,BTN,Ngultrum";
	    $countries[] = "Bolivia,BO,BOB,Boliviano";
	    $countries[] = "Bosnia and Herzegovina,BA,BAM,Marka";
	    $countries[] = "Botswana,BW,BWP,Pula";
	    $countries[] = "Bouvet Island,BV,NOK,Krone";
	    $countries[] = "Brazil,BR,BRL,Real";
	    $countries[] = "British Indian Ocean Territory,IO,USD,Dollar";
	    $countries[] = "British Virgin Islands,VG,USD,Dollar";
	    $countries[] = "Brunei,BN,BND,Dollar";
	    $countries[] = "Bulgaria,BG,BGN,Lev";
	    $countries[] = "Burkina Faso,BF,XOF,Franc";
	    $countries[] = "Burundi,BI,BIF,Franc";
	    $countries[] = "Cambodia,KH,KHR,Riels";
	    $countries[] = "Cameroon,CM,XAF,Franc";
	    $countries[] = "Canada,CA,CAD,Dollar";
	    $countries[] = "Cape Verde,CV,CVE,Escudo";
	    $countries[] = "Cayman Islands,KY,KYD,Dollar";
	    $countries[] = "Central African Republic,CF,XAF,Franc";
	    $countries[] = "Chad,TD,XAF,Franc";
	    $countries[] = "Chile,CL,CLP,Peso";
	    $countries[] = "China,CN,CNY,Yuan Renminbi";
	    $countries[] = "Christmas Island,CX,AUD,Dollar";
	    $countries[] = "Cocos Islands,CC,AUD,Dollar";
	    $countries[] = "Colombia,CO,COP,Peso";
	    $countries[] = "Comoros,KM,KMF,Franc";
	    $countries[] = "Cook Islands,CK,NZD,Dollar";
	    $countries[] = "Costa Rica,CR,CRC,Colon";
	    $countries[] = "Croatia,HR,HRK,Kuna";
	    $countries[] = "Cuba,CU,CUP,Peso";
	    $countries[] = "Cyprus,CY,CYP,Pound";
	    $countries[] = "Czech Republic,CZ,CZK,Koruna";
	    $countries[] = "Democratic Republic of the Congo,CD,CDF,Franc";
	    $countries[] = "Denmark,DK,DKK,Krone";
	    $countries[] = "Djibouti,DJ,DJF,Franc";
	    $countries[] = "Dominica,DM,XCD,Dollar";
	    $countries[] = "Dominican Republic,DO,DOP,Peso";
	    $countries[] = "East Timor,TL,USD,Dollar";
	    $countries[] = "Ecuador,EC,USD,Dollar";
	    $countries[] = "Egypt,EG,EGP,Pound";
	    $countries[] = "El Salvador,SV,SVC,Colone";
	    $countries[] = "Equatorial Guinea,GQ,XAF,Franc";
	    $countries[] = "Eritrea,ER,ERN,Nakfa";
	    $countries[] = "Estonia,EE,EEK,Kroon";
	    $countries[] = "Ethiopia,ET,ETB,Birr";
	    $countries[] = "Falkland Islands,FK,FKP,Pound";
	    $countries[] = "Faroe Islands,FO,DKK,Krone";
	    $countries[] = "Fiji,FJ,FJD,Dollar";
	    $countries[] = "Finland,FI,EUR,Euro";
	    $countries[] = "France,FR,EUR,Euro";
	    $countries[] = "French Guiana,GF,EUR,Euro";
	    $countries[] = "French Polynesia,PF,XPF,Franc";
	    $countries[] = "French Southern Territories,TF,EUR,Euro  ";
	    $countries[] = "Gabon,GA,XAF,Franc";
	    $countries[] = "Gambia,GM,GMD,Dalasi";
	    $countries[] = "Georgia,GE,GEL,Lari";
	    $countries[] = "Germany,DE,EUR,Euro";
	    $countries[] = "Ghana,GH,GHC,Cedi";
	    $countries[] = "Gibraltar,GI,GIP,Pound";
	    $countries[] = "Greece,GR,EUR,Euro";
	    $countries[] = "Greenland,GL,DKK,Krone";
	    $countries[] = "Grenada,GD,XCD,Dollar";
	    $countries[] = "Guadeloupe,GP,EUR,Euro";
	    $countries[] = "Guam,GU,USD,Dollar";
	    $countries[] = "Guatemala,GT,GTQ,Quetzal";
	    $countries[] = "Guinea,GN,GNF,Franc";
	    $countries[] = "Guinea-Bissau,GW,XOF,Franc";
	    $countries[] = "Guyana,GY,GYD,Dollar";
	    $countries[] = "Haiti,HT,HTG,Gourde";
	    $countries[] = "Heard Island and McDonald Islands,HM,AUD,Dollar";
	    $countries[] = "Honduras,HN,HNL,Lempira";
	    $countries[] = "Hong Kong,HK,HKD,Dollar";
	    $countries[] = "Hungary,HU,HUF,Forint";
	    $countries[] = "Iceland,IS,ISK,Krona";
	    $countries[] = "India,IN,INR,Rupee";
	    $countries[] = "Indonesia,ID,IDR,Rupiah";
	    $countries[] = "Iran,IR,IRR,Rial";
	    $countries[] = "Iraq,IQ,IQD,Dinar";
	    $countries[] = "Ireland,IE,EUR,Euro";
	    $countries[] = "Israel,IL,ILS,Shekel";
	    $countries[] = "Italy,IT,EUR,Euro";
	    $countries[] = "Ivory Coast,CI,XOF,Franc";
	    $countries[] = "Jamaica,JM,JMD,Dollar";
	    $countries[] = "Japan,JP,JPY,Yen";
	    $countries[] = "Jordan,JO,JOD,Dinar";
	    $countries[] = "Kazakhstan,KZ,KZT,Tenge";
	    $countries[] = "Kenya,KE,KES,Shilling";
	    $countries[] = "Kiribati,KI,AUD,Dollar";
	    $countries[] = "Kuwait,KW,KWD,Dinar";
	    $countries[] = "Kyrgyzstan,KG,KGS,Som";
	    $countries[] = "Laos,LA,LAK,Kip";
	    $countries[] = "Latvia,LV,LVL,Lat";
	    $countries[] = "Lebanon,LB,LBP,Pound";
	    $countries[] = "Lesotho,LS,LSL,Loti";
	    $countries[] = "Liberia,LR,LRD,Dollar";
	    $countries[] = "Libya,LY,LYD,Dinar";
	    $countries[] = "Liechtenstein,LI,CHF,Franc";
	    $countries[] = "Lithuania,LT,LTL,Litas";
	    $countries[] = "Luxembourg,LU,EUR,Euro";
	    $countries[] = "Macao,MO,MOP,Pataca";
	    $countries[] = "Macedonia,MK,MKD,Denar";
	    $countries[] = "Madagascar,MG,MGA,Ariary";
	    $countries[] = "Malawi,MW,MWK,Kwacha";
	    $countries[] = "Malaysia,MY,MYR,Ringgit";
	    $countries[] = "Maldives,MV,MVR,Rufiyaa";
	    $countries[] = "Mali,ML,XOF,Franc";
	    $countries[] = "Malta,MT,MTL,Lira";
	    $countries[] = "Marshall Islands,MH,USD,Dollar";
	    $countries[] = "Martinique,MQ,EUR,Euro";
	    $countries[] = "Mauritania,MR,MRO,Ouguiya";
	    $countries[] = "Mauritius,MU,MUR,Rupee";
	    $countries[] = "Mayotte,YT,EUR,Euro";
	    $countries[] = "Mexico,MX,MXN,Peso";
	    $countries[] = "Micronesia,FM,USD,Dollar";
	    $countries[] = "Moldova,MD,MDL,Leu";
	    $countries[] = "Monaco,MC,EUR,Euro";
	    $countries[] = "Mongolia,MN,MNT,Tugrik";
	    $countries[] = "Montserrat,MS,XCD,Dollar";
	    $countries[] = "Morocco,MA,MAD,Dirham";
	    $countries[] = "Mozambique,MZ,MZN,Meticail";
	    $countries[] = "Myanmar,MM,MMK,Kyat";
	    $countries[] = "Namibia,NA,NAD,Dollar";
	    $countries[] = "Nauru,NR,AUD,Dollar";
	    $countries[] = "Nepal,NP,NPR,Rupee";
	    $countries[] = "Netherlands,NL,EUR,Euro";
	    $countries[] = "Netherlands Antilles,AN,ANG,Guilder";
	    $countries[] = "New Caledonia,NC,XPF,Franc";
	    $countries[] = "New Zealand,NZ,NZD,Dollar";
	    $countries[] = "Nicaragua,NI,NIO,Cordoba";
	    $countries[] = "Niger,NE,XOF,Franc";
	    $countries[] = "Nigeria,NG,NGN,Naira";
	    $countries[] = "Niue,NU,NZD,Dollar";
	    $countries[] = "Norfolk Island,NF,AUD,Dollar";
	    $countries[] = "North Korea,KP,KPW,Won";
	    $countries[] = "Northern Mariana Islands,MP,USD,Dollar";
	    $countries[] = "Norway,NO,NOK,Krone";
	    $countries[] = "Oman,OM,OMR,Rial";
	    $countries[] = "Pakistan,PK,PKR,Rupee";
	    $countries[] = "Palau,PW,USD,Dollar";
	    $countries[] = "Palestinian Territory,PS,ILS,Shekel";
	    $countries[] = "Panama,PA,PAB,Balboa";
	    $countries[] = "Papua New Guinea,PG,PGK,Kina";
	    $countries[] = "Paraguay,PY,PYG,Guarani";
	    $countries[] = "Peru,PE,PEN,Sol";
	    $countries[] = "Philippines,PH,PHP,Peso";
	    $countries[] = "Pitcairn,PN,NZD,Dollar";
	    $countries[] = "Poland,PL,PLN,Zloty";
	    $countries[] = "Portugal,PT,EUR,Euro";
	    $countries[] = "Puerto Rico,PR,USD,Dollar";
	    $countries[] = "Qatar,QA,QAR,Rial";
	    $countries[] = "Republic of the Congo,CG,XAF,Franc";
	    $countries[] = "Reunion,RE,EUR,Euro";
	    $countries[] = "Romania,RO,RON,Leu";
	    $countries[] = "Russia,RU,RUB,Ruble";
	    $countries[] = "Rwanda,RW,RWF,Franc";
	    $countries[] = "Saint Helena,SH,SHP,Pound";
	    $countries[] = "Saint Kitts and Nevis,KN,XCD,Dollar";
	    $countries[] = "Saint Lucia,LC,XCD,Dollar";
	    $countries[] = "Saint Pierre and Miquelon,PM,EUR,Euro";
	    $countries[] = "Saint Vincent and the Grenadines,VC,XCD,Dollar";
	    $countries[] = "Samoa,WS,WST,Tala";
	    $countries[] = "San Marino,SM,EUR,Euro";
	    $countries[] = "Sao Tome and Principe,ST,STD,Dobra";
	    $countries[] = "Saudi Arabia,SA,SAR,Rial";
	    $countries[] = "Senegal,SN,XOF,Franc";
	    $countries[] = "Serbia and Montenegro,CS,RSD,Dinar";
	    $countries[] = "Seychelles,SC,SCR,Rupee";
	    $countries[] = "Sierra Leone,SL,SLL,Leone";
	    $countries[] = "Singapore,SG,SGD,Dollar";
	    $countries[] = "Slovakia,SK,SKK,Koruna";
	    $countries[] = "Slovenia,SI,EUR,Euro";
	    $countries[] = "Solomon Islands,SB,SBD,Dollar";
	    $countries[] = "Somalia,SO,SOS,Shilling";
	    $countries[] = "South Africa,ZA,ZAR,Rand";
	    $countries[] = "South Georgia and the South Sandwich Islands,GS,GBP,Pound";
	    $countries[] = "South Korea,KR,KRW,Won";
	    $countries[] = "Spain,ES,EUR,Euro";
	    $countries[] = "Sri Lanka,LK,LKR,Rupee";
	    $countries[] = "Sudan,SD,SDD,Dinar";
	    $countries[] = "Suriname,SR,SRD,Dollar";
	    $countries[] = "Svalbard and Jan Mayen,SJ,NOK,Krone";
	    $countries[] = "Swaziland,SZ,SZL,Lilangeni";
	    $countries[] = "Sweden,SE,SEK,Krona";
	    $countries[] = "Switzerland,CH,CHF,Franc";
	    $countries[] = "Syria,SY,SYP,Pound";
	    $countries[] = "Taiwan,TW,TWD,Dollar";
	    $countries[] = "Tajikistan,TJ,TJS,Somoni";
	    $countries[] = "Tanzania,TZ,TZS,Shilling";
	    $countries[] = "Thailand,TH,THB,Baht";
	    $countries[] = "Togo,TG,XOF,Franc";
	    $countries[] = "Tokelau,TK,NZD,Dollar";
	    $countries[] = "Tonga,TO,TOP,Pa'anga";
	    $countries[] = "Trinidad and Tobago,TT,TTD,Dollar";
	    $countries[] = "Tunisia,TN,TND,Dinar";
	    $countries[] = "Turkey,TR,TRY,Lira";
	    $countries[] = "Turkmenistan,TM,TMM,Manat";
	    $countries[] = "Turks and Caicos Islands,TC,USD,Dollar";
	    $countries[] = "Tuvalu,TV,AUD,Dollar";
	    $countries[] = "U.S. Virgin Islands,VI,USD,Dollar";
	    $countries[] = "Uganda,UG,UGX,Shilling";
	    $countries[] = "Ukraine,UA,UAH,Hryvnia";
	    $countries[] = "United Arab Emirates,AE,AED,Dirham";
	    $countries[] = "United Kingdom,GB,GBP,Pound";
	    $countries[] = "United States,US,USD,Dollar";
	    $countries[] = "United States Minor Outlying Islands,UM,USD,Dollar ";
	    $countries[] = "Uruguay,UY,UYU,Peso";
	    $countries[] = "Uzbekistan,UZ,UZS,Som";
	    $countries[] = "Vanuatu,VU,VUV,Vatu";
	    $countries[] = "Vatican,VA,EUR,Euro";
	    $countries[] = "Venezuela,VE,VEF,Bolivar";
	    $countries[] = "Vietnam,VN,VND,Dong";
	    $countries[] = "Wallis and Futuna,WF,XPF,Franc";
	    $countries[] = "Western Sahara,EH,MAD,Dirham";
	    $countries[] = "Yemen,YE,YER,Rial";
	    $countries[] = "Zambia,ZM,ZMK,Kwacha";
	    $countries[] = "Zimbabwe,ZW,ZWD,Dollar";

	    DB::table( 'countries' )->truncate();

	    foreach ($countries as $country) {
			
		    list($title, $code, $currency_code, $currency_name) = explode(",", $country);
		    DB::table( 'countries' )->insert(
			    [
				    'title'       		=> $title,
				    'code'      		=> $code,
				    'currency_code'   	=> $currency_code,
				    'currency_name'     => $currency_name,
				    'active'     		=> 1,
				    'created_at' 		=> Carbon::now(),
				    'updated_at' 		=> Carbon::now()
			    ]
		    );
	    }

    }
}
