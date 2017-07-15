<?php
/**
 * Interface JogoDamaInterface
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
 * @package  Webdev\JogoDamaInterface
 * @author   Márcio Augusto dos Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */

namespace Webdev\JogoDamaInterface;

/**
 * Interface JogoDamaInterface
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
 * @package  Webdev\JogoDamaInterface
 * @author   Márcio Augusto dos Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */
interface JogoDamaInterface
{
    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return boolean
     */
    public function validarMovimentacao($origem, $destino, $array);

    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return boolean
     */
    public function posicaoExistente($origem, $destino, $array);

    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return boolean
     */
    public function posicaoVazia($origem, $destino, $array);

    /**
     * @param string $origem
     * @param string $destino
     *
     * @return boolean
     */
    public function posicaoValida($origem, $destino);

    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return boolean
     */
    public function movimentacaoDiagonalFrente($origem, $destino, $array);
}