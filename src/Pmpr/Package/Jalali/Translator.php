<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066e416054             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\Decorator\DecoratorI18N; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Translator extends Container { const gomimeqaqekuysya = "\56"; const PERSIAN_NUMBERS = ["\xd9\252", "\xdb\260", "\xdb\261", "\xdb\262", "\333\xb3", "\xdb\264", "\xdb\265", "\333\266", "\xdb\xb7", "\xdb\270", "\333\xb9", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const ENGLISH_NUMBERS = ["\45", "\x30", "\x31", "\62", "\x33", "\x34", "\x35", "\x36", "\67", "\70", "\x39", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse($this->ygyygikyocoymgaw("\164\162\x61\156\x73\x5f\x77\x6f\162\x64"), [$this, "\x74\x72\141\x6e\x73\154\141\x74\x65"], 10, 2)->cecaguuoecmccuse($this->ygyygikyocoymgaw("\x74\162\141\x6e\163\x5f\156\165\155\x62\x65\162"), [$this, "\x69\x65\x61\x63\x6f\167\x73\x73\x65\155\x65\x75\145\x77\141\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $aamkqmkgsaqmcuao) { if ($aamkqmkgsaqmcuao) { goto ikqqskkqqwmwssoo; } $aamkqmkgsaqmcuao = DecoratorI18N::iyouigcsiacgwksc(); ikqqskkqqwmwssoo: switch ($aamkqmkgsaqmcuao) { case "\146\141": case "\146\141\x5f\x49\x52": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto aomysykcgikegiau; case "\145\156": case "\x65\x6e\x5f\x55\123": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto aomysykcgikegiau; } cwwmimggaaecmucw: aomysykcgikegiau: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\xd9\212", "\xd9\x83", "\xd8\xa9", "\xd9\xa4", "\xd9\xa5", "\xd9\xa6"], ["\xdb\214", "\xda\xa9", "\xd9\207", "\333\xb4", "\xdb\265", "\xdb\266"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\57\50\x3f\x3a\x26\x23\134\144\173\62\x2c\64\x7d\73\51\x7c\50\x5c\x64\x2b\133\x5c\56\x5c\x64\135\52\51\x7c\50\77\72\x5b\141\x2d\172\135\50\77\x3a\133\134\170\x30\x30\55\x5c\170\x33\x42\134\x78\x33\104\x2d\134\170\x37\106\x5d\x7c\74\x5c\163\x2a\x5b\x5e\76\x5d\53\x3e\x29\x2a\51\174\x3c\134\163\x2a\133\136\76\135\53\x3e\57\x69", [$this, "\163\x73\161\x6f\161\x79\163\x75\165\x61\167\x65\157\163\x77\141"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 1, false); if ($eusockqasqqmoess !== false) { goto awoaooyoeoyeeqee; } $eusockqasqqmoess = ManipulateArray::get($meyiiwcswqmuggyg, 0); goto ogqmesokykywseys; awoaooyoeoyeeqee: $eusockqasqqmoess = str_replace(self::ENGLISH_NUMBERS, self::PERSIAN_NUMBERS, $eusockqasqqmoess); ogqmesokykywseys: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::PERSIAN_NUMBERS, self::ENGLISH_NUMBERS, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $aamkqmkgsaqmcuao = "\x66\141", $eqmcogmcemgigckm = "\xd9\253") { $mqwsmsykyouoomgm = self::ENGLISH_NUMBERS; $uusmaiomayssaecw = self::PERSIAN_NUMBERS; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($aamkqmkgsaqmcuao, ["\146\x61", "\x66\141\x5f\111\122"]); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
