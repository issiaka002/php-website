 <?php
require ('actions/database.php');

if(isset($_POST['validate'])){
	if(!empty($_POST['pseudo']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['password1']) && !empty($_POST['password2'])){

		$user_pseudo = htmlspecialchars($_POST['pseudo']);
		$user_firstname = htmlspecialchars($_POST['firstname']);
		$user_lastname = htmlspecialchars($_POST['lastname']);
		$user_pwd1 = htmlspecialchars($_POST['password1']);
		$user_pwd2 = htmlspecialchars($_POST['password2']);
		$name = $user_lastname. " ".$user_firstname;

		if($user_pwd2 == $user_pwd1){
			$user_pwd = password_hash($user_pwd2, PASSWORD_DEFAULT);
			$user_exit = $bdd->prepare("SELECT pseudo FROM forum_member WHERE pseudo = ?");
			$user_exit->execute(array($user_pseudo));
			if($user_exit->rowCount()==0){
				$insert_bdd = $bdd->prepare("INSERT INTO users(pseudo, name, password) VALUES(?, ?, ?)");
				$insert_bdd->execute(arrray($user_pseudo, $name, $user_pwd));
				
				

			}else{
				$message="l'utilisateur exite déjà sur le site";
			}


		}else{
			$message = "les mots de passe doivent etre identique ...";
		}

	}else{
		$message = 'veullez remplir tous les champs...';
	}
}
