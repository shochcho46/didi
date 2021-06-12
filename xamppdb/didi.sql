-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 10:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `didi`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gigs`
--

CREATE TABLE `gigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `piclocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_time` timestamp NULL DEFAULT NULL,
  `actionby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_time` timestamp NULL DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gigs`
--

INSERT INTO `gigs` (`id`, `user_id`, `heading`, `description`, `piclocation`, `status`, `amount`, `serial`, `reviewby`, `review_time`, `actionby`, `action_time`, `view`, `created_at`, `updated_at`) VALUES
(8, 1, 'Website with 6 pages', 'Website with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pagesWebsite with 5 pages', 'http://127.0.0.1:8000/storage/gigs/1607713739834.png', 'active', '500', '1', '2', '2020-12-25 21:29:59', '2', '2020-12-25 21:30:54', NULL, '2020-12-11 19:09:00', '2020-12-25 21:30:54'),
(9, 1, 'sell shoes in small price', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019111432.jpeg', 'active', '300', '2', '2', '2020-12-26 21:54:22', '2', '2020-12-26 21:55:27', NULL, '2020-12-26 21:45:11', '2021-05-28 13:55:14'),
(10, 1, 'I can sell hill shoes', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/160901928456.jpeg', 'active', '500', '3', '2', '2020-12-26 21:55:19', '2', '2020-12-26 21:55:22', NULL, '2020-12-26 21:48:04', '2020-12-26 21:55:22'),
(11, 1, 'Make Logo in small price', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019326452.jpeg', 'active', '1000', '5', '2', '2020-12-26 21:55:13', '2', '2020-12-26 21:55:15', NULL, '2020-12-26 21:48:46', '2020-12-26 21:55:15'),
(12, 1, 'Graphics card in cheap price', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019388408.jpeg', 'active', '16000', '4', '2', '2020-12-26 21:55:29', '2', '2020-12-26 21:55:31', NULL, '2020-12-26 21:49:48', '2020-12-26 21:55:31'),
(13, 1, 'Write unique content in 3 hr', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019432938.jpeg', 'active', '600', '6', '2', '2020-12-26 21:55:08', '2', '2020-12-26 21:55:10', NULL, '2020-12-26 21:50:32', '2020-12-26 21:55:10'),
(14, 1, 'Develop a Mobile App', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019473281.jpeg', 'active', '16000', '7', '2', '2020-12-26 21:55:01', '2', '2020-12-26 21:55:03', NULL, '2020-12-26 21:51:13', '2020-12-26 21:55:03'),
(15, 1, 'Modern Dress delivery Whole country', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019515194.jpeg', 'active', '2300', '8', '2', '2020-12-26 21:55:34', '2', '2020-12-26 21:55:36', NULL, '2020-12-26 21:51:55', '2020-12-26 21:55:36'),
(16, 1, 'Sports Item in small price', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019549640.jpeg', 'active', '300', '9', '2', '2020-12-26 21:54:57', '2', '2020-12-26 21:54:58', NULL, '2020-12-26 21:52:29', '2020-12-26 21:54:58'),
(17, 1, 'Gift items in small price', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the', 'http://127.0.0.1:8000/storage/gigs/1609019644338.jpeg', 'active', '540', '10', '2', '2020-12-26 21:54:40', '2', '2020-12-26 21:54:46', NULL, '2020-12-26 21:54:04', '2020-12-26 21:54:46'),
(18, 10, 'sdfsd sdf', 'sdfasdf dsf asdf dsaf asdf asdf asdf dsaf', 'http://127.0.0.1:8000/storage/gigs/1621974671836.jpeg', 'inactive', '1223', '2', NULL, NULL, NULL, NULL, NULL, '2021-05-25 20:31:12', '2021-05-25 20:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `mainmenus`
--

CREATE TABLE `mainmenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mainmenus`
--

INSERT INTO `mainmenus` (`id`, `main_name`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IT', '3', 'active', '2020-12-26 20:22:46', '2020-12-26 20:22:46'),
(2, 'Teaching', '4', 'active', '2020-12-26 20:23:17', '2020-12-26 20:23:17'),
(3, 'Writing', '4', 'active', '2020-12-26 20:23:47', '2020-12-26 20:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_30_081856_create_mainmenus_table', 1),
(5, '2020_12_01_101934_create_submenus_table', 1),
(6, '2020_12_03_063243_create_gigs_table', 1),
(7, '2020_12_08_093336_create_notifications_table', 1),
(15, '2020_12_12_205456_create_skills_table', 2),
(16, '2020_12_20_111458_create_profiles_table', 2),
(17, '2020_12_27_001632_create_projects_table', 2),
(18, '2021_05_23_104620_create_proposals_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('0212c1a0-4340-41a5-9b0f-1ba84579970e', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 9, '{\"message\":\"tushar , your PROPOSAL is active\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', '2021-05-26 21:17:32', '2021-05-26 21:12:39', '2021-05-26 21:17:32'),
('0386bd98-fcf2-47b6-b40a-719a97dcb6a3', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 6, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":2}', NULL, '2021-05-28 09:41:26', '2021-05-28 09:41:26'),
('0998338d-dbb2-49ba-800b-31e602b8bc8b', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"subadmin try to reupdate Profile status\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', '2021-05-26 21:15:00', '2021-05-26 21:14:29', '2021-05-26 21:15:00'),
('0fee94ac-8956-4296-9cda-a653afe0143d', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 2, '{\"message\":\"subadmin try to reupdate PROPOSAL status\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', '2021-05-26 21:15:07', '2021-05-26 21:14:41', '2021-05-26 21:15:07'),
('11bc3df5-0af2-4c20-89a3-4382d712e5e5', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 6, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', '2021-05-26 19:43:03', '2021-05-26 13:38:19', '2021-05-26 19:43:03'),
('186c7b39-6278-4734-85e3-e5e0e05739d3', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 10, '{\"message\":\"test , your PROPOSAL is active\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":2}', '2021-05-28 09:53:04', '2021-05-28 09:41:48', '2021-05-28 09:53:04'),
('1afc5e79-9321-495b-9707-b92ad8b59566', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 7, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":10,\"event_id\":3}', NULL, '2021-05-28 09:50:14', '2021-05-28 09:50:14'),
('2367af58-7c66-4c2d-9aad-06c5f1554e09', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 2, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":2}', '2021-05-28 09:41:37', '2021-05-28 09:41:26', '2021-05-28 09:41:37'),
('25459cc7-4b48-40a0-99af-7b13eae5eb2c', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 7, '{\"message\":\"subadmin try to reupdate PROPOSAL status\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', NULL, '2021-05-26 21:14:41', '2021-05-26 21:14:41'),
('26cc31d7-8b51-4d48-be81-0d792346fad3', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":2,\"event_id\":2}', '2021-05-28 20:44:35', '2021-05-28 20:43:47', '2021-05-28 20:44:35'),
('26cd494e-e375-4f26-836d-4b2f3069f12c', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 2, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', '2021-05-26 20:58:32', '2021-05-26 20:03:42', '2021-05-26 20:58:32'),
('27ebf1a4-425b-46e1-ba02-aed00be58ac5', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 6, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":10,\"event_id\":3}', NULL, '2021-05-28 09:50:13', '2021-05-28 09:50:13'),
('2ce37ee7-b0ef-4adc-9019-2adbe2d422b8', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 1, '{\"message\":\"Asfaq Uddin , your PROJECT is active\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', '2021-05-26 18:53:35', '2021-05-26 18:47:25', '2021-05-26 18:53:35'),
('2ec0075e-9a16-4817-a45b-cd6a02260aec', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 7, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":4}', NULL, '2021-05-28 09:52:39', '2021-05-28 09:52:39'),
('352d1673-5270-4864-ab43-74caad1ff0b6', 'App\\Notifications\\UserReview', 'App\\Models\\User', 9, '{\"message\":\"tushar , your Profile is active\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', '2021-05-26 21:17:42', '2021-05-26 21:03:26', '2021-05-26 21:17:42'),
('357d4bdd-da9c-4d1a-bf2d-ba426ef0f8fb', 'App\\Notifications\\UserReview', 'App\\Models\\User', 7, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', NULL, '2021-05-26 20:41:22', '2021-05-26 20:41:22'),
('3b04c38a-5de0-4558-8864-6b7502388c87', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 6, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', '2021-05-26 21:14:37', '2021-05-26 20:03:42', '2021-05-26 21:14:37'),
('3c078931-2368-45ff-92e3-639b27fc3543', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 10, '{\"message\":\"test , your PROJECT is active\",\"eventname\":\"PROJECT\",\"user_id\":10,\"event_id\":3}', '2021-05-28 09:53:13', '2021-05-28 09:50:50', '2021-05-28 09:53:13'),
('57873079-27e1-4386-bb9e-da676a9f6149', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 7, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":3}', NULL, '2021-05-28 09:53:50', '2021-05-28 09:53:50'),
('5aaaca34-78d2-4437-a7b0-b87169a346b1', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 2, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":4}', '2021-05-28 09:52:50', '2021-05-28 09:52:39', '2021-05-28 09:52:50'),
('696b4be7-0548-4bc0-a1b6-24f272006f2a', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 6, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":3}', NULL, '2021-05-28 09:53:49', '2021-05-28 09:53:49'),
('6f3180ef-a9ff-4db3-a961-3d50a65177a5', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 6, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":4}', NULL, '2021-05-28 09:52:39', '2021-05-28 09:52:39'),
('79aadc8c-11a1-41a5-b46f-71f8fcca5fc2', 'App\\Notifications\\UserReview', 'App\\Models\\User', 7, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":10,\"event_id\":10}', NULL, '2021-05-28 09:39:54', '2021-05-28 09:39:54'),
('84569bb5-c59c-4d7a-a94b-175f954d7188', 'App\\Notifications\\UserReview', 'App\\Models\\User', 7, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":2,\"event_id\":2}', NULL, '2021-05-28 20:43:47', '2021-05-28 20:43:47'),
('8c88d964-1bf3-4960-af89-a8ea96b88c6a', 'App\\Notifications\\UserReview', 'App\\Models\\User', 7, '{\"message\":\"Sad Dark created a new User in the system \",\"eventname\":\"PROFILE\",\"user_id\":16,\"event_id\":16}', NULL, '2021-05-28 22:53:28', '2021-05-28 22:53:28'),
('9032856d-b60c-4fef-afb6-9ccf4e7c687f', 'App\\Notifications\\UserReview', 'App\\Models\\User', 10, '{\"message\":\"test , your Profile is active\",\"eventname\":\"PROFILE\",\"user_id\":10,\"event_id\":10}', '2021-05-28 09:40:56', '2021-05-28 09:40:38', '2021-05-28 09:40:56'),
('907f7211-f763-4ec8-92d4-2f67577eadd4', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 7, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', NULL, '2021-05-26 20:03:42', '2021-05-26 20:03:42'),
('935a086a-eb42-421b-8bb8-f5c087f3a026', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 9, '{\"message\":\"!!!Congatstushar your proposal is accepted\",\"eventname\":\"PROPOSAL\",\"user_id\":9,\"event_id\":1}', '2021-05-27 21:31:24', '2021-05-27 21:31:06', '2021-05-27 21:31:24'),
('9898595d-8d14-4051-837e-3d8a24b0923b', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 7, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":2}', NULL, '2021-05-28 09:41:26', '2021-05-28 09:41:26'),
('99cfdffa-e0d8-49ac-afe6-eb17d849418e', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 1, '{\"message\":\"Asfaq Uddin ,your PROJECT is inactive\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', '2021-05-26 19:41:04', '2021-05-26 19:40:38', '2021-05-26 19:41:04'),
('a1cdcc99-808a-4cee-8ee0-9d9d052416d9', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', '2021-05-26 21:03:18', '2021-05-26 20:41:22', '2021-05-26 21:03:18'),
('a526fe82-215d-4cd3-9169-f5f9b7b18037', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 2, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":10,\"event_id\":3}', '2021-05-28 09:50:31', '2021-05-28 09:50:13', '2021-05-28 09:50:31'),
('a6887ecf-ea50-4178-9114-291edc06662a', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 10, '{\"message\":\"test , your PROPOSAL is active\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":3}', NULL, '2021-05-28 09:54:06', '2021-05-28 09:54:06'),
('a9e89b68-a4e9-4204-9148-4a23b243c55b', 'App\\Notifications\\UserReview', 'App\\Models\\User', 7, '{\"message\":\"subadmin try to reupdate Profile status\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', NULL, '2021-05-26 21:14:29', '2021-05-26 21:14:29'),
('aa70f70c-6ce5-4f9d-a0f0-8338a478d868', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":10,\"event_id\":10}', '2021-05-28 09:40:31', '2021-05-28 09:39:54', '2021-05-28 09:40:31'),
('aaee9017-c683-41a1-81ab-4c12f5b1a6d0', 'App\\Notifications\\GigReview', 'App\\Models\\User', 7, '{\"message\":\"subadmin try to reupdate PROJECT status\",\"eventname\":\"GiG\",\"user_id\":1,\"event_id\":2}', NULL, '2021-05-26 19:43:10', '2021-05-26 19:43:10'),
('aaf7e3c5-6f17-41ff-a64d-37d9cf6916ad', 'App\\Notifications\\ProposalReview', 'App\\Models\\User', 2, '{\"message\":\"A New Proposal is Submitted\",\"eventname\":\"PROPOSAL\",\"user_id\":10,\"event_id\":3}', '2021-05-28 09:53:59', '2021-05-28 09:53:49', '2021-05-28 09:53:59'),
('b3ef4aeb-cde0-4645-afd7-5674185714c4', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 2, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', '2021-05-26 13:50:23', '2021-05-26 13:38:19', '2021-05-26 13:50:23'),
('c39ce73e-0815-4e04-91f5-d5c7d9c979c2', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"Sad Dark created a new User in the system \",\"eventname\":\"PROFILE\",\"user_id\":16,\"event_id\":16}', '2021-05-28 22:53:37', '2021-05-28 22:53:28', '2021-05-28 22:53:37'),
('c47bf8f7-e03a-4d4a-9723-bad3ef1aaafa', 'App\\Notifications\\UserReview', 'App\\Models\\User', 2, '{\"message\":\"Sad Dark , your Profile is active\",\"eventname\":\"PROFILE\",\"user_id\":2,\"event_id\":2}', '2021-05-28 22:52:04', '2021-05-28 20:44:06', '2021-05-28 22:52:04'),
('c4ad1025-95fb-4443-b072-0eff5b6db7ca', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 2, '{\"message\":\"subadmin try to reupdate PROJECT status\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', '2021-05-26 19:49:23', '2021-05-26 19:48:55', '2021-05-26 19:49:23'),
('d4283d7c-603f-4ece-ae0b-1dce8a3d43f5', 'App\\Notifications\\UserReview', 'App\\Models\\User', 6, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":2,\"event_id\":2}', NULL, '2021-05-28 20:43:47', '2021-05-28 20:43:47'),
('d50acc51-676a-4c79-8435-70f1d4ee2a7d', 'App\\Notifications\\UserReview', 'App\\Models\\User', 6, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":10,\"event_id\":10}', NULL, '2021-05-28 09:39:54', '2021-05-28 09:39:54'),
('d93e3d0c-27aa-4a35-8459-3423afa7c55c', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 7, '{\"message\":\"subadmin try to reupdate PROJECT status\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', NULL, '2021-05-26 19:48:56', '2021-05-26 19:48:56'),
('d94dabe9-0b7f-46f6-8dc7-2c274a18a0ee', 'App\\Notifications\\UserReview', 'App\\Models\\User', 6, '{\"message\":\"A New Profile skill Updated for Review\",\"eventname\":\"PROFILE\",\"user_id\":9,\"event_id\":9}', '2021-05-26 21:14:24', '2021-05-26 20:41:22', '2021-05-26 21:14:24'),
('f87e4b90-17f6-4803-b8d8-44db97f607ef', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 7, '{\"message\":\"A New Project is Created\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":2}', NULL, '2021-05-26 13:38:19', '2021-05-26 13:38:19'),
('fcb52cfc-bb5e-44c3-bf95-ddc1d7b29163', 'App\\Notifications\\ProjectReview', 'App\\Models\\User', 1, '{\"message\":\"Asfaq Uddin , your PROJECT is active\",\"eventname\":\"PROJECT\",\"user_id\":1,\"event_id\":4}', '2021-05-28 09:57:05', '2021-05-28 09:52:53', '2021-05-28 09:57:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `email`, `email_verified_at`, `birthday`, `gender`, `address`, `title`, `skill_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 't@t.com', NULL, '15 May, 1996', 'Male', 'dfds sdf dsfdsf sdfs', 'web developer', 'html,css', 'sdf sdf sdfsd fsdf sdfsdf dsf sdfsd fsdf dsf sdf sfsdf sd fsdf sdf ds', '2021-05-26 13:01:57', '2021-05-26 13:02:31'),
(2, 9, 't@t.cc', NULL, '28 May, 1993', 'Male', 'asd asd asd asd asd', 'data designed', 'html,php,css,c#', 'Type a name and press enter or spacebar to add a tag. Click X to remove it.Type a name and press enter or spacebar to add a tag. Click X to remove it.Type a name and press enter or spacebar to add a tag. Click X to remove it.Type a name and press enter or spacebar to add a tag. Click X to remove it.Type a name and press enter or spacebar to add a tag. Click X to remove it.', '2021-05-26 20:37:14', '2021-05-26 20:41:22'),
(3, 10, 't@a.com', NULL, '24 May, 2003', 'Male', 'dfds sdf dsfdsf sdfs', 'developer', 'css', 'or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.or spacebar to add a tag. Click X to remove it.', '2021-05-28 09:39:51', '2021-05-28 09:40:18'),
(4, 2, 's@s.com', NULL, '18 May, 1994', 'Male', 'asdas asdas dasdas dasd a', 'laravel Web Developer', 'Laravel,css', 'Type a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove itType a name and press enter or spacebar to add a tag. Click X to remove it', '2021-05-28 20:43:07', '2021-05-28 20:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mainmenu_id` bigint(20) UNSIGNED NOT NULL,
  `submenu_id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startdate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enddate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `reviewby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_time` timestamp NULL DEFAULT NULL,
  `actionby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_time` timestamp NULL DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `pintocategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pintohome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pindatecategory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pindatehome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `mainmenu_id`, `submenu_id`, `heading`, `description`, `jobtype`, `amount`, `startdate`, `enddate`, `status`, `reviewby`, `review_time`, `actionby`, `action_time`, `view`, `skill_name`, `proposal`, `pintocategory`, `pintohome`, `pindatecategory`, `pindatehome`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, 'this is test', 'this is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is testthis is test', 'Hourly', '100', '26 May, 2021', '2021-06-25 20:21:00', 'active', '2', '2021-05-26 13:50:23', '2', '2021-05-26 19:40:37', '22', 'html', 'yes', 'yes', 'yes', '2021-05-29 03:04:49', '2021-05-28 03:20:33', '2021-05-26 13:38:19', '2021-05-28 00:39:34'),
