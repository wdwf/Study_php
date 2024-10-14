<?php

# Operadores aritmeticos
/*
  ()
  **
  *,/,%
  +,-
*/

# Operadores de Incremento e decremento
/*
  Pré:
  ++$a;
  --$a;

  Pós:
  $a++
  $a--
*/

# Comparação
/*
  ==
  ===
  != ou <>
  !==

  <
  >
  <=
  >=
  <=> - spaceship
    - Retorna -1 se o valor da esquerda for menor
    - Retorna 0 se forem iguais
    - 1 se o valor da direita for menor 
*/

# Operador de controle de erro
/*
  @ - Quando ele precede uma expressão em PHP, qualquer mensagem de erro que possa ser gerada por aquela expressão será ignorada.
    - Quaisquer mensages de erro geradas na expressão fica disponível no elemento "message" do array retornado por error_get_last(). 

    ex: $value = @$cache[$key] // você não receberá nenhum aviso se a chave $key não existir.
*/

# Operadores Logicos
/*
  and ou &&
  or ou || - cachorro ououou
  xor - true se $a ou $b é true, mas não ambos ao mesmo tempo.
  !
*/


# Operadores de arrays
/*

  $a + $b - União // Faz a união de dois arrays porem os elementos do array à esquerda serão mantidos e os valores de mesma chave no array da direita são ignorados.
  $a == $b - true se $a e $b tem as mesmas chaves e valores.
  $a === $b - true se $a e $b tem as mesmas chaves e valores, na mesma ordem e com os mesmos tipos.
  $a != $b - true se $a não é igual $b.
  $a !== $b - true se $a não é idêntico a $b.
*/

# Operador de tipo
/*
  instanceof
  var_dump($a instanceof myClass) - verifica se uma variavel do PHP é um objeto instanciado de uma certa classe 
*/

// ---------------------------

# Estrutura de controle
/*
  if () {
  ...
  } elseif () {
  ...
  }
  else {
  ...
  }
*/

/*
  ternario
  $variavel ? "true" : "false"; 
*/


/*
  while () {
  ...
  }

  do {
  
  } while ()
*/

/*
  for ($i = 0; $i <= 10; $i++) {
    ...
  }

  $a = [1, 2,3,4,5,6];
  foreach ($a as $valor) {
    echo $valor;
  }

  foreach ($arr as $chave => $valor) {
    echo "{$chave} => {$valor} "; 
  }

  break - Finaliza um execução atual
  continue - 
  return - retorna para a execução 
*/