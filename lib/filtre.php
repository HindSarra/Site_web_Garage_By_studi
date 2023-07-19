<link rel="stylesheet" href="assets/css/filter.css">
<div class="contenair">
  <form action="voitures.php" method="post">
    <div class="row">
      <div class="col-4 md-5">
        <select id="inputcar" class="form-select">
          <option selected="selected">Model de voiture </option>
          <option>Berline</option>
          <option>Break</option>
          <option>Coupé</option>
          <option>Citadine</option>
          <option>SUV</option>
        </select>
      </div>
      <div class="col-4 md-5">
        <select id="inputcar" class="form-select">
          <option selected="selected">Type de carburant </option>
          <option>Essence</option>
          <option>..</option>
          <option>..</option>
          <option></option>
          <option></option>
        </select>
      </div>
      <div class="col-4 md-5">
        <select id="inputcar" class="form-select">
          <option selected="selected">kilometrage </option>
          <option>entre et </option>
          <option>entre et </option>
          <option>entre et </option>
          <option>..</option>
          <option>..</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-4 md-5">
        <select id="inputcar" class="form-select">
          <option selected="selected">Année </option>
          <option>entre et </option>
          <option>entre et </option>
          <option>entre et </option>
          <option>..</option>
          <option>..</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-12 my-2">
        <button type="submit" class="btn btn-primary">Filter</button>
      </div>
    </div>
  </form>
</div>