<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             642021ebb8e5d             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Jalali; use Exception; use Pmpr\Module\Jalali\Area\Area; use Pmpr\Module\Jalali\Plugin\Plugin; class Jalali extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x4a\x61\154\x61\154\x69", PR__MDL__JALALI); }, self::wuowaiyouwecckaw => false]); if (!$this->gmiyqqaekqcsoime()) { goto kuicqywysciceggs; } parent::__construct(); $this->iemaakgqgqosiecm(); kuicqywysciceggs: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\144\155\x69\156\x5f\151\156\x69\164", [$this, "\x79\145\171\x69\147\x75\x79\145\147\155\155\171\165\x73\145\x61"], 21); } public function iemaakgqgqosiecm() { Area::symcgieuakksimmu(); Asset::symcgieuakksimmu(); Plugin::symcgieuakksimmu(); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = self::akuociswqmoigkas() . "\x5f\x61\143\164\x69\x76\141\x74\145"; $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); if ($qkqgcaykemoiecma->get($omkysikckkcieckq, 0)) { goto sciwggaeogcoesiu; } $qkqgcaykemoiecma->update("\127\120\x4c\101\116\107", "\x65\156\137\x55\x53"); $qkqgcaykemoiecma->update($omkysikckkcieckq, 1); try { if (!function_exists("\x77\x70\x5f\144\x6f\167\156\x6c\157\x61\x64\137\154\141\156\x67\165\x61\x67\x65\137\x70\x61\143\x6b")) { require_once ABSPATH . "\57\167\x70\x2d\x61\144\x6d\151\156\57\x69\156\143\154\x75\x64\145\163\57\164\162\x61\156\x73\154\x61\164\151\x6f\x6e\55\151\x6e\x73\x74\x61\154\x6c\x2e\160\150\x70"; if (!wp_can_install_language_pack()) { goto mkwskuycuyguqqok; } @wp_download_language_pack("\146\x61\x5f\x49\122"); mkwskuycuyguqqok: } } catch (Exception $wgaoewqkwgomoaai) { } sciwggaeogcoesiu: } }
