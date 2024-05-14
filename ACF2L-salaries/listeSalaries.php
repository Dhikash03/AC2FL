<?php
  include "../includes/config.php";
  require_once('header.html');
  include "fonctions.php";

  $req1 = "SELECT * FROM salaries ;";
  $result1 = mysqli_query($conn,$req1) or die (mysqli_error($conn));
?>
<div class="container my-5">
<table class="table table-hover">
<th>id</th>
<th>nom</th>
<th>prenom</th>
<th>date-naissance</th>
<th>date-embauche</th>
<th>salaire</th>
<th>service</th>
<?php foreach ($listeSalaries as $leSalarie): ?>
<tr>
<td><?php echo $leSalarie['idsalaries']; ?></td>
<td><?php echo $leSalarie['nom']; ?></td>
<td><?php echo $leSalarie['prenom']; ?></td>
<td><?php echo $leSalarie['date_naissance']; ?></td>
<td><?php echo $leSalarie['date_embauche']; ?></td>
<td><?php echo $leSalarie['salaire']; ?></td>
<td><?php echo $leSalarie['service']; ?></td>
</tr>
<?php endforeach; ?>
</table>
<p>nombre de salariés :<?php echo $nbSalaries ; ?></p>
<p>Salaire moyen :<?php echo $NbSalaireMoyen ; ?></p>

</div>
<?php require_once('footer.html'); ?>