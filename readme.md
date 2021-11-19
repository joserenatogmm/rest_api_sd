# API REST - Sistemas Distribuidos

### Alunos
 - Everton Martins dos Santos (57765-0)
 - Gabriel Fernando de Carvalho Silva (58196-8)
 - Jos� Renato Garcia Martinez Martins (57928-9)
 - Lucas Felipe de Oliveira Dias (58138-0)

### Requisitos M�nimos
 - Docker instalado na m�quina

### Instru��es de Set-up
 - Clonar o reposit�rio em sua m�quina
 - Na raiz do reposit�rio executar o comando `docker-compose up -d`
 - Ap�s realizar o build dos containers, acesse o terminal do container `api_php`, com o comando `docker exec -it api_php /bin/bash`
 - Ap�s entrar no terminal, execute o arquivo init.sh para gerar a estrutura do banco e popular com alguns dados de exemplo, com o comando `./init.sh`
 - Pronto, j� pode usar a collection contida na raiz do reposit�rio para realizar os testes.