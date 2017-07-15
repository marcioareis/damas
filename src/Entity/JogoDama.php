<?php
/**
 * Class JogoDama
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
 * @package  Webdev\Entity
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */

namespace Webdev\Entity;


use Webdev\JogoDamaInterface\JogoDamaInterface;

/**
 * Class JogoDama
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
 * @package  Webdev\Entity
 * @author   Márcio Augusto Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */
abstract class JogoDama implements JogoDamaInterface
{
    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return bool
     */
    public function validarMovimentacao($origem, $destino, $array)
    {
        if ($this->posicaoExistente($origem, $destino, $array)
            && $this->posicaoVazia($origem, $destino, $array)
            && $this->posicaoValida($origem, $destino)
            && $this->movimentacaoDiagonalFrente($origem, $destino, $array)
            && $this->validarMovimentoBranca($origem, $destino, $array)
            || $this->validarMovimentoPreta($origem, $destino, $array)
        ) {
            return true;
        }

        return false;
    }

    /**
     * @param $origem
     * @param $destino
     *
     * @return bool
     */
    public function validarMovimentoBranca($origem, $destino, $array)
    {
        if ($array[$origem[0]][$origem[1]] == "B" && $destino[0][1] > $origem[0][1]){
            return true;
        }
         return false;

    }

    /**
     * @param $origem
     * @param $destino
     *
     * @return bool
     */
    public function validarMovimentoPreta($origem, $destino, $array)
    {
        if ($array[$origem[0]][$origem[1]] == "P" && $destino[0][1] < $origem[0][1]){
            return true;
        }
        return false;

    }
    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return bool
     */
    public function posicaoExistente($origem, $destino, $array)
    {
        if (!isset($array[$origem[0]][$origem[1]])) {
            return false;
        }
        if (!isset($array[$destino[0]][$destino[1]])) {
            return false;
        }
        return true;
    }

    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return bool
     */
    public function posicaoVazia($origem, $destino, $array)
    {
        if ($this->posicaoExistente($origem, $destino, $array)) {
            if ($array[$origem[0]][$origem[1]] != " ") {
                return false;
            }
            if ($array[$destino[0]][$destino[1]] == " ") {
                return false;
            }
            return false;
        } else {
            return false;
        }
    }

    /**
     * @param string $origem
     * @param string $destino
     *
     * @return bool
     */
    public function posicaoValida($origem, $destino)
    {
        $posicoes_invalidas = [
            "00", "02", "04", "06",
            "11", "13", "15", "17",
            "20", "22", "24", "26",
            "31", "33", "35", "37",
            "40", "42", "44", "46",
            "51", "53", "55", "57",
            "60", "62", "64", "66",
            "71", "73", "75", "77"
        ];

        if (
            in_array($origem, $posicoes_invalidas) ||
            in_array($destino, $posicoes_invalidas)
        ) {
            return false;
        }
        return true;
    }

    /**
     * @param string $origem
     * @param string $destino
     * @param array  $array
     *
     * @return bool
     */
    public function movimentacaoDiagonalFrente($origem, $destino, $array)
    {
        if (!$this->posicaoValida($origem, $destino)) {
            return false;
        }

        $frente = 1;
        if ($array[$origem[0]][$origem[1]] == "P") {
            $frente = -1;
        }

        if (!($origem[1] == $destino[1] + 1 OR $origem[1] == $destino[1] - 1)) {
            return false;
        }

        if (!($origem[0] == $destino[0] + $frente OR $origem[0] == $destino[0] - $frente)) {
            return false;
        }

        return true;
    }

}