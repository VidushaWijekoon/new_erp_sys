<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->truncate();

        $countries = [
            ['id' => '1', 'phone_code' => '93', 'country_code' => 'AF', 'country_name' => 'Afghanistan'],
            ['id' => '2', 'phone_code' => '358', 'country_code' => 'AX', 'country_name' => 'Aland Islands'],
            ['id' => '3', 'phone_code' => '355', 'country_code' => 'AL', 'country_name' => 'Albania'],
            ['id' => '4', 'phone_code' => '213', 'country_code' => 'DZ', 'country_name' => 'Algeria'],
            ['id' => '5', 'phone_code' => '1684', 'country_code' => 'AS', 'country_name' => 'American Samoa'],
            ['id' => '6', 'phone_code' => '376', 'country_code' => 'AD', 'country_name' => 'Andorra'],
            ['id' => '7', 'phone_code' => '244', 'country_code' => 'AO', 'country_name' => 'Angola'],
            ['id' => '8', 'phone_code' => '1264', 'country_code' => 'AI', 'country_name' => 'Anguilla'],
            ['id' => '9', 'phone_code' => '672', 'country_code' => 'AQ', 'country_name' => 'Antarctica'],
            ['id' => '10', 'phone_code' => '1268', 'country_code' => 'AG', 'country_name' => 'Antigua and Barbuda'],
            ['id' => '11', 'phone_code' => '54', 'country_code' => 'AR', 'country_name' => 'Argentina'],
            ['id' => '12', 'phone_code' => '374', 'country_code' => 'AM', 'country_name' => 'Armenia'],
            ['id' => '13', 'phone_code' => '297', 'country_code' => 'AW', 'country_name' => 'Aruba'],
            ['id' => '14', 'phone_code' => '61', 'country_code' => 'AU', 'country_name' => 'Australia'],
            ['id' => '15', 'phone_code' => '43', 'country_code' => 'AT', 'country_name' => 'Austria'],
            ['id' => '16', 'phone_code' => '994', 'country_code' => 'AZ', 'country_name' => 'Azerbaijan'],
            ['id' => '17', 'phone_code' => '1242', 'country_code' => 'BS', 'country_name' => 'Bahamas'],
            ['id' => '18', 'phone_code' => '973', 'country_code' => 'BH', 'country_name' => 'Bahrain'],
            ['id' => '19', 'phone_code' => '880', 'country_code' => 'BD', 'country_name' => 'Bangladesh'],
            ['id' => '20', 'phone_code' => '1246', 'country_code' => 'BB', 'country_name' => 'Barbados'],
            ['id' => '21', 'phone_code' => '375', 'country_code' => 'BY', 'country_name' => 'Belarus'],
            ['id' => '22', 'phone_code' => '32', 'country_code' => 'BE', 'country_name' => 'Belgium'],
            ['id' => '23', 'phone_code' => '501', 'country_code' => 'BZ', 'country_name' => 'Belize'],
            ['id' => '24', 'phone_code' => '229', 'country_code' => 'BJ', 'country_name' => 'Benin'],
            ['id' => '25', 'phone_code' => '1441', 'country_code' => 'BM', 'country_name' => 'Bermuda'],
            ['id' => '26', 'phone_code' => '975', 'country_code' => 'BT', 'country_name' => 'Bhutan'],
            ['id' => '27', 'phone_code' => '591', 'country_code' => 'BO', 'country_name' => 'Bolivia'],
            ['id' => '28', 'phone_code' => '599', 'country_code' => 'BQ', 'country_name' => 'Bonaire, Sint Eustatius and Saba'],
            ['id' => '29', 'phone_code' => '387', 'country_code' => 'BA', 'country_name' => 'Bosnia and Herzegovina'],
            ['id' => '30', 'phone_code' => '267', 'country_code' => 'BW', 'country_name' => 'Botswana'],
            ['id' => '31', 'phone_code' => '55', 'country_code' => 'BV', 'country_name' => 'Bouvet Island'],
            ['id' => '32', 'phone_code' => '55', 'country_code' => 'BR', 'country_name' => 'Brazil'],
            ['id' => '33', 'phone_code' => '246', 'country_code' => 'IO', 'country_name' => 'British Indian Ocean Territory'],
            ['id' => '34', 'phone_code' => '673', 'country_code' => 'BN', 'country_name' => 'Brunei Darussalam'],
            ['id' => '35', 'phone_code' => '359', 'country_code' => 'BG', 'country_name' => 'Bulgaria'],
            ['id' => '36', 'phone_code' => '226', 'country_code' => 'BF', 'country_name' => 'Burkina Faso'],
            ['id' => '37', 'phone_code' => '257', 'country_code' => 'BI', 'country_name' => 'Burundi'],
            ['id' => '38', 'phone_code' => '855', 'country_code' => 'KH', 'country_name' => 'Cambodia'],
            ['id' => '39', 'phone_code' => '237', 'country_code' => 'CM', 'country_name' => 'Cameroon'],
            ['id' => '40', 'phone_code' => '1', 'country_code' => 'CA', 'country_name' => 'Canada'],
            ['id' => '41', 'phone_code' => '238', 'country_code' => 'CV', 'country_name' => 'Cape Verde'],
            ['id' => '42', 'phone_code' => '1345', 'country_code' => 'KY', 'country_name' => 'Cayman Islands'],
            ['id' => '43', 'phone_code' => '236', 'country_code' => 'CF', 'country_name' => 'Central African Republic'],
            ['id' => '44', 'phone_code' => '235', 'country_code' => 'TD', 'country_name' => 'Chad'],
            ['id' => '45', 'phone_code' => '56', 'country_code' => 'CL', 'country_name' => 'Chile'],
            ['id' => '46', 'phone_code' => '86', 'country_code' => 'CN', 'country_name' => 'China'],
            ['id' => '47', 'phone_code' => '61', 'country_code' => 'CX', 'country_name' => 'Christmas Island'],
            ['id' => '48', 'phone_code' => '672', 'country_code' => 'CC', 'country_name' => 'Cocos (Keeling] Islands'],
            ['id' => '49', 'phone_code' => '57', 'country_code' => 'CO', 'country_name' => 'Colombia'],
            ['id' => '50', 'phone_code' => '269', 'country_code' => 'KM', 'country_name' => 'Comoros'],
            ['id' => '51', 'phone_code' => '242', 'country_code' => 'CG', 'country_name' => 'Congo'],
            ['id' => '52', 'phone_code' => '242', 'country_code' => 'CD', 'country_name' => 'Congo, Democratic Republic of the Congo'],
            ['id' => '53', 'phone_code' => '682', 'country_code' => 'CK', 'country_name' => 'Cook Islands'],
            ['id' => '54', 'phone_code' => '506', 'country_code' => 'CR', 'country_name' => 'Costa Rica'],
            ['id' => '55', 'phone_code' => '225', 'country_code' => 'CI', 'country_name' => 'Cote D\'Ivoire'],
            ['id' => '56', 'phone_code' => '385', 'country_code' => 'HR', 'country_name' => 'Croatia'],
            ['id' => '57', 'phone_code' => '53', 'country_code' => 'CU', 'country_name' => 'Cuba'],
            ['id' => '58', 'phone_code' => '599', 'country_code' => 'CW', 'country_name' => 'Curacao'],
            ['id' => '59', 'phone_code' => '357', 'country_code' => 'CY', 'country_name' => 'Cyprus'],
            ['id' => '60', 'phone_code' => '420', 'country_code' => 'CZ', 'country_name' => 'Czech Republic'],
            ['id' => '61', 'phone_code' => '45', 'country_code' => 'DK', 'country_name' => 'Denmark'],
            ['id' => '62', 'phone_code' => '253', 'country_code' => 'DJ', 'country_name' => 'Djibouti'],
            ['id' => '63', 'phone_code' => '1767', 'country_code' => 'DM', 'country_name' => 'Dominica'],
            ['id' => '64', 'phone_code' => '1809', 'country_code' => 'DO', 'country_name' => 'Dominican Republic'],
            ['id' => '65', 'phone_code' => '593', 'country_code' => 'EC', 'country_name' => 'Ecuador'],
            ['id' => '66', 'phone_code' => '20', 'country_code' => 'EG', 'country_name' => 'Egypt'],
            ['id' => '67', 'phone_code' => '503', 'country_code' => 'SV', 'country_name' => 'El Salvador'],
            ['id' => '68', 'phone_code' => '240', 'country_code' => 'GQ', 'country_name' => 'Equatorial Guinea'],
            ['id' => '69', 'phone_code' => '291', 'country_code' => 'ER', 'country_name' => 'Eritrea'],
            ['id' => '70', 'phone_code' => '372', 'country_code' => 'EE', 'country_name' => 'Estonia'],
            ['id' => '71', 'phone_code' => '251', 'country_code' => 'ET', 'country_name' => 'Ethiopia'],
            ['id' => '72', 'phone_code' => '500', 'country_code' => 'FK', 'country_name' => 'Falkland Islands (Malvinas]'],
            ['id' => '73', 'phone_code' => '298', 'country_code' => 'FO', 'country_name' => 'Faroe Islands'],
            ['id' => '74', 'phone_code' => '679', 'country_code' => 'FJ', 'country_name' => 'Fiji'],
            ['id' => '75', 'phone_code' => '358', 'country_code' => 'FI', 'country_name' => 'Finland'],
            ['id' => '76', 'phone_code' => '33', 'country_code' => 'FR', 'country_name' => 'France'],
            ['id' => '77', 'phone_code' => '594', 'country_code' => 'GF', 'country_name' => 'French Guiana'],
            ['id' => '78', 'phone_code' => '689', 'country_code' => 'PF', 'country_name' => 'French Polynesia'],
            ['id' => '79', 'phone_code' => '262', 'country_code' => 'TF', 'country_name' => 'French Southern Territories'],
            ['id' => '80', 'phone_code' => '241', 'country_code' => 'GA', 'country_name' => 'Gabon'],
            ['id' => '81', 'phone_code' => '220', 'country_code' => 'GM', 'country_name' => 'Gambia'],
            ['id' => '82', 'phone_code' => '995', 'country_code' => 'GE', 'country_name' => 'Georgia'],
            ['id' => '83', 'phone_code' => '49', 'country_code' => 'DE', 'country_name' => 'Germany'],
            ['id' => '84', 'phone_code' => '233', 'country_code' => 'GH', 'country_name' => 'Ghana'],
            ['id' => '85', 'phone_code' => '350', 'country_code' => 'GI', 'country_name' => 'Gibraltar'],
            ['id' => '86', 'phone_code' => '30', 'country_code' => 'GR', 'country_name' => 'Greece'],
            ['id' => '87', 'phone_code' => '299', 'country_code' => 'GL', 'country_name' => 'Greenland'],
            ['id' => '88', 'phone_code' => '1473', 'country_code' => 'GD', 'country_name' => 'Grenada'],
            ['id' => '89', 'phone_code' => '590', 'country_code' => 'GP', 'country_name' => 'Guadeloupe'],
            ['id' => '90', 'phone_code' => '1671', 'country_code' => 'GU', 'country_name' => 'Guam'],
            ['id' => '91', 'phone_code' => '502', 'country_code' => 'GT', 'country_name' => 'Guatemala'],
            ['id' => '92', 'phone_code' => '44', 'country_code' => 'GG', 'country_name' => 'Guernsey'],
            ['id' => '93', 'phone_code' => '224', 'country_code' => 'GN', 'country_name' => 'Guinea'],
            ['id' => '94', 'phone_code' => '245', 'country_code' => 'GW', 'country_name' => 'Guinea-Bissau'],
            ['id' => '95', 'phone_code' => '592', 'country_code' => 'GY', 'country_name' => 'Guyana'],
            ['id' => '96', 'phone_code' => '509', 'country_code' => 'HT', 'country_name' => 'Haiti'],
            ['id' => '97', 'phone_code' => '0', 'country_code' => 'HM', 'country_name' => 'Heard Island and Mcdonald Islands'],
            ['id' => '98', 'phone_code' => '39', 'country_code' => 'VA', 'country_name' => 'Holy See (Vatican City State]'],
            ['id' => '99', 'phone_code' => '504', 'country_code' => 'HN', 'country_name' => 'Honduras'],
            ['id' => '100', 'phone_code' => '852', 'country_code' => 'HK', 'country_name' => 'Hong Kong'],
            ['id' => '101', 'phone_code' => '36', 'country_code' => 'HU', 'country_name' => 'Hungary'],
            ['id' => '102', 'phone_code' => '354', 'country_code' => 'IS', 'country_name' => 'Iceland'],
            ['id' => '103', 'phone_code' => '91', 'country_code' => 'IN', 'country_name' => 'India'],
            ['id' => '104', 'phone_code' => '62', 'country_code' => 'ID', 'country_name' => 'Indonesia'],
            ['id' => '105', 'phone_code' => '98', 'country_code' => 'IR', 'country_name' => 'Iran, Islamic Republic of'],
            ['id' => '106', 'phone_code' => '964', 'country_code' => 'IQ', 'country_name' => 'Iraq'],
            ['id' => '107', 'phone_code' => '353', 'country_code' => 'IE', 'country_name' => 'Ireland'],
            ['id' => '108', 'phone_code' => '44', 'country_code' => 'IM', 'country_name' => 'Isle of Man'],
            ['id' => '109', 'phone_code' => '972', 'country_code' => 'IL', 'country_name' => 'Israel'],
            ['id' => '110', 'phone_code' => '39', 'country_code' => 'IT', 'country_name' => 'Italy'],
            ['id' => '111', 'phone_code' => '1876', 'country_code' => 'JM', 'country_name' => 'Jamaica'],
            ['id' => '112', 'phone_code' => '81', 'country_code' => 'JP', 'country_name' => 'Japan'],
            ['id' => '113', 'phone_code' => '44', 'country_code' => 'JE', 'country_name' => 'Jersey'],
            ['id' => '114', 'phone_code' => '962', 'country_code' => 'JO', 'country_name' => 'Jordan'],
            ['id' => '115', 'phone_code' => '7', 'country_code' => 'KZ', 'country_name' => 'Kazakhstan'],
            ['id' => '116', 'phone_code' => '254', 'country_code' => 'KE', 'country_name' => 'Kenya'],
            ['id' => '117', 'phone_code' => '686', 'country_code' => 'KI', 'country_name' => 'Kiribati'],
            ['id' => '118', 'phone_code' => '850', 'country_code' => 'KP', 'country_name' => 'Korea, Democratic People\'s Republic of'],
            ['id' => '119', 'phone_code' => '82', 'country_code' => 'KR', 'country_name' => 'Korea, Republic of'],
            ['id' => '120', 'phone_code' => '381', 'country_code' => 'XK', 'country_name' => 'Kosovo'],
            ['id' => '121', 'phone_code' => '965', 'country_code' => 'KW', 'country_name' => 'Kuwait'],
            ['id' => '122', 'phone_code' => '996', 'country_code' => 'KG', 'country_name' => 'Kyrgyzstan'],
            ['id' => '123', 'phone_code' => '856', 'country_code' => 'LA', 'country_name' => 'Lao People\'s Democratic Republic'],
            ['id' => '124', 'phone_code' => '371', 'country_code' => 'LV', 'country_name' => 'Latvia'],
            ['id' => '125', 'phone_code' => '961', 'country_code' => 'LB', 'country_name' => 'Lebanon'],
            ['id' => '126', 'phone_code' => '266', 'country_code' => 'LS', 'country_name' => 'Lesotho'],
            ['id' => '127', 'phone_code' => '231', 'country_code' => 'LR', 'country_name' => 'Liberia'],
            ['id' => '128', 'phone_code' => '218', 'country_code' => 'LY', 'country_name' => 'Libyan Arab Jamahiriya'],
            ['id' => '129', 'phone_code' => '423', 'country_code' => 'LI', 'country_name' => 'Liechtenstein'],
            ['id' => '130', 'phone_code' => '370', 'country_code' => 'LT', 'country_name' => 'Lithuania'],
            ['id' => '131', 'phone_code' => '352', 'country_code' => 'LU', 'country_name' => 'Luxembourg'],
            ['id' => '132', 'phone_code' => '853', 'country_code' => 'MO', 'country_name' => 'Macao'],
            ['id' => '133', 'phone_code' => '389', 'country_code' => 'MK', 'country_name' => 'Macedonia, the Former Yugoslav Republic of'],
            ['id' => '134', 'phone_code' => '261', 'country_code' => 'MG', 'country_name' => 'Madagascar'],
            ['id' => '135', 'phone_code' => '265', 'country_code' => 'MW', 'country_name' => 'Malawi'],
            ['id' => '136', 'phone_code' => '60', 'country_code' => 'MY', 'country_name' => 'Malaysia'],
            ['id' => '137', 'phone_code' => '960', 'country_code' => 'MV', 'country_name' => 'Maldives'],
            ['id' => '138', 'phone_code' => '223', 'country_code' => 'ML', 'country_name' => 'Mali'],
            ['id' => '139', 'phone_code' => '356', 'country_code' => 'MT', 'country_name' => 'Malta'],
            ['id' => '140', 'phone_code' => '692', 'country_code' => 'MH', 'country_name' => 'Marshall Islands'],
            ['id' => '141', 'phone_code' => '596', 'country_code' => 'MQ', 'country_name' => 'Martinique'],
            ['id' => '142', 'phone_code' => '222', 'country_code' => 'MR', 'country_name' => 'Mauritania'],
            ['id' => '143', 'phone_code' => '230', 'country_code' => 'MU', 'country_name' => 'Mauritius'],
            ['id' => '144', 'phone_code' => '269', 'country_code' => 'YT', 'country_name' => 'Mayotte'],
            ['id' => '145', 'phone_code' => '52', 'country_code' => 'MX', 'country_name' => 'Mexico'],
            ['id' => '146', 'phone_code' => '691', 'country_code' => 'FM', 'country_name' => 'Micronesia, Federated States of'],
            ['id' => '147', 'phone_code' => '373', 'country_code' => 'MD', 'country_name' => 'Moldova, Republic of'],
            ['id' => '148', 'phone_code' => '377', 'country_code' => 'MC', 'country_name' => 'Monaco'],
            ['id' => '149', 'phone_code' => '976', 'country_code' => 'MN', 'country_name' => 'Mongolia'],
            ['id' => '150', 'phone_code' => '382', 'country_code' => 'ME', 'country_name' => 'Montenegro'],
            ['id' => '151', 'phone_code' => '1664', 'country_code' => 'MS', 'country_name' => 'Montserrat'],
            ['id' => '152', 'phone_code' => '212', 'country_code' => 'MA', 'country_name' => 'Morocco'],
            ['id' => '153', 'phone_code' => '258', 'country_code' => 'MZ', 'country_name' => 'Mozambique'],
            ['id' => '154', 'phone_code' => '95', 'country_code' => 'MM', 'country_name' => 'Myanmar'],
            ['id' => '155', 'phone_code' => '264', 'country_code' => 'NA', 'country_name' => 'Namibia'],
            ['id' => '156', 'phone_code' => '674', 'country_code' => 'NR', 'country_name' => 'Nauru'],
            ['id' => '157', 'phone_code' => '977', 'country_code' => 'NP', 'country_name' => 'Nepal'],
            ['id' => '158', 'phone_code' => '31', 'country_code' => 'NL', 'country_name' => 'Netherlands'],
            ['id' => '159', 'phone_code' => '599', 'country_code' => 'AN', 'country_name' => 'Netherlands Antilles'],
            ['id' => '160', 'phone_code' => '687', 'country_code' => 'NC', 'country_name' => 'New Caledonia'],
            ['id' => '161', 'phone_code' => '64', 'country_code' => 'NZ', 'country_name' => 'New Zealand'],
            ['id' => '162', 'phone_code' => '505', 'country_code' => 'NI', 'country_name' => 'Nicaragua'],
            ['id' => '163', 'phone_code' => '227', 'country_code' => 'NE', 'country_name' => 'Niger'],
            ['id' => '164', 'phone_code' => '234', 'country_code' => 'NG', 'country_name' => 'Nigeria'],
            ['id' => '165', 'phone_code' => '683', 'country_code' => 'NU', 'country_name' => 'Niue'],
            ['id' => '166', 'phone_code' => '672', 'country_code' => 'NF', 'country_name' => 'Norfolk Island'],
            ['id' => '167', 'phone_code' => '1670', 'country_code' => 'MP', 'country_name' => 'Northern Mariana Islands'],
            ['id' => '168', 'phone_code' => '47', 'country_code' => 'NO', 'country_name' => 'Norway'],
            ['id' => '169', 'phone_code' => '968', 'country_code' => 'OM', 'country_name' => 'Oman'],
            ['id' => '170', 'phone_code' => '92', 'country_code' => 'PK', 'country_name' => 'Pakistan'],
            ['id' => '171', 'phone_code' => '680', 'country_code' => 'PW', 'country_name' => 'Palau'],
            ['id' => '172', 'phone_code' => '970', 'country_code' => 'PS', 'country_name' => 'Palestinian Territory, Occupied'],
            ['id' => '173', 'phone_code' => '507', 'country_code' => 'PA', 'country_name' => 'Panama'],
            ['id' => '174', 'phone_code' => '675', 'country_code' => 'PG', 'country_name' => 'Papua New Guinea'],
            ['id' => '175', 'phone_code' => '595', 'country_code' => 'PY', 'country_name' => 'Paraguay'],
            ['id' => '176', 'phone_code' => '51', 'country_code' => 'PE', 'country_name' => 'Peru'],
            ['id' => '177', 'phone_code' => '63', 'country_code' => 'PH', 'country_name' => 'Philippines'],
            ['id' => '178', 'phone_code' => '64', 'country_code' => 'PN', 'country_name' => 'Pitcairn'],
            ['id' => '179', 'phone_code' => '48', 'country_code' => 'PL', 'country_name' => 'Poland'],
            ['id' => '180', 'phone_code' => '351', 'country_code' => 'PT', 'country_name' => 'Portugal'],
            ['id' => '181', 'phone_code' => '1787', 'country_code' => 'PR', 'country_name' => 'Puerto Rico'],
            ['id' => '182', 'phone_code' => '974', 'country_code' => 'QA', 'country_name' => 'Qatar'],
            ['id' => '183', 'phone_code' => '262', 'country_code' => 'RE', 'country_name' => 'Reunion'],
            ['id' => '184', 'phone_code' => '40', 'country_code' => 'RO', 'country_name' => 'Romania'],
            ['id' => '185', 'phone_code' => '70', 'country_code' => 'RU', 'country_name' => 'Russian Federation'],
            ['id' => '186', 'phone_code' => '250', 'country_code' => 'RW', 'country_name' => 'Rwanda'],
            ['id' => '187', 'phone_code' => '590', 'country_code' => 'BL', 'country_name' => 'Saint Barthelemy'],
            ['id' => '188', 'phone_code' => '290', 'country_code' => 'SH', 'country_name' => 'Saint Helena'],
            ['id' => '189', 'phone_code' => '1869', 'country_code' => 'KN', 'country_name' => 'Saint Kitts and Nevis'],
            ['id' => '190', 'phone_code' => '1758', 'country_code' => 'LC', 'country_name' => 'Saint Lucia'],
            ['id' => '191', 'phone_code' => '590', 'country_code' => 'MF', 'country_name' => 'Saint Martin'],
            ['id' => '192', 'phone_code' => '508', 'country_code' => 'PM', 'country_name' => 'Saint Pierre and Miquelon'],
            ['id' => '193', 'phone_code' => '1784', 'country_code' => 'VC', 'country_name' => 'Saint Vincent and the Grenadines'],
            ['id' => '194', 'phone_code' => '684', 'country_code' => 'WS', 'country_name' => 'Samoa'],
            ['id' => '195', 'phone_code' => '378', 'country_code' => 'SM', 'country_name' => 'San Marino'],
            ['id' => '196', 'phone_code' => '239', 'country_code' => 'ST', 'country_name' => 'Sao Tome and Principe'],
            ['id' => '197', 'phone_code' => '966', 'country_code' => 'SA', 'country_name' => 'Saudi Arabia'],
            ['id' => '198', 'phone_code' => '221', 'country_code' => 'SN', 'country_name' => 'Senegal'],
            ['id' => '199', 'phone_code' => '381', 'country_code' => 'RS', 'country_name' => 'Serbia'],
            ['id' => '200', 'phone_code' => '381', 'country_code' => 'CS', 'country_name' => 'Serbia and Montenegro'],
            ['id' => '201', 'phone_code' => '248', 'country_code' => 'SC', 'country_name' => 'Seychelles'],
            ['id' => '202', 'phone_code' => '232', 'country_code' => 'SL', 'country_name' => 'Sierra Leone'],
            ['id' => '203', 'phone_code' => '65', 'country_code' => 'SG', 'country_name' => 'Singapore'],
            ['id' => '204', 'phone_code' => '1', 'country_code' => 'SX', 'country_name' => 'Sint Maarten'],
            ['id' => '205', 'phone_code' => '421', 'country_code' => 'SK', 'country_name' => 'Slovakia'],
            ['id' => '206', 'phone_code' => '386', 'country_code' => 'SI', 'country_name' => 'Slovenia'],
            ['id' => '207', 'phone_code' => '677', 'country_code' => 'SB', 'country_name' => 'Solomon Islands'],
            ['id' => '208', 'phone_code' => '252', 'country_code' => 'SO', 'country_name' => 'Somalia'],
            ['id' => '209', 'phone_code' => '27', 'country_code' => 'ZA', 'country_name' => 'South Africa'],
            ['id' => '210', 'phone_code' => '500', 'country_code' => 'GS', 'country_name' => 'South Georgia and the South Sandwich Islands'],
            ['id' => '211', 'phone_code' => '211', 'country_code' => 'SS', 'country_name' => 'South Sudan'],
            ['id' => '212', 'phone_code' => '34', 'country_code' => 'ES', 'country_name' => 'Spain'],
            ['id' => '213', 'phone_code' => '94', 'country_code' => 'LK', 'country_name' => 'Sri Lanka'],
            ['id' => '214', 'phone_code' => '249', 'country_code' => 'SD', 'country_name' => 'Sudan'],
            ['id' => '215', 'phone_code' => '597', 'country_code' => 'SR', 'country_name' => 'Suriname'],
            ['id' => '216', 'phone_code' => '47', 'country_code' => 'SJ', 'country_name' => 'Svalbard and Jan Mayen'],
            ['id' => '217', 'phone_code' => '268', 'country_code' => 'SZ', 'country_name' => 'Swaziland'],
            ['id' => '218', 'phone_code' => '46', 'country_code' => 'SE', 'country_name' => 'Sweden'],
            ['id' => '219', 'phone_code' => '41', 'country_code' => 'CH', 'country_name' => 'Switzerland'],
            ['id' => '220', 'phone_code' => '963', 'country_code' => 'SY', 'country_name' => 'Syrian Arab Republic'],
            ['id' => '221', 'phone_code' => '886', 'country_code' => 'TW', 'country_name' => 'Taiwan, Province of China'],
            ['id' => '222', 'phone_code' => '992', 'country_code' => 'TJ', 'country_name' => 'Tajikistan'],
            ['id' => '223', 'phone_code' => '255', 'country_code' => 'TZ', 'country_name' => 'Tanzania, United Republic of'],
            ['id' => '224', 'phone_code' => '66', 'country_code' => 'TH', 'country_name' => 'Thailand'],
            ['id' => '225', 'phone_code' => '670', 'country_code' => 'TL', 'country_name' => 'Timor-Leste'],
            ['id' => '226', 'phone_code' => '228', 'country_code' => 'TG', 'country_name' => 'Togo'],
            ['id' => '227', 'phone_code' => '690', 'country_code' => 'TK', 'country_name' => 'Tokelau'],
            ['id' => '228', 'phone_code' => '676', 'country_code' => 'TO', 'country_name' => 'Tonga'],
            ['id' => '229', 'phone_code' => '1868', 'country_code' => 'TT', 'country_name' => 'Trinidad and Tobago'],
            ['id' => '230', 'phone_code' => '216', 'country_code' => 'TN', 'country_name' => 'Tunisia'],
            ['id' => '231', 'phone_code' => '90', 'country_code' => 'TR', 'country_name' => 'Turkey'],
            ['id' => '232', 'phone_code' => '7370', 'country_code' => 'TM', 'country_name' => 'Turkmenistan'],
            ['id' => '233', 'phone_code' => '1649', 'country_code' => 'TC', 'country_name' => 'Turks and Caicos Islands'],
            ['id' => '234', 'phone_code' => '688', 'country_code' => 'TV', 'country_name' => 'Tuvalu'],
            ['id' => '235', 'phone_code' => '256', 'country_code' => 'UG', 'country_name' => 'Uganda'],
            ['id' => '236', 'phone_code' => '380', 'country_code' => 'UA', 'country_name' => 'Ukraine'],
            ['id' => '237', 'phone_code' => '971', 'country_code' => 'AE', 'country_name' => 'United Arab Emirates'],
            ['id' => '238', 'phone_code' => '44', 'country_code' => 'GB', 'country_name' => 'United Kingdom'],
            ['id' => '239', 'phone_code' => '1', 'country_code' => 'US', 'country_name' => 'United States'],
            ['id' => '240', 'phone_code' => '1', 'country_code' => 'UM', 'country_name' => 'United States Minor Outlying Islands'],
            ['id' => '241', 'phone_code' => '598', 'country_code' => 'UY', 'country_name' => 'Uruguay'],
            ['id' => '242', 'phone_code' => '998', 'country_code' => 'UZ', 'country_name' => 'Uzbekistan'],
            ['id' => '243', 'phone_code' => '678', 'country_code' => 'VU', 'country_name' => 'Vanuatu'],
            ['id' => '244', 'phone_code' => '58', 'country_code' => 'VE', 'country_name' => 'Venezuela'],
            ['id' => '245', 'phone_code' => '84', 'country_code' => 'VN', 'country_name' => 'Viet Nam'],
            ['id' => '246', 'phone_code' => '1284', 'country_code' => 'VG', 'country_name' => 'Virgin Islands, British'],
            ['id' => '247', 'phone_code' => '1340', 'country_code' => 'VI', 'country_name' => 'Virgin Islands, U.s.'],
            ['id' => '248', 'phone_code' => '681', 'country_code' => 'WF', 'country_name' => 'Wallis and Futuna'],
            ['id' => '249', 'phone_code' => '212', 'country_code' => 'EH', 'country_name' => 'Western Sahara'],
            ['id' => '250', 'phone_code' => '967', 'country_code' => 'YE', 'country_name' => 'Yemen'],
            ['id' => '251', 'phone_code' => '260', 'country_code' => 'ZM', 'country_name' => 'Zambia'],
            ['id' => '252', 'phone_code' => '263', 'country_code' => 'ZW', 'country_name' => 'Zimbabwe']
        ];

        DB::table('countries')->insert($countries);
    }
}
