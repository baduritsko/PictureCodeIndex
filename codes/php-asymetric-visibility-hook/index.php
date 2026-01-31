<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		class Etudiant {
			public private(set) String $nom;
			public private(set) String $prenom;

			public function __construct($prenom, $nom) {
				$this->nom = $nom;
				$this->prenom = $prenom;
			}

			public String $nomComplet {
				get => $this->prenom." ".$this->nom;
				set {
					[$this->prenom, $this->nom] = explode(' ', $value, 2);
				}
			}
		}
		$u = new Etudiant("Paul", "Personne");
		echo "<br>".$u->nomComplet;
		echo "<br>".$u->nom;
		/* $u->nom = "Nobody"; erreur */
		$u->nomComplet = "Cindy Nothing";
		echo "<br>".$u->nomComplet;

	?>
	<br>
	<img src="Screenshot_20250613_165232.jpg" alt="source" width="300">
	<br>
	<img src="IMG_1728397728562.jpg" alt="source" width="300">
</body>
</html>