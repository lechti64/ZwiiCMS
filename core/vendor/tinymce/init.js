/**

 * Initialisation de TinyMCE

 */

tinymce.init({
	// Classe où appliquer l'éditeur
	selector: ".editorWysiwyg",
		// Aperçu dans le pied de page
		setup:function(ed) {
			ed.on('change', function(e) {
				if (ed.id === 'themeFooterText') {
					$("#footerText").html(tinyMCE.get('themeFooterText').getContent());
				}
			});
		},
	// Langue
	language: "fr_FR",
	// Plugins
	plugins: "advlist anchor autolink autoresize autosave codemirror colorpicker contextmenu fullscreen hr image imagetools link lists media paste searchreplace stickytoolbar tabfocus table template textcolor codesample",
	// Contenu de la barre d'outils
	toolbar: "restoredraft | undo redo |  formatselect bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist | table template code | image media link | fullscreen",
	// CodeMirror
	codemirror: {
		indentOnInit: true, // Whether or not to indent code on init.
		path: 'codemirror', // Path to CodeMirror distribution
		saveCursorPosition: false,    // Insert caret marker
		config: {           // CodeMirror config object
			/*theme: 'ambiance',*/
			fullscreen: true,	
			/*mode: 'application/x-httpd-php',*/
			indentUnit: 4,
			lineNumbers: true,
			mode: "htmlmixed",
		},
		jsFiles: [
			'mode/php/php.js',
			'mode/css/css.js',
			'mode/htmlmixed/htmlmixed.js',
			'mode/htmlembedded/htmlembedded.js',
			'mode/javascript/javascript.js',
			'mode/xml/xml.js',
			'addon/search/searchcursor.js',
			'addon/search/search.js',
		],
		cssFiles: [
			/*'theme/ambiance.css',*/
		],		
		width: 800,         // Default value is 800
		height: 500       // Default value is 550		
	}, 
	// Cibles de la target
	target_list: [
		{title: 'None', value: ''},
		{title: 'Nouvel onglet', value: '_blank'}
		],
	// Target pour lightbox
	rel_list: [
		{title: 'None', value: ''},
		{title: 'Une popup (Lity)', value: 'data-lity'},
		{title: 'Une galerie d\'images (SimpleLightbox)', value: 'gallery'}
	],	
	// Titre des image
	image_title: true,
	// Pages internes
	link_list: baseUrl + "core/vendor/tinymce/links.php",
	// Contenu du menu contextuel
	contextmenu: "selectall searchreplace | hr | media image  link anchor  | insertable  cell row column deletetable",
	// Fichiers CSS à intégrer à l'éditeur
	content_css: [
		baseUrl + "core/layout/common.css",
		baseUrl + "core/vendor/tinymce/content.css",
		baseUrl + "site/data/theme.css",
		baseUrl + "site/data/custom.css"
	],
// Classe à ajouter à la balise body dans l'iframe
	body_class: "editorWysiwyg",
	// Cache les menus
	menubar: true,
	// URL menu contextuel
	link_context_toolbar: true,	
	// Cache la barre de statut
	statusbar: false,
	// Autorise tous les éléments
	valid_elements :"*[*]",
	valid_children : "*[*]",
	// Autorise l'ajout de script
	// extended_valid_elements: "script[language|type|src]",
	// Bloque le dimensionnement des médias (car automatiquement en fullsize avec fitvids pour le responsive)
	media_dimensions: true,
	// Désactiver la dimension des images
	image_dimensions: true,
	// Active l'onglet avancé lors de l'ajout d'une image
	image_advtab: true,
	// Urls absolues
	relative_urls: false,
	// Url de base
	document_base_url: baseUrl,
	// Gestionnaire de fichiers
	filemanager_access_key: privateKey,
	external_filemanager_path: baseUrl + "core/vendor/filemanager/",
	external_plugins: {
		"filemanager": baseUrl + "core/vendor/filemanager/plugin.min.js"
	},
	// Thème mobile
	// mobile: {
	//	theme: "mobile",
	//	plugins: [ 'autosave', 'lists', 'autolink' ],
	//	toolbar: [ 'undo', 'bold', 'italic', 'styleselect' ]
	//},
	// Contenu du bouton insérer
	insert_button_items: "anchor hr table",
	// Contenu du bouton formats
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alignleft", format: "alignleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"}
		]}
	],
	// Templates
	templates: [
		{
			title: "Bloc de texte",
			url: baseUrl + "core/vendor/tinymce/templates/block.html",
			description: "Bloc de texte avec un titre."
		},
		{
			title: "Effet accordéon",
			url: baseUrl + "core/vendor/tinymce/templates/accordion.html",
			description: "Bloc de texte avec effet accordéon."
		},
		{
			title: "Grille symétrique : 6 - 6",
			url: baseUrl + "core/vendor/tinymce/templates/col6.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille symétrique : 4 - 4 - 4",
			url: baseUrl + "core/vendor/tinymce/templates/col4.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille symétrique : 3 - 3 - 3 - 3",
			url: baseUrl + "core/vendor/tinymce/templates/col3.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille asymétrique : 4 - 8",
			url: baseUrl + "core/vendor/tinymce/templates/col4-8.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille asymétrique : 8 - 4",
			url: baseUrl + "core/vendor/tinymce/templates/col8-4.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille asymétrique : 2 - 10",
			url: baseUrl + "core/vendor/tinymce/templates/col2-10.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		},
		{
			title: "Grille asymétrique : 10 - 2",
			url: baseUrl + "core/vendor/tinymce/templates/col10-2.html",
			description: "Grille adaptative sur 12 colonnes, sur mobile elles passent les unes en dessous des autres."
		}
	]
});

