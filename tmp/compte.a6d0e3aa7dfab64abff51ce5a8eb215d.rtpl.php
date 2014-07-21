<?php if(!class_exists('raintpl')){exit;}?><?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("composant/head") . ( substr("composant/head",-1,1) != "/" ? "/" : "" ) . basename("composant/head") );?>


<!-- IMPORT DU JS ET STYLE CSS DE LA PAGE -->
<link rel="stylesheet" type="text/css" href="template/../css/compte.css">

<!-- IMPORT DU JS ET CSS DU DATEPICKER -->
<link rel="stylesheet" type="text/css" href="template/../lib/datepicker/css/datepicker.css">
<script type="text/javascript" src="template/../lib/datepicker/js/datepicker.js"></script>
<script type="text/javascript" src="template/../lib/datepicker/js/lang/fr.js"></script>

<!-- SECTION DE CREATION D'UN COMPTE -->
<div id="div_create_compte" class="section section_haute">
	<h1>Cr&eacute;er un compte bancaire</h1>
	<form id="form_create_compte" method="POST" onsubmit="return false;">
		Libell&eacute; : 
		<input type="text" id="txt_libelle" name="txt_libelle" class="input_large" data-type="string" data-label="Le libellé"/>
		<button id="btn_creer">Ajouter le compte bancaire</button>
	</form>
</div>

<!-- SECTION DE MODIFICATION D'UN COMPTE -->
<div id="div_list_compte" class="section section_milieu">
	<h1>Modifier vos compte bancaire</h1>
	<div id="div_compte">
		<ul id="ul_compte">
			<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("composant/liste_compte_update") . ( substr("composant/liste_compte_update",-1,1) != "/" ? "/" : "" ) . basename("composant/liste_compte_update") );?>

		</ul>
	</div>
	<div id="div_detail_compte">

	</div>
</div>

<!-- IMPORT DU FICHIER JS DE LA PAGE -->
<script type="text/javascript" src="template/../js/compte.js"></script>

<?php $tpl = new RainTPL;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("composant/foot") . ( substr("composant/foot",-1,1) != "/" ? "/" : "" ) . basename("composant/foot") );?>