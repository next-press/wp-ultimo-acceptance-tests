<?php
/**
 * Plugin Name: WP Ultimo Acceptance Tests
 * Description: Fitlers and hooks that needs to get installed to properly run our Acceptance test suite.
 * Plugin URI: http://wpultimo.com
 * Text Domain: wp-ultimo
 * Version: 0.0.1
 * Author: Arindo Duque & NextPress
 * Author URI: http://nextpress.co/
 * Network: true
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /lang
 *
 * WP Ultimo is distributed under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WP Ultimo is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WP Ultimo. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author   Arindo Duque
 * @category Tests
 * @package  WP_Ultimo
 * @version  0.0.1
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

/**
 * Always send headers
 */
add_filter('wu_should_send_x_headers', '__return_true');


