<?php
/**
 * Class QROutputOptionsAbstract
 *
 * @filesource   QROutputOptionsAbstract.php
 * @created      17.12.2016
 * @package      chillerlan\QRCode\Output
 * @author       Smiley <smiley@chillerlan.net>
 * @copyright    2016 Smiley
 * @license      MIT
 */

namespace chillerlan\QRCode\Output;

use chillerlan\QRCode\Container;

/**
 *
 */
abstract class QROutputOptionsAbstract{
	use Container;

	public $type;

	public $eol = PHP_EOL;

	public $cachefile = null;

}
