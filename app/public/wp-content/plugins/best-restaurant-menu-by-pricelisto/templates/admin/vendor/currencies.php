<?php
/**
 * Currencies.
 */

$currencies = array_unique(
	apply_filters(
		'brm_curencies',
		array(
			'AED' => __( 'United Arab Emirates dirham', 'best-restaurant-menu' ),
			'AFN' => __( 'Afghan afghani', 'best-restaurant-menu' ),
			'ALL' => __( 'Albanian lek', 'best-restaurant-menu' ),
			'AMD' => __( 'Armenian dram', 'best-restaurant-menu' ),
			'ANG' => __( 'Netherlands Antillean guilder', 'best-restaurant-menu' ),
			'AOA' => __( 'Angolan kwanza', 'best-restaurant-menu' ),
			'ARS' => __( 'Argentine peso', 'best-restaurant-menu' ),
			'AUD' => __( 'Australian dollar', 'best-restaurant-menu' ),
			'AWG' => __( 'Aruban florin', 'best-restaurant-menu' ),
			'AZN' => __( 'Azerbaijani manat', 'best-restaurant-menu' ),
			'BAM' => __( 'Bosnia and Herzegovina convertible mark', 'best-restaurant-menu' ),
			'BBD' => __( 'Barbadian dollar', 'best-restaurant-menu' ),
			'BDT' => __( 'Bangladeshi taka', 'best-restaurant-menu' ),
			'BGN' => __( 'Bulgarian lev', 'best-restaurant-menu' ),
			'BHD' => __( 'Bahraini dinar', 'best-restaurant-menu' ),
			'BIF' => __( 'Burundian franc', 'best-restaurant-menu' ),
			'BMD' => __( 'Bermudian dollar', 'best-restaurant-menu' ),
			'BND' => __( 'Brunei dollar', 'best-restaurant-menu' ),
			'BOB' => __( 'Bolivian boliviano', 'best-restaurant-menu' ),
			'BRL' => __( 'Brazilian real', 'best-restaurant-menu' ),
			'BSD' => __( 'Bahamian dollar', 'best-restaurant-menu' ),
			'BTC' => __( 'Bitcoin', 'best-restaurant-menu' ),
			'BTN' => __( 'Bhutanese ngultrum', 'best-restaurant-menu' ),
			'BWP' => __( 'Botswana pula', 'best-restaurant-menu' ),
			'BYR' => __( 'Belarusian ruble (old)', 'best-restaurant-menu' ),
			'BYN' => __( 'Belarusian ruble', 'best-restaurant-menu' ),
			'BZD' => __( 'Belize dollar', 'best-restaurant-menu' ),
			'CAD' => __( 'Canadian dollar', 'best-restaurant-menu' ),
			'CDF' => __( 'Congolese franc', 'best-restaurant-menu' ),
			'CHF' => __( 'Swiss franc', 'best-restaurant-menu' ),
			'CLP' => __( 'Chilean peso', 'best-restaurant-menu' ),
			'CNY' => __( 'Chinese yuan', 'best-restaurant-menu' ),
			'COP' => __( 'Colombian peso', 'best-restaurant-menu' ),
			'CRC' => __( 'Costa Rican col&oacute;n', 'best-restaurant-menu' ),
			'CUC' => __( 'Cuban convertible peso', 'best-restaurant-menu' ),
			'CUP' => __( 'Cuban peso', 'best-restaurant-menu' ),
			'CVE' => __( 'Cape Verdean escudo', 'best-restaurant-menu' ),
			'CZK' => __( 'Czech koruna', 'best-restaurant-menu' ),
			'DJF' => __( 'Djiboutian franc', 'best-restaurant-menu' ),
			'DKK' => __( 'Danish krone', 'best-restaurant-menu' ),
			'DOP' => __( 'Dominican peso', 'best-restaurant-menu' ),
			'DZD' => __( 'Algerian dinar', 'best-restaurant-menu' ),
			'EGP' => __( 'Egyptian pound', 'best-restaurant-menu' ),
			'ERN' => __( 'Eritrean nakfa', 'best-restaurant-menu' ),
			'ETB' => __( 'Ethiopian birr', 'best-restaurant-menu' ),
			'EUR' => __( 'Euro', 'best-restaurant-menu' ),
			'FJD' => __( 'Fijian dollar', 'best-restaurant-menu' ),
			'FKP' => __( 'Falkland Islands pound', 'best-restaurant-menu' ),
			'GBP' => __( 'Pound sterling', 'best-restaurant-menu' ),
			'GEL' => __( 'Georgian lari', 'best-restaurant-menu' ),
			'GGP' => __( 'Guernsey pound', 'best-restaurant-menu' ),
			'GHS' => __( 'Ghana cedi', 'best-restaurant-menu' ),
			'GIP' => __( 'Gibraltar pound', 'best-restaurant-menu' ),
			'GMD' => __( 'Gambian dalasi', 'best-restaurant-menu' ),
			'GNF' => __( 'Guinean franc', 'best-restaurant-menu' ),
			'GTQ' => __( 'Guatemalan quetzal', 'best-restaurant-menu' ),
			'GYD' => __( 'Guyanese dollar', 'best-restaurant-menu' ),
			'HKD' => __( 'Hong Kong dollar', 'best-restaurant-menu' ),
			'HNL' => __( 'Honduran lempira', 'best-restaurant-menu' ),
			'HRK' => __( 'Croatian kuna', 'best-restaurant-menu' ),
			'HTG' => __( 'Haitian gourde', 'best-restaurant-menu' ),
			'HUF' => __( 'Hungarian forint', 'best-restaurant-menu' ),
			'IDR' => __( 'Indonesian rupiah', 'best-restaurant-menu' ),
			'ILS' => __( 'Israeli new shekel', 'best-restaurant-menu' ),
			'IMP' => __( 'Manx pound', 'best-restaurant-menu' ),
			'INR' => __( 'Indian rupee', 'best-restaurant-menu' ),
			'IQD' => __( 'Iraqi dinar', 'best-restaurant-menu' ),
			'IRR' => __( 'Iranian rial', 'best-restaurant-menu' ),
			'IRT' => __( 'Iranian toman', 'best-restaurant-menu' ),
			'ISK' => __( 'Icelandic kr&oacute;na', 'best-restaurant-menu' ),
			'JEP' => __( 'Jersey pound', 'best-restaurant-menu' ),
			'JMD' => __( 'Jamaican dollar', 'best-restaurant-menu' ),
			'JOD' => __( 'Jordanian dinar', 'best-restaurant-menu' ),
			'JPY' => __( 'Japanese yen', 'best-restaurant-menu' ),
			'KES' => __( 'Kenyan shilling', 'best-restaurant-menu' ),
			'KGS' => __( 'Kyrgyzstani som', 'best-restaurant-menu' ),
			'KHR' => __( 'Cambodian riel', 'best-restaurant-menu' ),
			'KMF' => __( 'Comorian franc', 'best-restaurant-menu' ),
			'KPW' => __( 'North Korean won', 'best-restaurant-menu' ),
			'KRW' => __( 'South Korean won', 'best-restaurant-menu' ),
			'KWD' => __( 'Kuwaiti dinar', 'best-restaurant-menu' ),
			'KYD' => __( 'Cayman Islands dollar', 'best-restaurant-menu' ),
			'KZT' => __( 'Kazakhstani tenge', 'best-restaurant-menu' ),
			'LAK' => __( 'Lao kip', 'best-restaurant-menu' ),
			'LBP' => __( 'Lebanese pound', 'best-restaurant-menu' ),
			'LKR' => __( 'Sri Lankan rupee', 'best-restaurant-menu' ),
			'LRD' => __( 'Liberian dollar', 'best-restaurant-menu' ),
			'LSL' => __( 'Lesotho loti', 'best-restaurant-menu' ),
			'LYD' => __( 'Libyan dinar', 'best-restaurant-menu' ),
			'MAD' => __( 'Moroccan dirham', 'best-restaurant-menu' ),
			'MDL' => __( 'Moldovan leu', 'best-restaurant-menu' ),
			'MGA' => __( 'Malagasy ariary', 'best-restaurant-menu' ),
			'MKD' => __( 'Macedonian denar', 'best-restaurant-menu' ),
			'MMK' => __( 'Burmese kyat', 'best-restaurant-menu' ),
			'MNT' => __( 'Mongolian t&ouml;gr&ouml;g', 'best-restaurant-menu' ),
			'MOP' => __( 'Macanese pataca', 'best-restaurant-menu' ),
			'MRU' => __( 'Mauritanian ouguiya', 'best-restaurant-menu' ),
			'MUR' => __( 'Mauritian rupee', 'best-restaurant-menu' ),
			'MVR' => __( 'Maldivian rufiyaa', 'best-restaurant-menu' ),
			'MWK' => __( 'Malawian kwacha', 'best-restaurant-menu' ),
			'MXN' => __( 'Mexican peso', 'best-restaurant-menu' ),
			'MYR' => __( 'Malaysian ringgit', 'best-restaurant-menu' ),
			'MZN' => __( 'Mozambican metical', 'best-restaurant-menu' ),
			'NAD' => __( 'Namibian dollar', 'best-restaurant-menu' ),
			'NGN' => __( 'Nigerian naira', 'best-restaurant-menu' ),
			'NIO' => __( 'Nicaraguan c&oacute;rdoba', 'best-restaurant-menu' ),
			'NOK' => __( 'Norwegian krone', 'best-restaurant-menu' ),
			'NPR' => __( 'Nepalese rupee', 'best-restaurant-menu' ),
			'NZD' => __( 'New Zealand dollar', 'best-restaurant-menu' ),
			'OMR' => __( 'Omani rial', 'best-restaurant-menu' ),
			'PAB' => __( 'Panamanian balboa', 'best-restaurant-menu' ),
			'PEN' => __( 'Sol', 'best-restaurant-menu' ),
			'PGK' => __( 'Papua New Guinean kina', 'best-restaurant-menu' ),
			'PHP' => __( 'Philippine peso', 'best-restaurant-menu' ),
			'PKR' => __( 'Pakistani rupee', 'best-restaurant-menu' ),
			'PLN' => __( 'Polish z&#x142;oty', 'best-restaurant-menu' ),
			'PRB' => __( 'Transnistrian ruble', 'best-restaurant-menu' ),
			'PYG' => __( 'Paraguayan guaran&iacute;', 'best-restaurant-menu' ),
			'QAR' => __( 'Qatari riyal', 'best-restaurant-menu' ),
			'RON' => __( 'Romanian leu', 'best-restaurant-menu' ),
			'RSD' => __( 'Serbian dinar', 'best-restaurant-menu' ),
			'RUB' => __( 'Russian ruble', 'best-restaurant-menu' ),
			'RWF' => __( 'Rwandan franc', 'best-restaurant-menu' ),
			'SAR' => __( 'Saudi riyal', 'best-restaurant-menu' ),
			'SBD' => __( 'Solomon Islands dollar', 'best-restaurant-menu' ),
			'SCR' => __( 'Seychellois rupee', 'best-restaurant-menu' ),
			'SDG' => __( 'Sudanese pound', 'best-restaurant-menu' ),
			'SEK' => __( 'Swedish krona', 'best-restaurant-menu' ),
			'SGD' => __( 'Singapore dollar', 'best-restaurant-menu' ),
			'SHP' => __( 'Saint Helena pound', 'best-restaurant-menu' ),
			'SLL' => __( 'Sierra Leonean leone', 'best-restaurant-menu' ),
			'SOS' => __( 'Somali shilling', 'best-restaurant-menu' ),
			'SRD' => __( 'Surinamese dollar', 'best-restaurant-menu' ),
			'SSP' => __( 'South Sudanese pound', 'best-restaurant-menu' ),
			'STN' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe dobra', 'best-restaurant-menu' ),
			'SYP' => __( 'Syrian pound', 'best-restaurant-menu' ),
			'SZL' => __( 'Swazi lilangeni', 'best-restaurant-menu' ),
			'THB' => __( 'Thai baht', 'best-restaurant-menu' ),
			'TJS' => __( 'Tajikistani somoni', 'best-restaurant-menu' ),
			'TMT' => __( 'Turkmenistan manat', 'best-restaurant-menu' ),
			'TND' => __( 'Tunisian dinar', 'best-restaurant-menu' ),
			'TOP' => __( 'Tongan pa&#x2bb;anga', 'best-restaurant-menu' ),
			'TRY' => __( 'Turkish lira', 'best-restaurant-menu' ),
			'TTD' => __( 'Trinidad and Tobago dollar', 'best-restaurant-menu' ),
			'TWD' => __( 'New Taiwan dollar', 'best-restaurant-menu' ),
			'TZS' => __( 'Tanzanian shilling', 'best-restaurant-menu' ),
			'UAH' => __( 'Ukrainian hryvnia', 'best-restaurant-menu' ),
			'UGX' => __( 'Ugandan shilling', 'best-restaurant-menu' ),
			'USD' => __( 'United States (US) dollar', 'best-restaurant-menu' ),
			'UYU' => __( 'Uruguayan peso', 'best-restaurant-menu' ),
			'UZS' => __( 'Uzbekistani som', 'best-restaurant-menu' ),
			'VEF' => __( 'Venezuelan bol&iacute;var', 'best-restaurant-menu' ),
			'VES' => __( 'Bol&iacute;var soberano', 'best-restaurant-menu' ),
			'VND' => __( 'Vietnamese &#x111;&#x1ed3;ng', 'best-restaurant-menu' ),
			'VUV' => __( 'Vanuatu vatu', 'best-restaurant-menu' ),
			'WST' => __( 'Samoan t&#x101;l&#x101;', 'best-restaurant-menu' ),
			'XAF' => __( 'Central African CFA franc', 'best-restaurant-menu' ),
			'XCD' => __( 'East Caribbean dollar', 'best-restaurant-menu' ),
			'XOF' => __( 'West African CFA franc', 'best-restaurant-menu' ),
			'XPF' => __( 'CFP franc', 'best-restaurant-menu' ),
			'YER' => __( 'Yemeni rial', 'best-restaurant-menu' ),
			'ZAR' => __( 'South African rand', 'best-restaurant-menu' ),
			'ZMW' => __( 'Zambian kwacha', 'best-restaurant-menu' ),
		)
	)
);

return $currencies;