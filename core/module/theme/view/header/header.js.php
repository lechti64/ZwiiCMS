/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2018, Rémi Jean
 * @license GNU General Public License, version 3
 * @author Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2020, Frédéric Tempez
 * @link http://zwiicms.com/
 */



/**
 * Aperçu en direct
 */
$("input, select").not("#barSelectLanguage").on("change", function() {

	// Récupérer la taille de l'image
	var tmpImg = new Image();
	var url = "<?php echo helper::baseUrl(false); ?>" + "site/file/source/" + $("#themeHeaderImage").val();
	tmpImg.src= url;

	var themeHeaderHeight = $("#themeHeaderHeight").val();
	var themeHeaderImage = $("#themeHeaderImage").val();

	// Import des polices de caractères
	var headerFont = $("#themeHeaderFont").val();
	var css = "@import url('https://fonts.googleapis.com/css?family=" + headerFont + "');";

	// Couleurs, image, alignement et hauteur de la bannière
	css += "header{background-color:" + $("#themeHeaderBackgroundColor").val() + ";text-align:" + $("#themeHeaderTextAlign").val() + ";";

	if (themeHeaderImage) {
		// Une image est sélectionnée
		css += "background-image:url('<?php echo helper::baseUrl(false); ?>site/file/source/" + themeHeaderImage + "');background-repeat:" + $("#themeHeaderImageRepeat").val() + ";background-position:" + $("#themeHeaderImagePosition").val() + ";";
		css += "background-size:" + $("#themeHeaderImageContainer").val() + ";";
		if (themeHeaderHeight === "none") {
				// Position responsive
				css += "height: 0;  padding-top:" + (tmpImg.height / tmpImg.width ) * 100 + "%}";	
			} else {
				// Positions standards
				css += "line-height:" + $("#themeHeaderHeight").val() + ";height:" + themeHeaderHeight + "}";
		}
	// Pas d'image sélectionnée
	} else {
		// Désactiver l'option responsive
		css += "background-image:none;";
		$("header .container").show();
		$("themeHeaderTextHide").prop("false");
		if (themeHeaderHeight === "none") {
			$("#themeHeaderHeight option:eq(2)").prop("selected", true);
			css += "line-height: 150px;height: 150px}";
		} else {
			css += "line-height:" + $("#themeHeaderHeight").val() + ";height:" + themeHeaderHeight + "}";
		}
	}

	// Taille, couleur, épaisseur et capitalisation du titre de la bannière
	css += "header span{color:" + $("#themeHeaderTextColor").val() + ";font-family:'" + headerFont.replace(/\+/g, " ") + "',sans-serif;font-weight:" + $("#themeHeaderFontWeight").val() + ";font-size:" + $("#themeHeaderFontSize").val() + ";text-transform:" + $("#themeHeaderTextTransform").val() + "}";
	// Cache le titre de la bannière
	if($("#themeHeaderTextHide").is(":checked")) {
		$("header .container").hide();
	}
	else {
		$("header .container").show();
	}
	// Marge
	if($("#themeHeaderMargin").is(":checked")) {
		if(<?php echo json_encode($this->getData(['theme', 'menu', 'position']) === 'site-first'); ?>) {
			css += 'header{margin:0 20px}';
		}
		else {
			css += 'header{margin:20px 20px 0 20px}';
		}
	}
	else {
		css += 'header{margin:0}';
	}
	// Position de la bannière
	switch($("#themeHeaderPosition").val()) {
		case 'hide':
			$("header").hide();
			break;
		case 'site':
			if(<?php echo json_encode($this->getData(['theme', 'menu', 'position']) === 'site-first'); ?>) {
				$("header").show().insertAfter("nav");
			}
			else {
				$("header").show().prependTo("#site");
				// Supprime le margin en trop du menu
				if(<?php echo json_encode($this->getData(['theme', 'menu', 'margin'])); ?>) {
					css += 'nav{margin:0 20px}';
				}
			}
			break;
		case 'body':
			if(<?php echo json_encode($this->getData(['theme', 'menu', 'position']) === 'body-first'); ?>) {
				$("header").show().insertAfter("nav");
			}
			else {
				$("header").show().insertAfter("#bar");
			}
			if(<?php echo json_encode($this->getData(['theme', 'menu', 'position']) === 'top'); ?>) {
				$("header").show().insertAfter("nav");
			}
			break;
	}

	// Ajout du css au DOM
	$("#themePreview").remove();
	$("<style>")
		.attr("type", "text/css")
		.attr("id", "themePreview")
		.text(css)
		.appendTo("head");
}).trigger("change");

$("#themeHeaderHeight").on("change", function() {
	if($(this).val() === 'none') {
		$("#themeHeaderTextHide").prop("disabled", true);
		$("#themeHeaderTextHide").prop("checked", true).trigger("change");	
	} else {
		$("#themeHeaderTextHide").prop("disabled", false);
	}
}).trigger("change");


// Affiche / Cache les options de l'image du fond
$("#themeHeaderImage").on("change", function() {
	if($(this).val()) {
		$("#themeHeaderImageOptions").slideDown();
	}
	else {
		$("#themeHeaderImageOptions").slideUp(function() {
			$("#themeHeaderTextHide").prop("checked", false).trigger("change");
		});
	}
}).trigger("change");

// Affiche / Cache les options de la position
$("#themeHeaderPosition").on("change", function() {
	if($(this).val() === 'site') {
		$("#themeHeaderPositionOptions").slideDown();
	}
	else {
		$("#themeHeaderPositionOptions").slideUp(function() {
			$("#themeHeaderMargin").prop("checked", false).trigger("change");
		});
	}
}).trigger("change");

// Affiche / Cache les options de la bannière cliquable si pas masquée
$("#themeHeaderPosition").on("change", function() {
	if($(this).val() === 'hide') {
		$("#themeHeaderShow").slideUp(function() {
			$("#themeHeaderlinkHome").prop("checked", false).trigger("change");
		});		
	}
	else {
		$("#themeHeaderShow").slideDown();
	}
}).trigger("change");


