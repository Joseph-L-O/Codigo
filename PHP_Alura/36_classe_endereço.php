<?php
/**
 * @author  Andre Panizza dos santos <https://github.com/andredeveloperPHP>
 * @version 0.0.-1; 
 */
class Conta {
/**
 * criação dos atributos
 * @access private 
 */
private $saldo; 
private $cpfTitular;
private $nomeTitular;
/**
* @internal Construtor, que obriga a declaração das informações
*/
public function __Construct(string $cpfdotitular, string $nomedotitular){
    $this->saldo = 0;
    $this->cpfTiTular = $cpfdotitular;
    $this->nomeTitular = $nomedotitular;
}

}