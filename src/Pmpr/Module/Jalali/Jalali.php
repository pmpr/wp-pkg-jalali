<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64dcd913e4591             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Plugin; class Jalali extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4a\x61\x6c\141\x6c\151", PR__MDL__JALALI); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto cuumeogeomowqisc; } parent::__construct(); $this->iemaakgqgqosiecm(); cuumeogeomowqisc: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\x5f\151\156\x69\x74", [$this, "\171\145\171\x69\x67\165\171\145\147\x6d\155\171\x75\163\145\x61"], 21); } public function iemaakgqgqosiecm() { Area::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = self::akuociswqmoigkas() . "\137\x61\x63\x74\151\166\141\x74\145"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { goto qmkaeeomgkwggoyo; } $qkqgcaykemoiecma->update("\127\x50\x4c\x41\x4e\107", "\145\156\137\125\x53"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\x77\160\x5f\x64\157\167\156\x6c\157\141\x64\137\x6c\141\156\147\165\x61\147\x65\137\160\x61\x63\153")) { require_once ABSPATH . "\x2f\167\160\x2d\x61\144\x6d\151\x6e\x2f\151\x6e\x63\x6c\165\144\145\x73\57\x74\x72\x61\156\163\154\141\x74\151\157\156\55\151\156\x73\164\x61\x6c\154\x2e\x70\150\160"; if (!wp_can_install_language_pack()) { goto gcckqucukawcasgk; } @wp_download_language_pack("\146\x61\x5f\x49\x52"); gcckqucukawcasgk: } } catch (Exception $wgaoewqkwgomoaai) { } qmkaeeomgkwggoyo: } }
