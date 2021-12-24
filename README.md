# Desafio programação - para vaga de programador

Por favor leiam este documento do começo ao fim, com muita atenção.
O intuito deste documento é exibir aquilo que é a documentação da API(Sistema).


# Pré-requisitos
1. Ter instalado o banco de MYSQL na sua máquina
2. Ter instalado uma versão estável do php (recomendável php7.3/php7.4)
3. Ter instalado o composer em sua máquina
4.  Ter instalado o git em sua máquina

# Instruções de configuração
Após fazer o clone do projecto segiur os seguintes comandos:

1. Abrir um terminal do directório do projecto (preferencial utilizar o terminal do vscode)
2. Executar o comando: composer update
3. Copiar o arquivo .env.example e salvar com o nome .env
4. Abrir o arquivo .env e editar os seguintes campos com os respectivos dados:
    4.1. DB_DATABASE=cnab
    4.2. DB_USERNAME=<seu nome de utilizador do banco de dados mysql>
    4.3. DB_PASSWORD=<sua palavra passe do banco de dados mysql/ caso não tenha mantenha em branco>
5. criar um banco de dados com o nome: cnab
6. Executar no terminal ainda o comando: php artisan key:generate
7. Executar no terminal ainda o comando:  php artisan migrate --seed
8. Após o término do comando anterior executar o comando para inicializar o servidor: php artisan serve
9. Após o comando anterior abrir no navegador o endereço de inicialização mostrado que por padrão é: http://localhost:8000  ****(http://127.0.0.1:8000/)
10. Inicair sessão utilizando as credenciasi:
    Email: geral@kaila.co.ao
    Senha: 12345678

# Utilização do sistema

    
    # CADASTRO DE TRANSAÇÕES
    
    1. Clicar no menu transações
    2. Clicar no submenu cadastrar transações
    3. Fazer o upload do arquivo de transações, sendo aceites neste caso, arquivos (.txt,.csv,.xlsx) seguindo restritamente os modelos encontrados nos arquivos: CNAB - Copia.xlsx; CNAB.txt; CNAB.csv
    4. Clixar em cadastrar
    
    
    # VIZUALIZAÇÃO DE TRANSAÇÕES
    1. Clicar no menu transações
    2. Clicar no submenu lista de transações
    
       
    # EDIÇÃO DE TRANSAÇÕES
    1. Clicar no menu transações
    2. Clicar no submenu lista de transações
    3.Na Transação pretendida clicar no ícone de acções na última coluna e selecionar a opção editar
    4. Preencher o formulário
    5. Clicar em Confirmar alterações
    
    
    # CADASTRO DE LOJAS
    
    1. Clicar no menu Lojas
    2. Clicar no submenu cadastrar Lojas
    3. Preencher devidamente o formulário
    4. Clicar em cadastrar
    
    
    # VIZUALIZAÇÃO DE LOJAS
    1. Clicar no menu Lojas
    2. Clicar no submenu lista de Lojas
    
       
    # EDIÇÃO DE LOJAS
    1. Clicar no menu Lojas
    2. Clicar no submenu lista de transações
    3. Na Loja pretendida clicar no ícone de acções na última coluna e selecionar a opção editar
    4. Preencher o formulário
    5. Clicar em Confirmar alterações
    

# Documentação do CNAB.xlsx
    
   **Deve conter os cabeçalhos na primeira fila como exemplificado à seguir**

| tipo | data | valor | bi | cartao | hora | dono_loja | nome_loja
| --- | ---  | ---  | ---  | ---  | ---  | ---  | --- 
| 1 | 2021-12-24 | 10000 | 000000000LA010 | 12345678901234 | 11:21:00 | Dono da loja | Kayla System Solutions

# Documentação sobre os tipos das transações

| Tipo | Descrição | Natureza | Sinal |
| ---- | -------- | --------- | ----- |
| 1 | Débito | Entrada | + |
| 2 | Boleto | Saída | - |
| 3 | Financiamento | Saída | - |
| 4 | Crédito | Entrada | + |
| 5 | Recebimento Empréstimo | Entrada | + |
| 6 | Vendas | Entrada | + |
| 7 | Recebimento TED | Entrada | + |
| 8 | Recebimento DOC | Entrada | + |
| 9 | Aluguel | Saída | - |


 # Documentação do CNAB.csv e CNAB.txt
   **Não deve conter os cabeçalhos na primeira fila como exemplificado à seguir**
    
    
    3;2019-03-01;0000014200;096206760LA017;475300003153;15:34:53;JOÃO MACEDO;BAR DO JOÃO       
    5;2019-03-01;0000013200;556418151UE063;312300007687;14:56:07;MARIA JOSEFINA;LOJA DO Ó - MATRIZ
    3;2019-03-01;0000012200;845152543BE073;677700001313;17:27:12;MARCOS PEREIRA ;MERCADO DA AVENIDA
    2;2019-03-01;0000011200;096206760LA017;364800000099;23:42:34;JOÃO MACEDO ;BAR DO JOÃO       
    1;2019-03-01;0000015200;096206760LA017;123400007890;23:30:00;JOÃO MACEDO;BAR DO JOÃO       
    2;2019-03-01;0000010700;845152543BE073;872300009987;12:33:33;MARCOS PEREIRA;MERCADO DA AVENIDA
    2;2019-03-01;0000050200;845152543BE073;847300001231;23:12:33;MARCOS PEREIRA;MERCADO DA AVENIDA
    3;2019-03-01;0000060200;232702987ZR056;677700001313;17:27:12;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    1;2019-03-01;0000020000;556418151UE063;123400003324;090002;MARIA JOSEFINA;LOJA DO Ó - MATRIZ
    5;2019-03-01;0000080200;845152543BE073;312300007687;145607;MARCOS PEREIRA;MERCADO DA AVENIDA
    2;2019-03-01;0000010200;232702987ZR056;847300001231;23:12:33;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    3;2019-03-01;0000610200;232702987ZR056;677700001313;17:27:12;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    4;2019-03-01;0000015232;556418151UE063;123400006678;10:00:00;MARIA JOSEFINA;LOJA DO Ó - FILIAL
    8;2019-03-01;0000010203;845152543BE073;234400001222;12:32:22;MARCOS PEREIRA;MERCADO DA AVENIDA
    3;2019-03-01;0000010300;232702987ZR056;677700001313;17:27:12;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    9;2019-03-01;0000010200;556418151UE063;622800009090;00:00:00;MARIA JOSEFINA;LOJA DO Ó - MATRIZ
    4;2019-03-01;0000050617;845152543BE073;123400002231;10:00:00;MARCOS PEREIRA;MERCADO DA AVENIDA
    2;2019-03-01;0000010900;232702987ZR056;872300009987;12:33:33;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    8;2019-03-01;0000000200;845152543BE073;234400001222;12:32:22;MARCOS PEREIRA;MERCADO DA AVENIDA
    2;2019-03-01;0000000500;232702987ZR056;767700008778;14:18:08;JOSÉ COSTA;MERCEARIA 3 IRMÃOS
    3;2019-03-01;0000019200;845152543BE073;677700001313;17:27:12;MARCOS PEREIRA;MERCADO DA AVENIDA
    
    
    
# Referência

Este desafio foi baseado neste outro desafio: ByCodersTec/desafio-dev

---

