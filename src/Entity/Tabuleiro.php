<?php
/**
 * Class Tabuleiro
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
 * @author   Márcio Augusto dos Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */
namespace Webdev\Entity;


use Webdev\TabuleiroInterface\TabuleiroInterface;

/**
 * Class Tabuleiro
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
 * @author   Márcio Augusto dos Reis <augustoreis36@gmail.com>
 * @license  http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link     https://www.unicesumar.edu.br/
 */
class Tabuleiro implements TabuleiroInterface
{
    /**
     * function criarTabuleiro
     *
     * @return void
     */
    public function criarTabuleiro()
    {
        $linha0 = [" ", "B", " ", "B", " ", "B", " ", "B"];
        $linha1 = ["B", " ", "B", " ", "B", " ", "B", " "];
        $linha2 = $linha0;
        $linha3 = [" ", " ", " ", " ", " ", " ", " ", " "];
        $linha4 = $linha3;
        $linha5 = ["P", " ", "P", " ", "P", " ", "P", " "];
        $linha6 = [" ", "P", " ", "P", " ", "P", " ", "P"];
        $linha7 = $linha5;

        $tabuleiro = [
            $linha0,
            $linha1,
            $linha2,
            $linha3,
            $linha4,
            $linha5,
            $linha6,
            $linha7
        ];

        $this->salvarTabuleiro($tabuleiro);
    }

    /**
     * @param $tabuleiro
     *
     * @return void
     */
    public function salvarTabuleiro($tabuleiro)
    {
        $dir = __DIR__ . '/../../tmp/tabuleiro.json';
        file_put_contents($dir, json_encode($tabuleiro));
    }

    /**
     * @return array
     * @return void
     */
    public function getTabuleiro()
    {
        $dir = __DIR__ . '/../../tmp/tabuleiro.json';
        return json_decode(file_get_contents($dir), true);
    }

    /**
     * @return bool
     */
    public function existeTabuleiro()
    {
        if (!file_exists(__DIR__ . '/../../tmp/tabuleiro.json')) {
            return false;
        }
        return true;
    }


}