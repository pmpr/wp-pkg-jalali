<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6435278aa53d3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\56"; const mguscayoesieyygm = ["\331\xaa", "\xdb\xb0", "\xdb\xb1", "\333\262", "\xdb\xb3", "\333\xb4", "\xdb\xb5", "\xdb\266", "\xdb\267", "\333\xb8", "\xdb\271", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\x25", "\x30", "\61", "\x32", "\x33", "\64", "\x35", "\66", "\x37", "\x38", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\x74\162\x61\x6e\163\137\167\x6f\x72\x64", [$this, "\x74\x72\141\x6e\163\x6c\141\164\x65"], 10, 2)->aqaqisyssqeomwom("\164\162\x61\156\163\137\156\x75\x6d\142\x65\x72", [$this, "\x69\x65\141\143\157\x77\163\163\x65\155\145\165\145\x77\x61\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto ogqmesokykywseys; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); ogqmesokykywseys: switch ($locale) { case "\x66\141": case "\146\x61\137\111\122": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto ykomgumacooyomsk; case "\x65\x6e": case "\x65\x6e\137\125\x53": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto ykomgumacooyomsk; } mqkmcysgoiaouiwm: ykomgumacooyomsk: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\331\212", "\331\x83", "\xd8\xa9", "\331\244", "\331\245", "\331\246"], ["\xdb\x8c", "\xda\xa9", "\331\x87", "\333\264", "\333\265", "\xdb\266"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\57\50\x3f\x3a\46\x23\134\144\173\62\54\64\175\x3b\x29\x7c\50\134\x64\x2b\x5b\134\56\134\144\x5d\x2a\x29\174\x28\77\72\133\x61\x2d\172\x5d\x28\77\x3a\133\134\x78\60\x30\55\x5c\x78\63\x42\134\x78\x33\104\55\134\170\67\x46\x5d\x7c\x3c\x5c\163\52\x5b\x5e\x3e\135\x2b\x3e\51\52\51\x7c\x3c\134\163\x2a\133\136\x3e\135\53\76\57\151", [$this, "\163\163\x71\x6f\x71\x79\x73\x75\x75\x61\x77\145\157\x73\x77\x61"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 1, false); if ($eusockqasqqmoess !== false) { goto kosaqwikueyksqmw; } $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); goto gicyayswqyuoekcq; kosaqwikueyksqmw: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); gicyayswqyuoekcq: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\141", $eqmcogmcemgigckm = "\xd9\253") { if ($locale) { goto iikiiioqiyegyaak; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); iikiiioqiyegyaak: $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\x66\141", "\x66\141\137\x49\122"], true); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
