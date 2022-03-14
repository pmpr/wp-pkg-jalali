<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622fc9aee3eb3             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Converter extends Container { protected ?Translator $translator = null; public function __construct() { $this->translator = Translator::symcgieuakksimmu(); parent::__construct(); } public function kkkikouyuqigocai() : ?Translator { return $this->translator; } public function eiaysiqcywusmwoe($mwemskcucwsyycwm) { $qcgkuqesqqymcuui = $this->yqeyqmywaiwkkcao(["\x6d\x6d" => (int) $mwemskcucwsyycwm]); return ManipulateArray::get($qcgkuqesqqymcuui, "\x6d\x6d", $qcgkuqesqqymcuui); } public function ogoquecgeowwigwk($sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg) : bool { [$sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\137", $this->msywmyaoqmaegsuy($sseomcuueskqeayq . "\x5f" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg)); $l_d = $sseomcuueskqeayq == 12 ? $yywykyucyekisogg % 33 % 4 - 1 == (int) ($yywykyucyekisogg % 33 * 0.05) ? 30 : 29 : 31 - (int) ($sseomcuueskqeayq / 6.5); return !($sseomcuueskqeayq > 12 or $ikiykmwgkuqwcmcs > $l_d or $sseomcuueskqeayq < 1 or $ikiykmwgkuqwcmcs < 1 or $yywykyucyekisogg < 1); } public function yqeyqmywaiwkkcao($uomewyckeuqoqocu, $ugkymqicywakcemw = '') { foreach ($uomewyckeuqoqocu as $sqeykgyoooqysmca => $mqwsmsykyouoomgm) { $mqwsmsykyouoomgm = (int) $this->ieacowssemeuewag($mqwsmsykyouoomgm); switch ($sqeykgyoooqysmca) { case "\163\x73": $yqsoiieuuycqwmec = strlen($mqwsmsykyouoomgm); $eouwgmemicwiwise = substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 1); $wwgugecciuywomgm = $asikeqkqwawmicqq = $qcqackumcuqyoiku = ''; if ($eouwgmemicwiwise == 1) { goto ugqaaewwmkocwwgy; } $weqkcuqkqomgaiou = substr($mqwsmsykyouoomgm, 3 - $yqsoiieuuycqwmec, 1); $kckiiskiksiousiy = ($eouwgmemicwiwise == 0 or $weqkcuqkqomgaiou == 0) ? '' : "\40\331\210\x20"; $ukoioyqsqkuskqom = ['', '', __("\124\167\x65\x6e\x74\171", PR__PKG__JALALI), __("\x54\150\x69\162\164\x79", PR__PKG__JALALI), __("\106\x6f\162\x74\171", PR__PKG__JALALI), __("\106\x69\146\164\171", PR__PKG__JALALI), __("\123\x69\170\164\171", PR__PKG__JALALI), __("\123\145\x76\x65\156\164\x79", PR__PKG__JALALI), __("\x45\x69\147\150\164\171", PR__PKG__JALALI), __("\x4e\x69\x6e\145\x74\x79", PR__PKG__JALALI)]; $wwgugecciuywomgm = $ukoioyqsqkuskqom[$eouwgmemicwiwise]; $uoumogqmkuousoia = ['', __("\117\x6e\145", PR__PKG__JALALI), __("\124\x77\x6f", PR__PKG__JALALI), __("\124\150\162\x65\x65", PR__PKG__JALALI), __("\106\157\x75\162", PR__PKG__JALALI), __("\x46\151\166\145", PR__PKG__JALALI), __("\x53\151\x78", PR__PKG__JALALI), __("\x53\145\166\145\156", PR__PKG__JALALI), __("\x45\x69\147\x68\x74", PR__PKG__JALALI), __("\116\151\156\145", PR__PKG__JALALI)]; $qcqackumcuqyoiku = $uoumogqmkuousoia[$weqkcuqkqomgaiou]; goto wgewmqieuamsoayy; ugqaaewwmkocwwgy: $kckiiskiksiousiy = ''; $ygaqkccwykqkamoo = [__("\124\145\x6e", PR__PKG__JALALI), __("\105\154\145\166\145\x6e", PR__PKG__JALALI), __("\x54\167\145\154\x76\x65", PR__PKG__JALALI), __("\x54\150\x69\x72\164\145\x65\x6e", PR__PKG__JALALI), __("\106\x6f\165\162\x74\x65\x65\156", PR__PKG__JALALI), __("\106\x69\x66\164\145\145\156", PR__PKG__JALALI), __("\x53\151\170\164\x65\x65\156", PR__PKG__JALALI), __("\123\x65\166\x65\156\x74\x65\x65\156", PR__PKG__JALALI), __("\105\151\147\x68\164\x65\145\x6e", PR__PKG__JALALI), __("\x4e\151\x6e\145\164\x65\x65\156", PR__PKG__JALALI)]; $asikeqkqwawmicqq = $ygaqkccwykqkamoo[substr($mqwsmsykyouoomgm, 2 - $yqsoiieuuycqwmec, 2) - 10]; wgewmqieuamsoayy: $uomewyckeuqoqocu[$sqeykgyoooqysmca] = ($mqwsmsykyouoomgm > 99 ? str_replace(["\x31\x32", "\x31\63", "\61\x34", "\x31\x39", "\x32\60"], ["\331\x87\330\262\xd8\247\330\261\x20\xd9\210\x20\330\xaf\331\210\xdb\214\330\263\xd8\252", "\xd9\207\xd8\262\330\247\330\xb1\40\xd9\x88\x20\xd8\xb3\xdb\214\330\265\330\xaf", "\xd9\x87\330\xb2\330\xa7\xd8\261\40\331\210\40\xda\x86\xd9\x87\xd8\xa7\xd8\261\330\xb5\330\xaf", "\331\207\xd8\xb2\330\xa7\xd8\xb1\40\331\x88\40\331\206\331\x87\330\265\330\257", "\330\257\331\210\xd9\207\xd8\xb2\xd8\xa7\xd8\xb1"], substr($mqwsmsykyouoomgm, 0, 2)) . (substr($mqwsmsykyouoomgm, 2, 2) == "\60\60" ? '' : "\x20\xd9\210\40") : '') . $wwgugecciuywomgm . $kckiiskiksiousiy . $asikeqkqwawmicqq . $qcqackumcuqyoiku; goto igooksugieceoege; case "\155\x6d": $uusmaiomayssaecw = ["\xd9\x81\330\xb1\xd9\x88\330\261\330\xaf\xdb\214\xd9\206", "\xd8\247\xd8\xb1\330\257\xdb\x8c\xd8\xa8\331\207\xd8\264\xd8\xaa", "\330\256\xd8\261\330\xaf\xd8\247\xd8\xaf", "\xd8\252\xdb\214\330\261", "\xd9\205\xd8\xb1\330\257\330\xa7\330\257", "\xd8\264\331\207\330\xb1\333\x8c\331\x88\330\xb1", "\331\205\331\x87\330\xb1", "\xd8\242\330\250\330\247\331\x86", "\xd8\242\xd8\260\xd8\xb1", "\330\xaf\xdb\x8c", "\xd8\250\xd9\x87\xd9\x85\xd9\206", "\330\247\330\xb3\xd9\x81\xd9\x86\xd8\257"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto igooksugieceoege; case "\162\162": $uusmaiomayssaecw = ["\333\x8c\332\251", "\330\257\xd9\x88", "\xd8\263\331\x87", "\xda\206\xd9\207\330\247\330\261", "\xd9\276\xd9\206\xd8\xac", "\xd8\xb4\xd8\xb4", "\331\x87\xd9\x81\xd8\252", "\331\207\330\264\xd8\252", "\331\206\xd9\x87", "\330\xaf\331\x87", "\333\x8c\330\xa7\xd8\262\xd8\xaf\331\207", "\xd8\257\331\210\xd8\xa7\330\xb2\xd8\257\331\x87", "\xd8\263\xdb\214\330\262\xd8\257\xd9\x87", "\xda\206\331\x87\xd8\xa7\330\xb1\330\xaf\331\x87", "\xd9\276\330\247\331\206\xd8\xb2\330\xaf\331\x87", "\xd8\xb4\330\247\xd9\x86\330\xb2\xd8\257\331\x87", "\xd9\x87\xd9\x81\330\xaf\331\207", "\xd9\207\xd8\254\xd8\xaf\xd9\207", "\331\206\xd9\x88\330\262\xd8\257\xd9\207", "\xd8\250\xdb\x8c\xd8\263\xd8\xaa", "\xd8\xa8\xdb\214\330\263\330\252\x20\xd9\x88\x20\333\214\332\251", "\xd8\xa8\xdb\x8c\xd8\263\330\252\40\331\x88\40\330\xaf\331\x88", "\330\xa8\xdb\x8c\330\xb3\xd8\xaa\40\331\x88\x20\330\263\331\x87", "\330\250\333\214\330\xb3\xd8\252\40\331\x88\x20\332\x86\331\x87\xd8\247\xd8\261", "\330\xa8\xdb\214\xd8\xb3\330\252\40\xd9\210\40\xd9\276\331\206\xd8\254", "\xd8\250\333\214\xd8\263\xd8\252\40\xd9\210\40\330\xb4\330\xb4", "\330\xa8\xdb\214\xd8\263\330\xaa\40\331\x88\x20\331\207\xd9\x81\330\252", "\330\250\333\x8c\xd8\263\330\252\40\xd9\210\40\331\x87\330\264\xd8\252", "\330\250\xdb\214\330\xb3\xd8\252\x20\331\x88\x20\xd9\x86\xd9\207", "\330\263\xdb\x8c", "\xd8\xb3\xdb\x8c\x20\331\x88\x20\333\214\xda\xa9"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto igooksugieceoege; case "\162\150": $uusmaiomayssaecw = [__("\123\141\x74\x75\x72\x64\x61\171", PR__PKG__JALALI), __("\x53\165\156\x64\141\171", PR__PKG__JALALI), __("\115\x6f\156\x64\x61\171", PR__PKG__JALALI), __("\124\165\x65\x73\x64\141\171", PR__PKG__JALALI), __("\127\145\x64\156\x65\x73\x64\x61\x79", PR__PKG__JALALI), __("\x54\150\165\x72\x73\x64\x61\171", PR__PKG__JALALI), __("\106\x72\151\x64\x61\x79", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm]; goto igooksugieceoege; case "\163\x68": $uusmaiomayssaecw = [__("\x53\156\x61\x6b\x65", PR__PKG__JALALI), __("\110\157\162\163\145", PR__PKG__JALALI), __("\107\157\141\164", PR__PKG__JALALI), __("\x4d\157\156\153\x65\x79", PR__PKG__JALALI), __("\x52\x6f\x6f\x73\164\145\162", PR__PKG__JALALI), __("\104\x6f\147", PR__PKG__JALALI), __("\x50\x69\x67", PR__PKG__JALALI), __("\x52\141\164", PR__PKG__JALALI), __("\x4f\170", PR__PKG__JALALI), __("\x54\x69\x67\x65\162", PR__PKG__JALALI), __("\x52\141\x62\142\151\164", PR__PKG__JALALI), __("\104\162\x61\147\x6f\x6e", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm % 12]; goto igooksugieceoege; case "\155\142": $uusmaiomayssaecw = ["\330\255\xd9\205\331\204", "\xd8\xab\331\x88\xd8\261", "\xd8\254\xd9\x88\330\xb2\xd8\247", "\330\xb3\330\xb1\330\xb7\330\247\xd9\x86", "\330\247\330\263\xd8\257", "\xd8\263\xd9\206\330\250\331\x84\xd9\x87", "\xd9\205\xdb\214\xd8\xb2\330\xa7\331\206", "\xd8\271\xd9\202\xd8\261\xd8\250", "\xd9\x82\xd9\210\330\xb3", "\xd8\254\xd8\257\333\214", "\330\xaf\331\x84\331\x88", "\330\xad\331\210\330\252"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto igooksugieceoege; case "\x66\x66": $uusmaiomayssaecw = [__("\x53\160\x72\x69\x6e\147", PR__PKG__JALALI), __("\x53\x75\x6d\155\145\x72", PR__PKG__JALALI), __("\101\165\x74\165\x6d\x6e", PR__PKG__JALALI), __("\x57\x69\156\164\145\x72", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[(int) ($mqwsmsykyouoomgm / 3.1)]; goto igooksugieceoege; case "\x6b\155": $uusmaiomayssaecw = ["\xd9\x81\xd8\xb1", "\330\xa7\330\261", "\330\xae\xd8\xb1", "\330\252\xdb\x8c\342\200\215", "\xd9\x85\xd8\xb1", "\xd8\264\331\x87\342\200\x8d", "\331\205\xd9\x87\342\200\215", "\330\xa2\xd8\250\342\200\215", "\330\xa2\330\260", "\330\xaf\xdb\x8c", "\xd8\xa8\331\x87\xe2\x80\215", "\xd8\247\330\xb3\xe2\x80\x8d"]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm - 1]; goto igooksugieceoege; case "\x6b\x68": $uusmaiomayssaecw = [__("\123\141\x74", PR__PKG__JALALI), __("\x53\x75\x6e", PR__PKG__JALALI), __("\115\157\156", PR__PKG__JALALI), __("\x54\165\x65", PR__PKG__JALALI), __("\x57\x65\x64", PR__PKG__JALALI), __("\124\150\x75", PR__PKG__JALALI), __("\x46\x72\x69", PR__PKG__JALALI)]; $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $uusmaiomayssaecw[$mqwsmsykyouoomgm]; goto igooksugieceoege; default: $uomewyckeuqoqocu[$sqeykgyoooqysmca] = $mqwsmsykyouoomgm; } omqiayeucoioqoao: igooksugieceoege: cewmoqyysgsmuiya: } scisgsyemmsekgos: return $ugkymqicywakcemw === '' ? $uomewyckeuqoqocu : implode($ugkymqicywakcemw, $uomewyckeuqoqocu); } public function eusockqasqqmoess($ycskuuyucyuqisaq, $ugkymqicywakcemw = "\145\x6e", $eqmcogmcemgigckm = "\331\xab") { } public function uuwciykyuogimcou($mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $ugkymqicywakcemw = '') { [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = explode("\137", $this->ieacowssemeuewag($mggkikkcoygokucs . "\137" . $gguqkwucwcyqgwem . "\x5f" . $asgqasceaecqgouu)); $g_d_m = [0, 31, 59, 90, 120, 151, 181, 212, 243, 273, 304, 334]; if ($mggkikkcoygokucs > 1600) { goto kqgcyoscsusgoaqi; } $yywykyucyekisogg = 0; $mggkikkcoygokucs -= 621; goto ueigkucgaucgeimc; kqgcyoscsusgoaqi: $yywykyucyekisogg = 979; $mggkikkcoygokucs -= 1600; ueigkucgaucgeimc: $ieiiasomcciwwysc = $gguqkwucwcyqgwem > 2 ? $mggkikkcoygokucs + 1 : $mggkikkcoygokucs; $immmocykksywgkqu = 365 * $mggkikkcoygokucs + (int) (($ieiiasomcciwwysc + 3) / 4) - (int) (($ieiiasomcciwwysc + 99) / 100) + (int) (($ieiiasomcciwwysc + 399) / 400) - 80 + $asgqasceaecqgouu + $g_d_m[$gguqkwucwcyqgwem - 1]; $yywykyucyekisogg += 33 * (int) ($immmocykksywgkqu / 12053); $immmocykksywgkqu %= 12053; $yywykyucyekisogg += 4 * (int) ($immmocykksywgkqu / 1461); $immmocykksywgkqu %= 1461; $yywykyucyekisogg += (int) (($immmocykksywgkqu - 1) / 365); if (!($immmocykksywgkqu > 365)) { goto sggawugoykqcmsug; } $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365; sggawugoykqcmsug: if ($immmocykksywgkqu < 186) { goto wkeuuycukmuqiaom; } $sseomcuueskqeayq = 7 + (int) (($immmocykksywgkqu - 186) / 30); $ikiykmwgkuqwcmcs = 1 + ($immmocykksywgkqu - 186) % 30; goto wakmayaoqoskekqy; wkeuuycukmuqiaom: $sseomcuueskqeayq = 1 + (int) ($immmocykksywgkqu / 31); $ikiykmwgkuqwcmcs = 1 + $immmocykksywgkqu % 31; wakmayaoqoskekqy: return $ugkymqicywakcemw === '' ? [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] : $yywykyucyekisogg . $ugkymqicywakcemw . $sseomcuueskqeayq . $ugkymqicywakcemw . $ikiykmwgkuqwcmcs; } public function iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $ugkymqicywakcemw = '') { [$yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs] = explode("\x5f", $this->ieacowssemeuewag($yywykyucyekisogg . "\x5f" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs)); if ($yywykyucyekisogg > 979) { goto qmuwoecuacmkwgem; } $mggkikkcoygokucs = 621; goto owmuceyswmgueasi; qmuwoecuacmkwgem: $mggkikkcoygokucs = 1600; $yywykyucyekisogg -= 979; owmuceyswmgueasi: $immmocykksywgkqu = 365 * $yywykyucyekisogg + (int) ($yywykyucyekisogg / 33) * 8 + (int) (($yywykyucyekisogg % 33 + 3) / 4) + 78 + $ikiykmwgkuqwcmcs + ($sseomcuueskqeayq < 7 ? ($sseomcuueskqeayq - 1) * 31 : ($sseomcuueskqeayq - 7) * 30 + 186); $mggkikkcoygokucs += 400 * (int) ($immmocykksywgkqu / 146097); $immmocykksywgkqu %= 146097; if (!($immmocykksywgkqu > 36524)) { goto eeauyscekuckoues; } $mggkikkcoygokucs += 100 * (int) (--$immmocykksywgkqu / 36524); $immmocykksywgkqu %= 36524; if (!($immmocykksywgkqu >= 365)) { goto mwsmsguqqkcwiiuk; } $immmocykksywgkqu++; mwsmsguqqkcwiiuk: eeauyscekuckoues: $mggkikkcoygokucs += 4 * (int) ($immmocykksywgkqu / 1461); $immmocykksywgkqu %= 1461; $mggkikkcoygokucs += (int) (($immmocykksywgkqu - 1) / 365); if (!($immmocykksywgkqu > 365)) { goto eogwckcymuugikuy; } $immmocykksywgkqu = ($immmocykksywgkqu - 1) % 365; eogwckcymuugikuy: $asgqasceaecqgouu = $immmocykksywgkqu + 1; $gguqkwucwcyqgwem = 0; $ymccyoouuqkaacik = [0, 31, ($mggkikkcoygokucs % 4 == 0 and $mggkikkcoygokucs % 100 != 0 or $mggkikkcoygokucs % 400 == 0) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; foreach ($ymccyoouuqkaacik as $gguqkwucwcyqgwem => $mokouoooiwsmcmiu) { if (!($asgqasceaecqgouu <= $mokouoooiwsmcmiu)) { goto qoqskyuuwueqkquk; } goto msemumccgceyugmg; qoqskyuuwueqkquk: $asgqasceaecqgouu -= $mokouoooiwsmcmiu; wagqgeqymeqoeuyi: } msemumccgceyugmg: return $ugkymqicywakcemw === '' ? [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] : $mggkikkcoygokucs . $ugkymqicywakcemw . $gguqkwucwcyqgwem . $ugkymqicywakcemw . $asgqasceaecqgouu; } public function date($saqmwwmqiwmkiwaa, $yiuogaeewyockeak = '', $mcmaiqckgiuqayau = "\x66\x61") { $T_sec = 0; $msqmoegqiqqmesci = $T_sec + intval($yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak)); $ocogsiouoiuuguym = explode("\x5f", date("\110\137\151\x5f\152\x5f\156\137\x4f\137\x50\137\x73\x5f\167\x5f\131", $msqmoegqiqqmesci)); [$j_y, $j_m, $j_d] = $this->uuwciykyuogimcou($ocogsiouoiuuguym[8], $ocogsiouoiuuguym[3], $ocogsiouoiuuguym[2]); $seaogmggwosgceoo = $j_m < 7 ? ($j_m - 1) * 31 + $j_d - 1 : ($j_m - 7) * 30 + $j_d + 185; $iogigmsgiwaecekq = $j_y % 33 % 4 - 1 == (int) ($j_y % 33 * 0.05) ? 1 : 0; $yqsoiieuuycqwmec = strlen($saqmwwmqiwmkiwaa); $qcgkuqesqqymcuui = ''; $ciyackuwsqkoqese = 0; oomguqikqokqwgku: if (!($ciyackuwsqkoqese < $yqsoiieuuycqwmec)) { goto iwsuawwqomaowuii; } $uskwgmsuqowaosow = substr($saqmwwmqiwmkiwaa, $ciyackuwsqkoqese, 1); if (!($uskwgmsuqowaosow == "\134")) { goto asiqwuoswmigcaki; } $qcgkuqesqqymcuui .= substr($saqmwwmqiwmkiwaa, ++$ciyackuwsqkoqese, 1); goto wcugqegqsuuuwqao; asiqwuoswmigcaki: switch ($uskwgmsuqowaosow) { case "\105": case "\x52": case "\170": case "\130": $qcgkuqesqqymcuui .= "\150\x74\164\160\72\57\57\x6a\x64\x66\x2e\x73\143\162\56\151\x72"; goto ciykoyeioqgyaeqo; case "\102": case "\145": case "\x67": case "\107": case "\150": case "\111": case "\x54": case "\x75": case "\132": $qcgkuqesqqymcuui .= date($uskwgmsuqowaosow, $msqmoegqiqqmesci); goto ciykoyeioqgyaeqo; case "\x61": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\120\115", PR__PKG__JALALI) : __("\101\115", PR__PKG__JALALI); goto ciykoyeioqgyaeqo; case "\101": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] < 12 ? __("\102\x65\146\157\x72\x65\x20\x6e\157\157\156", PR__PKG__JALALI) : __("\x41\146\164\145\162\40\156\157\x6f\x6e", PR__PKG__JALALI); goto ciykoyeioqgyaeqo; case "\142": $qcgkuqesqqymcuui .= (int) ($j_m / 3.1) + 1; goto ciykoyeioqgyaeqo; case "\x63": $qcgkuqesqqymcuui .= $j_y . "\57" . $j_m . "\57" . $j_d . "\40\xd8\x8c" . $ocogsiouoiuuguym[0] . "\x3a" . $ocogsiouoiuuguym[1] . "\x3a" . $ocogsiouoiuuguym[6] . "\x20" . $ocogsiouoiuuguym[5]; goto ciykoyeioqgyaeqo; case "\103": $qcgkuqesqqymcuui .= (int) (($j_y + 99) / 100); goto ciykoyeioqgyaeqo; case "\144": $qcgkuqesqqymcuui .= $j_d < 10 ? "\x30" . $j_d : $j_d; goto ciykoyeioqgyaeqo; case "\104": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\153\x68" => $ocogsiouoiuuguym[7]], "\40"); goto ciykoyeioqgyaeqo; case "\x66": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x66\146" => $j_m], "\x20"); goto ciykoyeioqgyaeqo; case "\115": case "\106": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6d\x6d" => $j_m], "\40"); goto ciykoyeioqgyaeqo; case "\x48": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0]; goto ciykoyeioqgyaeqo; case "\151": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[1]; goto ciykoyeioqgyaeqo; case "\152": $qcgkuqesqqymcuui .= $j_d; goto ciykoyeioqgyaeqo; case "\x4a": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x72\162" => $j_d], "\40"); goto ciykoyeioqgyaeqo; case "\x6b": $qcgkuqesqqymcuui .= $this->ieacowssemeuewag(100 - (int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau); goto ciykoyeioqgyaeqo; case "\x4b": $qcgkuqesqqymcuui .= $this->ieacowssemeuewag((int) ($seaogmggwosgceoo / ($iogigmsgiwaecekq + 365) * 1000) / 10, $mcmaiqckgiuqayau); goto ciykoyeioqgyaeqo; case "\x6c": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\162\150" => $ocogsiouoiuuguym[7]], "\x20"); goto ciykoyeioqgyaeqo; case "\x4c": $qcgkuqesqqymcuui .= $iogigmsgiwaecekq; goto ciykoyeioqgyaeqo; case "\155": $qcgkuqesqqymcuui .= $j_m > 9 ? $j_m : "\60" . $j_m; goto ciykoyeioqgyaeqo; case "\x6e": $qcgkuqesqqymcuui .= $j_m; goto ciykoyeioqgyaeqo; case "\x4e": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] + 1; goto ciykoyeioqgyaeqo; case "\157": $wwsqocgmmwgqoeig = $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1; $icsmemcomqeocqcg = 364 + $iogigmsgiwaecekq - $seaogmggwosgceoo; $qcgkuqesqqymcuui .= ($wwsqocgmmwgqoeig > $seaogmggwosgceoo + 3 and $seaogmggwosgceoo < 3) ? $j_y - 1 : ((3 - $icsmemcomqeocqcg > $wwsqocgmmwgqoeig and $icsmemcomqeocqcg < 3) ? $j_y + 1 : $j_y); goto ciykoyeioqgyaeqo; case "\x4f": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[4]; goto ciykoyeioqgyaeqo; case "\160": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x6d\142" => $j_m], "\40"); goto ciykoyeioqgyaeqo; case "\x50": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[5]; goto ciykoyeioqgyaeqo; case "\161": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\163\x68" => $j_y], "\40"); goto ciykoyeioqgyaeqo; case "\x51": $qcgkuqesqqymcuui .= $iogigmsgiwaecekq + 364 - $seaogmggwosgceoo; goto ciykoyeioqgyaeqo; case "\162": $uusmaiomayssaecw = $this->yqeyqmywaiwkkcao(["\162\x68" => $ocogsiouoiuuguym[7], "\x6d\x6d" => $j_m]); $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[0] . "\72" . $ocogsiouoiuuguym[1] . "\72" . $ocogsiouoiuuguym[6] . "\x20" . $ocogsiouoiuuguym[4] . "\40" . $uusmaiomayssaecw["\x72\x68"] . "\xd8\x8c\x20" . $j_d . "\40" . $uusmaiomayssaecw["\155\155"] . "\40" . $j_y; goto ciykoyeioqgyaeqo; case "\x73": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[6]; goto ciykoyeioqgyaeqo; case "\123": $qcgkuqesqqymcuui .= "\xd8\xa7\331\x85"; goto ciykoyeioqgyaeqo; case "\164": $qcgkuqesqqymcuui .= $j_m != 12 ? 31 - (int) ($j_m / 6.5) : $iogigmsgiwaecekq + 29; goto ciykoyeioqgyaeqo; case "\x55": $qcgkuqesqqymcuui .= $msqmoegqiqqmesci; goto ciykoyeioqgyaeqo; case "\x76": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\163\x73" => $j_y % 100], "\40"); goto ciykoyeioqgyaeqo; case "\126": $qcgkuqesqqymcuui .= $this->yqeyqmywaiwkkcao(["\x73\x73" => $j_y], "\40"); goto ciykoyeioqgyaeqo; case "\167": $qcgkuqesqqymcuui .= $ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1; goto ciykoyeioqgyaeqo; case "\127": $aaeqayuykcqoqiuu = ($ocogsiouoiuuguym[7] == 6 ? 0 : $ocogsiouoiuuguym[7] + 1) - $seaogmggwosgceoo % 7; if (!($aaeqayuykcqoqiuu < 0)) { goto qgeugwymkkiacwoc; } $aaeqayuykcqoqiuu += 7; qgeugwymkkiacwoc: $mqwsmsykyouoomgm = (int) (($seaogmggwosgceoo + $aaeqayuykcqoqiuu) / 7); if ($aaeqayuykcqoqiuu < 4) { goto ouamogymawucwswu; } if (!($mqwsmsykyouoomgm < 1)) { goto emmsycooskoqmgeg; } $mqwsmsykyouoomgm = ($aaeqayuykcqoqiuu == 4 or $aaeqayuykcqoqiuu == ($j_y % 33 % 4 - 2 == (int) ($j_y % 33 * 0.05) ? 5 : 4)) ? 53 : 52; emmsycooskoqmgeg: goto mugqyyeayeyggqqk; ouamogymawucwswu: $mqwsmsykyouoomgm++; mugqyyeayeyggqqk: $ecsiqegmcewekssu = $aaeqayuykcqoqiuu + $iogigmsgiwaecekq; if (!($ecsiqegmcewekssu == 7)) { goto acsqgiuageaasiyy; } $ecsiqegmcewekssu = 0; acsqgiuageaasiyy: $qcgkuqesqqymcuui .= ($iogigmsgiwaecekq + 363 - $seaogmggwosgceoo < $ecsiqegmcewekssu and $ecsiqegmcewekssu < 3) ? "\60\x31" : ($mqwsmsykyouoomgm < 10 ? "\x30" . $mqwsmsykyouoomgm : $mqwsmsykyouoomgm); goto ciykoyeioqgyaeqo; case "\x79": $qcgkuqesqqymcuui .= substr($j_y, 2, 2); goto ciykoyeioqgyaeqo; case "\x59": $qcgkuqesqqymcuui .= $j_y; goto ciykoyeioqgyaeqo; case "\x7a": $qcgkuqesqqymcuui .= $seaogmggwosgceoo; goto ciykoyeioqgyaeqo; default: $qcgkuqesqqymcuui .= $uskwgmsuqowaosow; } mqicocmqegwukkwg: ciykoyeioqgyaeqo: wcugqegqsuuuwqao: $ciyackuwsqkoqese++; goto oomguqikqokqwgku; iwsuawwqomaowuii: return $mcmaiqckgiuqayau != "\145\x6e" ? $this->ieacowssemeuewag($qcgkuqesqqymcuui, "\x66\141", "\56") : $qcgkuqesqqymcuui; } public function ieacowssemeuewag($eusockqasqqmoess, $locale = "\145\156", $eqmcogmcemgigckm = "\xd9\253") { return $this->kkkikouyuqigocai()->ieacowssemeuewag($eusockqasqqmoess, $locale, $eqmcogmcemgigckm); } public function squyiyimquqicqke($yiuogaeewyockeak = '', $umusyyqoeegoyiqs = "\x41\163\151\141\x2f\x54\145\150\162\141\x6e", $seieuccuyuucuigq = "\x65\156") : array { $msqmoegqiqqmesci = $yiuogaeewyockeak === '' ? time() : $this->ieacowssemeuewag($yiuogaeewyockeak); $ocogsiouoiuuguym = explode("\137", $this->date("\106\137\x47\137\x69\137\152\137\154\137\156\x5f\163\x5f\x77\x5f\x59\x5f\172", $msqmoegqiqqmesci, $seieuccuyuucuigq)); return ["\163\145\143\x6f\156\x64\163" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[6]), $seieuccuyuucuigq), "\155\151\x6e\165\164\145\x73" => $this->ieacowssemeuewag((int) $this->ieacowssemeuewag($ocogsiouoiuuguym[2]), $seieuccuyuucuigq), "\x68\x6f\165\162\163" => $ocogsiouoiuuguym[1], "\x6d\144\141\171" => $ocogsiouoiuuguym[3], "\167\x64\x61\171" => $ocogsiouoiuuguym[7], "\155\157\x6e" => $ocogsiouoiuuguym[5], "\171\145\x61\162" => $ocogsiouoiuuguym[8], "\x79\144\x61\171" => $ocogsiouoiuuguym[9], "\167\145\145\x6b\x64\x61\171" => $ocogsiouoiuuguym[4], "\155\157\x6e\164\x68" => $ocogsiouoiuuguym[0], 0 => $this->ieacowssemeuewag($msqmoegqiqqmesci, $seieuccuyuucuigq)]; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '', $umusyyqoeegoyiqs = "\x41\x73\151\x61\57\x54\x65\150\162\x61\x6e") { if (!($umusyyqoeegoyiqs != "\154\157\143\141\154")) { goto samwkqgwouggsguc; } date_default_timezone_set($umusyyqoeegoyiqs); samwkqgwouggsguc: $cqgoimumaewouews = 0; if ($ackqauiusooswkmw === '') { goto cwwmimggaaecmucw; } [$ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg] = explode("\x5f", $this->ieacowssemeuewag($ackqauiusooswkmw . "\x5f" . $gcisockiummsmcag . "\x5f" . $piuesceqiguuskme . "\137" . $sseomcuueskqeayq . "\137" . $ikiykmwgkuqwcmcs . "\137" . $yywykyucyekisogg)); if ($gcisockiummsmcag === '') { goto ikqqskkqqwmwssoo; } if ($piuesceqiguuskme === '') { goto ogsaaqsaogcqiouy; } if ($sseomcuueskqeayq === '') { goto kqqiegkuqagcqsya; } $ocogsiouoiuuguym = explode("\x5f", $this->date("\131\x5f\x6a", '', "\145\x6e")); if ($ikiykmwgkuqwcmcs === '') { goto kkumywowcoycymeo; } if ($yywykyucyekisogg === '') { goto wyuemgggaqogsmsq; } [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($yywykyucyekisogg, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu, $mggkikkcoygokucs); goto guykyqecgswcsmws; wyuemgggaqogsmsq: [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ikiykmwgkuqwcmcs); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem, $asgqasceaecqgouu); guykyqecgswcsmws: goto miweggwqeiaeweia; kkumywowcoycymeo: [$mggkikkcoygokucs, $gguqkwucwcyqgwem, $asgqasceaecqgouu] = $this->iiemucyoiawywqmw($ocogsiouoiuuguym[0], $sseomcuueskqeayq, $ocogsiouoiuuguym[1]); $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $gguqkwucwcyqgwem); miweggwqeiaeweia: goto ousiuuwgwkiyikyq; kqqiegkuqagcqsya: $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme); ousiuuwgwkiyikyq: goto iwekmyyccgiyuecc; ogsaaqsaogcqiouy: $cqgoimumaewouews = mktime($ackqauiusooswkmw, $gcisockiummsmcag); iwekmyyccgiyuecc: goto aomysykcgikegiau; ikqqskkqqwmwssoo: $cqgoimumaewouews = mktime($ackqauiusooswkmw); aomysykcgikegiau: goto awoaooyoeoyeeqee; cwwmimggaaecmucw: $cqgoimumaewouews = time(); awoaooyoeoyeeqee: return $cqgoimumaewouews; } }
