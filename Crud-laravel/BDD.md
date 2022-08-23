<h1 align=center>BDD</h1>

<h2>Home</h2>

- Dado que acesso a página home
- Quando seleciono "Create note"
- Então devo ser redirecionado para a página "create", onde poderei criar novas notas.

- Quando seleciono "My notes"
- Então devo ser redirecionado para a págiona "notes", onde poderei ler, editar ou deletar minhas notas.

<h2>Create note</h2>

- Dado que acesso a página "Create note"
- Quando escrevo uma anotação e a salvo
- Então devo ser redirecionado para a página "notes", onde verei todas as minhas notas.

- Dado que deixo o campo "conteúdo" em branco
- Quando salvo minha nota
- Então devo receber o alerta "Por favor digite sua anotação".

<h2>Notes</h2>

- Dado que acesso a página "notes"

- Quando seleciono o título da minha nota
- Então sou redirecionado para a página de leitura, onde poderei ler o conteúdo da nota

- Quando seleciono "edit"
- Então devo ser redirecionado para a página de edição da nota.

- Quando seleciono "Delet"
- Então minha nota é apagada.

    <h3>Edit</h3>

    - Dado que sou redirecionado para a página de edição
    - Quando salvo minha alteração
    - Então sou redirecionado para a página "notes" novamente.



