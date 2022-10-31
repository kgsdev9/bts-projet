<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}



#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body style="text-transform: capitalize;"  id="#body">

<h1 >INFORMATIONS SUR LES CANDIDATURES  </h1>

<table id="customers">
  <tr>
    <th>Nom et Prenom</th>
    <th>Telephone</th>
    <th>Nationalite</th>
    <th>Statut</th>
    <th>Matricule</th>
    <th>ID Permanent</th>
    <th>Etat</th>
    <th>Date Soumission</th>
  </tr>

  <?php $__currentLoopData = $candidature; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($c->nom); ?>  <?php echo e($c->prenom); ?>  </td>
    <td><?php echo e($c->telephone_1); ?></td>
    <td><?php echo e($c->nationnalite); ?></td>
     <td><?php echo e($c->statut); ?></td>
     <td><?php echo e($c->matricule); ?></td>
     <td><?php echo e($c->id_permanent); ?></td>
    <td>
        <?php if($c->etat=="encours"): ?>
        encours
        <?php elseif($c->etat=="rejet"): ?>
        refusée
        <?php elseif($c->etat=="valide"): ?>
        validée
        <?php endif; ?>
    </td>

    <td><?php echo e($c->created_at); ?></td>
  </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>

</body>
</html>
<?php /**PATH C:\Users\bts\resources\views/export/candidature/pdfrender.blade.php ENDPATH**/ ?>