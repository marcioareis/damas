<?php
/**
 * Interface PecaInterface
 *
 * PHP version 5.6.8
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category Game
 * @package  Webdev\PecaInterface
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */

namespace Webdev\PecaInterface;

/**
 * Interface PecaInterface
 *
 * PHP version 5.6.8
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category Game
 * @package  Webdev\PecaInterface
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */
interface PecaInterface
{
    /**
     * @return mixed
     */
    public function movimentar($origem, $destino, $tipo);
}