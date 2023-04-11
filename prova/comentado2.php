<?php
// loop infinito
while (true) {
  // lê uma linha do console e remove os espaços em branco do início e do fim
  $input = trim(fgets(STDIN));

  // verifica se a linha está vazia e sai do loop se estiver
  if (!$input) break;

  // divide a linha em três valores separados por espaços em branco e atribui cada valor a uma variável
  list($N, $L, $C) = explode(" ", $input);

  // lê uma linha do console, remove os espaços em branco do início e do fim e divide a linha em palavras separadas por espaços em branco
  $words = explode(" ", trim(fgets(STDIN)));

  // inicializa as variáveis para o número da página, o número da linha e a contagem de caracteres
  $page = 1; 
  $line = 1; 
  $charCount = 0; 

  // itera sobre cada palavra
  foreach ($words as $word) {
    // calcula o comprimento da palavra
    $wordLength = strlen($word);

    // verifica se a palavra pode ser adicionada na linha atual
    if ($charCount + $wordLength + ($charCount > 0 ? 1 : 0) > $C) {
      // se não puder, adiciona a palavra na próxima linha e reinicia a contagem de caracteres
      $line++;
      $charCount = 0;
    }

    // verifica se a linha atual é maior que o número máximo de linhas por página
    if ($line > $L) {
      // se for, adiciona a próxima página e reinicia o número da linha
      $page++;
      $line = 1;
    }

    // adiciona o comprimento da palavra e um espaço em branco (se não for a primeira palavra da linha) na contagem de caracteres
    $charCount += $wordLength + ($charCount > 0 ? 1 : 0);
  }

  // imprime o número da página atual
  echo $page . "\n";
}
?>
