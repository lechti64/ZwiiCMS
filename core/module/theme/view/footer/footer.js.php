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
 * @copyright Copyright (C) 2018-2019, Frédéric Tempez
 * @link http://zwiicms.com/
 */

/**
 * Aperçu en direct
 */
$("input, select").on("change", function() {
	// Import des polices de caractères
	var footerFont = $("#themeFooterFont").val();
	var css = "@import url('https://fonts.googleapis.com/css?family=" + footerFont + "');";	
	// Couleurs du pied de page
	var colors = core.colorVariants($("#themeFooterBackgroundColor").val());
	var textColor = $("#themeFooterTextColor").val();
	var css = "footer{background-color:" + colors.normal + ";color:" + textColor + "}";
	css += "footer a{color:" + textColor + "}";
	// Hauteur du pied de page
	css += "footer .container > div{margin:" + $("#themeFooterHeight").val() + " 0}";
	//css += "footer .container > div{padding:0}";	
	css += "footer .container-large > div{margin:" + $("#themeFooterHeight").val() + " 0}";
	//css += "footer .container-large > div{padding:0}";		
	// Alignement du contenu
	css += "#footerSocials{text-align:" + $("#themeFooterSocialsAlign").val() + "}";
	css += "#footerText{text-align:" + $("#themeFooterTextAlign").val() + "}";
	css += "#footerCopyright{text-align:" + $("#themeFooterCopyrightAlign").val() + "}";
	// Taille, couleur, épaisseur et capitalisation du titre de la bannière
	css += "footer span{color:" + $("#themeFooterTextColor").val() + ";font-family:'" + footerFont.replace(/\+/g, " ") + "',sans-serif;font-weight:" + $("#themeFooterFontWeight").val() + ";font-size:" + $("#themeFooterFontSize").val() + ";text-transform:" + $("#themeFooterTextTransform").val() + "}";
	// Marge
	if($("#themeFooterMargin").is(":checked")) {
		css += 'footer{margin:0 20px 20px}';
	}
	else {
		css += 'footer{margin:0}';
	}
	// Ajout du css au DOM
	$("#themePreview").remove();
	$("<style>")
		.attr("type", "text/css")
		.attr("id", "themePreview")
		.text(css)
		.appendTo("footer");
	// Position du pied de page
	switch($("#themeFooterPosition").val()) {
		case 'hide':
			$("footer").hide();
			break;
		case 'site':
			$("footer").show().appendTo("#site");
			break;
		case 'body':
			$("footer").show().appendTo("body");
			break;
	}
});



// Position dans les blocs
// Bloc texte personnalisé
$(".themeFooterContent").on("change",function() {
	var position = $("#themeFooterPosition").val();	
	switch($("#themeFooterTextPosition").val()) {
			case "hide":
				$("#footerText").hide();
				break;
			case "left":
				$("#footerText").show().appendTo("#footer" + position + "Left");
				break;
			case "center":			
				$("#footerText").show().appendTo("#footer" + position + "Center");
				break;
			case "right":			
				$("#footerText").show().appendTo("#footer" + position + "Right");			
				break;
	}
	switch($("#themeFooterSocialsPosition").val()) {
			case 'hide':
				$("#footerSocials").hide();
				break;		
			case 'left':
				$("#footerSocials").show().appendTo("#footer" + position + "Left");	
				break;
			case 'center':
				$("#footerSocials").show().appendTo("#footer" + position + "Center");
				break;
			case 'right':
				$("#footerSocials").show().appendTo("#footer" + position + "Right");			
				break;
	}
		switch($("#themeFooterCopyrightPosition").val()) {
			case 'hide':
				$("#footerCopyright").hide();
				break;		
			case 'left':
				$("#footerCopyright").show().appendTo("#footer" + position + "Left");			
				break;
			case 'center':
				$("#footerCopyright").show().appendTo("#footer" + position + "Center");
				break;
			case 'right':
                $("#footerCopyright").show().appendTo("#footer" + position + "Right");                			
				break;
	}
}).trigger("change");
// Fin Position dans les blocs

