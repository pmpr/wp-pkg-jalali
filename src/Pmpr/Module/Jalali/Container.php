<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc5471a810             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Pmpr\Common\Foundation\Container\Container as BaseClass; abstract class Container extends BaseClass { public function ewamemuocoskqiuu($locale) : string { if (!in_array($locale, ["\145\x6e", "\146\141"])) { $locale = false; } $goecwaaykqoaaagg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg(); if (!$locale && $goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qguiuummyqgiskeu)) { $locale = "\146\x61"; } else { if (!$locale && $goecwaaykqoaaagg) { $locale = "\145\156"; } else { if (!$locale && !$goecwaaykqoaaagg && $this->weysguygiseoukqw(Setting::qqcaeookcsckyyoo)) { $locale = "\146\x61"; } else { if (!$locale && !$goecwaaykqoaaagg) { $locale = "\x65\156"; } } } } return $locale; } public function ksskkagoieiyuuwe($locale = null) : bool { if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return in_array($locale, ["\x66\x61", "\146\x61\137\x49\122"], true); } public function qeegmakycwwycmcm($locale = null) : bool { if (!$locale) { $locale = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->iyouigcsiacgwksc(); } return in_array($locale, ["\145\156", "\145\x6e\137\x55\123", "\145\156\x5f\x55\x4b"], true); } }
