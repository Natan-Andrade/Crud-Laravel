<h1 align=center>BDD</h1>

<h2>Home</h2>

- Cenário: "Criar Nota"
    - Dado que acesso a página home
    - E seleciono "Criar Nota"
    - Então devo ser redirecionado para a página "Criar nota", onde poderei criar novas notas.


- Cenário: "Visualizar anotações"
    - Dado que acesso a página home
    - E seleciono "Minhas Anotações"
    - Então devo ser redirecionado para a página "Notas", onde poderei ler, editar ou Deletar minhas notas.

<h2>Criar Nota</h2>

- Cenário: "Nota criada com sucesso"
    - Dado que acesso a página "Criar nota"
    - Quando escrevo uma anotação e a salvo
    - Então devo ser redirecionado para a página "Notas", onde verei todas as minhas notas.

- Cenário: "Campos em branco"
    - Dado que deixo o campo "conteúdo" em branco
    - Quando salvo minha nota
    - Então devo receber o alerta "Preencha este campo".

<h2>Notas</h2>

- Dado que acesso a página "Notas"

- Cenário: "Ler anotação"
    - Quando seleciono o título (Ou descrição) da minha nota
    - Então sou redirecionado para a página de leitura, onde poderei ler o conteúdo da nota e sua data de criação.

- Cenário: "Editar anotação"
    - Dado que seleciono "editar"
    - E sou redirecionado para a página de edição
    - Quando salvo uma alteração
    - Então devo ser redirecionado para a página notas com a minha nota atualizada.

- Cenário: "Deletar anotação"
    - Quando seleciono "Deletar"
    - Então minha nota é apagada.
