<?php
class Messages{

	public $auteur;
	public $email;
	public $sujet;
	public $contenu;

	public function getAuteur(){
		return $this->auteur;
	}

	public function setAuteur($auteur){
		$this->auteur = $auteur;

		return $this;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->Email = $email;

		return $this;
	}

	public function getSujet(){
		return $this->Sujet;
	}

	public function setSujet($sujet){
		$this->Sujet = $sujet;

		return $this;
	}

	public function getContenu(){
		return $this->Contenu;
	}

	public function setContenu($contenu){
		$this->Contenu = $contenu;

		return $this;
	}

}

if (isset($_POST['submit'])) {
	$auteur = $_POST['auteur'];
	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$contenu = $_POST['contenu'];

	$livres = new Messages();
	$livres->setAuteur($auteur);
	$livres->setEmail($email);
	$livres->setSujet($sujet);
	$livres->setContenu($contenu);

	echo "<h4> Nouvelle instance </h4>";
    print_r ($livres);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<form method="post" action="">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Auteur</label>
	    <input type="text" class="form-control" name="auteur">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Email</label>
	    <input type="email" class="form-control" name="email">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Sujet</label>
	    <input type="text" class="form-control" name="sujet">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Contenu</label>
	    <input type="text" class="form-control" name="contenu">
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	</div>
</body>
</html>