une requête permettant de récupérer le nom des
salles et le nom de leur étage.

mysql> CREATE TABLE etage (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> superficie INT
    -> );
Query OK, 0 rows affected (0,08 sec)

mysql> CREATE TABLE salles (
    -> id INT AUTO_INCREMENT PRIMARY KEY,
    -> nom VARCHAR(255),
    -> numero INT,
    -> capacite INT
    -> );


SELECT * FROM salles 
JOIN etage 
ON salles. id_etage = etage.id;

