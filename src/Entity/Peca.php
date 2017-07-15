<?php
/**
 * Class Peca
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

use Webdev\PecaInterface\PecaInterface;

/**
 * Class Peca
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
class Peca extends JogoDama implements PecaInterface
{
    /**
     * @var $destino string
     */
    protected $destino;
    /**
     * @var $origem string
     */
    protected $origem;
    /**
     * @var $tabuleiro Tabuleiro
     */
    protected $tabuleiro;

    /**
     * Peca constructor.
     *
     * @param string $origem
     * @param string $destino
     */
    public function __construct($origem = '', $destino = '')
    {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->tabuleiro = new Tabuleiro();
    }

    /**
     * @return mixed
     */
    public function movimentar($origem, $destino, $tipo)
    {
        if ($this->tabuleiro->existeTabuleiro()) {
            echo "Erro Arquivo Inexistente";
            return;
        }

        $tabuleiro = $this->tabuleiro->getTabuleiro();
        

        if ($this->validarMovimentacao($origem, $destino, $tabuleiro)) {
            $tabuleiroOrigem = $tabuleiro[$origem[0]][$origem[1]];
            $tabuleiro[$destino[0]][$destino[1]] = $tabuleiroOrigem;
            $tabuleiro[$origem[0]][$origem[1]] = " ";

            $this->tabuleiro->salvarTabuleiro($tabuleiro);
        } else {
            echo "Erro Movimentacao Incorreta";
            return;
        }

        return;
    }

    /**
     * @return string
     */
    public function getDestino()
    {
        return $this->destino;
    }

    /**
     * @param string $destino
     *
     * @return void
     */
    public function setDestino($destino)
    {
        $this->destino = $destino;
    }

    /**
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * @param string $origem
     *
     * @return void
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;
    }
}