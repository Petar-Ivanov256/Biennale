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
        DB::insert("INSERT INTO `countries` (`id`, `created_at`, `updated_at`, `title`, `title_en`) VALUES
			(1, NULL, NULL, 'Афганистан', 'Afghanistan'),
			(2, NULL, NULL, 'Албания', 'Albania'),
			(3, NULL, NULL, 'Алжир', 'Algeria'),
			(4, NULL, NULL, 'Андора', 'Andorra'),
			(5, NULL, NULL, 'Ангола', 'Angola'),
			(6, NULL, NULL, 'Антигуа и Барбуда', 'Antigua and Barbuda'),
			(7, NULL, NULL, 'Аржентина', 'Argentina'),
			(8, NULL, NULL, 'Армения', 'Armenia'),
			(9, NULL, NULL, 'Австралия', 'Australia'),
			(10, NULL, NULL, 'Австрия', 'Austria'),
			(11, NULL, NULL, 'Азербайджан', 'Azerbaijan'),
			(12, NULL, NULL, 'Бахами', 'Bahamas'),
			(13, NULL, NULL, 'Бахрейн', 'Bahrain'),
			(14, NULL, NULL, 'Бангладеш', 'Bangladesh'),
			(15, NULL, NULL, 'Барбадос', 'Barbados'),
			(16, NULL, NULL, 'Беларус', 'Belarus'),
			(17, NULL, NULL, 'Белгия', 'Belgium'),
			(18, NULL, NULL, 'Белиз', 'Belize'),
			(19, NULL, NULL, 'Бенин', 'Benin'),
			(20, NULL, NULL, 'Бутан', 'Bhutan'),
			(21, NULL, NULL, 'Боливия', 'Bolivia'),
			(22, NULL, NULL, 'Босна и Херцеговина', 'Bosnia and Herzegovina'),
			(23, NULL, NULL, 'Ботсвана', 'Botswana'),
			(24, NULL, NULL, 'Бразилия', 'Brazil'),
			(25, NULL, NULL, 'Бруней Дарусалам', 'Brunei Darussalam'),
			(26, NULL, NULL, 'България', 'Bulgaria'),
			(27, NULL, NULL, 'Буркина Фасо', 'Burkina Faso'),
			(28, NULL, NULL, 'Бурунди', 'Burundi'),
			(29, NULL, NULL, 'Кабо Верде', 'Cabo Verde'),
			(30, NULL, NULL, 'Камбоджа', 'Cambodia'),
			(31, NULL, NULL, 'Камерун', 'Cameroon'),
			(32, NULL, NULL, 'Канада', 'Canada'),
			(33, NULL, NULL, 'Централна Африканска Република', 'Central African Republic'),
			(34, NULL, NULL, 'Чад', 'Chad'),
			(35, NULL, NULL, 'Чили', 'Chile'),
			(36, NULL, NULL, 'Китай', 'China'),
			(37, NULL, NULL, 'Колумбия', 'Colombia'),
			(38, NULL, NULL, 'Коморски острови', 'Comoros'),
			(39, NULL, NULL, 'Конго', 'Congo'),
			(40, NULL, NULL, 'Коста Рика', 'Costa Rica'),
			(41, NULL, NULL, 'Кот дИвоар', 'Côte D\'Ivoire'),
			(42, NULL, NULL, 'Хърватия', 'Croatia'),
			(43, NULL, NULL, 'Куба', 'Cuba'),
			(44, NULL, NULL, 'Кипър', 'Cyprus'),
			(45, NULL, NULL, 'Чехия', 'Czech Republic'),
			(46, NULL, NULL, 'Народнодемократична Република Корея', 'Democratic People\'s Republic of Korea'),
			(47, NULL, NULL, 'Демократична република Конго', 'Democratic Republic of the Congo'),
			(48, NULL, NULL, 'Дания', 'Denmark'),
			(49, NULL, NULL, 'Джибути', 'Djibouti'),
			(50, NULL, NULL, 'Доминика', 'Dominica'),
			(51, NULL, NULL, 'Доминиканска република', 'Dominican Republic'),
			(52, NULL, NULL, 'Еквадор', 'Ecuador'),
			(53, NULL, NULL, 'Египет', 'Egypt'),
			(54, NULL, NULL, 'Ел Салвадор', 'El Salvador'),
			(55, NULL, NULL, 'Екваториална Гвинея', 'Equatorial Guinea'),
			(56, NULL, NULL, 'Еритрея', 'Eritrea'),
			(57, NULL, NULL, 'Естония', 'Estonia'),
			(58, NULL, NULL, 'Етиопия', 'Ethiopia'),
			(59, NULL, NULL, 'Фиджи', 'Fiji'),
			(60, NULL, NULL, 'Финландия', 'Finland'),
			(61, NULL, NULL, 'Франция', 'France'),
			(62, NULL, NULL, 'Габон', 'Gabon'),
			(63, NULL, NULL, 'Гамбия (република)', 'Gambia (Republic of The)'),
			(64, NULL, NULL, 'Грузия', 'Georgia'),
			(65, NULL, NULL, 'Германия', 'Germany'),
			(66, NULL, NULL, 'Гана', 'Ghana'),
			(67, NULL, NULL, 'Гърция', 'Greece'),
			(68, NULL, NULL, 'Гренада', 'Grenada'),
			(69, NULL, NULL, 'Гватемала', 'Guatemala'),
			(70, NULL, NULL, 'Гвинея', 'Guinea'),
			(71, NULL, NULL, 'Гвинея Бисау', 'Guinea Bissau'),
			(72, NULL, NULL, 'Гвиана', 'Guyana'),
			(73, NULL, NULL, 'Хаити', 'Haiti'),
			(74, NULL, NULL, 'Хондурас', 'Honduras'),
			(75, NULL, NULL, 'Унгария', 'Hungary'),
			(76, NULL, NULL, 'Исландия', 'Iceland'),
			(77, NULL, NULL, 'Индия', 'India'),
			(78, NULL, NULL, 'Индонезия', 'Indonesia'),
			(79, NULL, NULL, 'Иран (Ислямска република)', 'Iran (Islamic Republic of)'),
			(80, NULL, NULL, 'Ирак', 'Iraq'),
			(81, NULL, NULL, 'Ирландия', 'Ireland'),
			(82, NULL, NULL, 'Израел', 'Israel'),
			(83, NULL, NULL, 'Италия', 'Italy'),
			(84, NULL, NULL, 'Ямайка', 'Jamaica'),
			(85, NULL, NULL, 'Япония', 'Japan'),
			(86, NULL, NULL, 'Йордания', 'Jordan'),
			(87, NULL, NULL, 'Казахстан', 'Kazakhstan'),
			(88, NULL, NULL, 'Кения', 'Kenya'),
			(89, NULL, NULL, 'Кирибати', 'Kiribati'),
			(90, NULL, NULL, 'Кувейт', 'Kuwait'),
			(91, NULL, NULL, 'Киргизстан', 'Kyrgyzstan'),
			(92, NULL, NULL, 'Лаоска народнодемократична република', 'Lao People’s Democratic Republic'),
			(93, NULL, NULL, 'Латвия', 'Latvia'),
			(94, NULL, NULL, 'Ливан', 'Lebanon'),
			(95, NULL, NULL, 'Лесото', 'Lesotho'),
			(96, NULL, NULL, 'Либерия', 'Liberia'),
			(97, NULL, NULL, 'Либия', 'Libya'),
			(98, NULL, NULL, 'Лихтенщайн', 'Liechtenstein'),
			(99, NULL, NULL, 'Литва', 'Lithuania'),
			(100, NULL, NULL, 'Люксембург', 'Luxembourg'),
			(101, NULL, NULL, 'Мадагаскар', 'Madagascar'),
			(102, NULL, NULL, 'Малави', 'Malawi'),
			(103, NULL, NULL, 'Малайзия', 'Malaysia'),
			(104, NULL, NULL, 'Малдиви', 'Maldives'),
			(105, NULL, NULL, 'Мали', 'Mali'),
			(106, NULL, NULL, 'Малта', 'Malta'),
			(107, NULL, NULL, 'Маршалови острови', 'Marshall Islands'),
			(108, NULL, NULL, 'Мавритания', 'Mauritania'),
			(109, NULL, NULL, 'Мавриций', 'Mauritius'),
			(110, NULL, NULL, 'Мексико', 'Mexico'),
			(111, NULL, NULL, 'Микронезия (Федерални Щати)', 'Micronesia (Federated States of)'),
			(112, NULL, NULL, 'Монако', 'Monaco'),
			(113, NULL, NULL, 'Монголия', 'Mongolia'),
			(114, NULL, NULL, 'Черна гора', 'Montenegro'),
			(115, NULL, NULL, 'Мароко', 'Morocco'),
			(116, NULL, NULL, 'Мозамбик', 'Mozambique'),
			(117, NULL, NULL, 'Мианмар', 'Myanmar'),
			(118, NULL, NULL, 'Намибия', 'Namibia'),
			(119, NULL, NULL, 'Науру', 'Nauru'),
			(120, NULL, NULL, 'Непал', 'Nepal'),
			(121, NULL, NULL, 'Холандия', 'Netherlands'),
			(122, NULL, NULL, 'Нова Зеландия', 'New Zealand'),
			(123, NULL, NULL, 'Никарагуа', 'Nicaragua'),
			(124, NULL, NULL, 'Нигер', 'Niger'),
			(125, NULL, NULL, 'Нигерия', 'Nigeria'),
			(126, NULL, NULL, 'Норвегия', 'Norway'),
			(127, NULL, NULL, 'Оман', 'Oman'),
			(128, NULL, NULL, 'Пакистан', 'Pakistan'),
			(129, NULL, NULL, 'Палау', 'Palau'),
			(130, NULL, NULL, 'Панама', 'Panama'),
			(131, NULL, NULL, 'Папуа-Нова Гвинея', 'Papua New Guinea'),
			(132, NULL, NULL, 'Парагвай', 'Paraguay'),
			(133, NULL, NULL, 'Перу', 'Peru'),
			(134, NULL, NULL, 'Филипини', 'Philippines'),
			(135, NULL, NULL, 'Полша', 'Poland'),
			(136, NULL, NULL, 'Португалия', 'Portugal'),
			(137, NULL, NULL, 'Катар', 'Qatar'),
			(138, NULL, NULL, 'Република Корея', 'Republic of Korea'),
			(139, NULL, NULL, 'Република Молдова', 'Republic of Moldova'),
			(140, NULL, NULL, 'Румъния', 'Romania'),
			(141, NULL, NULL, 'Руска федерация', 'Russian Federation'),
			(142, NULL, NULL, 'Руанда', 'Rwanda'),
			(143, NULL, NULL, 'Сейнт Китс и Невис', 'Saint Kitts and Nevis'),
			(144, NULL, NULL, 'Сейнт Лусия', 'Saint Lucia'),
			(145, NULL, NULL, 'Сейнт Винсент и Гренадини', 'Saint Vincent and the Grenadines'),
			(146, NULL, NULL, 'Самоа', 'Samoa'),
			(147, NULL, NULL, 'Сан Марино', 'San Marino'),
			(148, NULL, NULL, 'Сао Томе и Принсипи', 'Sao Tome and Principe'),
			(149, NULL, NULL, 'Саудитска Арабия', 'Saudi Arabia'),
			(150, NULL, NULL, 'Сенегал', 'Senegal'),
			(151, NULL, NULL, 'Сърбия', 'Serbia'),
			(152, NULL, NULL, 'Сейшелите', 'Seychelles'),
			(153, NULL, NULL, 'Сиера Леоне', 'Sierra Leone'),
			(154, NULL, NULL, 'Сингапур', 'Singapore'),
			(155, NULL, NULL, 'Словакия', 'Slovakia'),
			(156, NULL, NULL, 'Словения', 'Slovenia'),
			(157, NULL, NULL, 'Соломоновите острови', 'Solomon Islands'),
			(158, NULL, NULL, 'Сомалия', 'Somalia'),
			(159, NULL, NULL, 'Южна Африка', 'South Africa'),
			(160, NULL, NULL, 'Южен Судан', 'South Sudan'),
			(161, NULL, NULL, 'Испания', 'Spain'),
			(162, NULL, NULL, 'Шри Ланка', 'Sri Lanka'),
			(163, NULL, NULL, 'Судан', 'Sudan'),
			(164, NULL, NULL, 'Суринам', 'Suriname'),
			(165, NULL, NULL, 'Свазиленд', 'Swaziland'),
			(166, NULL, NULL, 'Швеция', 'Sweden'),
			(167, NULL, NULL, 'Швейцария', 'Switzerland'),
			(168, NULL, NULL, 'Сирийска Арабска република', 'Syrian Arab Republic'),
			(169, NULL, NULL, 'Таджикистан', 'Tajikistan'),
			(170, NULL, NULL, 'Тайланд', 'Thailand'),
			(171, NULL, NULL, 'Македония', 'Macedonia'),
			(172, NULL, NULL, 'Източен Тимор', 'Timor-Leste'),
			(173, NULL, NULL, 'Того', 'Togo'),
			(174, NULL, NULL, 'Тонга', 'Tonga'),
			(175, NULL, NULL, 'Тринидад и Тобаго', 'Trinidad and Tobago'),
			(176, NULL, NULL, 'Тунис', 'Tunisia'),
			(177, NULL, NULL, 'Турция', 'Turkey'),
			(178, NULL, NULL, 'Туркменистан', 'Turkmenistan'),
			(179, NULL, NULL, 'Тувалу', 'Tuvalu'),
			(180, NULL, NULL, 'Уганда', 'Uganda'),
			(181, NULL, NULL, 'Украйна', 'Ukraine'),
			(182, NULL, NULL, 'Обединени арабски емирства', 'United Arab Emirates'),
			(183, NULL, NULL, 'Обединено кралство Великобритания и Северна Ирландия', 'United Kingdom of Great Britain and Northern Ireland'),
			(184, NULL, NULL, 'Обединена република Танзания', 'United Republic of Tanzania'),
			(185, NULL, NULL, 'Съединени Американски щати', 'United States of America'),
			(186, NULL, NULL, 'Уругвай', 'Uruguay'),
			(187, NULL, NULL, 'Узбекистан', 'Uzbekistan'),
			(188, NULL, NULL, 'Вануату', 'Vanuatu'),
			(189, NULL, NULL, 'Венецуела', 'Venezuela'),
			(190, NULL, NULL, 'Виетнам', 'Viet Nam'),
			(191, NULL, NULL, 'Йемен', 'Yemen'),
			(192, NULL, NULL, 'Замбия', 'Zambia'),
			(193, NULL, NULL, 'Зимбабве', 'Zimbabwe'),
			(194, NULL, NULL, 'Тайван', 'Taiwan');");
    }
}
