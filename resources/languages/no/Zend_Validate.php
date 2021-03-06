<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Translator
 * @subpackage Resource
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * EN-Revision: 25.Jul.2011
 */
return array(
    // Zend_Validate_Alnum
    "Invalid type given. String, integer or float expected" => "Ikke gylig type er angitt. Streng, heltall eller flyttall blir akseptert",
    "'%value%' contains characters which are non alphabetic and no digits" => "'%value%' inneholder tegn som ikke er alfabetiske og ingen sifre",
    "'%value%' is an empty string" => "'%value%' er en tom streng",

    // Zend_Validate_Alpha
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "'%value%' contains non alphabetic characters" => "'%value%' contains non alphabetic characters",
    "'%value%' is an empty string" => "'%value%' is an empty string",

    // Zend_Validate_Barcode
    "'%value%' failed checksum validation" => "'%value%' feilet i kontrollsumvalidering",
    "'%value%' contains invalid characters" => "'%value%' inneholder ugyldige tegn",
    "'%value%' should have a length of %length% characters" => "'%value%' må ha en lengde på %length% tegn",
    "Invalid type given. String expected" => "Ugyldig typen gitt. Streng forventet",

    // Zend_Validate_Between
    "'%value%' is not between '%min%' and '%max%', inclusively" => "'%value%' er ikke mellom '%min%' og '%max%', inkluderende",
    "'%value%' is not strictly between '%min%' and '%max%'" => "'%value%' er ikke strengt talt mellom '%min%' og '%max%'",

    // Zend_Validate_Callback
    "'%value%' is not valid" => "'%value%' er ikke gyldig",
    "An exception has been raised within the callback" => "Et unntak er hevet innen tilbakeringingen",

    // Zend_Validate_Ccnum
    "'%value%' must contain between 13 and 19 digits" => "'%value%' må inneholde mellom 13 og 19 siffer",
    "Luhn algorithm (mod-10 checksum) failed on '%value%'" => "Luhn algoritmen (mod-10 sjekksum) mislyktes på '%value%'",

    // Zend_Validate_CreditCard
    "'%value%' seems to contain an invalid checksum" => "Det synes som at '%value%' har en ugyldig sjekksum",
    "'%value%' must contain only digits" => "'%value%' må kun inneholde siffer",
    "Invalid type given. String expected" => "Ugyldig type gitt. Streng forventet",
    "'%value%' contains an invalid amount of digits" => "'%value%' inneholder ett ugyldig antall sifre",
    "'%value%' is not from an allowed institute" => "'%value%' er ikke fra ett tillatt institutt",
    "'%value%' seems to be an invalid creditcard number" => "'%value%' synes å være ett ugyldig kredittkortnummer",
    "An exception has been raised while validating '%value%'" => "Et unntak ble reist under validering av '%value%'",

    // Zend_Validate_Date
    "Invalid type given. String, integer, array or Zend_Date expected" => "Ugyldig type angitt. Streng, heltall, array eller Zend_Date var forventet",
    "'%value%' does not appear to be a valid date" => "'%value%' synes ikke å være en gyldig dato",
    "'%value%' does not fit the date format '%format%'" => "'%value%' passer ikke datoformatet '%format%'",

    // Zend_Validate_Db_Abstract
    "No record matching '%value%' was found" => "Ingen poster ble funnet for '%value%'",
    "A record matching '%value%' was found" => "En post ble funnet for '%value%'",

    // Zend_Validate_Digits
    "Invalid type given. String, integer or float expected" => "Ugyldig type angitt. Streng heltall eller flyttall var forventet",
    "'%value%' must contain only digits" => "'%value%' må bare inneholde sifre",
    "'%value%' is an empty string" => "'%value%' er en tom streng",

    // Zend_Validate_EmailAddress
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng var forventet",
    "'%value%' is not a valid email address in the basic format local-part@hostname" => "'%value%' er ikke en gyldig e-postadresse i det grunnleggende formatet bruker@vertsnavn",
    "'%hostname%' is not a valid hostname for email address '%value%'" => "'%hostname%' er ikke en gyldig vertsnavn for e-postadressen '%value%'",
    "'%hostname%' does not appear to have a valid MX record for the email address '%value%'" => "'%hostname%' synes ikke å ha en gyldig 'MX record' for e-postadressen '%value%'",
    "'%hostname%' is not in a routable network segment. The email address '%value%' should not be resolved from public network" => "'%hostname%' er ikke i en rutbare nettverk segment. E-postadressen '%value%' kommer ikke fra et offentlig nett",
    "'%localPart%' can not be matched against dot-atom format" => "'%localPart%' kan ikke sammenliknes mot dot-atom formatet",
    "'%localPart%' can not be matched against quoted-string format" => "'%localPart%' kan ikke sammenliknes mot anførselstegn-streng formatet",
    "'%localPart%' is not a valid local part for email address '%value%'" => "'%localPart%' er ikke en gyldig lokal del for e-postadressen '%value%'",
    "'%value%' exceeds the allowed length" => "'%value%' overstiger tillatt lengde",

    // Zend_Validate_File_Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "For mange filer, maksimum '%max%' er tillatt, men '%count%' er angitt",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "for få filer, minimum '%min%' er forventet, men '%count%' er angitt",

    // Zend_Validate_File_Crc32
    "File '%value%' does not match the given crc32 hashes" => "Filen '%value%' samsvarer ikke med gitte crc32 hasher",
    "A crc32 hash could not be evaluated for the given file" => "En crc32 hash kunne ikke bli vurdert for den gitte filen",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_ExcludeExtension
    "File '%value%' has a false extension" => "Feil filtype for filen '%value%'",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_ExcludeMimeType
    "File '%value%' has a false mimetype of '%type%'" => "Filen '%value%' har en feil mimetype av '%type%'",
    "The mimetype of file '%value%' could not be detected" => "Mimetype for filen '%value%' ble ikke funnet",
    "File '%value%' is not readable or does not exist" => "File '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_Exists
    "File '%value%' does not exist" => "Filen '%value%' finnes ikke",

    // Zend_Validate_File_Extension
    "File '%value%' has a false extension" => "Feil filtype for filen '%value%'",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "Alle filer i sum skal ha en maksimal størrelse på '%max%', men '%size%' var påvist",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "Alle filer i sum skal ha en minimum størrelse på '%min%' but '%size%' var påvist",
    "One or more files can not be read" => "En eller flere filer kan ikke leses",

    // Zend_Validate_File_Hash
    "File '%value%' does not match the given hashes" => "Filen '%value%' er ikke samsvarer med de gitte hasher",
    "A hash could not be evaluated for the given file" => "En hash kunne ikke bli vurdert for den gitte filen",
    "File '%value%' is not readable or does not exist" => "File '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_ImageSize
    "Maximum allowed width for image '%value%' should be '%maxwidth%' but '%width%' detected" => "Maksimal tillatt bredde for bilde '%value%' skulle være '%maxwidth%' men var '%width%'",
    "Minimum expected width for image '%value%' should be '%minwidth%' but '%width%' detected" => "Minimum forventet bredde for bilde '%value%' skulle være '%minwidth%' men var '%width%'",
    "Maximum allowed height for image '%value%' should be '%maxheight%' but '%height%' detected" => "Maksimal tillatt høyde for bilde '%value%' skulle være '%maxheight%' men var '%height%'",
    "Minimum expected height for image '%value%' should be '%minheight%' but '%height%' detected" => "Minimum forventet høyde for bilde '%value%' skulle være '%minheight%' men var '%height%'",
    "The size of image '%value%' could not be detected" => "Størrelsen på bildet '%value%' kunne ikke bli funnet",
    "File '%value%' is not readable or does not exist" => "File '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_IsCompressed
    "File '%value%' is not compressed, '%type%' detected" => "Filen '%value%' er ikke komprimert, filtypen '%type%' ble funnet",
    "The mimetype of file '%value%' could not be detected" => "Mimetype for filen '%value%' fle ikke funnet",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_IsImage
    "File '%value%' is no image, '%type%' detected" => "Filen '%value%' er ikke et bilde, '%type%' ble funnet",
    "The mimetype of file '%value%' could not be detected" => "Mimetype for filen '%value%' fle ikke funnet",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_Md5
    "File '%value%' does not match the given md5 hashes" => "Filen '%value%' er ikke samsvarer med den angitte md5 hashen",
    "A md5 hash could not be evaluated for the given file" => "En md5 hash kunne ikke bli vurdert for den gitte filen",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_MimeType
    "File '%value%' has a false mimetype of '%type%'" => "Filen '%value%' har en feil mimetype for '%type%'",
    "The mimetype of file '%value%' could not be detected" => "Mimetypen for filen '%value%' ble ikke funnet",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_NotExists
    "File '%value%' exists" => "Filen '%value%' finnes",

    // Zend_Validate_File_Sha1
    "File '%value%' does not match the given sha1 hashes" => "Filen '%value%' er ikke samsvarer med den angitte sha1 hashen",
    "A sha1 hash could not be evaluated for the given file" => "En sha1 hash kunne ikke bli vurdert for den gitte filen",
    "File '%value%' is not readable or does not exist" => "File '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_Size
    "Maximum allowed size for file '%value%' is '%max%' but '%size%' detected" => "Maksimal tillatt størrelse for filen '%value%' er '%max%' men '%size%' ble funnet",
    "Minimum expected size for file '%value%' is '%min%' but '%size%' detected" => "Minimum forventet størrelse for filen '%value%' er '%min%' men '%size%' ble funnet",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_File_Upload
    "File '%value%' exceeds the defined ini size" => "Filen '%value%' overskrider definerte ini størrelse",
    "File '%value%' exceeds the defined form size" => "Filen '%value%' overskrider definerte skjema størrelse",
    "File '%value%' was only partially uploaded" => "Filen '%value%' ble delvis lastet opp",
    "File '%value%' was not uploaded" => "Filen '%value%' ble ikke lastet opp",
    "No temporary directory was found for file '%value%'" => "Ingen midlertidig mappe ble funnet for filen '%value%'",
    "File '%value%' can't be written" => "Filen '%value%' kan ikke bli skrevet",
    "A PHP extension returned an error while uploading the file '%value%'" => "En PHP forlengelsen returnerte en feil under opplasting av filen '%value%'",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "Filen '%value%' ble ulovlig lastet opp. Dette kan være en mulig angrep",
    "File '%value%' was not found" => "Filen '%value%' ble ikke funnet",
    "Unknown error while uploading file '%value%'" => "Ukjent feil under opplasting av filen '%value%'",

    // Zend_Validate_File_WordCount
    "Too much words, maximum '%max%' are allowed but '%count%' were counted" => "For mange ord, maksimum '%max%' er tillatt, men '%count%' ble telt",
    "Too less words, minimum '%min%' are expected but '%count%' were counted" => "For få ord, minimum '%min%' er forventet, men '%count%' ble telt",
    "File '%value%' is not readable or does not exist" => "Filen '%value%' er ikke lesbar eller finnes ikke",

    // Zend_Validate_Float
    "Invalid type given. String, integer or float expected" => "Ugyldig type angitt. Streng, heltall eller flyttall forventet",
    "'%value%' does not appear to be a float" => "'%value%' synes ikke å være flyttall",

    // Zend_Validate_GreaterThan
    "'%value%' is not greater than '%min%'" => "'%value%' er ikke større enn '%min%'",

    // Zend_Validate_Hex
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng forventet",
    "'%value%' has not only hexadecimal digit characters" => "'%value%' har ikke bare heksadesimale siffer tegn",

    // Zend_Validate_Hostname
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "'%value%' appears to be an IP address, but IP addresses are not allowed" => "'%value%' synes å være en IP-adresse, men IP-adresser er ikke tillatt",
    "'%value%' appears to be a DNS hostname but cannot match TLD against known list" => "'%value%' synes å være en DNS-vertsnavnet men kan ikke matche TLD mot kjent liste",
    "'%value%' appears to be a DNS hostname but contains a dash in an invalid position" => "'%value%' synes å være en DNS-vertsnavnet men inneholder ett dash i en ugyldig posisjon",
    "'%value%' appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "'%value%' synes å være en DNS-vertsnavnet men kan ikke sammenligne mot vertsnavn skjema for TLD '%tld%'",
    "'%value%' appears to be a DNS hostname but cannot extract TLD part" => "'%value%' synes å være en DNS-vertsnavnet men kan ikke trekke ut TLD del",
    "'%value%' does not match the expected structure for a DNS hostname" => "'%value%' samsvarer ikke med forventet struktur for ett DNS vertsnavn",
    "'%value%' does not appear to be a valid local network name" => "'%value%' synes ikke å være et gyldig lokalt nettverk navn",
    "'%value%' appears to be a local network name but local network names are not allowed" => "'%value%' synes å være et lokalt nettverk navn men lokale nettverk er ikke tillatt",
    "'%value%' appears to be a DNS hostname but the given punycode notation cannot be decoded" => "'%value%' synes å være en DNS-vertsnavnet men den gitte punycode notasjonen ikke kan dekodes",
    "'%value%' does not appear to be a valid URI hostname" => "'%value%' synes ikke å være et gyldig URI vertsnavn",

    // Zend_Validate_Iban
    "Unknown country within the IBAN '%value%'" => "Ukjent land innenfor IBAN '%value%'",
    "'%value%' has a false IBAN format" => "'%value%' har feil IBAN format",
    "'%value%' has failed the IBAN check" => "'%value%' har feilet IBAN skjekken",

    // Zend_Validate_Identical
    "The two given tokens do not match" => "De to angitte tokenene stemmer ikke overens",
    "No token was provided to match against" => "Ingen token ble angitt for å stemme mot",

    // Zend_Validate_InArray
    "'%value%' was not found in the haystack" => "'%value%' ble ikke funnet i høystaken",

    // Zend_Validate_Int
    "Invalid type given. String or integer expected" => "Ugyldig type angitt. Streng eller heltall forventet",
    "'%value%' does not appear to be an integer" => "'%value%' synes ikke å være et heltall",

    // Zend_Validate_Ip
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng forventet",
    "'%value%' does not appear to be a valid IP address" => "'%value%' synes ikke å være en gyldig IP-adresse",

    // Zend_Validate_Isbn
    "Invalid type given. String or integer expected" => "Ugyldig type angitt. Streng eller heltall forventet",
    "'%value%' is not a valid ISBN number" => "'%value%' er ikke et gyldig ISBN nummer",

    // Zend_Validate_LessThan
    "'%value%' is not less than '%max%'" => "'%value%' er ikke mindre enn '%max%'",

    // Zend_Validate_NotEmpty
    "Invalid type given. String, integer, float, boolean or array expected" => "Ugyldig type angitt. Streng, heltall, flyttall, boolean eller array forventet",
    "Value is required and can't be empty" => "Verdi er nødvendig og kan ikke være tomt",

    // Zend_Validate_PostCode
    "Invalid type given. String or integer expected" => "Ugyldig type angitt. Streng eller heltall forventet",
    "'%value%' does not appear to be a postal code" => "'%value%' synes ikke å være et postnummer",

    // Zend_Validate_Regex
    "Invalid type given. String, integer or float expected" => "Ugyldig type angitt. String, heltall eller flyttall forventet",
    "'%value%' does not match against pattern '%pattern%'" => "'%value%' stemmer ikke mot mønsteret '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "Det var en intern feil ved bruk av mønsteret '%pattern%'",

    // Zend_Validate_Sitemap_Changefreq
    "'%value%' is not a valid sitemap changefreq" => "'%value%' er ikke en gyldig sitemap changefreq",
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng forventet",

    // Zend_Validate_Sitemap_Lastmod
    "'%value%' is not a valid sitemap lastmod" => "'%value%' er ikke en gyldig sitemap lastmod",
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng forventet",

    // Zend_Validate_Sitemap_Loc
    "'%value%' is not a valid sitemap location" => "'%value%' er ikke en gyldig sitemap sted",
    "Invalid type given. String expected" => "Ugyldig type angitt. Streng forventet",

    // Zend_Validate_Sitemap_Priority
    "'%value%' is not a valid sitemap priority" => "'%value%' er ikke en gyldig sitemap prioritet",
    "Invalid type given. Numeric string, integer or float expected" => "Ugyldig type angitt. Numerisk streng, heltall eller flyttall forventet",

    // Zend_Validate_StringLength
    "Invalid type given. String expected" => "Invalid type given. String expected",
    "'%value%' is less than %min% characters long" => "'%value%' er mindre enn %min% tegn",
    "'%value%' is more than %max% characters long" => "'%value%' er mer enn %max% tegn",
);
