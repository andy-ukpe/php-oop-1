<!-- Crea un diagramma per una tabella di db che
rappresenti gli Users di un blog.
Crea una classe User che rappresenti quella
tabella, e usala per stampare in pagina i dati di alcuni Users. -->
<!-- @here Ciao ragazzi per l'esercizio del pomeriggio utilizziamo la stessa repo di ieri.
Riprendete l'esercizio di ieri e aggiungete una o più classi che estendono
user e che abbiano delle piccole funzionalità in più (ad esempio employee o administrator come abbiamo fatto stamattina).
L'obbiettivo non è quello di creare classi enormi con decine di metodi, ma
anche piccole e semplici ma che ci permettano di capire come funzionano ereditarietà e visibilità.
Buon pranzo a tutti! -->
<?php
  require_once(__DIR__ . '/User.php');

  $Carlo = new User(Carlo, Rossi);
  $Carlo->name = 'Carlo';
  $Carlo->cognome = 'Rossi';
  $Carlo->email = 'pippo@mail.it';
  $Carlo->eta = 40;
  echo  'Utente: ' . $Carlo->getFullName() . '<br>';

  $Giuseppe = new User(Giuseppe, Verdi);
  $Giuseppe->name = 'Giuseppe';
  $Giuseppe->cognome = 'Verdi';
  $Giuseppe->email = 'Giuseppe@mail.it';
  $Giuseppe->eta = 40;
  echo  'Utente: ' . $Giuseppe->getFullName() . '<br>';
?>
