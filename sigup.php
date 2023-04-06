 <?php 
include 'actions/sigupAction.php';?>

 <!DOCTYPE html>
 <html lang="en">
 <?php include 'includes/head.php';?> 

 <body>
 	<br>
 	<div class="general">
 		<p class="message"> <?php if(isset($message)){echo $message;}?> </p>
 		<form method="POST" action="" class="container">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" class="form-control" name="lastname">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirmer mot de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password2">
  </div>
  
  <button type="submit" class="btn btn-primary" name="validate">s'inscrire</button>
</form>
 	</div>
 </body>
 </html>