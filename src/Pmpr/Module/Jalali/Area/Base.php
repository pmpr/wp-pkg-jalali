<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642021ebb8e5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\151\x6e\151\x74"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\x5f\164\145\162\155", [$this, "\153\x63\153\x6f\x67\161\153\151\171\x63\x71\x65\165\155\157\141"])->cecaguuoecmccuse("\x67\x65\164\x5f\143\x6f\155\x6d\x65\156\x74", [$this, "\x73\x65\x6d\x6d\163\x6b\165\x6b\141\145\171\x65\157\x75\165\145"])->cecaguuoecmccuse("\x6c\x6f\143\x61\x6c\x65", [$this, "\x75\x71\x6b\x69\x79\145\x75\x65\147\x69\x61\x63\x77\165\161\161"], 10)->cecaguuoecmccuse("\147\x65\x74\x5f\x74\x68\x65\x5f\x64\x61\x74\x65", [$this, "\x6d\x69\153\x61\151\x75\x73\147\151\155\x6f\x65\153\x71\171\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if (!$iwewcwusemqaiggk) { goto syiqkaasoueowwui; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto skkamseieeusycye; } $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); skkamseieeusycye: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto cgiscsqwwgqqaeqi; } $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); cgiscsqwwgqqaeqi: syiqkaasoueowwui: return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\155"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\171\145\x61\x72"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\x6d\x6f\156\164\x68\x6e\x75\155"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\144\141\x79"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\x68\157\165\162"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\x6d\151\156\x75\x74\145"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\145\x63\x6f\156\144"); if (!($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30")) { goto giaacoqqqsekcayy; } $gcisockiummsmcag = preg_replace("\57\133\136\x30\55\71\x5d\x2f", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); giaacoqqqsekcayy: if (!($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300)) { goto ewymsmkkiksgwysk; } $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\131\x45\x41\x52\x5c\50\x5b\x5c\x73\x5d\52{$aasascamegmwqmqk}\x2e\160\157\163\164\x5f\x64\x61\x74\145\x5b\134\x73\135\52\x5c\x29\133\134\163\x5d\x2a\x3d\133\x5c\x73\x5d\52" . $usqcwoasmiiomgks . "\57", "\x2f\104\x41\131\x4f\x46\115\x4f\x4e\124\110\134\x28\133\134\163\135\x2a{$aasascamegmwqmqk}\x5c\56\160\x6f\x73\164\137\144\141\164\x65\x5b\x5c\163\x5d\x2a\134\51\x5b\x5c\x73\135\52\x3d\x5b\x5c\x73\x5d\52" . $oqkwcmcmimkmkwgk . "\57", "\57\115\x4f\116\x54\110\x5c\x28\133\134\x73\135\52{$aasascamegmwqmqk}\x2e\x70\x6f\x73\164\137\x64\141\164\x65\x5b\134\x73\x5d\x2a\x5c\51\x5b\x5c\x73\135\52\x3d\x5b\134\163\135\52" . $mwemskcucwsyycwm . "\x2f", "\57\110\x4f\125\122\x5c\x28\133\134\163\135\52{$aasascamegmwqmqk}\x2e\160\157\163\164\x5f\x64\x61\x74\145\133\134\163\x5d\x2a\x5c\51\x5b\x5c\163\x5d\x2a\x3d\133\x5c\163\x5d\x2a" . $ygykagaqyuawwiyo . "\57", "\x2f\115\x49\116\125\x54\105\134\x28\x5b\x5c\x73\x5d\x2a{$aasascamegmwqmqk}\x2e\x70\x6f\x73\164\x5f\144\x61\x74\x65\x5b\134\163\135\x2a\134\51\133\134\x73\135\x2a\75\133\134\163\x5d\x2a" . $sckumcuqemuukces . "\57", "\57\x53\105\x43\117\x4e\x44\134\50\x5b\x5c\163\x5d\52{$aasascamegmwqmqk}\56\160\x6f\x73\164\x5f\x64\141\164\x65\x5b\134\163\135\x2a\x5c\x29\x5b\x5c\163\135\52\75\x5b\134\x73\135\x2a" . $gcegymooyemmaysk . "\x2f"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\x31\75\x31", $icsywsyukqcciiky); ewymsmkkiksgwysk: return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if (!$wp_locale instanceof WP_Locale) { goto gkyawqqcmigqgaiq; } $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if (!$geqcesmqwkeayoiu) { goto cmegwsegsosyqcai; } $wp_locale->number_format["\164\x68\x6f\165\x73\141\x6e\x64\x73\137\x73\145\160"] = $geqcesmqwkeayoiu; cmegwsegsosyqcai: if (!$qawscmyuiuymkscy) { goto wmywuusgukmmaams; } $wp_locale->number_format["\144\145\143\x69\155\x61\154\x5f\x70\157\x69\156\164"] = $qawscmyuiuymkscy; wmywuusgukmmaams: gkyawqqcmigqgaiq: } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($aqqmosqmsuueyaes) { if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto ooeausyowguqicuo; } $ewgwqamkygiqaawc = $aqqmosqmsuueyaes; goto egyyiccaeeiooaua; ooeausyowguqicuo: $ewgwqamkygiqaawc = $aqqmosqmsuueyaes->comment_content; egyyiccaeeiooaua: if (!($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc))) { goto igooksugieceoege; } if (!$this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { goto scisgsyemmsekgos; } $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); scisgsyemmsekgos: if (!$this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { goto cewmoqyysgsmuiya; } $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); cewmoqyysgsmuiya: igooksugieceoege: if ($aqqmosqmsuueyaes instanceof WP_Comment) { goto omqiayeucoioqoao; } $aqqmosqmsuueyaes = $ewgwqamkygiqaawc; goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $aqqmosqmsuueyaes->comment_content = $ewgwqamkygiqaawc; ugqaaewwmkocwwgy: return $aqqmosqmsuueyaes; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if (!($locale !== "\x66\141\137\x49\122")) { goto wgewmqieuamsoayy; } $locale = "\146\x61\137\111\x52"; wgewmqieuamsoayy: return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if (!$ocogsiouoiuuguym) { goto kqgcyoscsusgoaqi; } kqgcyoscsusgoaqi: return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
