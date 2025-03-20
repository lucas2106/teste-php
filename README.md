Sobre o Projeto

Este projeto é uma aplicação web simples para gerenciamento de tarefas (To-Do List). Ele permite que os usuários adicionem, editem, excluam e alterem o status das tarefas (pendente/concluído).

 Tecnologias Utilizadas

PHP (Back-end e manipulação de dados)

MySQL (Banco de Dados para armazenar as tarefas)

HTML/CSS (Estrutura e Estilização da interface)

JavaScript (Melhorias na interação do usuário)

Apache (Servidor local para rodar o projeto)

 Configuração do Ambiente

Para rodar o projeto localmente, siga os passos abaixo:

1️⃣ Instalar Requisitos

Antes de começar, certifique-se de que você tem os seguintes requisitos instalados:

PHP 7.4 ou superior

MySQL 5.7 ou superior

Apache (Se estiver usando o XAMPP ou WAMP, ele já vem incluso)

Composer (Gerenciador de dependências do PHP, opcional caso precise instalar pacotes adicionais)

Caso não tenha, você pode instalar:

XAMPP (recomendado): https://www.apachefriends.org/pt_br/index.html

WAMP (alternativa ao XAMPP): https://www.wampserver.com/en/

2️⃣ Configurar o Banco de Dados

Acesse o phpMyAdmin (caso esteja usando XAMPP, vá para http://localhost/phpmyadmin/).

Crie um novo banco de dados chamado todo_list.

Importe o arquivo database.sql (caso esteja incluso no projeto) ou crie a seguinte estrutura manualmente:

3️⃣ Configurar a Conexão com o Banco de Dados

No arquivo config/db.php, configure a conexão com seu banco de dados:

Se sua senha do MySQL for diferente, altere o valor da variável $password.

4️⃣ Subir o Servidor Local

Se estiver usando o XAMPP:

Abra o painel do XAMPP e inicie o Apache e o MySQL.

Acesse http://localhost/todo-list no navegador.

Se estiver usando o WAMP:

Inicie o WAMP Server.

Acesse http://localhost/todo-list no navegador.

Se quiser rodar diretamente pelo PHP (sem Apache):

E acesse http://localhost:8000 no navegador.

 Funcionalidades do Projeto

✅ Adicionar tarefas com título e descrição
✅ Listar todas as tarefas cadastradas
✅ Editar uma tarefa existente
✅ Excluir uma tarefa
✅ Filtrar tarefas por status (Pendente/Concluído)
✅ Marcar tarefas como concluídas ou pendentes
