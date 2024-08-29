# curso_php

## Aviso importante: short tags
Fala aí programador e programadora, beleza?

Utilizamos um recurso chamado short tags, exemplo:

```<?= $nome ?>```

É uma forma interessante de imprimir dados pois há um echo implícito, deixando a parte do front-end onde mistura-se o HTML e o PHP mais legível.

Porém nas versões mais recentes do PHP o uso vem sendo desencorajado, e provavelmente o recurso será removido.

A boa notícia é que para resolver o problema é muito fácil!

Sempre que você se deparar com um erro, referente as short tags, utilize a seguinte sintaxe:

```<?php echo $nome; ?>``` 

É equivalente ao primeiro exemplo exibido nesta explicação, só que sem as short tags!

Temos aqui que utilizar o echo para garantir a impressão dos valores, e consequentemente o HTML acaba ficando maior, porém adequado as 'novas regras' do PHP

# Operadores lógicos

- Com operadores lógicos podemos`encadear várias comparações`;

- Operador AND: `&&`
- Operador OR: `||`
- Operador NOT: `!`

# Indicações de Livros

- Use A Cabeça! PHP e MySQL

- Desenvolvendo Websites com PHP