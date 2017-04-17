//Exporting a Database
mysqldump -u root -p --skip-extended-insert pasa > /path/to/the/destination/.sql

//Empty Database
mysqldump -u root -p --add-drop-table --no-data pasa | grep ^DROP | mysql -u root -p3239 pasa

//Importing a Database
mysql -u root -p3239 pasa < /path/of/the/source/.sql