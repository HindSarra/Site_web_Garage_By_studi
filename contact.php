<?php require_once('./templates/header.php'); ?>

<main>
  <h1>Formulaire de contact</h1>
  <form class="row col-6 m-5">

    <div class="col">
      <label for="firstName" class="form-label">Prénom</label>

      <input type="text" class="form-control" placeholder="Prénom" aria-label="First name">
    </div>
    <div class="col">
      <label for="lastName" class="form-label">Nom de famille</label>

      <input type="text" class="form-control" placeholder="Nom de famille" aria-label="Last name">
    </div>

    <div class="col-md-12 my-2">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>

    <div class="col-12 my-2">
      <label for="number" class="form-label">Numéro</label>
      <input type="text" class="form-control" id="number" placeholder="0660.66.66.66">
    </div>

    <div class="col-md-12 my-2">
      <label for="" class="form-label">categories
      </label>
      <select id="inputcar" class="form-select">
        <option selected="selected">Selectionner un model </option>
        <option>Berline</option>
        <option>Break</option>
        <option>Coupé</option>
        <option>Citadine</option>
        <option>SUV</option>


      </select>
    </div>
    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
    </div>

    <div class="col-12 my-2">
      <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
  </form>
</main>
<?php require_once('./templates/footer.php'); ?>