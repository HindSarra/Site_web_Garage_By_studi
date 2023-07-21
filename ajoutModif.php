<?php require_once('./templates/header.php'); ?>

<h1>Ajouter une voiture </h1>

<!-- <div class="alert alert-success">
</div>

<div class="alert alert-danger">

</div> -->


<form method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label"">Titre</label>
        <input type=" text" name="title" id="title" class="form-control" value="">
  </div>
  <div class="mb-3">
    <label for="marque" class="form-label">Marque</label>
    <input name="marque" id="description" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="prix" class="form-label">Prix</label>
    <input name="prix" id="prix" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="kilometrage" class="form-label">Kilométrage</label>
    <input name="kilometrage" id="kilometrage" class="form-control"></input>
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Catégorie</label>
    <select name="category" id="category" class="form-select">
    <option selected="selected">Selectionner un model </option>
        <option>Berline</option>
        <option>Break</option>
        <option>Coupé</option>
        <option>Citadine</option>
        <option>SUV</option>


    </select>
  </div>
  <div class="mb-3">
    <label for="file" class="form-label">Image</label>
    <input type="file" name="file" id="file">
  </div>
  <input type="submit" value="Enregistrer" name="saveRecipe" class="btn btn-primary">


</form>
<?php require_once('./templates/footer.php'); ?>