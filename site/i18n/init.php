<?php	

$i18nOptions = [
	//'bg'	=> 'Bulgare (bg)',
	//'dk'	=> 'Danois (dk)',
	//'fi'	=> 'Finnois (fi)',		
	//'is' 	=> 'Islandais (is)',		
	//'no'	=> 'Norvégien (no)',
	//'se'	=> 'Suédois (se)',
	//'ro'	=> 'Roumain (ro)',
	//'cz'	=> 'Tchèque (cz)'
	//'tr'	=> 'Turc (tr)'
	// Langues régionales
	//'eu'	=> 'Basque (eu)',
	//'br'	=> 'Breton (br)',
	//'co'	=> 'Corse (co)',
	//'ha'	=> 'Flamand (ha)',
	//'oc'	=> 'Occitan (oc)',
	//'pi'	=> 'Picard (pi)'
];

// ----------------------------------
// Ne rien modifier ci-dessous
// ----------------------------------

// Vérifier l'existence des drapeaux
foreach ($i18nOptions as $itemKey => $itemValue) {
	if (file_exists(self::I18N_DIR .  'png/' . $itemKey . '.png') === false) {
		unset($i18nOptions[$itemKey]);
	}
}
// Incorporer les nouvelles langues valides
self::$i18nList = array_merge (self::$i18nList, $i18nOptions);
