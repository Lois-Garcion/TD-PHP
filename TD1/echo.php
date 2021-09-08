<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
          // Ceci est un commentaire PHP sur une ligne
          /* Ceci est le 2ème type de commentaire PHP
          sur plusieurs lignes */
           
          // On met la chaine de caractères "hello" dans la variable 'texte'
          // Les noms de variable commencent par $ en PHP
          $texte = "hello wosddrld !";

          // On écrit le contenu de la variable 'texte' dans la page Web
          echo $texte;
          echo "<br>";

          //exo4


          $prenom = "Marc";      
          echo "<br>";
          echo "Bonjour " . $prenom;
          echo "<br>";
          echo "Bonjour $prenom";
          echo "<br>"; 
          echo 'Bonjour $prenom';
          echo "<br>";
          echo $prenom;
          echo "<br>"; 
          echo "$prenom";   


          //exo 5            

          $marque = "Renault";
          $couleur = "bleu";
          $immatriculation = "256AB34";
          echo "<p> Voiture $immatriculation de marque $marque (couleur $couleur) </p>";

          $voiture = array(
            'Marque' => 'Tesla',
            'Immatriculation'    => 'SP33D',
            'Couleur' => 'Red');

          $voiture1 = array(
            'Marque' => 'citroene C4',
            'Immatriculation'    => 'ougqhnisughs',
            'Couleur' => 'orange');

          $voiture2 = array(
            'Marque' => 'buggy',
            'Immatriculation'    => 'salam',
            'Couleur' => 'violet');

          $voitures = array(
            '0' => $voiture,
            '1' => $voiture1,
            '2' => $voiture2,
          );

          echo "<pre>";
          var_dump($voiture);
          echo "</pre>";

          echo "<br>";
          foreach ($voiture as $cle => $valeur){
            echo "$cle : $valeur\n";
          };

          echo "<p>les voitures sont :</p>";
        
          for ($i = 0; $i < count($voitures); $i++) {
            echo "<p>".$voitures[$i]["Marque"]."</p>";
          };
          /*echo "<pre>";
          var_dump($voitures);
          echo "</pre>";
          */

        ?>
    </body>
</html> 