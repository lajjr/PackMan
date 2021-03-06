<?php
/**
 * PackMan
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of PackMan.
 *
 * PackMan is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * PackMan is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ; if not, write to the Free Software Foundation, Inc., 59
 * Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package packman
 */
/**
 * @package packman
 * @subpackage controllers
 */
$modx->regClientStartupScript($tp->config['jsUrl'].'packman.js');
$modx->regClientStartupHTMLBlock('<script type="text/javascript">
Ext.onReady(function() {
    TP.config = '.$modx->toJSON($tp->config).';
    TP.config.connector_url = "'.$tp->config['connectorUrl'].'";
    TP.request = '.$modx->toJSON($_GET).';
});
</script>');

return '';