-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 04:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` varchar(10) NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
('1', 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
('2', 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
('3', 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
('4', 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
('5', 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
('6', 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
('7', 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
('8', 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
('9', 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
('10', 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
('11', 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
('12', 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
('13', 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
('14', 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
('15', 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
('16', 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
('17', 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
('18', 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
('19', 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
('20', 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
('21', 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
('22', 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
('23', 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
('24', 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
('25', 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
('26', 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
('27', 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
('28', 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
('29', 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
('30', 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
('31', 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
('32', 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
('33', 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
('34', 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
('35', 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
('36', 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
('37', 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
('38', 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
('39', 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
('40', 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
('41', 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
('42', 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
('43', 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
('44', 'CN', 'CHINA', 'China', 'CHN', 156, 86),
('45', 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
('46', 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
('47', 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
('48', 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
('49', 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
('50', 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
('51', 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
('52', 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
('53', 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
('54', 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
('55', 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
('56', 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
('57', 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
('58', 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
('59', 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
('60', 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
('61', 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
('62', 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
('63', 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
('64', 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
('65', 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
('66', 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
('67', 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
('68', 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
('69', 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
('70', 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
('71', 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
('72', 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
('73', 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
('74', 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
('75', 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
('76', 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
('77', 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
('78', 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
('79', 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
('80', 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
('81', 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
('82', 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
('83', 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
('84', 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
('85', 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
('86', 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
('87', 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
('88', 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
('89', 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
('90', 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
('91', 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
('92', 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
('93', 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
('94', 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
('95', 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
('96', 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
('97', 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
('98', 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
('99', 'IN', 'INDIA', 'India', 'IND', 356, 91),
('100', 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
('101', 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
('102', 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
('103', 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
('104', 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
('105', 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
('106', 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
('107', 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
('108', 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
('109', 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
('110', 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
('111', 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
('112', 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
('113', 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
('114', 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
('115', 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
('116', 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
('117', 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
('118', 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
('119', 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
('120', 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
('121', 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
('122', 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
('123', 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
('124', 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
('125', 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
('126', 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
('127', 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
('128', 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
('129', 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
('130', 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
('131', 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
('132', 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
('133', 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
('134', 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
('135', 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
('136', 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
('137', 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
('138', 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
('139', 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
('140', 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
('141', 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
('142', 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
('143', 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
('144', 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
('145', 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
('146', 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
('147', 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
('148', 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
('149', 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
('150', 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
('151', 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
('152', 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
('153', 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
('154', 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
('155', 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
('156', 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
('157', 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
('158', 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
('159', 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
('160', 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
('161', 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
('162', 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
('163', 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
('164', 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
('165', 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
('166', 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
('167', 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
('168', 'PE', 'PERU', 'Peru', 'PER', 604, 51),
('169', 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
('170', 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
('171', 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
('172', 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
('173', 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
('174', 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
('175', 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
('176', 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
('177', 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
('178', 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
('179', 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
('180', 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
('181', 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
('182', 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
('183', 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
('184', 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
('185', 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
('186', 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
('187', 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
('188', 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
('189', 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
('190', 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
('191', 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
('192', 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
('193', 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
('194', 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
('195', 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
('196', 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
('197', 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
('198', 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
('199', 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
('200', 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
('201', 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
('202', 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
('203', 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
('204', 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
('205', 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
('206', 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
('207', 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
('208', 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
('209', 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
('210', 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
('211', 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
('212', 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
('213', 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
('214', 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
('215', 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
('216', 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
('217', 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
('218', 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
('219', 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
('220', 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
('221', 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
('222', 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
('223', 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
('224', 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
('225', 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
('226', 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
('227', 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
('228', 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
('229', 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
('230', 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
('231', 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
('232', 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
('233', 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
('234', 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
('235', 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
('236', 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
('237', 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
('238', 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
('239', 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `hours` int(10) NOT NULL,
  `source` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` varchar(500) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `hours`, `source`, `start_date`, `end_date`, `details`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(50, 'Marvin Patterson', 9, 'Suscipit rerum lauda', '2021-09-14', '2021-09-14', 'Culpa rerum doloremque exercitation omnis dolor et eu', 1, 1, '2021-09-05 11:14:38', '2021-09-05 11:14:38', NULL),
