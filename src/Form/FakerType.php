<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;

class FakerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('language', ChoiceType::class, [
                'choices' => array_flip([
                    'ar_JO' => 'Arabic (Jordan)',
                    'ar_SA' => 'Arabic (Saudi Arabia)',
                    'hy_AM' => 'Armenian (Armenia)',
                    'bn_BD' => 'Bangla (Bangladesh)',
                    'bg_BG' => 'Bulgarian (Bulgaria)',
                    'zh_CN' => 'Chinese (China)',
                    'zh_TW' => 'Chinese (Taiwan)',
                    'hr_HR' => 'Croatian (Croatia)',
                    'cs_CZ' => 'Czech (Czechia)',
                    'da_DK' => 'Danish (Denmark)',
                    'nl_BE' => 'Dutch (Belgium)',
                    'nl_NL' => 'Dutch (Netherlands)',
                    'en_AU' => 'English (Australia)',
                    'en_CA' => 'English (Canada)',
                    'en_HK' => 'English (Hong Kong SAR China)',
                    'en_IN' => 'English (India)',
                    'en_NZ' => 'English (New Zealand)',
                    'en_NG' => 'English (Nigeria)',
                    'en_PH' => 'English (Philippines)',
                    'en_SG' => 'English (Singapore)',
                    'en_ZA' => 'English (South Africa)',
                    'en_UG' => 'English (Uganda)',
                    'en_GB' => 'English (United Kingdom)',
                    'en_US' => 'English (United States)',
                    'fi_FI' => 'Finnish (Finland)',
                    'fr_FR' => 'French (France)',
                    'fr_BE' => 'French (Belgium)',
                    'fr_CA' => 'French (Canada)',
                    'fr_CH' => 'French (Switzerland)',
                    'ka_GE' => 'Georgian (Georgia)',
                    'de_AT' => 'German (Austria common)',
                    'at_AT' => 'German (Austria native)',
                    'de_DE' => 'German (Germany)',
                    'de_CH' => 'German (Switzerland)',
                    'el_CY' => 'Greek (Cyprus)',
                    'el_GR' => 'Greek (Greece)',
                    'he_IL' => 'Hebrew (Israel)',
                    'hu_HU' => 'Hungarian (Hungary)',
                    'is_IS' => 'Icelandic (Iceland)',
                    'id_ID' => 'Indonesian (Indonesia)',
                    'it_IT' => 'Italian (Italy)',
                    'it_CH' => 'Italian (Switzerland)',
                    'ja_JP' => 'Japanese (Japan)',
                    'kk_KZ' => 'Kazakh (Kazakhstan)',
                    'ko_KR' => 'Korean (South Korea)',
                    'lv_LV' => 'Latvian (Latvia)',
                    'lt_LT' => 'Lithuanian (Lithuania)',
                    'me_ME' => 'Montenegrin (Montenegro)',
                    'ms_MY' => 'Malay (Malaysia)',
                    'mn_MN' => 'Mongolian (Mongolia)',
                    'ne_NP' => 'Nepali (Nepal)',
                    'nb_NO' => 'Norwegian Bokmål (Norway)',
                    'fa_IR' => 'Persian (Iran)',
                    'pl_PL' => 'Polish (Poland)',
                    'pt_BR' => 'Portuguese (Brazil)',
                    'pt_PT' => 'Portuguese (Portugal)',
                    'ro_MD' => 'Romanian (Moldova)',
                    'ro_RO' => 'Romanian (Romania)',
                    'ru_RU' => 'Russian (Russia)',
                    'sr_Cyrl_RS' => 'Serbian (Cyrillic, Serbia)',
                    'sr_Latn_RS' => 'Serbian (Latin, Serbia)',
                    'sr_RS' => 'Serbian (Serbia)',
                    'sk_SK' => 'Slovak (Slovakia)',
                    'sl_SI' => 'Slovenian (Slovenia)',
                    'es_AR' => 'Spanish (Argentina)',
                    'es_PE' => 'Spanish (Peru)',
                    'es_ES' => 'Spanish (Spain)',
                    'es_VE' => 'Spanish (Venezuela)',
                    'sv_SE' => 'Swedish (Sweden)',
                    'th_TH' => 'Thai (Thailand)',
                    'tr_TR' => 'Turkish (Turkey)',
                    'uk_UA' => 'Ukrainian (Ukraine)',
                    'vi_VN' => 'Vietnamese (Vietnam)',
                ]),
            ])
            ->add('how_many', NumberType::class, [
                'html5' => true,
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Base' => [
                        'Number between' => 'numberBetween',
                        'Random digit not null' => 'randomDigitNotNull',
                        'Random digit' => 'randomDigit',
                        'Random float' => 'randomFloat',
                        'Random letter' => 'randomLetter',
                        'Random number' => 'randomNumber',
                    ],

                    'Lorem' => [
                        'Paragraph' => 'paragraph',
                        'Paragraphs' => 'paragraphs',
                        'Sentence' => 'sentence',
                        'Sentences' => 'sentences',
                        'Text' => 'text',
                        'Word' => 'word',
                        'Words' => 'words',
                    ],

                    'Person' => [
                        'First name female' => 'firstNameFemale',
                        'First name male' => 'firstNameMale',
                        'First name' => 'firstName',
                        'Last name' => 'lastName',
                        'Name' => 'name',
                        'Suffix' => 'suffix',
                        'Title female' => 'titleFemale',
                        'Title male' => 'titleMale',
                        'Title' => 'title',
                    ],

                    'Address' => [
                        'Address' => 'address',
                        'Building number' => 'buildingNumber',
                        'City prefix' => 'cityPrefix',
                        'City suffix' => 'citySuffix',
                        'City' => 'city',
                        'Country' => 'country',
                        'Latitude' => 'latitude',
                        'Longitude' => 'longitude',
                        'Postcode' => 'postcode',
                        'Secondary address' => 'secondaryAddress',
                        'State abbr' => 'stateAbbr',
                        'State' => 'state',
                        'Street address' => 'streetAddress',
                        'Street name' => 'streetName',
                        'Street suffix' => 'streetSuffix',
                    ],

                    'PhoneNumber' => [
                        'E164 phone number' => 'e164PhoneNumber',
                        'Phone number' => 'phoneNumber',
                        'Toll free phone number' => 'tollFreePhoneNumber',
                    ],

                    'Company' => [
                        'BS' => 'bs',
                        'Catch phrase' => 'catchPhrase',
                        'Company suffix' => 'companySuffix',
                        'Company' => 'company',
                        'Job title' => 'jobTitle',
                    ],

                    'Text' => [
                        'Real text' => 'realText',
                    ],

                    'DateTime' => [
                        'Unix time' => 'unixTime',
                        'Date time' => 'dateTime',
                        'Date time ad' => 'dateTimeAD',
                        'ISO8601' => 'iso8601',
                        'Date' => 'date',
                        'Time' => 'time',
                        'Date time this century' => 'dateTimeThisCentury',
                        'Date time this decade' => 'dateTimeThisDecade',
                        'Date time this year' => 'dateTimeThisYear',
                        'Date time this month' => 'dateTimeThisMonth',
                        'Am pm' => 'amPm',
                        'Day of month' => 'dayOfMonth',
                        'Day of week' => 'dayOfWeek',
                        'Month' => 'month',
                        'Month name' => 'monthName',
                        'Year' => 'year',
                        'Century' => 'century',
                        'Timezone' => 'timezone',
                    ],

                    'Internet' => [
                        'Email' => 'email',
                        'Safe email' => 'safeEmail',
                        'Free email' => 'freeEmail',
                        'Company email' => 'companyEmail',
                        'Free email domain' => 'freeEmailDomain',
                        'Safe email domain' => 'safeEmailDomain',
                        'User name' => 'userName',
                        'Password' => 'password',
                        'Domain name' => 'domainName',
                        'Domain word' => 'domainWord',
                        'TLD' => 'tld',
                        'Url' => 'url',
                        'Slug' => 'slug',
                        'Ipv4' => 'ipv4',
                        'Local ipv4' => 'localIpv4',
                        'Ipv6' => 'ipv6',
                        'MAC address' => 'macAddress',
                    ],

                    'UserAgent' => [
                        'User agent' => 'userAgent',
                        'Chrome' => 'chrome',
                        'Firefox' => 'firefox',
                        'Safari' => 'safari',
                        'Opera' => 'opera',
                        'Internet explorer' => 'internetExplorer',
                    ],

                    'Payment' => [
                        'Credit card type' => 'creditCardType',
                        'Credit card number' => 'creditCardNumber',
                        'Credit card expiration date' => 'creditCardExpirationDate',
                        'Credit card expiration date string' => 'creditCardExpirationDateString',
                        'Credit card details' => 'creditCardDetails',
                        'Swift BIC number' => 'swiftBicNumber',
                    ],

                    'Color' => [
                        'HEX color' => 'hexcolor',
                        'RGB color' => 'rgbcolor',
                        'RGB CSS color' => 'rgbCssColor',
                        'Safe color name' => 'safeColorName',
                        'Color name' => 'colorName',
                        'HSL color' => 'hslColor',
                    ],

                    'File' => [
                        'File extension' => 'fileExtension',
                        'MIME type' => 'mimeType',
                    ],

                    'Image' => [
                        'Image URL' => 'imageUrl',
                    ],

                    'Uuid' => [
                        'UUID' => 'uuid',
                    ],

                    'Barcode' => [
                        'EAN13' => 'ean13',
                        'EAN8' => 'ean8',
                        'ISBN13' => 'isbn13',
                        'ISBN10' => 'isbn10',
                    ],

                    'Miscellaneous' => [
                        'Boolean' => 'boolean',
                        'MD5' => 'md5',
                        'SHA1' => 'sha1',
                        'SHA256' => 'sha256',
                        'Locale' => 'locale',
                        'Country code' => 'countryCode',
                        'Language code' => 'languageCode',
                        'Currency code' => 'currencyCode',
                        'Emoji' => 'emoji',
                    ],

                    'Biased' => [
                        'Biased number between' => 'biasedNumberBetween',
                    ],

                    'HtmlLorem' => [
                        'Random html' => 'randomHtml',
                        'modifiers' => 'Modifiers',

                    ],
                ]
            ])
        ;
    }
}
