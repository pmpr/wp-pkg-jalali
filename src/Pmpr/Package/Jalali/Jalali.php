<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6148f5c3271d0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Jalali; use Exception; use Pmpr\Common\Foundation\Decorator\DecoratorOption; use Pmpr\Package\Jalali\Area\Area; class Jalali extends Container { public function __construct() { $this->gkieogwukagigisy(__DIR__); if (!$this->gmiyqqaekqcsoime()) { goto oouoqimaaqcmccay; } parent::__construct(); $this->iemaakgqgqosiecm(); oouoqimaaqcmccay: } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\144\x6d\151\x6e\x5f\x69\x6e\151\164", [$this, "\x79\x65\x79\151\147\x75\171\145\147\155\155\x79\x75\x73\x65\x61"], 21); parent::wigskegsqequoeks(); } public function iemaakgqgqosiecm() { Area::symcgieuakksimmu(); Asset::symcgieuakksimmu(); date_default_timezone_set("\101\x73\x69\141\x2f\x54\145\150\x72\x61\x6e"); } public function yeyiguyegmmyusea() { $omkysikckkcieckq = "{$this->akuociswqmoigkas()}\x5f\141\143\x74\151\x76\x61\x74\145"; if (DecoratorOption::get($omkysikckkcieckq, 0)) { goto gygawoqywkukmqee; } DecoratorOption::update("\127\x50\114\101\116\107", "\x65\156\137\x55\x53"); DecoratorOption::update($omkysikckkcieckq, 1); try { if (!function_exists("\167\160\137\144\x6f\167\x6e\154\157\141\144\137\x6c\x61\156\x67\165\x61\147\x65\x5f\x70\141\143\153")) { require_once ABSPATH . "\57\167\160\55\x61\144\155\x69\156\57\x69\x6e\x63\x6c\x75\144\145\x73\57\164\162\x61\x6e\x73\x6c\x61\x74\x69\x6f\x6e\55\151\156\x73\x74\141\154\x6c\56\160\x68\x70"; if (!wp_can_install_language_pack()) { goto sycygoiaiqqageym; } @wp_download_language_pack("\146\x61\137\x49\x52"); sycygoiaiqqageym: } } catch (Exception $wgaoewqkwgomoaai) { } gygawoqywkukmqee: } }
