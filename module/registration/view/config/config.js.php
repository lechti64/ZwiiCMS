/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author  Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2020, Frédéric Tempez
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/  
 */


var registrationConfgiState =  $('#registrationConfigState');
registrationConfgiState.on("change", function() {
	if ($(this).is(':checked') ) {
		$('#registrationconfigMailRegisterContentWrapper').slideDown();
	} else {
        $('#registrationconfigMailRegisterContentWrapper').slideUp();
    }
});

$(document).ready(function(){
var registrationConfgiState =  $('#registrationConfigState');
    if ($(this).is(':checked') ) {
        $('#registrationconfigMailRegisterContentWrapper').slideDown();
    } else {
        $('#registrationconfigMailRegisterContentWrapper').slideUp();
    }
});