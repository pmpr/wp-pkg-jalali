<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668400db8b3ad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\56"; const mguscayoesieyygm = ["\331\xaa", "\333\xb0", "\333\xb1", "\xdb\262", "\xdb\263", "\xdb\264", "\333\xb5", "\333\xb6", "\333\267", "\333\xb8", "\333\xb9", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\45", "\x30", "\x31", "\x32", "\x33", "\64", "\65", "\66", "\67", "\70", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\164\162\x61\156\x73\137\x77\157\162\x64", [$this, "\x74\162\141\156\163\154\x61\x74\x65"], 10, 2)->aqaqisyssqeomwom("\164\162\141\x6e\x73\137\x6e\165\155\x62\145\x72", [$this, "\x69\x65\141\x63\x6f\x77\x73\163\145\x6d\145\x75\x65\167\141\x67"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto wmywuusgukmmaams; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); wmywuusgukmmaams: switch ($locale) { case "\x66\141": case "\x66\141\137\x49\x52": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto gkyawqqcmigqgaiq; case "\x65\156": case "\145\x6e\137\x55\123": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto gkyawqqcmigqgaiq; } ooeausyowguqicuo: gkyawqqcmigqgaiq: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\331\x8a", "\xd9\x83", "\xd8\xa9", "\xd9\xa4", "\xd9\xa5", "\331\xa6"], ["\333\x8c", "\332\251", "\331\207", "\333\xb4", "\xdb\xb5", "\xdb\266"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\57\x28\x3f\x3a\x26\43\134\144\173\62\x2c\x34\175\73\x29\174\x28\x5c\x64\x2b\133\134\x2e\x5c\x64\x5d\52\x29\x7c\50\77\72\133\x61\x2d\x7a\135\50\77\72\x5b\134\x78\x30\60\55\x5c\170\x33\102\x5c\170\x33\104\x2d\134\x78\67\106\x5d\174\74\x5c\x73\52\x5b\136\76\135\x2b\76\51\x2a\51\174\x3c\x5c\x73\52\x5b\136\76\135\53\x3e\57\x69", [$this, "\163\x73\161\x6f\161\171\x73\165\165\x61\167\x65\157\x73\x77\141"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $meyiiwcswqmuggyg[1] ?? false; if ($eusockqasqqmoess !== false) { goto egyyiccaeeiooaua; } $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); goto scisgsyemmsekgos; egyyiccaeeiooaua: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); scisgsyemmsekgos: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\146\x61", $eqmcogmcemgigckm = "\331\253") { if ($locale) { goto cewmoqyysgsmuiya; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); cewmoqyysgsmuiya: $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\x66\141", "\146\x61\137\111\x52"], true); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
