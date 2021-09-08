<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    <title>Golf Score</title>
    <meta name="robots" content="All">
    <meta name="author" content="Søren Andersen">
    <meta name="copyright" content="Søren Andersen">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gul">
    <h1 class="text-center mb-4 pt-2 fw-bold">Golf score</h1>
    <p class="text-center mb-1 fs-5">Hul 1</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 2</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 3</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 4</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 5</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 6</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <p class="text-center mb-1 fs-5">Hul 7</p>
    <div class="inputfield d-flex justify-content-center mb-3">
        <button class="inputminus rounded-3 border-black bg-danger text-white text-center fs-3 me-3">-</button>
        <input class="score bg-secondary rounded-3 border-black text-center fs-3" type="text" name="input" value="0">
        <button class="inputplus bg-success rounded-3 border-black text-white text-center fs-3 ms-3">+</button>
    </div>
    <h3 class="text-center">Din total score:</h3>
    <div class="inputfield d-flex justify-content-center">
        <input class="bg-secondary rounded-3 border-black text-center fs-3" type="text" id="total" value="0" disabled=""/>
    </div>
    <a href="golfscore.php" class="d-flex justify-content-center text-decoration-none my-4">
        <button class="bg-lilla rounded-3 border-black fs-3">Start forfra</button>
    </a>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/app.js"></script>
</body>
</html>


