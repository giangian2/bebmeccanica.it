<?php
/**
 * Plugin Name: CookiePro
 * Plugin URI: http://www.onetrust.com/
 * Version: 2.0.2
 * Author: OneTrust, Llc
 * Author URI: https://www.onetrust.com/products/cookies/
 * Description: Cookie Consent and Website Scanning. GDPR and ePrivacy Compliance for Cookies & Online Tracking Technologies
 * License: GPL2
 *
 * @package CookiePro
 */

/*
    Copyright 2018 OneTrust

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/**
 * CookiePro
 */
defined( '_JEXEC' ) or die;
class plgSystemCookiepro extends JPlugin
{
    public function onAfterRender()
    {
        // only insert the script in the frontend
        $app = Joomla\CMS\Factory::getApplication();;
        if ($app->getName() == "site") 
        {
            $cookieProScript = $this->params->get('cookiepro_header');
            $html = $app->getBody();
            $html = str_replace('</head>',$cookieProScript. '</head>',$html);
            $app->setBody($html);
        }
    }
}