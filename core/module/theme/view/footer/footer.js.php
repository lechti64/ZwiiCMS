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
	css += "#footersiteLeft, #footersiteCenter, #footersiteRight {margin:" + $("#themeFooterHeight").val() + " 0}";
	//css += "footer .container > div{padding:0}";	
	//css += "footer .container-large > div{margin:" + $("#themeFooterHeight").val() + " 0}";
	//css += "footer .container-large > div{padding:0}";		
	// Alignement du contenu
	css += "#footerSocials{text-align:" + $("#themeFooterSocialsAlign").val() + "}";
	css += "#footerText{text-align:" + $("#themeFooterTextAlign").val() + "}";
	css += "#footerCopyright{text-align:" + $("#themeFooterCopyrightAlign").val() + "}";
	// Taille, couleur, épaisseur et capitalisation du titre de la bannière
	css += "footer span{color:" + $("#themeFooterTextColor").val() + ";font-family:'" + footerFont.replace(/\+/g, " ") + "',sans-serif;font-weight:" + $("#themeFooterFontWeight").val() + ";font-size:" + $("#themeFooterFontSize").val() + ";text-transform:" + $("#themeFooterTextTransform").val() + "}";
	// Marge
	if($("#themeFooterMargin").is(":checked")) {
		css += 'footer{margin:0 10px 10px;padding: 1px 10px;}';
	}
	else {
		css += 'footer{margin:0;padding:0}';
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
		4:  {'hide' : 'Masqué', 'left' : 'En haut', 'center' : 'Au milieu', 'right' : 'En bas'} , 
		3:  {'hide': 'Masqué', 'left':  'A Gauche',	'center': 'Au Central',	'right': 'A Droite'} ,
		2:  {'hide': 'Masqué', 'left':  'A Gauche',	'right': 'A Droite'} ,
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
	// Masquer les contenus 
	$("#footerCopyright").hide();
	$("#footerText").hide();
	$("#footerSocials").hide();
	// Dimension des blocks
	switch($("#themeFooterTemplate").val()) {
		case "1":
			$("#footer" + position + "Left").css("display","none");
			$("#footer" + position + "Center").removeAttr('class').addClass("col12").css("display","");
			$("#footer" + position + "Right").css("display","none");
			break;			
		case "2":	
			$("#footer" + position + "Left").removeAttr('class').addClass('col6').css("display","");
			$("#footer" + position + "Center").css("display","none").removeAttr('class');
			$("#footer" + position + "Right").removeAttr('class').addClass('col6').css("display","");
			break;
		case "3":			
			$("#footer" + position + "Left").removeAttr('class').addClass('col4').css("display","");
			$("#footer" + position + "Center").removeAttr('class').addClass('col4').css("display","");
			$("#footer" + position + "Right").removeAttr('class').addClass('col4').css("display","");
			break;
		case "4":
			$("#footer" + position + "Left").removeAttr('class').addClass('col12').css("display","");
			$("#footer" + position + "Center").removeAttr('class').addClass('col12').css("display","");
			$("#footer" + position + "Right").removeAttr('class').addClass('col12').css("display","");
			break;

	} 
});


// Désactivation des sélections multiples
$("#themeFooterSocialsPosition").on("change", function() {
	if ($(this).prop('selectedIndex') >= 1 ) {			
		if ( $("#themeFooterTextPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {
            $("#themeFooterTextPosition").prop('selectedIndex',0);
			$("#footerText").hide();			
		}
		if ( $("#themeFooterCopyrightPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {				
			$("#themeFooterCopyrightPosition").prop('selectedIndex',0);
			$("#footerCopyright").hide();
		}
	}
}).trigger("change");
$("#themeFooterTextPosition").on("change", function() {
	if ($(this).prop('selectedIndex') >= 1 ) {
		if ( $("#themeFooterSocialsPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {
			$("#themeFooterSocialsPosition").prop('selectedIndex',0);
			$("#footerSocials").hide();
		}
		if ( $("#themeFooterCopyrightPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {				
			$("#themeFooterCopyrightPosition").prop('selectedIndex',0);
			$("#footerCopyright").hide();
		}
	}
}).trigger("change");

$("#themeFooterCopyrightPosition").on("change", function() {
		if ($(this).prop('selectedIndex') >= 1 ) {
			if ( $("#themeFooterTextPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {
				$("#themeFooterTextPosition").prop('selectedIndex',0);
				$("#footerText").hide();
			}
			if ( $("#themeFooterSocialsPosition").prop('selectedIndex') === $(this).prop('selectedIndex') ) {				
				$("#themeFooterSocialsPosition").prop('selectedIndex',0);
				$("#footerSocials").hide();				
			}
		}
}).trigger("change");


// Mention Légales activation de la liste de choix
$("#themeFooterLegalCheck").on("change",function() {
	if($(this).is(":checked")) {
		$("#themeFooterLegalPageId").show();
		$("#footerDisplayLegal").show();
	} else {
		$("#themeFooterLegalPageId").hide();
		$("#footerDisplayLegal").hide();
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
