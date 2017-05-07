"# SendMail".
Une application pour envoyer des mails automatiquement aux internautes avec PHP.
Pour que cette application fonctionne correctement il faut: 
Télécahrger le sendmail.zip à partir de : https://www.glob.com.au/sendmail/.
Extraire le fichier et copier le dossier sendmail dans le dossier wamp.
Configurer le sendmail.ini comme suit:
smtp_server=smtp.mail.yahoo.fr.
smtp_port=587.
default_domain=mail.yahoo.fr.
auth_username=****votremail****@yahoo.fr.
auth_password=****votremdp****.
force_sender=****votremail****@yahoo.fr.
Configurer le sendmail_path du php.ini du Wamp Server comme suit : sendmail_path="****\sendmail\sendmail.exe".
