<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce89c4028             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali\Area; use Pmpr\Module\Jalali\Setting; use WP_Comment; use WP_Locale; abstract class Base extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\164", [$this, "\151\x6e\151\x74"]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\x5f\x74\x65\162\x6d", [$this, "\153\143\x6b\157\147\x71\x6b\x69\171\143\161\x65\x75\x6d\157\141"])->cecaguuoecmccuse("\x67\145\164\137\x63\157\155\x6d\145\156\x74", [$this, "\x73\145\155\x6d\x73\x6b\165\x6b\141\x65\171\145\x6f\x75\x75\145"])->cecaguuoecmccuse("\x67\145\x74\x5f\164\150\145\x5f\144\141\x74\x65", [$this, "\x6d\151\153\x61\151\x75\x73\147\x69\155\157\x65\x6b\161\171\x65"], 99, 3); } public function init() { $this->wmmkekaaacyuumsk(); } public function kckogqkiycqeumoa($iwewcwusemqaiggk) { $iwewcwusemqaiggk = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->get($iwewcwusemqaiggk); if ($iwewcwusemqaiggk) { if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $iwewcwusemqaiggk->name = $this->beekyawqaoysgowq($iwewcwusemqaiggk->name); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $iwewcwusemqaiggk->name = $this->gwyqggqwgaawqmww($iwewcwusemqaiggk->name); } } return $iwewcwusemqaiggk; } public function gcyuqqgwseaumuyg($icsywsyukqcciiky) { global $wpdb; $mkskkagguomgukkm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gcisockiummsmcag = $mkskkagguomgukkm->get("\155"); $usqcwoasmiiomgks = $mkskkagguomgukkm->get("\x79\145\141\x72"); $mwemskcucwsyycwm = $mkskkagguomgukkm->get("\155\157\156\164\x68\x6e\165\x6d"); $oqkwcmcmimkmkwgk = $mkskkagguomgukkm->get("\x64\x61\171"); $ygykagaqyuawwiyo = $mkskkagguomgukkm->get("\150\x6f\165\x72"); $sckumcuqemuukces = $mkskkagguomgukkm->get("\155\x69\156\x75\x74\145"); $gcegymooyemmaysk = $mkskkagguomgukkm->get("\163\145\x63\x6f\x6e\x64"); if ($gcisockiummsmcag != '' && $gcisockiummsmcag != "\x30") { $gcisockiummsmcag = preg_replace("\x2f\133\x5e\60\55\x39\135\57", '', $gcisockiummsmcag); $usqcwoasmiiomgks = substr($gcisockiummsmcag, 0, 4); $mwemskcucwsyycwm = substr($gcisockiummsmcag, 4, 2); $oqkwcmcmimkmkwgk = substr($gcisockiummsmcag, 6, 2); $ygykagaqyuawwiyo = substr($gcisockiummsmcag, 8, 2); $sckumcuqemuukces = substr($gcisockiummsmcag, 10, 2); $gcegymooyemmaysk = substr($gcisockiummsmcag, 12, 2); } if ($usqcwoasmiiomgks < 1700 && $usqcwoasmiiomgks > 1300) { $aasascamegmwqmqk = $wpdb->posts; $cwiqececuoeacuaa = ["\57\x59\x45\101\x52\134\50\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\56\x70\x6f\x73\164\137\144\x61\x74\145\133\x5c\x73\x5d\52\x5c\x29\133\x5c\163\135\x2a\75\133\x5c\x73\x5d\52" . $usqcwoasmiiomgks . "\57", "\57\104\x41\131\117\x46\115\117\116\x54\x48\134\50\x5b\x5c\163\x5d\x2a{$aasascamegmwqmqk}\x5c\56\160\x6f\163\164\x5f\x64\x61\164\x65\x5b\134\163\x5d\52\x5c\x29\x5b\134\163\135\x2a\75\133\134\163\135\x2a" . $oqkwcmcmimkmkwgk . "\x2f", "\x2f\x4d\x4f\x4e\124\x48\x5c\50\133\134\163\x5d\52{$aasascamegmwqmqk}\56\160\157\x73\x74\x5f\x64\141\x74\x65\133\134\163\x5d\52\x5c\51\133\134\163\x5d\52\75\x5b\134\x73\135\52" . $mwemskcucwsyycwm . "\57", "\x2f\x48\117\x55\122\x5c\50\133\134\x73\x5d\52{$aasascamegmwqmqk}\56\160\157\163\164\137\144\141\x74\x65\x5b\x5c\163\x5d\52\134\51\133\x5c\x73\x5d\x2a\x3d\x5b\x5c\x73\135\x2a" . $ygykagaqyuawwiyo . "\57", "\x2f\115\111\116\x55\x54\x45\134\x28\133\134\163\135\52{$aasascamegmwqmqk}\x2e\160\157\163\164\x5f\144\141\164\x65\133\134\163\x5d\52\134\51\133\x5c\x73\x5d\52\x3d\133\134\x73\x5d\x2a" . $sckumcuqemuukces . "\x2f", "\57\123\x45\x43\117\116\104\134\x28\133\134\163\x5d\x2a{$aasascamegmwqmqk}\56\160\157\163\164\137\x64\x61\x74\x65\x5b\x5c\x73\x5d\52\134\51\x5b\x5c\163\x5d\x2a\x3d\x5b\x5c\163\x5d\52" . $gcegymooyemmaysk . "\57"]; $icsywsyukqcciiky = preg_replace($cwiqececuoeacuaa, "\61\x3d\61", $icsywsyukqcciiky); } return $icsywsyukqcciiky; } public function wmmkekaaacyuumsk() { global $wp_locale; $this->locale = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(); if ($wp_locale instanceof WP_Locale) { $qawscmyuiuymkscy = $this->weysguygiseoukqw(Setting::gemimqyggmgkmiou); $geqcesmqwkeayoiu = $this->weysguygiseoukqw(Setting::suaiyawsgsgawmeg); if ($geqcesmqwkeayoiu) { $wp_locale->number_format["\x74\x68\x6f\165\x73\x61\156\x64\x73\x5f\x73\145\x70"] = $geqcesmqwkeayoiu; } if ($qawscmyuiuymkscy) { $wp_locale->number_format["\144\145\143\x69\x6d\x61\154\x5f\x70\157\x69\x6e\164"] = $qawscmyuiuymkscy; } } } public function iyouigcsiacgwksc() : ?string { return $this->locale; } public function semmskukaeyeouue($comment) { if ($comment instanceof WP_Comment) { $ewgwqamkygiqaawc = $comment->comment_content; } else { $ewgwqamkygiqaawc = $comment; } if ($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc)) { if ($this->weysguygiseoukqw(Setting::mcqqouocaoykyuac)) { $ewgwqamkygiqaawc = $this->beekyawqaoysgowq($ewgwqamkygiqaawc); } if ($this->weysguygiseoukqw(Setting::scscsyscgqwkywqu)) { $ewgwqamkygiqaawc = $this->gwyqggqwgaawqmww($ewgwqamkygiqaawc); } } if ($comment instanceof WP_Comment) { $comment->comment_content = $ewgwqamkygiqaawc; } else { $comment = $ewgwqamkygiqaawc; } return $comment; } public function kegkegukuqqiakko($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { return $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } public function uqkiyeuegiacwuqq($locale) : ?string { global $locale; if ($locale !== "\x66\x61\137\111\x52") { $locale = "\x66\141\x5f\111\122"; } return $locale; } public function egiuyaokiumwyyum($ocogsiouoiuuguym, $saqmwwmqiwmkiwaa, $yiuogaeewyockeak) { if ($ocogsiouoiuuguym) { $ocogsiouoiuuguym = $this->mikaiusgimoekqye($yiuogaeewyockeak, $saqmwwmqiwmkiwaa); } return $ocogsiouoiuuguym; } public function ogmieugosioacswq($ackqauiusooswkmw = '', $gcisockiummsmcag = '', $piuesceqiguuskme = '', $sseomcuueskqeayq = '', $ikiykmwgkuqwcmcs = '', $yywykyucyekisogg = '') { return $this->uacmswwoiqckokew()->ogmieugosioacswq($ackqauiusooswkmw, $gcisockiummsmcag, $piuesceqiguuskme, $sseomcuueskqeayq, $ikiykmwgkuqwcmcs, $yywykyucyekisogg); } }
