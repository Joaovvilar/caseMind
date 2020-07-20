# caseMind
Case para o processo seletivo da Mind

Para o desenvolvimento deste case, foram utilizados principalmete PHP, CSS, MySQL, HTML e o framework CodeIgniter.
Dos requisitos solicitados, não foram utilizados NodeJS nem React, pois não possuo conhecimento sobre eles e não possuí tempo hábil para aprendê-los até o fim do desenvolvimento. Além disso não utilizei fotos nos usuários no código, pois após a implementação, o design ficou desagradável e pelo bem da UX/UI achei melhor retirar.

Para utilizar o site:
1) Deve-se primeiro carregar o controlador de login, 'loginController'
2) Clicar no botão de registro para registrar-se
3) Fazer login com o CPF ou e-mail utilizado

No arquivo .sql, é possível visualizar na tabela 'users' que  há 3 registros:
ID = 1, sendo este o administrador com senha "admin"
ID = 2, sendo este o usuário comum com senha "comum"
ID = 3, sendo este um usuário que está sem acesso (off), com senha off

É possível entrar tanto com o CPF e com o email dos arquivos, a senha é informada pois está encriptada.
/ ---------------------------------------------------------- * ---------------------------------------------------------------------\
Os arquivos utilizados para o desenvolvimento deste case serão abordados brevemente:

*) Cadastro: cadastroController, cadastroModel, cadastroView, negadoView e sucesso( que não foi necessário ).
**) Login: loginController, loginModel e loginView
***) Dashboard: dashboardController, dashboardModel, comumView, dashboardView e editarView

Os arquivos constam com sua documentação dentro do código, para o programador ter compreensão do funcionamento de cada função.
