
<?php 
require_once 'Pessoa.php'; 
require_once 'SalaVirtual.php'; 

// criação dos objetos 
$p1 = new Pessoa('Jonatas', 18, 170, 70, 24353211122,19998382838);
$p2 = new Pessoa('Henrique', 25, 180, 65, 12143221145,12396872862); 

$sala1 = new SalaVirtual('Desenvolvimento Web', 'Orlando', '19:00', '22:30', '19'); 
$sala2 = new SalaVirtual('Banco de Dados', 'Nilton', '19:00', '22:30', '20'); 


// associação 
$p1->setSalaVirtual( $sala1 );
$p2->setSalaVirtual( $sala2 );


print '_______________________'. "<br>\n";

print 'O nome da pessoa é ' . $p1->getNome() . "<br>\n"; 
print 'A altura é ' . $p1->getAltura() . "<br>\n"; 
print 'A idade é ' . $p1->getIdade() . "<br>\n"; 
print 'O peso é ' . $p1->getPeso() . "<br>\n";
print 'O CPF é ' . $p1->getCPF() . "<br>\n";
print 'O telefone é ' . $p1->getTelefone() . "<br>\n";


print 'A sala virtual da pessoa ' . $p1->getNome() . ' é ' . $p1->getSalaVirtual()->getNomedaMateria() . "<br>\n";

print '_______________________'. "<br>\n";


print '_______________________'. "<br>\n";

print 'O nome da pessoa é ' . $p2->getNome() . "<br>\n"; 
print 'A altura é ' . $p2->getAltura() . "<br>\n"; 
print 'A idade é ' . $p2->getIdade() . "<br>\n"; 
print 'O peso é ' . $p2->getPeso() . "<br>\n";
print 'O CPF é ' . $p2->getCPF() . "<br>\n";
print 'O telefone é ' . $p2->getTelefone() . "<br>\n";

print 'A sala virtual da pessoa ' . $p2->getNome() . ' é ' . $p2->getSalaVirtual()->getNomedaMateria() . "<br>\n";

print '_______________________'. "<br>\n";

?>