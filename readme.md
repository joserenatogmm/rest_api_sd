# API REST - Sistemas Distribuidos

### Alunos
 - Everton Martins dos Santos (57765-0)
 - Gabriel Fernando de Carvalho Silva (58196-8)
 - José Renato Garcia Martinez Martins (57928-9)
 - Lucas Felipe de Oliveira Dias (58138-0)

### Requisitos Mínimos
 - Docker instalado na máquina

### Instruções de Set-up
 - Clonar o repositório em sua máquina
 - Na raiz do repositório executar o comando `docker-compose up -d`
 - Após realizar o build dos containers, acesse o terminal do container `api_php`, com o comando `docker exec -it api_php /bin/bash`
 - Após entrar no terminal, execute o arquivo init.sh para gerar a estrutura do banco e popular com alguns dados de exemplo, com o comando `./init.sh`
 - Pronto, já pode usar a collection contida na raiz do repositório para realizar os testes.