// Modification dynamique de la mise en page 
$("#themeFooterTemplate").on("change",function() {
	// Nettoyage des sélecteurs des contenus
	var newOptions = {
		3:  {'hide': 'Masqué', 'left':  'Bloc Gauche',	'center': 'Bloc Central',	'right': 'Bloc Droite'} ,
		2:  {'hide': 'Masqué', 'left':  'Bloc Gauche',	'right': 'Bloc Droite'} ,
		1:  {'hide': 'Masqué', 'center': 'Affiché'} 
	};	
	var $el = $(".themeFooterContent");
	$el.empty(); 
	// Eléments des position de contenus
	$.each(newOptions[$("#themeFooterTemplate").val()], function(key,value) {
		$el.append($("<option></option>")
			.attr("value", key).text(value));
		});
	var position = $("#themeFooterPosition").val();
	// Masquer le contenus 
	$("#footerCopyright").hide();
	$("#footerText").hide();
	$("#footerSocials").hide();
	switch($("#themeFooterTemplate").val()) {
		case "1":
			$("#footer" + position + "Left").css("display","none");
			$("#footer" + position + "Center").css("display","");
			$("#footer" + position + "Right").css("display","none");
			// Dimension du bloc
			$("#footer" + position + "Center").removeAttr('class');
			$("#footer" + position + "Center").addClass("col12");
			break;			
		case "2":	
			$("#footer" + position + "Left").css("display","");
			$("#footer" + position + "Center").css("display","none");
			$("#footer" + position + "Right").css("display","");
			// Dimension de blocs
			$("#footer" + position + "Left").removeAttr('class');
			$("#footer" + position + "Right").removeAttr('class');
			$("#footer" + position + "Left").addClass('col6');			
			$("#footer" + position + "Right").addClass('col6');
			break;
		case "3":			
			$("#footer" + position + "Left").css("display","");
			$("#footer" + position + "Center").css("display","");
			$("#footer" + position + "Right").css("display","");
			// Dimension de blocs			
			$("#footer" + position + "Left").removeAttr('class');			
			$("#footer" + position + "Right").removeAttr('class');
			$("#footer" + position + "center").removeAttr('class');			
			$("#footer" + position + "Left").addClass('col4');
			$("#footer" + position + "Center").addClass('col4');							
			$("#footer" + position + "Right").addClass('col4');
			break;
	} 
});


// Lien de connexion
$("#themeFooterLoginLink").on("change", function() {
	if($(this).is(":checked")) {
		$("#footerLoginLink").show();
	}
	else {
		$("#footerLoginLink").hide();
	}
}).trigger("change");
	 
// Numéro de version
$("#themefooterDisplayVersion").on("change", function() {
	if($(this).is(":checked")) {
		$("#footerDisplayVersion").show();
	}
	else {
		$("#footerDisplayVersion").hide();
	}
}).trigger("change");

// Numéro de version
$("#themefooterDisplayCopyright").on("change", function() {
	if($(this).is(":checked")) {
		$("#footerDisplayCopyright").show();
	}
	else {
		$("#footerDisplayCopyright").hide();
	}
}).trigger("change");

// Site Map
$("#themefooterDisplaySiteMap").on("change", function() {
	if($(this).is(":checked")) {
		$("#footerDisplaySiteMap").show();
	}
	else {
		$("#footerDisplaySiteMap").hide();
	}
}).trigger("change");



// Numéro de version
$("#themefooterDisplayVersion").on("change", function() {
	if($(this).is(":checked")) {
		$("#footerDisplayVersion").show();
	}
	else {
		$("#footerDisplayVersion").hide();
	}
}).trigger("change");


// Aperçu du texte
$("#themeFooterText").on("change keydown keyup", function() {
	$("#footerText").html($(this).val());
});

// Affiche / Cache les options de la position
$("#themeFooterPosition").on("change", function() {
	if($(this).val() === 'site') {
		$("#themeFooterPositionOptions").slideDown();
	}
	else {
		$("#themeFooterPositionOptions").slideUp(function() {
			$("#themeFooterMargin").prop("checked", false).trigger("change");
		});
	}
}).trigger("change");