(53, 'Rhoda Ber', 9, 'Tenetur voluptatibus', '2021-09-21', '2021-10-09', NULL, 1, 3, '2021-09-10 11:45:39', '2021-09-10 11:45:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `name`, `is_active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'design1', 1, '2021-09-26 06:41:07', '2021-09-26 04:28:42', NULL),
(2, 'design2', 0, '2021-09-26 06:42:38', NULL, NULL),
(3, 'design3', 0, '2021-09-26 07:23:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_name` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `degree` enum('high_school','diploma','Masters','Doctorate','Bachelors','other') NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` varchar(500) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `place_name`, `specialization`, `degree`, `start_date`, `end_date`, `details`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(10, 'Clark Oliver', 'Molestias in atque s', 'diploma', '2021-09-08', '2021-10-28', 'Elit velit dolore consequatur Veritatis sed velit quam dicta ad velit blanditiis voluptas', 1, 1, '2021-09-05 05:33:28', '2021-09-05 05:41:23', NULL),
(11, 'Andrew Flynn', 'Excepturi aliquam bl', 'Masters', '2021-09-07', '2021-10-27', NULL, 1, 1, '2021-09-05 05:44:52', '2021-09-05 05:44:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formats`
--

CREATE TABLE `formats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `font` enum('''Source Sans Pro'', sans-serif',' ''Yanone Kaffeesatz'', sans-serif','''Inconsolata'', monospace','') NOT NULL,
  `color` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `name`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Holly Le', 1, 1, '2021-09-04 06:33:47', '2021-09-05 13:21:08', NULL),
(4, 'Portia Harvey', 1, 1, '2021-09-04 06:34:48', '2021-09-04 06:34:54', NULL),
(8, 'Holly Lac', 0, 1, '2021-09-04 12:16:45', '2021-09-09 06:44:36', NULL),
(11, 'Trevor Vega', 0, 1, '2021-09-05 13:21:21', '2021-09-05 13:21:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(49) CHARACTER SET utf8 DEFAULT NULL,
  `code` char(2) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(1, 'English', 'en'),
(2, 'Afar', 'aa'),
(3, 'Abkhazian', 'ab'),
(4, 'Afrikaans', 'af'),
(5, 'Amharic', 'am'),
(6, 'Arabic', 'ar'),
(7, 'Assamese', 'as'),
(8, 'Aymara', 'ay'),
(9, 'Azerbaijani', 'az'),
(10, 'Bashkir', 'ba'),
(11, 'Belarusian', 'be'),
(12, 'Bulgarian', 'bg'),
(13, 'Bihari', 'bh'),
(14, 'Bislama', 'bi'),
(15, 'Bengali/Bangla', 'bn'),
(16, 'Tibetan', 'bo'),
(17, 'Breton', 'br'),
(18, 'Catalan', 'ca'),
(19, 'Corsican', 'co'),
(20, 'Czech', 'cs'),
(21, 'Welsh', 'cy'),
(22, 'Danish', 'da'),
(23, 'German', 'de'),
(24, 'Bhutani', 'dz'),
(25, 'Greek', 'el'),
(26, 'Esperanto', 'eo'),
(27, 'Spanish', 'es'),
(28, 'Estonian', 'et'),
(29, 'Basque', 'eu'),
(30, 'Persian', 'fa'),
(31, 'Finnish', 'fi'),
(32, 'Fiji', 'fj'),
(33, 'Faeroese', 'fo'),
(34, 'French', 'fr'),
(35, 'Frisian', 'fy'),
(36, 'Irish', 'ga'),
(37, 'Scots/Gaelic', 'gd'),
(38, 'Galician', 'gl'),
(39, 'Guarani', 'gn'),
(40, 'Gujarati', 'gu'),
(41, 'Hausa', 'ha'),
(42, 'Hindi', 'hi'),
(43, 'Croatian', 'hr'),
(44, 'Hungarian', 'hu'),
(45, 'Armenian', 'hy'),
(46, 'Interlingua', 'ia'),
(47, 'Interlingue', 'ie'),
(48, 'Inupiak', 'ik'),
(49, 'Indonesian', 'in'),
(50, 'Icelandic', 'is'),
(51, 'Italian', 'it'),
(52, 'Hebrew', 'iw'),
(53, 'Japanese', 'ja'),
(54, 'Yiddish', 'ji'),
(55, 'Javanese', 'jw'),
(56, 'Georgian', 'ka'),
(57, 'Kazakh', 'kk'),
(58, 'Greenlandic', 'kl'),
(59, 'Cambodian', 'km'),
(60, 'Kannada', 'kn'),
(61, 'Korean', 'ko'),
(62, 'Kashmiri', 'ks'),
(63, 'Kurdish', 'ku'),
(64, 'Kirghiz', 'ky'),
(65, 'Latin', 'la'),
(66, 'Lingala', 'ln'),
(67, 'Laothian', 'lo'),
(68, 'Lithuanian', 'lt'),
(69, 'Latvian/Lettish', 'lv'),
(70, 'Malagasy', 'mg'),
(71, 'Maori', 'mi'),
(72, 'Macedonian', 'mk'),
(73, 'Malayalam', 'ml'),
(74, 'Mongolian', 'mn'),
(75, 'Moldavian', 'mo'),
(76, 'Marathi', 'mr'),
(77, 'Malay', 'ms'),
(78, 'Maltese', 'mt'),
(79, 'Burmese', 'my'),
(80, 'Nauru', 'na'),
(81, 'Nepali', 'ne'),
(82, 'Dutch', 'nl'),
(83, 'Norwegian', 'no'),
(84, 'Occitan', 'oc'),
(85, '(Afan)/Oromoor/Oriya', 'om'),
(86, 'Punjabi', 'pa'),
(87, 'Polish', 'pl'),
(88, 'Pashto/Pushto', 'ps'),
(89, 'Portuguese', 'pt'),
(90, 'Quechua', 'qu'),
(91, 'Rhaeto-Romance', 'rm'),
(92, 'Kirundi', 'rn'),
(93, 'Romanian', 'ro'),
(94, 'Russian', 'ru'),
(95, 'Kinyarwanda', 'rw'),
(96, 'Sanskrit', 'sa'),
(97, 'Sindhi', 'sd'),
(98, 'Sangro', 'sg'),
(99, 'Serbo-Croatian', 'sh'),
(100, 'Singhalese', 'si'),
(101, 'Slovak', 'sk'),
(102, 'Slovenian', 'sl'),
(103, 'Samoan', 'sm'),
(104, 'Shona', 'sn'),
(105, 'Somali', 'so'),
(106, 'Albanian', 'sq'),
(107, 'Serbian', 'sr'),
(108, 'Siswati', 'ss'),
(109, 'Sesotho', 'st'),
(110, 'Sundanese', 'su'),
(111, 'Swedish', 'sv'),
(112, 'Swahili', 'sw'),
(113, 'Tamil', 'ta'),
(114, 'Telugu', 'te'),
(115, 'Tajik', 'tg'),
(116, 'Thai', 'th'),
(117, 'Tigrinya', 'ti'),
(118, 'Turkmen', 'tk'),
(119, 'Tagalog', 'tl'),
(120, 'Setswana', 'tn'),
(121, 'Tonga', 'to'),
(122, 'Turkish', 'tr'),
(123, 'Tsonga', 'ts'),
(124, 'Tatar', 'tt'),
(125, 'Twi', 'tw'),
(126, 'Ukrainian', 'uk'),
(127, 'Urdu', 'ur'),
(128, 'Uzbek', 'uz'),
(129, 'Vietnamese', 'vi'),
(130, 'Volapuk', 'vo'),
(131, 'Wolof', 'wo'),
(132, 'Xhosa', 'xh'),
(133, 'Yoruba', 'yo'),
(134, 'Chinese', 'zh'),
(135, 'Zulu', 'zu');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$rJGsTomiBqYTPngBD9gEK.HJahNDfvDMsOobZFrF1lVLhyIkdmnbi', '2021-09-11 10:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('female','male') COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `nationality` varchar(25) CHARACTER SET utf8 NOT NULL,
  `marital` enum('Single','Married','Widowed','Separated','Divorced') CHARACTER SET utf8 NOT NULL,
  `details` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`id`, `img`, `name`, `email`, `gender`, `mobile`, `birthday`, `nationality`, `marital`, `details`, `user_id`, `created_at`, `updated_at`) VALUES
(23, '1027469578613f8104df186.jpg', 'Madonna', 'quzihotis@mailinator.com', 'male', '+456789674569', '2021-09-11', 'Pariatur Iste velit', 'Single', 'Ex in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsum', 3, '2021-09-11 17:00:21', '2021-09-13 13:49:10'),
(26, '1859662426142f8f37e292.jpg', 'Jerry Colon', 'quzihotis@mailinafdfefeftor.com', 'male', '97655555', '2017-05-20', 'Sunt quo ipsam moll', 'Married', 'Ex in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsumEx in ipsum', 1, '2021-09-14 04:01:08', '2021-09-18 09:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `people_addresses`
--

CREATE TABLE `people_addresses` (
  `id` bigint(20) NOT NULL,
  `people_id` bigint(20) UNSIGNED NOT NULL,
  `country_id` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people_addresses`
--

INSERT INTO `people_addresses` (`id`, `people_id`, `country_id`, `city`, `street`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 23, '1', '55789877987', '57875755755', '2021-09-11 17:00:21', '2021-09-12 05:05:49', NULL),
(13, 26, '1', 'Et nesciunt sun', 'Ex in ipsum', '2021-09-14 04:01:11', '2021-09-14 04:21:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `people_languages`
--

CREATE TABLE `people_languages` (
  `id` bigint(20) NOT NULL,
  `language_id` bigint(20) NOT NULL,
  `people_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `people_languages`
--

INSERT INTO `people_languages` (`id`, `language_id`, `people_id`, `created_at`, `updated_at`) VALUES
(11, 2, 26, '2021-09-25 03:22:20', '2021-09-25 03:22:20'),
(12, 6, 26, '2021-09-25 03:22:20', '2021-09-25 03:22:20'),
(13, 10, 26, '2021-09-25 03:22:20', '2021-09-25 03:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_name` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `details` varchar(500) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `link`, `start_date`, `end_date`, `is_active`, `details`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(95, 'Dexter Benton', 'Http://dwefew.com', '2021-08-29', '2021-09-04', 1, 'portImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImgportImg', 1, '2021-09-16 09:29:10', '2021-09-19 05:02:00', NULL),
(99, 'Amanda Valentine', 'At aliqua Labore in', '2021-09-01', '2021-10-09', 1, NULL, 1, '2021-09-19 08:04:18', '2021-09-19 13:29:31', NULL),
(107, 'Dante Dunn', 'Magnam tempore magn', '2021-09-13', '2021-10-09', 1, 'Voluptatum ipsum rerum maiores totam ut labVoluptatum ipsum rerum maiores totam ut laborum doVoluptatum ipsum rerum maiores totam ut laborum doVoluptatum ipsum rerum maiores totam ut laborum doVoluptatum ipsum rerum maiores totam ut laborum doVoluptatum ipsum rerum maiores totam ut laborum doVoluptatum ipsum rerum maiores totam ut laborum doorum do', 1, '2021-09-22 17:25:25', '2021-09-22 17:25:25', NULL),
(108, 'Elton Fisher', 'Minima recusandae N', '2021-09-05', '2021-10-09', 1, 'v Dolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odioDolore delectus commodi ad odio', 1, '2021-09-25 03:24:38', '2021-09-25 03:24:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_media`
--

CREATE TABLE `portfolio_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` tinyint(2) NOT NULL,
  `type` enum('doc','video','image','sound') NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolio_media`
--

INSERT INTO `portfolio_media` (`id`, `name`, `position`, `type`, `portfolio_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(98, '12177395226148e24d20b3e.jpg', 1, 'image', 94, '2021-09-16 09:25:48', '2021-09-20 16:36:39', NULL),
(113, '20565130556146eda66050c.jpg', 1, 'image', 97, '2021-09-19 04:40:06', '2021-09-19 04:59:34', NULL),
(119, '1443831058614719ca2e0b6.jpg', 1, 'image', 99, '2021-09-19 08:04:08', '2021-09-19 13:29:31', NULL),
(120, '1738966850614719ca77c8a.jpg', 1, 'image', 99, '2021-09-19 08:04:11', '2021-09-19 13:29:31', NULL),
(121, '6147192b67216-163204945125396.jpg', 1, 'image', 99, '2021-09-19 08:04:11', '2021-09-19 13:29:31', NULL),
(122, '6148d1e4766e8-163216227625545.jpg', 1, 'image', 94, '2021-09-20 15:24:36', '2021-09-20 16:36:39', NULL),
(123, '6148d1e543305-163216227725650.jpg', 1, 'image', 94, '2021-09-20 15:24:37', '2021-09-20 16:36:39', NULL),
(124, '6148d2161a59d-1632162326tenebra_ComputerDesktopWallpapersCollection (92).jpg', 1, 'image', 94, '2021-09-20 15:25:26', '2021-09-20 16:36:39', NULL),
(131, '6148e266d7bee-163216650225660.jpg', 1, 'image', 94, '2021-09-20 16:35:02', '2021-09-20 16:36:39', NULL),
(134, '6148edde45f41-16321694381ba322387718.original.jpeg', 1, 'doc', 100, '2021-09-20 17:23:59', '2021-09-21 10:33:51', NULL),
(141, '6149c8788e1f2-1632225400DeskWalls (81).jpg', 1, 'doc', 100, '2021-09-21 08:56:40', '2021-09-21 10:33:51', NULL),
(142, '6149c8f2378b0-16322255221ba322387718.original.jpeg', 1, 'doc', 100, '2021-09-21 08:58:42', '2021-09-21 10:33:51', NULL),
(143, '6149c91372318-16322255551ba322387718.original.jpeg', 1, 'doc', 100, '2021-09-21 08:59:15', '2021-09-21 10:33:51', NULL),
(152, '6149ccc7a1dbe-163222650325432.jpg', 1, 'doc', 100, '2021-09-21 09:15:03', '2021-09-21 10:33:51', NULL),
(154, '6149daa235698-1632230050Nature Beautiful short video 720p HD - YouTube.MP4', 1, 'doc', 98, '2021-09-21 10:14:10', '2021-09-21 10:14:13', NULL),
(157, '6149df3b07ca8-1632231227tenebra_ComputerDesktopWallpapersCollection (92).jpg', 1, 'doc', 100, '2021-09-21 10:33:47', '2021-09-21 10:33:51', NULL),
(158, '6149e101630fd-16322316814980680405c5c0cc6d1f84.ogg', 1, 'sound', 102, '2021-09-21 10:41:21', '2021-09-21 10:41:25', NULL),
(159, '6149e34c8adb9-16322322684ـ عقد تجاري - عقد توزيع - إنكار الرابطة العقدية - مسؤولية عقدية.pdf', 1, 'doc', 103, '2021-09-21 10:51:08', '2021-09-21 10:51:14', NULL),
(160, '6149e3a6e3aec-1632232358cv.diagram.pdf', 1, 'doc', 104, '2021-09-21 10:52:38', '2021-09-21 10:52:43', NULL),
(161, '6149e3f853d1a-1632232440cv.diagram.pdf', 1, 'doc', 105, '2021-09-21 10:54:00', '2021-09-21 10:54:02', NULL),
(164, '614b8f8da75ae-163234190125650.jpg', 1, 'image', 95, '2021-09-22 17:18:21', '2021-09-22 17:22:29', NULL),
(165, '614b8f8e040ce-163234190225660.jpg', 1, 'image', 95, '2021-09-22 17:18:22', '2021-09-22 17:22:29', NULL),
(166, '614b8f9043db2-163234190425691.jpg', 1, 'image', 95, '2021-09-22 17:18:24', '2021-09-22 17:22:29', NULL),
(168, '614b90fcc1cc9-1632342268Nature Beautiful short video 720p HD - YouTube.MP4', 1, 'doc', 101, '2021-09-22 17:24:28', '2021-09-22 17:24:31', NULL),
(169, '614b913378b2e-1632342323Nature Beautiful short video 720p HD - YouTube.MP4', 1, 'video', 107, '2021-09-22 17:25:23', '2021-09-22 17:25:25', NULL),
(170, '614ec0a4b939a-16325510764ـ عقد تجاري - عقد توزيع - إنكار الرابطة العقدية - مسؤولية عقدية.pdf', 1, 'doc', 108, '2021-09-25 03:24:37', '2021-09-25 03:24:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `level` int(10) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Justin Watson', 30, 1, 1, '2021-09-04 17:16:53', '2021-09-04 17:16:53', NULL),
(9, 'uyhjfdsa', 53, 0, 1, '2021-09-21 07:58:50', '2021-09-21 07:58:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(200) NOT NULL,
  `social_website_id` bigint(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `link`, `social_website_id`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Http://bnnyguuuliluyoghfggg', 6, 1, 1, '2021-09-07 13:14:50', '2021-09-12 02:52:49', NULL),
(3, 'Http://asdasdasd.com', 6, 0, 1, '2021-09-07 13:19:05', '2021-09-07 13:19:05', NULL),
(4, 'Http://sadddddddddd', 7, 1, 1, '2021-09-07 13:37:06', '2021-09-07 13:39:39', NULL),
(5, 'Http://ytittttttttt', 6, 0, 1, '2021-09-07 13:38:13', '2021-09-07 13:38:13', NULL),
(6, 'Http://bnnyguuu.com', 6, 1, 1, '2021-09-19 08:07:17', '2021-09-19 08:07:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_websites`
--

CREATE TABLE `social_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `icon_name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_websites`
--

INSERT INTO `social_websites` (`id`, `name`, `icon_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Facebook\r\n', 'fab fa-facebook\r\n', '2021-09-05 19:44:28', NULL, NULL),
(3, 'Instagram', 'fab fa-instagram\r\n', '2021-09-05 19:44:50', NULL, NULL),
(5, 'Linkedin', 'fab fa-linkedin\r\n', '2021-09-05 19:47:27', NULL, NULL),
(6, 'twitter\r\n', 'fab fa-twitter\r\n', '2021-09-05 19:47:27', NULL, NULL),
(7, 'github', 'fab fa-github\r\n', '2021-09-05 19:48:58', NULL, NULL),
(8, 'Gmail', 'fab fa-google\r\n', '2021-09-05 19:52:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(200) NOT NULL,
  `person_email` varchar(200) NOT NULL,
  `person_mobile` varchar(25) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `about` varchar(500) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `person_name`, `person_email`, `person_mobile`, `is_active`, `about`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Zenia Hester', 'kogonewot@mailinator.com', '7895323588', 1, ' cillum et recusandae Optio nihil aut id neque hic itaque animi placeat quia minima consequatur recusandae Nihil', 1, '2021-09-04 08:37:55', '2021-09-05 15:14:51', NULL),
(3, 'Ali Monroe', 'vukaze@mailinator.com', '9999999999', 1, 'Repellendus Occaecat proident et tempor dolore sed', 1, '2021-09-05 14:21:07', '2021-09-05 14:21:07', NULL),
(4, 'Tucker Hancock', 'xasage@mailinator.com', '666666666', 0, 'Esse reprehenderit praesentium ut quia et dolor laborum', 1, '2021-09-05 14:22:06', '2021-09-05 14:22:06', NULL),
(5, 'Derek Simpson', 'siqyboluzo@mailinator.com', '99999999999999999', 0, 'Vitae mollitia voluptatem facere commodi quia do debitis ipsum fugit soluta sed voluptas aut maiores pariatur Incidunt dolores earum', 1, '2021-09-05 14:24:49', '2021-09-05 14:24:49', NULL),
(6, 'Omar Stark', 'hobym@mailinator.com', '4757576767', 1, 'In delectus magna saepe ex ducimus facilis rerum ut non commodo deserunt tempore tempor proident', 1, '2021-09-05 14:30:18', '2021-09-05 14:30:18', NULL),
(7, 'Keefe Rodgers', 'vusok@mailinator.com', '8996787878', 0, 'Tenetur omnis voluptatum labore laborum in est dolores ad ullam voluptatum qui excepteur ut nisi', 1, '2021-09-05 15:10:01', '2021-09-05 15:10:01', NULL),
(8, 'Kiona Flowers', 'lufuse@mailinator.com', '875454646', 0, 'Dolore fuga Quo qui velit ad neque et et fugit quo', 1, '2021-09-05 15:15:04', '2021-09-05 15:15:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sybil Duke', 'admin@gmail.com', NULL, '$2y$10$IGGkRFOUqFZ9ZkGmXKNrRu..uVZJ3BrQPaero4s3nzMd9jcOhVQNO', 0, NULL, '2021-09-10 10:22:39', '2021-09-10 10:22:39'),
(2, 'Clarke Key', 'bofepisi@mailinator.com', NULL, '$2y$10$axn5d2UbNfYyxB.ug3.Ja.VtBlMI1m6xgHhavjbbW2OpPkomFYAbe', 0, NULL, '2021-09-10 10:39:20', '2021-09-10 10:39:20'),
(3, 'Madonna', 'soti@mailinator.com', NULL, '$2y$10$8em9CcqV32Otiq1r/XjnxulokgNeOuae8SaprooA7xR6XrwS.KzgC', 0, NULL, '2021-09-10 11:12:17', '2021-09-10 11:12:17'),
(4, 'Maxwell Spears', 'pelafaxe@mailinator.com', NULL, '$2y$10$yBjq2P/jKlLFFOsPqD3..uDb4ziYYIpDdIMG4Bz.xbQWiP6fAI.4i', 0, NULL, '2021-09-10 17:39:23', '2021-09-10 17:39:23'),
(5, 'Norman Burch', 'lavi@mailinator.com', NULL, '$2y$10$LiVau8rSuva66FKVh4.6OerBIciuUQIoNXvoiKozsG8jKMHiRUmyq', 0, NULL, '2021-09-10 17:53:53', '2021-09-10 17:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `details` varchar(500) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `company_name`, `job_title`, `start_date`, `end_date`, `details`, `is_active`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'Blackwell Vang Traders', 'Magni non repudianda', '2021-09-15', '2021-10-21', 'Quidem aute et id similique dolor sed qui sit eveniet', 1, 1, '2021-09-05 10:52:50', '2021-09-05 10:52:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formats`
--
ALTER TABLE `formats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `people_addresses`
--
ALTER TABLE `people_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people_languages`
--
ALTER TABLE `people_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_media`
--
ALTER TABLE `portfolio_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_websites`
--
ALTER TABLE `social_websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formats`
--
ALTER TABLE `formats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `people_addresses`
--
ALTER TABLE `people_addresses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `people_languages`
--
ALTER TABLE `people_languages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `portfolio_media`
--
ALTER TABLE `portfolio_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_websites`
--
ALTER TABLE `social_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
