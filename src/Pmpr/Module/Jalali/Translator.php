<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642021ebb8e5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; class Translator extends Container { const gomimeqaqekuysya = "\56"; const mguscayoesieyygm = ["\xd9\xaa", "\333\xb0", "\333\xb1", "\xdb\262", "\333\xb3", "\xdb\xb4", "\333\xb5", "\333\266", "\xdb\267", "\xdb\270", "\333\xb9", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; const sioacuyoauiekgac = ["\45", "\x30", "\61", "\x32", "\63", "\x34", "\x35", "\66", "\67", "\x38", "\71", self::gomimeqaqekuysya => self::gomimeqaqekuysya]; public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\164\162\x61\156\x73\x5f\167\157\162\144", [$this, "\x74\162\141\156\x73\x6c\141\164\145"], 10, 2)->aqaqisyssqeomwom("\x74\162\141\156\x73\x5f\x6e\165\x6d\142\x65\162", [$this, "\x69\145\141\143\157\167\163\163\x65\155\x65\x75\x65\167\x61\147"], 10, 3); parent::kgquecmsgcouyaya(); } public function translate($cmwygeyygwqaemaq, $locale) { if ($locale) { goto kciouyuaqkyqomam; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); kciouyuaqkyqomam: switch ($locale) { case "\146\x61": case "\x66\141\x5f\x49\122": $cmwygeyygwqaemaq = $this->eesmuqmoykoqawug($cmwygeyygwqaemaq); $cmwygeyygwqaemaq = $this->nkyiiqgsgaeeecso($cmwygeyygwqaemaq); goto wwkgkaecgiwggcck; case "\145\x6e": case "\145\156\x5f\x55\123": $cmwygeyygwqaemaq = $this->mgmuuqwaamswcoug($cmwygeyygwqaemaq); goto wwkgkaecgiwggcck; } umgaesggesswoaqe: wwkgkaecgiwggcck: return $cmwygeyygwqaemaq; } public function eesmuqmoykoqawug($cmwygeyygwqaemaq) { return str_replace(["\xd9\212", "\xd9\x83", "\xd8\251", "\331\xa4", "\331\245", "\xd9\246"], ["\xdb\214", "\xda\xa9", "\xd9\x87", "\333\xb4", "\333\265", "\xdb\xb6"], $cmwygeyygwqaemaq); } public function nkyiiqgsgaeeecso($sociqikgoyemqaac) { return preg_replace_callback("\x2f\50\77\x3a\x26\x23\x5c\x64\x7b\62\54\x34\x7d\x3b\51\x7c\50\x5c\x64\53\x5b\134\56\134\x64\x5d\52\51\x7c\50\77\x3a\x5b\141\x2d\172\135\x28\x3f\72\133\134\x78\60\60\55\x5c\x78\x33\102\134\170\x33\104\55\134\x78\x37\x46\135\174\x3c\x5c\163\52\x5b\136\x3e\135\x2b\x3e\x29\x2a\x29\174\x3c\134\x73\x2a\x5b\136\x3e\x5d\x2b\x3e\x2f\151", [$this, "\x73\163\x71\x6f\161\x79\163\165\165\x61\x77\145\157\163\x77\x61"], $sociqikgoyemqaac); } private function ssqoqysuuaweoswa($meyiiwcswqmuggyg) { $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 1, false); if ($eusockqasqqmoess !== false) { goto qsygcycwieukkgwc; } $eusockqasqqmoess = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($meyiiwcswqmuggyg, 0); goto kiwqkcaekqqyuegq; qsygcycwieukkgwc: $eusockqasqqmoess = str_replace(self::sioacuyoauiekgac, self::mguscayoesieyygm, $eusockqasqqmoess); kiwqkcaekqqyuegq: return $eusockqasqqmoess; } public function mgmuuqwaamswcoug($ygmmaywsqqycaaok) { return str_replace(self::mguscayoesieyygm, self::sioacuyoauiekgac, $ygmmaywsqqycaaok); } public function ieacowssemeuewag($sociqikgoyemqaac, $locale = "\x66\x61", $eqmcogmcemgigckm = "\xd9\xab") { if ($locale) { goto quwcqmyokicssyew; } $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); quwcqmyokicssyew: $mqwsmsykyouoomgm = self::sioacuyoauiekgac; $uusmaiomayssaecw = self::mguscayoesieyygm; $uusmaiomayssaecw[self::gomimeqaqekuysya] = $eqmcogmcemgigckm; $ksskkagoieiyuuwe = in_array($locale, ["\146\x61", "\x66\x61\137\111\122"], true); return $ksskkagoieiyuuwe ? str_replace($mqwsmsykyouoomgm, $uusmaiomayssaecw, $sociqikgoyemqaac) : str_replace($uusmaiomayssaecw, $mqwsmsykyouoomgm, $sociqikgoyemqaac); } }
