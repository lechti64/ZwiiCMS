/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2018, Rémi Jean
 * @author Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2020, Frédéric Tempez
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

/**
 * Confirmation de suppression
 */
$(".galleryConfigDelete").on("click", function() {
	var _this = $(this);
	return core.confirm("Êtes-vous sûr de vouloir supprimer cette galerie ?", function() {
		$(location).attr("href", _this.attr("href"));
	});
});


/**
 * Tri dynamique de la galerie
 */
$( document ).ready(function() {

	$("#galleryTable").tableDnD({		
		onDrop: function(table, row) {
			$("#galleryConfigResponse").val($.tableDnD.serialize());
		},
		serializeRegexp:  "[^\_]*$"
	});
});