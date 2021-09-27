<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6151a7da7a604             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Setting extends BaseClass { const ADMIN_FONT = "\141\x64\155\151\x6e\137\x66\x6f\156\164"; const NUMBERS_DECIMAL_POINT = "\x6e\x75\155\142\145\x72\163\x5f\144\x65\143\x69\x6d\141\x6c\x5f\x70\157\151\156\164"; const NUMBERS_THOUSAND_SEPARATOR = "\x6e\165\x6d\x62\145\x72\163\137\x74\x68\x6f\165\163\141\156\144\137\163\x65\160\141\162\x61\164\157\162"; const VIRASTAR_POST_TYPE_TARGETS = "\166\x69\x72\x61\x73\164\141\x72\x5f\x70\x6f\163\x74\137\164\x79\160\x65\x5f\164\x61\x72\147\x65\x74\163"; const FRONT_CONVERT = "\x66\x72\157\x6e\x74\x5f\x63\157\x6e\166\145\x72\164"; const ADMIN_CONVERT = "\x61\x64\155\x69\x6e\137\143\157\x6e\166\145\162\x74"; const _DATES = "\x5f\144\141\x74\145\x73"; const _LETTERS = "\137\x6c\x65\164\x74\x65\162\x73"; const _NUMBERS = "\137\156\x75\155\x62\x65\x72\x73"; const ADMIN_CONVERT_DATES = self::ADMIN_CONVERT . self::_DATES; const ADMIN_CONVERT_LETTERS = self::ADMIN_CONVERT . self::_LETTERS; const ADMIN_CONVERT_NUMBERS = self::ADMIN_CONVERT . self::_NUMBERS; const FRONT_CONVERT_DATES = self::FRONT_CONVERT . self::_DATES; const FRONT_CONVERT_LETTERS = self::FRONT_CONVERT . self::_LETTERS; const FRONT_CONVERT_NUMBERS = self::FRONT_CONVERT . self::_NUMBERS; const FRONT_CONVERT_PERMALINK_DATES = self::FRONT_CONVERT . "\160\x65\x72\155\141\154\x69\156\153\x5f\144\x61\164\x65\163"; public function __construct() { $this->name = self::akuociswqmoigkas(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\112\141\154\x61\154\151", PR__PKG__JALALI); } public function ecwgiiuacoaokqkw() { goto qiaqsassksqiuyae; qiaqsassksqiuyae: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . self::_GENERAL, __("\x47\145\x6e\145\x72\141\154", PR__PKG__JALALI))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . "\x5f\x6e\x75\155\142\x65\x72\x73", __("\116\165\155\x62\x65\162\x73", PR__PKG__JALALI))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_DECIMAL_POINT, __("\x44\x65\x63\151\x6d\x61\154\40\x73\171\x6d\142\x6f\154\x3a", PR__PKG__JALALI), ["\56" => sprintf("\x25\163\x20\x28\56\x29", __("\120\157\x69\156\x74", PR__PKG__JALALI)), "\57" => sprintf("\45\163\40\50\57\51", __("\x53\154\141\163\x68", PR__PKG__JALALI)), "\x27" => sprintf("\x25\163\x20\x28\47\x29", __("\x53\151\156\x67\154\145\40\x71\x75\157\x74\x65", PR__PKG__JALALI)), "\x2c" => sprintf("\45\163\40\50\54\51", __("\103\x6f\x6d\155\x61", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->mkksewyosgeumwsa(self::yyuwuqsiucweeoue(self::NUMBERS_THOUSAND_SEPARATOR, __("\124\150\157\x75\163\141\156\x64\x20\163\145\x70\141\162\141\x74\157\162\40\163\171\155\x62\157\154\72", PR__PKG__JALALI), ["\54" => sprintf("\x25\x73\40\x28\54\x29", __("\103\157\x6d\x6d\x61", PR__PKG__JALALI)), "\56" => sprintf("\45\x73\40\50\56\51", __("\x50\157\151\156\164", PR__PKG__JALALI)), "\x20" => sprintf("\x25\x73\40\50\x20\51", __("\123\x70\x61\143\x65", PR__PKG__JALALI)), "\47" => sprintf("\45\163\x20\x28\x27\51", __("\123\151\x6e\147\x6c\x65\x20\x71\x75\x6f\164\145", PR__PKG__JALALI))])->awagieqcmmwkgwgs(true))->saemoowcasogykak(IconFontawesomeInterface::ICON_PAPERCLIP))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\x66\x72\x6f\156\164", __("\x46\x72\x6f\156\x74\40\120\x61\x67\145", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::FRONT_CONVERT)->mkksewyosgeumwsa(self::wcwmusaouiqaqeww(self::FRONT_CONVERT_PERMALINK_DATES, __("\x50\145\162\155\141\x6c\x69\156\x6b\x20\x44\141\164\145\x73", PR__PKG__JALALI), __("\x43\x6f\156\x76\x65\162\x74\x20\144\x61\x74\145\x73\40\x69\x6e\40\160\x65\x72\x6d\x61\154\151\x6e\153\56", PR__PKG__JALALI))))->saemoowcasogykak(IconFontawesomeInterface::ICON_USERS))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\x5f\141\144\155\151\x6e", __("\101\x64\155\x69\156\151\163\x74\x72\x61\x74\x6f\162\40\x50\141\x6e\x65\154", PR__PKG__JALALI))->sikqggwmmykuiymy($this->cwcgogcomecykoqg(self::ADMIN_CONVERT))->sikqggwmmykuiymy(self::cgygmuguceeosoey($this->aakmagwggmkoiiyu() . self::_ADVANCED, __("\101\x64\166\141\x6e\143\145\144", PR__PKG__JALALI))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ADMIN_FONT, __("\x46\157\x6e\x74", PR__PKG__JALALI), $this->pwugmawueqmkaeim(false, true)))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::VIRASTAR_POST_TYPE_TARGETS, __("\x56\151\x72\x61\x73\164\x61\x72\x20\124\x61\x72\x67\145\164\x20\x50\157\x73\x74\x20\124\171\x70\145\163", PR__PKG__JALALI), ManipulatePost::mwoyqeeigwqoamiw(["\x6f\x75\164\x70\x75\x74" => self::LABELS]), __("\x43\150\157\x69\x63\x65\40\160\157\x73\x74\x20\164\171\x70\x65\x73\x20\171\x6f\165\40\x77\x61\x6e\x74\x20\145\x6e\x61\142\x6c\x65\x20\166\151\x72\x61\x73\164\x61\162\x20\x66\157\162\x20\x74\150\x65\x6d\x65\x2e", PR__PKG__JALALI))->oikgogcweiiaocka())->saemoowcasogykak(IconFontawesomeInterface::ICON_WRENCH))->saemoowcasogykak(IconFontawesomeInterface::ICON_USER_GEAR)); goto qogqewiwmwiwskgm; qwigomakwmyiwkgo: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($this->aakmagwggmkoiiyu() . "\137\x70\x6c\165\147\x69\156\x73", __("\120\154\165\x67\x69\156\x73", PR__PKG__JALALI))->mugcceiwosyciwos($ysseeyogiaqmummy)->saemoowcasogykak(IconFontawesomeInterface::ICON_PLUG)); goto myoicgcuugciueis; myoicgcuugciueis: cecuyayqoioasumi: goto asmecuqiyyswueqe; qgoiooayqmqqsiok: if (!$ysseeyogiaqmummy) { goto cecuyayqoioasumi; } goto qwigomakwmyiwkgo; qogqewiwmwiwskgm: $ysseeyogiaqmummy = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6a\141\x6c\x61\154\x69\x5f\x70\x6c\165\147\x69\156\163\x5f\x74\141\142\x5f\x6d\145\164\141\137\x62\x6f\x78\x65\163"), []); goto qgoiooayqmqqsiok; asmecuqiyyswueqe: } public function cwcgogcomecykoqg($oceoauekaygmuoko) : MetaBox { return self::cgygmuguceeosoey($oceoauekaygmuoko . self::_GENERAL, __("\x47\x65\x6e\145\x72\x61\x6c", PR__PKG__JALALI))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_DATES, __("\104\x61\x74\145\x20\x26\40\124\x69\155\x65", PR__PKG__JALALI), __("\103\x6f\x6e\166\x65\x72\164\x20\x64\141\164\x65\x73\40\x69\156\40\164\150\x69\163\40\x73\x65\x67\x6d\x65\x6e\164", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_LETTERS, __("\114\x65\x74\x74\x65\x72\x73", PR__PKG__JALALI), __("\x43\150\x61\156\x67\145\x20\141\x72\141\142\x69\143\x20\x6c\145\x74\x74\x65\162\163\40\164\157\x20\146\141\x72\x73\151", PR__PKG__JALALI)))->mkksewyosgeumwsa(self::wcwmusaouiqaqeww($oceoauekaygmuoko . self::_NUMBERS, __("\x4e\x75\155\x62\x65\162\163", PR__PKG__JALALI), __("\x43\157\x6e\x76\x65\162\164\40\156\165\155\x62\x65\162\163\40\x69\x6e\x20\x74\150\151\x73\x20\x73\x65\x67\155\x65\156\x74", PR__PKG__JALALI)))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR); } public function pwugmawueqmkaeim($iaaeswuecqawokwi = null, $wmiquokeookimeiw = false) { goto mkwskuycuyguqqok; mkwskuycuyguqqok: if ($wmiquokeookimeiw) { goto csscmcacoikwsecs; } goto sciwggaeogcoesiu; kwagwqyusyiyoaqs: csscmcacoikwsecs: goto yowsmsiyimmimemc; yowsmsiyimmimemc: $wakuamsqaqkweqmy = ["\x56\141\x7a\151\x72" => __("\126\x61\162\172\x69\162", PR__PKG__JALALI), "\114\x6f\x74\x75\x73" => __("\x4c\x6f\164\x75\163", PR__PKG__JALALI), "\x59\145\153\141\x6e" => __("\131\x65\153\x61\x6e", PR__PKG__JALALI), "\x53\141\x68\145\x6c" => __("\x53\141\x68\x65\154", PR__PKG__JALALI), "\x4d\x69\x74\x72\141" => __("\x4d\151\164\162\141", PR__PKG__JALALI), "\123\x61\x6d\x69\155" => __("\123\x61\155\x69\x6d", PR__PKG__JALALI), "\x4e\x61\x7a\x61\156\151\x6e" => __("\116\x61\172\141\x6e\151\156", PR__PKG__JALALI), "\x53\x68\x61\x62\x6e\141\x6d" => __("\123\150\141\142\156\141\x6d", PR__PKG__JALALI)]; goto kiqogmwcgcamwiig; eequksumcoogyoem: $wakuamsqaqkweqmy = ManipulateArray::get($wakuamsqaqkweqmy, $iaaeswuecqawokwi, "\166\x61\172\x69\162"); goto uukumskkeggaowck; uukumskkeggaowck: kuicqywysciceggs: goto cggowoquuiwqkyew; cggowoquuiwqkyew: return $wakuamsqaqkweqmy; goto ocokwuuquaokmasc; kiqogmwcgcamwiig: cuykwgmswkskqkyi: goto iomcaiwewsawiamu; sqiciiuwmykocycc: if (!$iaaeswuecqawokwi) { goto kuicqywysciceggs; } goto eequksumcoogyoem; iomcaiwewsawiamu: $wakuamsqaqkweqmy = (array) $this->sscegwueamckwmcy("\147\145\164\x5f\146\157\156\164\163", $wakuamsqaqkweqmy); goto sqiciiuwmykocycc; eqkauqciwewmgeoi: goto cuykwgmswkskqkyi; goto kwagwqyusyiyoaqs; sciwggaeogcoesiu: $wakuamsqaqkweqmy = ["\126\141\x7a\151\x72" => "\150\164\164\160\163\x3a\57\x2f\x63\144\x6e\x6a\x73\x2e\143\x6c\157\165\x64\146\154\141\x72\x65\56\x63\x6f\155\57\x61\152\141\x78\x2f\x6c\151\x62\163\57\166\x61\172\x69\162\x2d\x66\157\156\x74\57\62\67\56\x32\56\x31\57\x66\x6f\156\164\55\x66\x61\143\x65\56\x63\163\163", "\114\157\x74\x75\x73" => "\x68\164\x74\160\x73\x3a\57\57\x63\144\x6e\x2e\x66\x6f\x6e\164\143\x64\156\x2e\x69\162\x2f\x46\x6f\x6e\164\x2f\120\145\162\x73\x69\141\x6e\x2f\x4c\157\x74\x75\163\57\114\x6f\164\165\163\56\143\163\163", "\x59\145\153\141\156" => "\x68\164\164\160\163\72\x2f\57\143\144\156\56\146\157\x6e\164\x63\x64\x6e\56\x69\162\x2f\x46\x6f\156\164\57\120\145\162\x73\151\141\156\x2f\x59\145\x6b\x61\x6e\57\x59\145\x6b\x61\x6e\56\x63\163\x73", "\x53\141\x68\145\x6c" => "\x68\x74\164\x70\x73\72\57\57\x63\x64\156\x2e\146\157\x6e\164\143\144\x6e\x2e\151\x72\x2f\106\x6f\156\x74\x2f\x50\145\x72\x73\x69\141\x6e\57\x53\x61\x68\x65\x6c\57\x53\141\x68\145\154\x2e\143\x73\x73", "\x4d\x69\164\162\141" => "\150\x74\x74\160\x73\x3a\x2f\x2f\143\144\156\56\146\x6f\x6e\x74\x63\144\x6e\x2e\x69\162\57\106\157\156\164\x2f\120\x65\162\163\x69\141\x6e\57\x4d\151\164\162\x61\57\x4d\x69\164\x72\x61\x2e\143\163\163", "\x53\141\155\151\155" => "\150\x74\164\160\x73\x3a\57\x2f\143\x64\156\56\146\x6f\x6e\x74\x63\144\x6e\x2e\151\x72\57\106\157\x6e\164\57\x50\145\162\163\x69\x61\x6e\x2f\123\141\x6d\151\155\57\123\x61\x6d\x69\x6d\56\x63\163\x73", "\116\141\x7a\x61\156\151\156" => "\150\x74\164\160\163\72\x2f\x2f\143\144\156\x2e\146\x6f\156\164\143\x64\156\56\x69\x72\57\106\x6f\156\x74\57\x50\145\x72\x73\x69\141\x6e\57\x4e\141\172\x61\156\151\x6e\x2f\x4e\141\x7a\x61\156\151\x6e\56\143\163\163", "\123\150\141\x62\x6e\141\x6d" => "\150\x74\164\x70\x73\x3a\57\x2f\x63\144\156\x2e\146\157\156\164\143\144\x6e\x2e\151\x72\x2f\x46\x6f\x6e\164\x2f\120\x65\x72\x73\x69\x61\156\x2f\x53\x68\141\x62\x6e\x61\x6d\x2f\x53\150\141\142\x6e\141\155\56\143\x73\163"]; goto eqkauqciwewmgeoi; ocokwuuquaokmasc: } }
