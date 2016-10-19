<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
                'name' => 'Afghanistan',
                'calling_code' => '93',
                'iso_code' => 'AF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Albania',
                'calling_code' => '355',
                'iso_code' => 'AL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Algeria',
                'calling_code' => '213',
                'iso_code' => 'DZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'American Samoa',
                'calling_code' => '1-684',
                'iso_code' => 'AS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Andorra',
                'calling_code' => '376',
                'iso_code' => 'AD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Angola',
                'calling_code' => '244',
                'iso_code' => 'AO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Anguilla',
                'calling_code' => '1-264',
                'iso_code' => 'AI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Antarctica',
                'calling_code' => '672',
                'iso_code' => 'AQ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Antigua and Barbuda',
                'calling_code' => '1-268',
                'iso_code' => 'AG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Argentina',
                'calling_code' => '54',
                'iso_code' => 'AR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Armenia',
                'calling_code' => '374',
                'iso_code' => 'AM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Aruba',
                'calling_code' => '297',
                'iso_code' => 'AW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Australia',
                'calling_code' => '61',
                'iso_code' => 'AU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Austria',
                'calling_code' => '43',
                'iso_code' => 'AT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Azerbaijan',
                'calling_code' => '994',
                'iso_code' => 'AZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bahamas',
                'calling_code' => '1-242',
                'iso_code' => 'BS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bahrain',
                'calling_code' => '973',
                'iso_code' => 'BH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bangladesh',
                'calling_code' => '880',
                'iso_code' => 'BD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Barbados',
                'calling_code' => '1-246',
                'iso_code' => 'BB',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Belarus',
                'calling_code' => '375',
                'iso_code' => 'BY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Belgium',
                'calling_code' => '32',
                'iso_code' => 'BE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Belize',
                'calling_code' => '501',
                'iso_code' => 'BZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Benin',
                'calling_code' => '229',
                'iso_code' => 'BJ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bermuda',
                'calling_code' => '1-441',
                'iso_code' => 'BM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bhutan',
                'calling_code' => '975',
                'iso_code' => 'BT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bolivia',
                'calling_code' => '591',
                'iso_code' => 'BO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'calling_code' => '387',
                'iso_code' => 'BA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Botswana',
                'calling_code' => '267',
                'iso_code' => 'BW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Brazil',
                'calling_code' => '55',
                'iso_code' => 'BR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'calling_code' => '246',
                'iso_code' => 'IO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'British Virgin Islands',
                'calling_code' => '1-284',
                'iso_code' => 'VG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Brunei',
                'calling_code' => '673',
                'iso_code' => 'BN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Bulgaria',
                'calling_code' => '359',
                'iso_code' => 'BG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Burkina Faso',
                'calling_code' => '226',
                'iso_code' => 'BF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Burundi',
                'calling_code' => '257',
                'iso_code' => 'BI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cambodia',
                'calling_code' => '855',
                'iso_code' => 'KH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cameroon',
                'calling_code' => '237',
                'iso_code' => 'CM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Canada',
                'calling_code' => '1',
                'iso_code' => 'CA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cape Verde',
                'calling_code' => '238',
                'iso_code' => 'CV',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cayman Islands',
                'calling_code' => '1-345',
                'iso_code' => 'KY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Central African Republic',
                'calling_code' => '236',
                'iso_code' => 'CF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Chad',
                'calling_code' => '235',
                'iso_code' => 'TD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Chile',
                'calling_code' => '56',
                'iso_code' => 'CL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'China',
                'calling_code' => '86',
                'iso_code' => 'CN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Christmas Island',
                'calling_code' => '61',
                'iso_code' => 'CX',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cocos Islands',
                'calling_code' => '61',
                'iso_code' => 'CC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Colombia',
                'calling_code' => '57',
                'iso_code' => 'CO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Comoros',
                'calling_code' => '269',
                'iso_code' => 'KM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cook Islands',
                'calling_code' => '682',
                'iso_code' => 'CK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Costa Rica',
                'calling_code' => '506',
                'iso_code' => 'CR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Croatia',
                'calling_code' => '385',
                'iso_code' => 'HR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cuba',
                'calling_code' => '53',
                'iso_code' => 'CU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Curacao',
                'calling_code' => '599',
                'iso_code' => 'CW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Cyprus',
                'calling_code' => '357',
                'iso_code' => 'CY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Czech Republic',
                'calling_code' => '420',
                'iso_code' => 'CZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Democratic Republic of the Congo',
                'calling_code' => '243',
                'iso_code' => 'CD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Denmark',
                'calling_code' => '45',
                'iso_code' => 'DK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Djibouti',
                'calling_code' => '253',
                'iso_code' => 'DJ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Dominica',
                'calling_code' => '1-767',
                'iso_code' => 'DM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Dominican Republic',
                'calling_code' => '1-809, 1-829, 1-849',
                'iso_code' => 'DO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'East Timor',
                'calling_code' => '670',
                'iso_code' => 'TL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ecuador',
                'calling_code' => '593',
                'iso_code' => 'EC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Egypt',
                'calling_code' => '20',
                'iso_code' => 'EG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'El Salvador',
                'calling_code' => '503',
                'iso_code' => 'SV',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Equatorial Guinea',
                'calling_code' => '240',
                'iso_code' => 'GQ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Eritrea',
                'calling_code' => '291',
                'iso_code' => 'ER',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Estonia',
                'calling_code' => '372',
                'iso_code' => 'EE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ethiopia',
                'calling_code' => '251',
                'iso_code' => 'ET',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Falkland Islands',
                'calling_code' => '500',
                'iso_code' => 'FK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Faroe Islands',
                'calling_code' => '298',
                'iso_code' => 'FO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Fiji',
                'calling_code' => '679',
                'iso_code' => 'FJ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Finland',
                'calling_code' => '358',
                'iso_code' => 'FI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'France',
                'calling_code' => '33',
                'iso_code' => 'FR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'French Polynesia',
                'calling_code' => '689',
                'iso_code' => 'PF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Gabon',
                'calling_code' => '241',
                'iso_code' => 'GA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Gambia',
                'calling_code' => '220',
                'iso_code' => 'GM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Georgia',
                'calling_code' => '995',
                'iso_code' => 'GE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Germany',
                'calling_code' => '49',
                'iso_code' => 'DE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ghana',
                'calling_code' => '233',
                'iso_code' => 'GH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Gibraltar',
                'calling_code' => '350',
                'iso_code' => 'GI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Greece',
                'calling_code' => '30',
                'iso_code' => 'GR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Greenland',
                'calling_code' => '299',
                'iso_code' => 'GL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Grenada',
                'calling_code' => '1-473',
                'iso_code' => 'GD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guam',
                'calling_code' => '1-671',
                'iso_code' => 'GU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guatemala',
                'calling_code' => '502',
                'iso_code' => 'GT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guernsey',
                'calling_code' => '44-1481',
                'iso_code' => 'GG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guinea',
                'calling_code' => '224',
                'iso_code' => 'GN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guinea-Bissau',
                'calling_code' => '245',
                'iso_code' => 'GW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Guyana',
                'calling_code' => '592',
                'iso_code' => 'GY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Haiti',
                'calling_code' => '509',
                'iso_code' => 'HT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Honduras',
                'calling_code' => '504',
                'iso_code' => 'HN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Hong Kong',
                'calling_code' => '852',
                'iso_code' => 'HK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Hungary',
                'calling_code' => '36',
                'iso_code' => 'HU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Iceland',
                'calling_code' => '354',
                'iso_code' => 'IS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'India',
                'calling_code' => '91',
                'iso_code' => 'IN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Indonesia',
                'calling_code' => '62',
                'iso_code' => 'ID',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Iran',
                'calling_code' => '98',
                'iso_code' => 'IR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Iraq',
                'calling_code' => '964',
                'iso_code' => 'IQ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ireland',
                'calling_code' => '353',
                'iso_code' => 'IE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Isle of Man',
                'calling_code' => '44-1624',
                'iso_code' => 'IM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Israel',
                'calling_code' => '972',
                'iso_code' => 'IL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Italy',
                'calling_code' => '39',
                'iso_code' => 'IT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ivory Coast',
                'calling_code' => '225',
                'iso_code' => 'CI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Jamaica',
                'calling_code' => '1-876',
                'iso_code' => 'JM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Japan',
                'calling_code' => '81',
                'iso_code' => 'JP',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Jersey',
                'calling_code' => '44-1534',
                'iso_code' => 'JE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Jordan',
                'calling_code' => '962',
                'iso_code' => 'JO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kazakhstan',
                'calling_code' => '7',
                'iso_code' => 'KZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kenya',
                'calling_code' => '254',
                'iso_code' => 'KE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kiribati',
                'calling_code' => '686',
                'iso_code' => 'KI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kosovo',
                'calling_code' => '383',
                'iso_code' => 'XK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kuwait',
                'calling_code' => '965',
                'iso_code' => 'KW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Kyrgyzstan',
                'calling_code' => '996',
                'iso_code' => 'KG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Laos',
                'calling_code' => '856',
                'iso_code' => 'LA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Latvia',
                'calling_code' => '371',
                'iso_code' => 'LV',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Lebanon',
                'calling_code' => '961',
                'iso_code' => 'LB',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Lesotho',
                'calling_code' => '266',
                'iso_code' => 'LS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Liberia',
                'calling_code' => '231',
                'iso_code' => 'LR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Libya',
                'calling_code' => '218',
                'iso_code' => 'LY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Liechtenstein',
                'calling_code' => '423',
                'iso_code' => 'LI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Lithuania',
                'calling_code' => '370',
                'iso_code' => 'LT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Luxembourg',
                'calling_code' => '352',
                'iso_code' => 'LU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Macau',
                'calling_code' => '853',
                'iso_code' => 'MO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Macedonia',
                'calling_code' => '389',
                'iso_code' => 'MK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Madagascar',
                'calling_code' => '261',
                'iso_code' => 'MG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Malawi',
                'calling_code' => '265',
                'iso_code' => 'MW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Malaysia',
                'calling_code' => '60',
                'iso_code' => 'MY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Maldives',
                'calling_code' => '960',
                'iso_code' => 'MV',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mali',
                'calling_code' => '223',
                'iso_code' => 'ML',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Malta',
                'calling_code' => '356',
                'iso_code' => 'MT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Marshall Islands',
                'calling_code' => '692',
                'iso_code' => 'MH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mauritania',
                'calling_code' => '222',
                'iso_code' => 'MR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mauritius',
                'calling_code' => '230',
                'iso_code' => 'MU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mayotte',
                'calling_code' => '262',
                'iso_code' => 'YT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mexico',
                'calling_code' => '52',
                'iso_code' => 'MX',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Micronesia',
                'calling_code' => '691',
                'iso_code' => 'FM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Moldova',
                'calling_code' => '373',
                'iso_code' => 'MD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Monaco',
                'calling_code' => '377',
                'iso_code' => 'MC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mongolia',
                'calling_code' => '976',
                'iso_code' => 'MN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Montenegro',
                'calling_code' => '382',
                'iso_code' => 'ME',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Montserrat',
                'calling_code' => '1-664',
                'iso_code' => 'MS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Morocco',
                'calling_code' => '212',
                'iso_code' => 'MA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Mozambique',
                'calling_code' => '258',
                'iso_code' => 'MZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Myanmar',
                'calling_code' => '95',
                'iso_code' => 'MM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Namibia',
                'calling_code' => '264',
                'iso_code' => 'NA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Nauru',
                'calling_code' => '674',
                'iso_code' => 'NR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Nepal',
                'calling_code' => '977',
                'iso_code' => 'NP',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Netherlands',
                'calling_code' => '31',
                'iso_code' => 'NL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Netherlands Antilles',
                'calling_code' => '599',
                'iso_code' => 'AN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'New Caledonia',
                'calling_code' => '687',
                'iso_code' => 'NC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'New Zealand',
                'calling_code' => '64',
                'iso_code' => 'NZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Nicaragua',
                'calling_code' => '505',
                'iso_code' => 'NI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Niger',
                'calling_code' => '227',
                'iso_code' => 'NE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Nigeria',
                'calling_code' => '234',
                'iso_code' => 'NG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Niue',
                'calling_code' => '683',
                'iso_code' => 'NU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'North Korea',
                'calling_code' => '850',
                'iso_code' => 'KP',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Northern Mariana Islands',
                'calling_code' => '1-670',
                'iso_code' => 'MP',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Norway',
                'calling_code' => '47',
                'iso_code' => 'NO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Oman',
                'calling_code' => '968',
                'iso_code' => 'OM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Pakistan',
                'calling_code' => '92',
                'iso_code' => 'PK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Palau',
                'calling_code' => '680',
                'iso_code' => 'PW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Palestine',
                'calling_code' => '970',
                'iso_code' => 'PS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Panama',
                'calling_code' => '507',
                'iso_code' => 'PA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Papua New Guinea',
                'calling_code' => '675',
                'iso_code' => 'PG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Paraguay',
                'calling_code' => '595',
                'iso_code' => 'PY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Peru',
                'calling_code' => '51',
                'iso_code' => 'PE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Philippines',
                'calling_code' => '63',
                'iso_code' => 'PH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Pitcairn',
                'calling_code' => '64',
                'iso_code' => 'PN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Poland',
                'calling_code' => '48',
                'iso_code' => 'PL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Portugal',
                'calling_code' => '351',
                'iso_code' => 'PT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Puerto Rico',
                'calling_code' => '1-787, 1-939',
                'iso_code' => 'PR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Qatar',
                'calling_code' => '974',
                'iso_code' => 'QA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Republic of the Congo',
                'calling_code' => '242',
                'iso_code' => 'CG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Reunion',
                'calling_code' => '262',
                'iso_code' => 'RE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Romania',
                'calling_code' => '40',
                'iso_code' => 'RO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Russia',
                'calling_code' => '7',
                'iso_code' => 'RU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Rwanda',
                'calling_code' => '250',
                'iso_code' => 'RW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Barthelemy',
                'calling_code' => '590',
                'iso_code' => 'BL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Helena',
                'calling_code' => '290',
                'iso_code' => 'SH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'calling_code' => '1-869',
                'iso_code' => 'KN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Lucia',
                'calling_code' => '1-758',
                'iso_code' => 'LC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Martin',
                'calling_code' => '590',
                'iso_code' => 'MF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'calling_code' => '508',
                'iso_code' => 'PM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'calling_code' => '1-784',
                'iso_code' => 'VC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Samoa',
                'calling_code' => '685',
                'iso_code' => 'WS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'San Marino',
                'calling_code' => '378',
                'iso_code' => 'SM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sao Tome and Principe',
                'calling_code' => '239',
                'iso_code' => 'ST',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Saudi Arabia',
                'calling_code' => '966',
                'iso_code' => 'SA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Senegal',
                'calling_code' => '221',
                'iso_code' => 'SN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Serbia',
                'calling_code' => '381',
                'iso_code' => 'RS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Seychelles',
                'calling_code' => '248',
                'iso_code' => 'SC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sierra Leone',
                'calling_code' => '232',
                'iso_code' => 'SL',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Singapore',
                'calling_code' => '65',
                'iso_code' => 'SG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sint Maarten',
                'calling_code' => '1-721',
                'iso_code' => 'SX',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Slovakia',
                'calling_code' => '421',
                'iso_code' => 'SK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Slovenia',
                'calling_code' => '386',
                'iso_code' => 'SI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Solomon Islands',
                'calling_code' => '677',
                'iso_code' => 'SB',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Somalia',
                'calling_code' => '252',
                'iso_code' => 'SO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'South Africa',
                'calling_code' => '27',
                'iso_code' => 'ZA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'South Korea',
                'calling_code' => '82',
                'iso_code' => 'KR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'South Sudan',
                'calling_code' => '211',
                'iso_code' => 'SS',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Spain',
                'calling_code' => '34',
                'iso_code' => 'ES',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sri Lanka',
                'calling_code' => '94',
                'iso_code' => 'LK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sudan',
                'calling_code' => '249',
                'iso_code' => 'SD',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Suriname',
                'calling_code' => '597',
                'iso_code' => 'SR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'calling_code' => '47',
                'iso_code' => 'SJ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Swaziland',
                'calling_code' => '268',
                'iso_code' => 'SZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Sweden',
                'calling_code' => '46',
                'iso_code' => 'SE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Switzerland',
                'calling_code' => '41',
                'iso_code' => 'CH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Syria',
                'calling_code' => '963',
                'iso_code' => 'SY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Taiwan',
                'calling_code' => '886',
                'iso_code' => 'TW',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tajikistan',
                'calling_code' => '992',
                'iso_code' => 'TJ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tanzania',
                'calling_code' => '255',
                'iso_code' => 'TZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Thailand',
                'calling_code' => '66',
                'iso_code' => 'TH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Togo',
                'calling_code' => '228',
                'iso_code' => 'TG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tokelau',
                'calling_code' => '690',
                'iso_code' => 'TK',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tonga',
                'calling_code' => '676',
                'iso_code' => 'TO',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Trinidad and Tobago',
                'calling_code' => '1-868',
                'iso_code' => 'TT',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tunisia',
                'calling_code' => '216',
                'iso_code' => 'TN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Turkey',
                'calling_code' => '90',
                'iso_code' => 'TR',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Turkmenistan',
                'calling_code' => '993',
                'iso_code' => 'TM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Turks and Caicos Islands',
                'calling_code' => '1-649',
                'iso_code' => 'TC',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Tuvalu',
                'calling_code' => '688',
                'iso_code' => 'TV',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'U.S. Virgin Islands',
                'calling_code' => '1-340',
                'iso_code' => 'VI',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Uganda',
                'calling_code' => '256',
                'iso_code' => 'UG',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Ukraine',
                'calling_code' => '380',
                'iso_code' => 'UA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'United Arab Emirates',
                'calling_code' => '971',
                'iso_code' => 'AE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'United Kingdom',
                'calling_code' => '44',
                'iso_code' => 'GB',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'United States',
                'calling_code' => '1',
                'iso_code' => 'US',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Uruguay',
                'calling_code' => '598',
                'iso_code' => 'UY',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Uzbekistan',
                'calling_code' => '998',
                'iso_code' => 'UZ',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Vanuatu',
                'calling_code' => '678',
                'iso_code' => 'VU',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Vatican',
                'calling_code' => '379',
                'iso_code' => 'VA',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Venezuela',
                'calling_code' => '58',
                'iso_code' => 'VE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Vietnam',
                'calling_code' => '84',
                'iso_code' => 'VN',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Wallis and Futuna',
                'calling_code' => '681',
                'iso_code' => 'WF',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Western Sahara',
                'calling_code' => '212',
                'iso_code' => 'EH',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Yemen',
                'calling_code' => '967',
                'iso_code' => 'YE',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Zambia',
                'calling_code' => '260',
                'iso_code' => 'ZM',
                'created_at' => Carbon\Carbon::now()
            ],
            [
                'name' => 'Zimbabwe',
                'calling_code' => '263',
                'iso_code' => 'ZW',
                'created_at' => Carbon\Carbon::now()
            ]
        ]);
    }
}