(3, 10, 1, 2, 'loram ispam feel amet loram ispam feel', 'loram ispam feel amet loram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel ametloram ispam feel amet', 'Fixed', '500', '3 April, 2021', '2021-05-03 20:21:00', 'active', '2', '2021-05-28 09:50:31', '2', '2021-05-28 09:50:49', NULL, 'html', 'yes', NULL, NULL, NULL, NULL, '2021-05-28 09:50:13', '2021-05-28 09:50:49'),
(4, 1, 1, 3, 'loram ispam feel amet loram ispam feel', 'loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel', 'Hourly', '30', '28 May, 2021', '2021-06-27 20:21:00', 'active', '2', '2021-05-28 09:52:50', '2', '2021-05-28 09:52:53', NULL, 'css', 'yes', NULL, NULL, NULL, NULL, '2021-05-28 09:52:39', '2021-05-28 09:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `awarded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `reviewby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_time` timestamp NULL DEFAULT NULL,
  `actionby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `user_id`, `project_id`, `description`, `amount`, `seen`, `status`, `awarded`, `reviewby`, `review_time`, `actionby`, `action_time`, `created_at`, `updated_at`) VALUES
(1, 9, 2, 'this is test proposal', '100', 'no', 'active', 'no', '2', '2021-05-26 20:58:33', '2', '2021-05-26 21:12:39', '2021-05-26 20:03:42', '2021-05-27 21:31:00'),
(2, 10, 2, 'asdf asdf sadf asdf asf sadf sadf sadf asdf asf', '100', 'no', 'active', 'no', '2', '2021-05-28 09:41:37', '2', '2021-05-28 09:41:48', '2021-05-28 09:41:26', '2021-05-28 09:41:48'),
(3, 10, 4, 'loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel loram ispam feel amet loram ispam feel', '20', 'no', 'active', 'no', '2', '2021-05-28 09:53:59', '2', '2021-05-28 09:54:05', '2021-05-28 09:53:49', '2021-05-28 09:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skill_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `created_at`, `updated_at`) VALUES
(1, 'html', '2021-05-26 13:02:30', '2021-05-26 13:02:30'),
(2, 'css', '2021-05-26 13:02:30', '2021-05-26 13:02:30'),
(3, 'php', '2021-05-26 20:41:21', '2021-05-26 20:41:21'),
(4, 'c#', '2021-05-26 20:41:21', '2021-05-26 20:41:21'),
(5, 'Laravel', '2021-05-28 20:43:43', '2021-05-28 20:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `submenus`
--

CREATE TABLE `submenus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mainmenu_id` bigint(20) UNSIGNED NOT NULL,
  `sub_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenus`
--

INSERT INTO `submenus` (`id`, `mainmenu_id`, `sub_name`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Developing', '1', 'active', '2020-12-26 20:24:37', '2020-12-26 20:24:37'),
(2, 1, 'Mobile Developing', '2', 'active', '2020-12-26 20:24:51', '2020-12-26 20:24:51'),
(3, 1, 'Ios Developing', '3', 'active', '2020-12-26 20:25:37', '2021-05-08 09:41:42'),
(4, 3, 'English', '1', 'active', '2020-12-27 21:14:29', '2020-12-27 21:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'disable',
  `point_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscrib_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piclocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviewby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_time` timestamp NULL DEFAULT NULL,
  `actionby` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_time` timestamp NULL DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `email_verified_at`, `password`, `type`, `status`, `point_id`, `subscrib_id`, `lastday`, `piclocation`, `country`, `reviewby`, `review_time`, `actionby`, `action_time`, `view`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Asfaq Uddin', '+931740303508', NULL, NULL, '$2a$04$O4eWdOR5D6ao09nP2ALGTugMEeVuy4.8B9nhNyMIhZWWvuj6ep7WS', 'normal', 'inactive', NULL, NULL, '2021-06-07 16:03:34', 'http://127.0.0.1:8000/storage/profile/1609019857.jpeg', 'AFGHANISTAN', '2', '2021-05-26 13:04:01', NULL, NULL, NULL, NULL, '2020-12-08 10:03:35', '2021-05-26 13:04:01'),
(2, 'Sad Dark', '+8801740303508', NULL, NULL, '$2a$04$O4eWdOR5D6ao09nP2ALGTugMEeVuy4.8B9nhNyMIhZWWvuj6ep7WS', 'superadmin', 'active', NULL, NULL, '2021-01-07 16:04:35', 'http://127.0.0.1:8000/storage/profile/1608557499.jpeg', 'BANGLADESH', '2', '2021-05-28 20:44:02', '2', '2021-05-28 20:44:06', NULL, NULL, '2020-12-08 10:04:35', '2021-05-28 20:44:06'),
(5, 'sdfdsfsdfsdf', '+3551740303508', NULL, NULL, '$2a$04$O4eWdOR5D6ao09nP2ALGTugMEeVuy4.8B9nhNyMIhZWWvuj6ep7WS', 'normal', 'disable', NULL, NULL, '2021-01-07 17:53:42', NULL, 'ALBANIA', NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-08 11:53:42', '2020-12-08 11:53:42'),
(6, 'subadmin', '+2131740303508', NULL, NULL, '$2a$04$O4eWdOR5D6ao09nP2ALGTugMEeVuy4.8B9nhNyMIhZWWvuj6ep7WS', 'subadmin', 'active', NULL, NULL, '2021-01-08 01:48:43', NULL, 'ALGERIA', '2', '2021-05-28 20:41:01', NULL, NULL, NULL, NULL, '2020-12-08 19:48:43', '2021-05-28 20:41:01'),
(7, 'ADMIN', '+16841740303508', NULL, NULL, '$2a$04$O4eWdOR5D6ao09nP2ALGTugMEeVuy4.8B9nhNyMIhZWWvuj6ep7WS', 'admin', 'active', NULL, NULL, '2021-01-08 01:49:40', NULL, 'AMERICAN SAMOA', '2', '2021-05-28 20:41:59', NULL, NULL, NULL, NULL, '2020-12-08 19:49:40', '2021-05-28 20:41:59'),
(9, 'istiq tusher', '+981740303508', NULL, NULL, '$2y$10$YDd86mVgs4ZeONuas9PhR.cX0rz.ZKQa8EhNrBnKqOaUdyOS53QXS', 'normal', 'disable', NULL, NULL, '2021-01-21 23:45:14', 'http://127.0.0.1:8000/storage/profile/1621985711.jpeg', 'IRAN, ISLAMIC REPUBLIC OF', '2', '2021-05-26 21:03:18', '2', '2021-05-26 21:03:25', NULL, NULL, '2020-12-22 17:45:14', '2021-05-28 08:48:45'),
(10, 'test', '+2441740303508', NULL, NULL, '$2y$10$stKId/QXmDKMfPwuAMpMvueeqd8T89mxHxBTLM7mlaXZE4hAWTeEK', 'normal', 'active', NULL, NULL, '2021-06-25 01:42:41', 'http://127.0.0.1:8000/storage/profile/1621981590.jpeg', 'ANGOLA', '2', '2021-05-28 09:40:31', '2', '2021-05-28 09:40:38', NULL, NULL, '2021-05-25 19:42:42', '2021-05-28 09:40:38'),
(16, 'afsfsfsdf', '+12641740303508', NULL, NULL, '$2y$10$P7ih4Uj/4C5GDxZlxbSLLOWIj82O5/HFC1if1VrvoWxIrdSTe7N7e', 'subadmin', 'disable', NULL, NULL, '2021-06-28 04:53:28', NULL, 'ANGUILLA', '2', '2021-05-28 22:53:37', NULL, NULL, NULL, NULL, '2021-05-28 22:53:28', '2021-05-28 22:53:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gigs`
--
ALTER TABLE `gigs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gigs_user_id_foreign` (`user_id`);

--
-- Indexes for table `mainmenus`
--
ALTER TABLE `mainmenus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_user_id_foreign` (`user_id`),
  ADD KEY `projects_mainmenu_id_foreign` (`mainmenu_id`),
  ADD KEY `projects_submenu_id_foreign` (`submenu_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proposals_user_id_foreign` (`user_id`),
  ADD KEY `proposals_project_id_foreign` (`project_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submenus`
--
ALTER TABLE `submenus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenus_mainmenu_id_foreign` (`mainmenu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gigs`
--
ALTER TABLE `gigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mainmenus`
--
ALTER TABLE `mainmenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `submenus`
--
ALTER TABLE `submenus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gigs`
--
ALTER TABLE `gigs`
  ADD CONSTRAINT `gigs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_mainmenu_id_foreign` FOREIGN KEY (`mainmenu_id`) REFERENCES `mainmenus` (`id`),
  ADD CONSTRAINT `projects_submenu_id_foreign` FOREIGN KEY (`submenu_id`) REFERENCES `submenus` (`id`),
  ADD CONSTRAINT `projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `proposals`
--
ALTER TABLE `proposals`
  ADD CONSTRAINT `proposals_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `proposals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `submenus`
--
ALTER TABLE `submenus`
  ADD CONSTRAINT `submenus_mainmenu_id_foreign` FOREIGN KEY (`mainmenu_id`) REFERENCES `mainmenus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
