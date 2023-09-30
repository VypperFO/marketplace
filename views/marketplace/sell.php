<?php $title = "Vendre"; ?>
<?php require __DIR__ . '/../templates/header.php'; ?>

<body>
  <div class="container">
    <h1>Publier un article a vendre</h1>
    <h2>Nom</h2>
    <input type="text" class="form-control">
    <h2>Description</h2>
    <textarea type="text" class="form-control"></textarea>
    <h2>Prix</h2>
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">CAD</span>
    </div>
    <p>Montant minimal de 2,00$ CA. Frais de 5% sur les ventes</p>

    <h2>Image</h2>
    <div class="mb-3">
      <input class="form-control" type="file" id="formFile">
      <label for="formFile" class="form-label">Image de type jpeg, jpg ou png. Image carré de 500x500 recommander</label>
    </div>
    <button class="btn btn-primary">Publier produit</button>
  </div>
</body>