tinymce.PluginManager.add('stickytoolbar', function(editor, url) {
	editor.on('init', function() {
	  setSticky();
	});
	
	$(window).on('scroll', function() {
	  setSticky();
	});

	function setSticky() {
	  var container = editor.editorContainer;
	  var toolbars = $(container).find('.mce-toolbar-grp');
	  var statusbar = $(container).find('.mce-statusbar');
	  var menubar = $(container).find('.mce-menubar');
	  
	  if (isSticky()) {
		$(container).css({
		  paddingTop: menubar.outerHeight()
		});
		
		if (isAtBottom()) {
		  toolbars.css({
			top: 'auto',
			bottom: statusbar.outerHeight(),
			position: 'absolute',
			width: '100%',
			borderBottom: 'none'
		  }); 
		} else {
			menubar.css({
				top: 45,
				bottom: 'auto',
				position: 'fixed',
				width: $(container).width(),
				borderBottom: '1px solid rgba(0,0,0,0.2)',
				background: '#fff'
			}); 			
		  	toolbars.css({
				top: 78,
				bottom: 'auto',
				position: 'fixed',
				width: $(container).width(),
				borderBottom: '1px solid rgba(0,0,0,0.2)'
		  	}); 
		}
	  } else {
		$(container).css({
		  paddingTop: 0
		});
		
		toolbars.css({
  		top:0,
		  position: 'relative',
		  width: 'auto',
		  borderBottom: 'none'
		});
		menubar.css({
			top:0,
			position: 'relative',
			width: 'auto',
			borderBottom: 'none'
		  });		
	  }
	}
	
	function isSticky() {
	  var container = editor.editorContainer,
		editorTop = container.getBoundingClientRect().top;
	  
	  if (editorTop < 0) {
		return true;
	  }
  
	  return false;
	}
	
	function isAtBottom() {
	  var container = editor.editorContainer,
		editorTop = container.getBoundingClientRect().top;
	  
	  var toolbarHeight = $(container).find('.mce-toolbar-grp').outerHeight();
	  var footerHeight = $(container).find('.mce-statusbar').outerHeight();
	  
	  var hiddenHeight = -($(container).outerHeight() - toolbarHeight - footerHeight);

  	  if (editorTop < hiddenHeight) {
		return true;
	  }
	  
	  return false;
	}
  });
