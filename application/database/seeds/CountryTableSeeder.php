<?php

use SaaSrv\Models\Country;
use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @see https://countrycode.org/
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Afghanistan',
                'iso_code_2' => 'AF',
                'iso_code_3' => 'AFG',
                'dial_code' => '93'
            ],
            [
                'name' => 'Albania',
                'iso_code_2' => 'AL',
                'iso_code_3' => 'ALB',
                'dial_code' => '355'
            ],
            [
                'name' => 'Algeria',
                'iso_code_2' => 'DZ',
                'iso_code_3' => 'DZA',
                'dial_code' => '213'
            ],
            [
                'name' => 'American Samoa',
                'iso_code_2' => 'AS',
                'iso_code_3' => 'ASM',
                'dial_code' => '1-684'
            ],
            [
                'name' => 'Andorra',
                'iso_code_2' => 'AD',
                'iso_code_3' => 'AND',
                'dial_code' => '376'
            ],
            [
                'name' => 'Angola',
                'iso_code_2' => 'AO',
                'iso_code_3' => 'AGO',
                'dial_code' => '244'
            ],
            [
                'name' => 'Anguilla',
                'iso_code_2' => 'AI',
                'iso_code_3' => 'AIA',
                'dial_code' => '1-264'
            ],
            [
                'name' => 'Antarctica',
                'iso_code_2' => 'AQ',
                'iso_code_3' => 'ATA',
                'dial_code' => '672'
            ],
            [
                'name' => 'Antigua and Barbuda',
                'iso_code_2' => 'AG',
                'iso_code_3' => 'ATG',
                'dial_code' => '1-268'
            ],
            [
                'name' => 'Argentina',
                'iso_code_2' => 'AR',
                'iso_code_3' => 'ARG',
                'dial_code' => '54'
            ],
            [
                'name' => 'Armenia',
                'iso_code_2' => 'AM',
                'iso_code_3' => 'ARM',
                'dial_code' => '374'
            ],
            [
                'name' => 'Aruba',
                'iso_code_2' => 'AW',
                'iso_code_3' => 'ABW',
                'dial_code' => '297'
            ],
            [
                'name' => 'Australia',
                'iso_code_2' => 'AU',
                'iso_code_3' => 'AUS',
                'dial_code' => '61'
            ],
            [
                'name' => 'Austria',
                'iso_code_2' => 'AT',
                'iso_code_3' => 'AUT',
                'dial_code' => '43'
            ],
            [
                'name' => 'Azerbaijan',
                'iso_code_2' => 'AZ',
                'iso_code_3' => 'AZE',
                'dial_code' => '994'
            ],
            [
                'name' => 'Bahamas',
                'iso_code_2' => 'BS',
                'iso_code_3' => 'BHS',
                'dial_code' => '1-242'
            ],
            [
                'name' => 'Bahrain',
                'iso_code_2' => 'BH',
                'iso_code_3' => 'BHR',
                'dial_code' => '973'
            ],
            [
                'name' => 'Bangladesh',
                'iso_code_2' => 'BD',
                'iso_code_3' => 'BGD',
                'dial_code' => '880'
            ],
            [
                'name' => 'Barbados',
                'iso_code_2' => 'BB',
                'iso_code_3' => 'BRB',
                'dial_code' => '1-246'
            ],
            [
                'name' => 'Belarus',
                'iso_code_2' => 'BY',
                'iso_code_3' => 'BLR',
                'dial_code' => '375'
            ],
            [
                'name' => 'Belgium',
                'iso_code_2' => 'BE',
                'iso_code_3' => 'BEL',
                'dial_code' => '32'
            ],
            [
                'name' => 'Belize',
                'iso_code_2' => 'BZ',
                'iso_code_3' => 'BLZ',
                'dial_code' => '501'
            ],
            [
                'name' => 'Benin',
                'iso_code_2' => 'BJ',
                'iso_code_3' => 'BEN',
                'dial_code' => '229'
            ],
            [
                'name' => 'Bermuda',
                'iso_code_2' => 'BM',
                'iso_code_3' => 'BMU',
                'dial_code' => '1-441'
            ],
            [
                'name' => 'Bhutan',
                'iso_code_2' => 'BT',
                'iso_code_3' => 'BTN',
                'dial_code' => '975'
            ],
            [
                'name' => 'Bolivia',
                'iso_code_2' => 'BO',
                'iso_code_3' => 'BOL',
                'dial_code' => '591'
            ],
            [
                'name' => 'Bosnia and Herzegovina',
                'iso_code_2' => 'BA',
                'iso_code_3' => 'BIH',
                'dial_code' => '387'
            ],
            [
                'name' => 'Botswana',
                'iso_code_2' => 'BW',
                'iso_code_3' => 'BWA',
                'dial_code' => '267'
            ],
            [
                'name' => 'Brazil',
                'iso_code_2' => 'BR',
                'iso_code_3' => 'BRA',
                'dial_code' => '55'
            ],
            [
                'name' => 'British Indian Ocean Territory',
                'iso_code_2' => 'IO',
                'iso_code_3' => 'IOT',
                'dial_code' => '246'
            ],
            [
                'name' => 'British Virgin Islands',
                'iso_code_2' => 'VG',
                'iso_code_3' => 'VGB',
                'dial_code' => '1-284'
            ],
            [
                'name' => 'Brunei',
                'iso_code_2' => 'BN',
                'iso_code_3' => 'BRN',
                'dial_code' => '673'
            ],
            [
                'name' => 'Bulgaria',
                'iso_code_2' => 'BG',
                'iso_code_3' => 'BGR',
                'dial_code' => '359'
            ],
            [
                'name' => 'Burkina Faso',
                'iso_code_2' => 'BF',
                'iso_code_3' => 'BFA',
                'dial_code' => '226'
            ],
            [
                'name' => 'Burundi',
                'iso_code_2' => 'BI',
                'iso_code_3' => 'BDI',
                'dial_code' => '257'
            ],
            [
                'name' => 'Cambodia',
                'iso_code_2' => 'KH',
                'iso_code_3' => 'KHM',
                'dial_code' => '855'
            ],
            [
                'name' => 'Cameroon',
                'iso_code_2' => 'CM',
                'iso_code_3' => 'CMR',
                'dial_code' => '237'
            ],
            [
                'name' => 'Canada',
                'iso_code_2' => 'CA',
                'iso_code_3' => 'CAN',
                'dial_code' => '1-'
            ],
            [
                'name' => 'Cape Verde',
                'iso_code_2' => 'CV',
                'iso_code_3' => 'CPV',
                'dial_code' => '238'
            ],
            [
                'name' => 'Cayman Islands',
                'iso_code_2' => 'KY',
                'iso_code_3' => 'CYM',
                'dial_code' => '1-345'
            ],
            [
                'name' => 'Central African Republic',
                'iso_code_2' => 'CF',
                'iso_code_3' => 'CAF',
                'dial_code' => '236'
            ],
            [
                'name' => 'Chad',
                'iso_code_2' => 'TD',
                'iso_code_3' => 'TCD',
                'dial_code' => '235'
            ],
            [
                'name' => 'Chile',
                'iso_code_2' => 'CL',
                'iso_code_3' => 'CHL',
                'dial_code' => '56'
            ],
            [
                'name' => 'China',
                'iso_code_2' => 'CN',
                'iso_code_3' => 'CHN',
                'dial_code' => '86'
            ],
            [
                'name' => 'Christmas Island',
                'iso_code_2' => 'CX',
                'iso_code_3' => 'CXR',
                'dial_code' => '61'
            ],
            [
                'name' => 'Cocos Islands',
                'iso_code_2' => 'CC',
                'iso_code_3' => 'CCK',
                'dial_code' => '61'
            ],
            [
                'name' => 'Colombia',
                'iso_code_2' => 'CO',
                'iso_code_3' => 'COL',
                'dial_code' => '57'
            ],
            [
                'name' => 'Comoros',
                'iso_code_2' => 'KM',
                'iso_code_3' => 'COM',
                'dial_code' => '269'
            ],
            [
                'name' => 'Cook Islands',
                'iso_code_2' => 'CK',
                'iso_code_3' => 'COK',
                'dial_code' => '682'
            ],
            [
                'name' => 'Costa Rica',
                'iso_code_2' => 'CR',
                'iso_code_3' => 'CRI',
                'dial_code' => '506'
            ],
            [
                'name' => 'Croatia',
                'iso_code_2' => 'HR',
                'iso_code_3' => 'HRV',
                'dial_code' => '385'
            ],
            [
                'name' => 'Cuba',
                'iso_code_2' => 'CU',
                'iso_code_3' => 'CUB',
                'dial_code' => '53'
            ],
            [
                'name' => 'Curacao',
                'iso_code_2' => 'CW',
                'iso_code_3' => 'CUW',
                'dial_code' => '599'
            ],
            [
                'name' => 'Cyprus',
                'iso_code_2' => 'CY',
                'iso_code_3' => 'CYP',
                'dial_code' => '357'
            ],
            [
                'name' => 'Czech Republic',
                'iso_code_2' => 'CZ',
                'iso_code_3' => 'CZE',
                'dial_code' => '420'
            ],
            [
                'name' => 'Democratic Republic of the Congo',
                'iso_code_2' => 'CD',
                'iso_code_3' => 'COD',
                'dial_code' => '243'
            ],
            [
                'name' => 'Denmark',
                'iso_code_2' => 'DK',
                'iso_code_3' => 'DNK',
                'dial_code' => '45'
            ],
            [
                'name' => 'Djibouti',
                'iso_code_2' => 'DJ',
                'iso_code_3' => 'DJI',
                'dial_code' => '253'
            ],
            [
                'name' => 'Dominica',
                'iso_code_2' => 'DM',
                'iso_code_3' => 'DMA',
                'dial_code' => '1-767'
            ],
            [
                'name' => 'Dominican Republic',
                'iso_code_2' => 'DO',
                'iso_code_3' => 'DOM',
                'dial_code' => '1-809, 1-829, 1-849'
            ],
            [
                'name' => 'East Timor',
                'iso_code_2' => 'TL',
                'iso_code_3' => 'TLS',
                'dial_code' => '670'
            ],
            [
                'name' => 'Ecuador',
                'iso_code_2' => 'EC',
                'iso_code_3' => 'ECU',
                'dial_code' => '593'
            ],
            [
                'name' => 'Egypt',
                'iso_code_2' => 'EG',
                'iso_code_3' => 'EGY',
                'dial_code' => '20'
            ],
            [
                'name' => 'El Salvador',
                'iso_code_2' => 'SV',
                'iso_code_3' => 'SLV',
                'dial_code' => '503'
            ],
            [
                'name' => 'Equatorial Guinea',
                'iso_code_2' => 'GQ',
                'iso_code_3' => 'GNQ',
                'dial_code' => '240'
            ],
            [
                'name' => 'Eritrea',
                'iso_code_2' => 'ER',
                'iso_code_3' => 'ERI',
                'dial_code' => '291'
            ],
            [
                'name' => 'Estonia',
                'iso_code_2' => 'EE',
                'iso_code_3' => 'EST',
                'dial_code' => '372'
            ],
            [
                'name' => 'Ethiopia',
                'iso_code_2' => 'ET',
                'iso_code_3' => 'ETH',
                'dial_code' => '251'
            ],
            [
                'name' => 'Falkland Islands',
                'iso_code_2' => 'FK',
                'iso_code_3' => 'FLK',
                'dial_code' => '500'
            ],
            [
                'name' => 'Faroe Islands',
                'iso_code_2' => 'FO',
                'iso_code_3' => 'FRO',
                'dial_code' => '298'
            ],
            [
                'name' => 'Fiji',
                'iso_code_2' => 'FJ',
                'iso_code_3' => 'FJI',
                'dial_code' => '679'
            ],
            [
                'name' => 'Finland',
                'iso_code_2' => 'FI',
                'iso_code_3' => 'FIN',
                'dial_code' => '358'
            ],
            [
                'name' => 'France',
                'iso_code_2' => 'FR',
                'iso_code_3' => 'FRA',
                'dial_code' => '33'
            ],
            [
                'name' => 'French Polynesia',
                'iso_code_2' => 'PF',
                'iso_code_3' => 'PYF',
                'dial_code' => '689'
            ],
            [
                'name' => 'Gabon',
                'iso_code_2' => 'GA',
                'iso_code_3' => 'GAB',
                'dial_code' => '241'
            ],
            [
                'name' => 'Gambia',
                'iso_code_2' => 'GM',
                'iso_code_3' => 'GMB',
                'dial_code' => '220'
            ],
            [
                'name' => 'Georgia',
                'iso_code_2' => 'GE',
                'iso_code_3' => 'GEO',
                'dial_code' => '995'
            ],
            [
                'name' => 'Germany',
                'iso_code_2' => 'DE',
                'iso_code_3' => 'DEU',
                'dial_code' => '49'
            ],
            [
                'name' => 'Ghana',
                'iso_code_2' => 'GH',
                'iso_code_3' => 'GHA',
                'dial_code' => '233'
            ],
            [
                'name' => 'Gibraltar',
                'iso_code_2' => 'GI',
                'iso_code_3' => 'GIB',
                'dial_code' => '350'
            ],
            [
                'name' => 'Greece',
                'iso_code_2' => 'GR',
                'iso_code_3' => 'GRC',
                'dial_code' => '30'
            ],
            [
                'name' => 'Greenland',
                'iso_code_2' => 'GL',
                'iso_code_3' => 'GRL',
                'dial_code' => '299'
            ],
            [
                'name' => 'Grenada',
                'iso_code_2' => 'GD',
                'iso_code_3' => 'GRD',
                'dial_code' => '1-473'
            ],
            [
                'name' => 'Guam',
                'iso_code_2' => 'GU',
                'iso_code_3' => 'GUM',
                'dial_code' => '1-671'
            ],
            [
                'name' => 'Guatemala',
                'iso_code_2' => 'GT',
                'iso_code_3' => 'GTM',
                'dial_code' => '502'
            ],
            [
                'name' => 'Guernsey',
                'iso_code_2' => 'GG',
                'iso_code_3' => 'GGY',
                'dial_code' => '44-1481'
            ],
            [
                'name' => 'Guinea',
                'iso_code_2' => 'GN',
                'iso_code_3' => 'GIN',
                'dial_code' => '224'
            ],
            [
                'name' => 'Guinea-Bissau',
                'iso_code_2' => 'GW',
                'iso_code_3' => 'GNB',
                'dial_code' => '245'
            ],
            [
                'name' => 'Guyana',
                'iso_code_2' => 'GY',
                'iso_code_3' => 'GUY',
                'dial_code' => '592'
            ],
            [
                'name' => 'Haiti',
                'iso_code_2' => 'HT',
                'iso_code_3' => 'HTI',
                'dial_code' => '509'
            ],
            [
                'name' => 'Honduras',
                'iso_code_2' => 'HN',
                'iso_code_3' => 'HND',
                'dial_code' => '504'
            ],
            [
                'name' => 'Hong Kong',
                'iso_code_2' => 'HK',
                'iso_code_3' => 'HKG',
                'dial_code' => '852'
            ],
            [
                'name' => 'Hungary',
                'iso_code_2' => 'HU',
                'iso_code_3' => 'HUN',
                'dial_code' => '36'
            ],
            [
                'name' => 'Iceland',
                'iso_code_2' => 'IS',
                'iso_code_3' => 'ISL',
                'dial_code' => '354'
            ],
            [
                'name' => 'India',
                'iso_code_2' => 'IN',
                'iso_code_3' => 'IND',
                'dial_code' => '91'
            ],
            [
                'name' => 'Indonesia',
                'iso_code_2' => 'ID',
                'iso_code_3' => 'IDN',
                'dial_code' => '62'
            ],
            [
                'name' => 'Iran',
                'iso_code_2' => 'IR',
                'iso_code_3' => 'IRN',
                'dial_code' => '98'
            ],
            [
                'name' => 'Iraq',
                'iso_code_2' => 'IQ',
                'iso_code_3' => 'IRQ',
                'dial_code' => '964'
            ],
            [
                'name' => 'Ireland',
                'iso_code_2' => 'IE',
                'iso_code_3' => 'IRL',
                'dial_code' => '353'
            ],
            [
                'name' => 'Isle of Man',
                'iso_code_2' => 'IM',
                'iso_code_3' => 'IMN',
                'dial_code' => '441624'
            ],
            [
                'name' => 'Israel',
                'iso_code_2' => 'IL',
                'iso_code_3' => 'ISR',
                'dial_code' => '972'
            ],
            [
                'name' => 'Italy',
                'iso_code_2' => 'IT',
                'iso_code_3' => 'ITA',
                'dial_code' => '39'
            ],
            [
                'name' => 'Ivory Coast',
                'iso_code_2' => 'CI',
                'iso_code_3' => 'CIV',
                'dial_code' => '225'
            ],
            [
                'name' => 'Jamaica',
                'iso_code_2' => 'JM',
                'iso_code_3' => 'JAM',
                'dial_code' => '1-876'
            ],
            [
                'name' => 'Japan',
                'iso_code_2' => 'JPN',
                'iso_code_3' => 'JP',
                'dial_code' => '81'
            ],
            [
                'name' => 'Jersey',
                'iso_code_2' => 'JE',
                'iso_code_3' => 'JEY',
                'dial_code' => '44-1534'
            ],
            [
                'name' => 'Jordan',
                'iso_code_2' => 'JO',
                'iso_code_3' => 'JOR',
                'dial_code' => '962'
            ],
            [
                'name' => 'Kazakhstan',
                'iso_code_2' => 'KZ',
                'iso_code_3' => 'KAZ',
                'dial_code' => '7'
            ],
            [
                'name' => 'Kenya',
                'iso_code_2' => 'KE',
                'iso_code_3' => 'KEN',
                'dial_code' => '254'
            ],
            [
                'name' => 'Kiribati',
                'iso_code_2' => 'KI',
                'iso_code_3' => 'KIR',
                'dial_code' => '686'
            ],
            [
                'name' => 'Kosovo',
                'iso_code_2' => 'XK',
                'iso_code_3' => 'XKX',
                'dial_code' => '383'
            ],
            [
                'name' => 'Kuwait',
                'iso_code_2' => 'KW',
                'iso_code_3' => 'KWT',
                'dial_code' => '965'
            ],
            [
                'name' => 'Kyrgyzstan',
                'iso_code_2' => 'KG',
                'iso_code_3' => 'KGZ',
                'dial_code' => '996'
            ],
            [
                'name' => 'Laos',
                'iso_code_2' => 'LA',
                'iso_code_3' => 'LAO',
                'dial_code' => '856'
            ],
            [
                'name' => 'Latvia',
                'iso_code_2' => 'LV',
                'iso_code_3' => 'LVA',
                'dial_code' => '371'
            ],
            [
                'name' => 'Lebanon',
                'iso_code_2' => 'LB',
                'iso_code_3' => 'LBN',
                'dial_code' => '961'
            ],
            [
                'name' => 'Lesotho',
                'iso_code_2' => 'LS',
                'iso_code_3' => 'LSO',
                'dial_code' => '266'
            ],
            [
                'name' => 'Liberia',
                'iso_code_2' => 'LR',
                'iso_code_3' => 'LBR',
                'dial_code' => '231'
            ],
            [
                'name' => 'Libya',
                'iso_code_2' => 'LY',
                'iso_code_3' => 'LBY',
                'dial_code' => '218'
            ],
            [
                'name' => 'Liechtenstein',
                'iso_code_2' => 'LI',
                'iso_code_3' => 'LIE',
                'dial_code' => '423'
            ],
            [
                'name' => 'Lithuania',
                'iso_code_2' => 'LT',
                'iso_code_3' => 'LTU',
                'dial_code' => '370'
            ],
            [
                'name' => 'Luxembourg',
                'iso_code_2' => 'LU',
                'iso_code_3' => 'LUX',
                'dial_code' => '352'
            ],
            [
                'name' => 'Macau',
                'iso_code_2' => 'MO',
                'iso_code_3' => 'MAC',
                'dial_code' => '853'
            ],
            [
                'name' => 'Fyrom',
                'iso_code_2' => 'MK',
                'iso_code_3' => 'MKD',
                'dial_code' => '389'
            ],
            [
                'name' => 'Madagascar',
                'iso_code_2' => 'MG',
                'iso_code_3' => 'MDG',
                'dial_code' => '261'
            ],
            [
                'name' => 'Malawi',
                'iso_code_2' => 'MW',
                'iso_code_3' => 'MWI',
                'dial_code' => '265'
            ],
            [
                'name' => 'Malaysia',
                'iso_code_2' => 'MY',
                'iso_code_3' => 'MYS',
                'dial_code' => '60'
            ],
            [
                'name' => 'Maldives',
                'iso_code_2' => 'MV',
                'iso_code_3' => 'MDV',
                'dial_code' => '960'
            ],
            [
                'name' => 'Mali',
                'iso_code_2' => 'ML',
                'iso_code_3' => 'MLI',
                'dial_code' => '223'
            ],
            [
                'name' => 'Malta',
                'iso_code_2' => 'MT',
                'iso_code_3' => 'MLT',
                'dial_code' => '356'
            ],
            [
                'name' => 'Marshall Islands',
                'iso_code_2' => 'MH',
                'iso_code_3' => 'MHL',
                'dial_code' => '692'
            ],
            [
                'name' => 'Mauritania',
                'iso_code_2' => 'MR',
                'iso_code_3' => 'MRT',
                'dial_code' => '222'
            ],
            [
                'name' => 'Mauritius',
                'iso_code_2' => 'MU',
                'iso_code_3' => 'MUS',
                'dial_code' => '230'
            ],
            [
                'name' => 'Mayotte',
                'iso_code_2' => 'YT',
                'iso_code_3' => 'MYT',
                'dial_code' => '262'
            ],
            [
                'name' => 'Mexico',
                'iso_code_2' => 'MX',
                'iso_code_3' => 'MEX',
                'dial_code' => '52'
            ],
            [
                'name' => 'Micronesia',
                'iso_code_2' => 'FM',
                'iso_code_3' => 'FSM',
                'dial_code' => '691'
            ],
            [
                'name' => 'Moldova',
                'iso_code_2' => 'MD',
                'iso_code_3' => 'MDA',
                'dial_code' => '373'
            ],
            [
                'name' => 'Monaco',
                'iso_code_2' => 'MC',
                'iso_code_3' => 'MCO',
                'dial_code' => '377'
            ],
            [
                'name' => 'Mongolia',
                'iso_code_2' => 'MN',
                'iso_code_3' => 'MNG',
                'dial_code' => '976'
            ],
            [
                'name' => 'Montenegro',
                'iso_code_2' => 'ME',
                'iso_code_3' => 'MNE',
                'dial_code' => '382'
            ],
            [
                'name' => 'Montserrat',
                'iso_code_2' => 'MS',
                'iso_code_3' => 'MSR',
                'dial_code' => '1-664'
            ],
            [
                'name' => 'Morocco',
                'iso_code_2' => 'MA',
                'iso_code_3' => 'MAR',
                'dial_code' => '212'
            ],
            [
                'name' => 'Mozambique',
                'iso_code_2' => 'MZ',
                'iso_code_3' => 'MOZ',
                'dial_code' => '258'
            ],
            [
                'name' => 'Myanmar',
                'iso_code_2' => 'MM',
                'iso_code_3' => 'MMR',
                'dial_code' => '95'
            ],
            [
                'name' => 'Namibia',
                'iso_code_2' => 'NA',
                'iso_code_3' => 'NAM',
                'dial_code' => '264'
            ],
            [
                'name' => 'Nauru',
                'iso_code_2' => 'NR',
                'iso_code_3' => 'NRU',
                'dial_code' => '674'
            ],
            [
                'name' => 'Nepal',
                'iso_code_2' => 'NP',
                'iso_code_3' => 'NPL',
                'dial_code' => '977'
            ],
            [
                'name' => 'Netherlands',
                'iso_code_2' => 'NL',
                'iso_code_3' => 'NLD',
                'dial_code' => '31'
            ],
            [
                'name' => 'Netherlands Antilles',
                'iso_code_2' => 'AN',
                'iso_code_3' => 'ANT',
                'dial_code' => '599'
            ],
            [
                'name' => 'New Caledonia',
                'iso_code_2' => 'NC',
                'iso_code_3' => 'NCL',
                'dial_code' => '687'
            ],
            [
                'name' => 'New Zealand',
                'iso_code_2' => 'NZ',
                'iso_code_3' => 'NZL',
                'dial_code' => '64'
            ],
            [
                'name' => 'Nicaragua',
                'iso_code_2' => 'NC',
                'iso_code_3' => 'NIC',
                'dial_code' => '505'
            ],
            [
                'name' => 'Niger',
                'iso_code_2' => 'NE',
                'iso_code_3' => 'NER',
                'dial_code' => '227'
            ],
            [
                'name' => 'Nigeria',
                'iso_code_2' => 'NG',
                'iso_code_3' => 'NGA',
                'dial_code' => '234'
            ],
            [
                'name' => 'Niue',
                'iso_code_2' => 'NU',
                'iso_code_3' => 'NIU',
                'dial_code' => '683'
            ],
            [
                'name' => 'North Korea',
                'iso_code_2' => 'KP',
                'iso_code_3' => 'PRK',
                'dial_code' => '850'
            ],
            [
                'name' => 'Northern Mariana Islands',
                'iso_code_2' => 'MP',
                'iso_code_3' => 'MNP',
                'dial_code' => '1-670'
            ],
            [
                'name' => 'Norway',
                'iso_code_2' => 'NO',
                'iso_code_3' => 'NOR',
                'dial_code' => '47'
            ],
            [
                'name' => 'Oman',
                'iso_code_2' => 'OM',
                'iso_code_3' => 'OMN',
                'dial_code' => '968'
            ],
            [
                'name' => 'Pakistan',
                'iso_code_2' => 'PK',
                'iso_code_3' => 'PAK',
                'dial_code' => '92'
            ],
            [
                'name' => 'Palau',
                'iso_code_2' => 'PW',
                'iso_code_3' => 'PLW',
                'dial_code' => '680'
            ],
            [
                'name' => 'Palestine',
                'iso_code_2' => 'PS',
                'iso_code_3' => 'PSE',
                'dial_code' => '970'
            ],
            [
                'name' => 'Panama',
                'iso_code_2' => 'PA',
                'iso_code_3' => 'PAN',
                'dial_code' => '507'
            ],
            [
                'name' => 'Papua New Guinea',
                'iso_code_2' => 'PG',
                'iso_code_3' => 'PNG',
                'dial_code' => '675'
            ],
            [
                'name' => 'Paraguay',
                'iso_code_2' => 'PY',
                'iso_code_3' => 'PRY',
                'dial_code' => '595'
            ],
            [
                'name' => 'Peru',
                'iso_code_2' => 'PE',
                'iso_code_3' => 'PER',
                'dial_code' => '51'
            ],
            [
                'name' => 'Philippines',
                'iso_code_2' => 'PH',
                'iso_code_3' => 'PHL',
                'dial_code' => '63'
            ],
            [
                'name' => 'Pitcairn',
                'iso_code_2' => 'PN',
                'iso_code_3' => 'PCN',
                'dial_code' => '64'
            ],
            [
                'name' => 'Poland',
                'iso_code_2' => 'PL',
                'iso_code_3' => 'POL',
                'dial_code' => '48'
            ],
            [
                'name' => 'Portugal',
                'iso_code_2' => 'PT',
                'iso_code_3' => 'PRT',
                'dial_code' => '351'
            ],
            [
                'name' => 'Puerto Rico',
                'iso_code_2' => 'PR',
                'iso_code_3' => 'PRI',
                'dial_code' => '1-787, 1-939'
            ],
            [
                'name' => 'Qatar',
                'iso_code_2' => 'QA',
                'iso_code_3' => 'QAT',
                'dial_code' => '974'
            ],
            [
                'name' => 'Republic of the Congo',
                'iso_code_2' => 'CG',
                'iso_code_3' => 'COG',
                'dial_code' => '242'
            ],
            [
                'name' => 'Reunion',
                'iso_code_2' => 'RE',
                'iso_code_3' => 'REU',
                'dial_code' => '262'
            ],
            [
                'name' => 'Romania',
                'iso_code_2' => 'RO',
                'iso_code_3' => 'ROU',
                'dial_code' => '40'
            ],
            [
                'name' => 'Russia',
                'iso_code_2' => 'RU',
                'iso_code_3' => 'RUS',
                'dial_code' => '7'
            ],
            [
                'name' => 'Rwanda',
                'iso_code_2' => 'RW',
                'iso_code_3' => 'RWA',
                'dial_code' => '250'
            ],
            [
                'name' => 'Saint Barthelemy',
                'iso_code_2' => 'BL',
                'iso_code_3' => 'BLM',
                'dial_code' => '590'
            ],
            [
                'name' => 'Saint Helena',
                'iso_code_2' => 'SH',
                'iso_code_3' => 'SHN',
                'dial_code' => '290'
            ],
            [
                'name' => 'Saint Kitts and Nevis',
                'iso_code_2' => 'KN',
                'iso_code_3' => 'KNA',
                'dial_code' => '1-869'
            ],
            [
                'name' => 'Saint Lucia',
                'iso_code_2' => 'LC',
                'iso_code_3' => 'LCA',
                'dial_code' => '1-758'
            ],
            [
                'name' => 'Saint Martin',
                'iso_code_2' => 'MF',
                'iso_code_3' => 'MAF',
                'dial_code' => '590'
            ],
            [
                'name' => 'Saint Pierre and Miquelon',
                'iso_code_2' => 'PM',
                'iso_code_3' => 'SPM',
                'dial_code' => '508'
            ],
            [
                'name' => 'Saint Vincent and the Grenadines',
                'iso_code_2' => 'VC',
                'iso_code_3' => 'VCT',
                'dial_code' => '1-784'
            ],
            [
                'name' => 'Samoa',
                'iso_code_2' => 'WS',
                'iso_code_3' => 'WSM',
                'dial_code' => '685'
            ],
            [
                'name' => 'San Marino',
                'iso_code_2' => 'SM',
                'iso_code_3' => 'SMR',
                'dial_code' => '378'
            ],
            [
                'name' => 'Sao Tome and Principe',
                'iso_code_2' => 'ST',
                'iso_code_3' => 'STP',
                'dial_code' => '239'
            ],
            [
                'name' => 'Saudi Arabia',
                'iso_code_2' => 'SA',
                'iso_code_3' => 'SAU',
                'dial_code' => '966'
            ],
            [
                'name' => 'Senegal',
                'iso_code_2' => 'SN',
                'iso_code_3' => 'SEN',
                'dial_code' => '221'
            ],
            [
                'name' => 'Serbia',
                'iso_code_2' => 'RS',
                'iso_code_3' => 'SRB',
                'dial_code' => '381'
            ],
            [
                'name' => 'Seychelles',
                'iso_code_2' => 'SC',
                'iso_code_3' => 'SYC',
                'dial_code' => '248'
            ],
            [
                'name' => 'Sierra Leone',
                'iso_code_2' => 'SL',
                'iso_code_3' => 'SLE',
                'dial_code' => '232'
            ],
            [
                'name' => 'Singapore',
                'iso_code_2' => 'SG',
                'iso_code_3' => 'SGP',
                'dial_code' => '65'
            ],
            [
                'name' => 'Sint Maarten',
                'iso_code_2' => 'SX',
                'iso_code_3' => 'SXM',
                'dial_code' => '1-721'
            ],
            [
                'name' => 'Slovakia',
                'iso_code_2' => 'SK',
                'iso_code_3' => 'SVK',
                'dial_code' => '421'
            ],
            [
                'name' => 'Slovenia',
                'iso_code_2' => 'SI',
                'iso_code_3' => 'SVN',
                'dial_code' => '386'
            ],
            [
                'name' => 'Solomon Islands',
                'iso_code_2' => 'SB',
                'iso_code_3' => 'SLB',
                'dial_code' => '677'
            ],
            [
                'name' => 'Somalia',
                'iso_code_2' => 'SO',
                'iso_code_3' => 'SOM',
                'dial_code' => '252'
            ],
            [
                'name' => 'South Africa',
                'iso_code_2' => 'ZA',
                'iso_code_3' => 'ZAF',
                'dial_code' => '27'
            ],
            [
                'name' => 'South Korea',
                'iso_code_2' => 'KR',
                'iso_code_3' => 'KOR',
                'dial_code' => '82'
            ],
            [
                'name' => 'South Sudan',
                'iso_code_2' => 'SS',
                'iso_code_3' => 'SSD',
                'dial_code' => '211'
            ],
            [
                'name' => 'Spain',
                'iso_code_2' => 'ES',
                'iso_code_3' => 'ESP',
                'dial_code' => '34'
            ],
            [
                'name' => 'Sri Lanka',
                'iso_code_2' => 'LK',
                'iso_code_3' => 'LKA',
                'dial_code' => '94'
            ],
            [
                'name' => 'Sudan',
                'iso_code_2' => 'SD',
                'iso_code_3' => 'SDN',
                'dial_code' => '249'
            ],
            [
                'name' => 'Suriname',
                'iso_code_2' => 'SR',
                'iso_code_3' => 'SUR',
                'dial_code' => '597'
            ],
            [
                'name' => 'Svalbard and Jan Mayen',
                'iso_code_2' => 'SJ',
                'iso_code_3' => 'SJM',
                'dial_code' => '47'
            ],
            [
                'name' => 'Swaziland',
                'iso_code_2' => 'SZ',
                'iso_code_3' => 'SWZ',
                'dial_code' => '268'
            ],
            [
                'name' => 'Sweden',
                'iso_code_2' => 'SE',
                'iso_code_3' => 'SWE',
                'dial_code' => '46'
            ],
            [
                'name' => 'Switzerland',
                'iso_code_2' => 'CH',
                'iso_code_3' => 'CHE',
                'dial_code' => '41'
            ],
            [
                'name' => 'Syria',
                'iso_code_2' => 'SY',
                'iso_code_3' => 'SYR',
                'dial_code' => '963'
            ],
            [
                'name' => 'Taiwan',
                'iso_code_2' => 'TW',
                'iso_code_3' => 'TWN',
                'dial_code' => '886'
            ],
            [
                'name' => 'Tajikistan',
                'iso_code_2' => 'TJ',
                'iso_code_3' => 'TJK',
                'dial_code' => '992'
            ],
            [
                'name' => 'Tanzania',
                'iso_code_2' => 'TZ',
                'iso_code_3' => 'TZA',
                'dial_code' => '255'
            ],
            [
                'name' => 'Thailand',
                'iso_code_2' => 'TH',
                'iso_code_3' => 'THA',
                'dial_code' => '66'
            ],
            [
                'name' => 'Togo',
                'iso_code_2' => 'TG',
                'iso_code_3' => 'TGO',
                'dial_code' => '228'
            ],
            [
                'name' => 'Tokelau',
                'iso_code_2' => 'TK',
                'iso_code_3' => 'TKL',
                'dial_code' => '690'
            ],
            [
                'name' => 'Tonga',
                'iso_code_2' => 'TO',
                'iso_code_3' => 'TON',
                'dial_code' => '676'
            ],
            [
                'name' => 'Trinidad & Tobago',
                'iso_code_2' => 'TT',
                'iso_code_3' => 'TTO',
                'dial_code' => '1-868'
            ],
            [
                'name' => 'Tunisia',
                'iso_code_2' => 'TN',
                'iso_code_3' => 'TUN',
                'dial_code' => '216'
            ],
            [
                'name' => 'Turkey',
                'iso_code_2' => 'TR',
                'iso_code_3' => 'TUR',
                'dial_code' => '90'
            ],
            [
                'name' => 'Turkmenistan',
                'iso_code_2' => 'TM',
                'iso_code_3' => 'TKM',
                'dial_code' => '993'
            ],
            [
                'name' => 'Turks and Caicos Islands',
                'iso_code_2' => 'TC',
                'iso_code_3' => 'TCA',
                'dial_code' => '1-649'
            ],
            [
                'name' => 'Tuvalu',
                'iso_code_2' => 'TV',
                'iso_code_3' => 'TUV',
                'dial_code' => '688'
            ],
            [
                'name' => 'U.S. Virgin Islands',
                'iso_code_2' => 'VI',
                'iso_code_3' => 'VIR',
                'dial_code' => '1-340'
            ],
            [
                'name' => 'Uganda',
                'iso_code_2' => 'UG',
                'iso_code_3' => 'UGA',
                'dial_code' => '256'
            ],
            [
                'name' => 'Ukraine',
                'iso_code_2' => 'UA',
                'iso_code_3' => 'UKR',
                'dial_code' => '380'
            ],
            [
                'name' => 'United Arab Emirates',
                'iso_code_2' => 'AE',
                'iso_code_3' => 'ARE',
                'dial_code' => '971'
            ],
            [
                'name' => 'United Kingdom',
                'iso_code_2' => 'GB',
                'iso_code_3' => 'GBR',
                'dial_code' => '44'
            ],
            [
                'name' => 'United States',
                'iso_code_2' => 'US',
                'iso_code_3' => 'USA',
                'dial_code' => '1-'
            ],
            [
                'name' => 'Uruguay',
                'iso_code_2' => 'UY',
                'iso_code_3' => 'URY',
                'dial_code' => '598'
            ],
            [
                'name' => 'Uzbekistan',
                'iso_code_2' => 'UZ',
                'iso_code_3' => 'UZB',
                'dial_code' => '998'
            ],
            [
                'name' => 'Vanuatu',
                'iso_code_2' => 'VU',
                'iso_code_3' => 'VUT',
                'dial_code' => '678'
            ],
            [
                'name' => 'Vatican',
                'iso_code_2' => 'VA',
                'iso_code_3' => 'VAT',
                'dial_code' => '379'
            ],
            [
                'name' => 'Venezuela',
                'iso_code_2' => 'VE',
                'iso_code_3' => 'VEN',
                'dial_code' => '58'
            ],
            [
                'name' => 'Vietnam',
                'iso_code_2' => 'VN',
                'iso_code_3' => 'VNM',
                'dial_code' => '84'
            ],
            [
                'name' => 'Wallis and Futuna',
                'iso_code_2' => 'WF',
                'iso_code_3' => 'WLF',
                'dial_code' => '681'
            ],
            [
                'name' => 'Western Sahara',
                'iso_code_2' => 'EH',
                'iso_code_3' => 'ESH',
                'dial_code' => '212'
            ],
            [
                'name' => 'Yemen',
                'iso_code_2' => 'YE',
                'iso_code_3' => 'YEM',
                'dial_code' => '967'
            ],
            [
                'name' => 'Zambia',
                'iso_code_2' => 'ZM',
                'iso_code_3' => 'ZMB',
                'dial_code' => '260'
            ],
            [
                'name' => 'Zimbabwe',
                'iso_code_2' => 'ZW',
                'iso_code_3' => 'ZWE',
                'dial_code' => '263'
            ],
        ];

        DB::table('countries')->truncate();

        Country::insert($countries);
    }
}
