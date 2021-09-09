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
    <div class="d-flex justify-content-center">
    <button type="button" class="bg-primary text-white rounded-3 border-black fs-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Start spil
    </button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Start spil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-1">Dit navn:</p>
                    <input class="inputname mb-4" placeholder="Anders">
                    <p class="mb-1">Antal huller:</p>
                    <input class="inputholes mb-4" placeholder="5">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                    <button type="button" class="start btn btn-primary" data-bs-dismiss="modal">Start</button>
                </div>
            </div>
        </div>
    </div>

    <div class="makelist d-flex justify-content-center">
        <button class="bg-primary text-white rounded-3 border-black fs-3">tilføj hul</button>
    </div>

    <h1 class="text-center mb-4 pt-2 fw-bold">Golf score</h1>
    <h2 class="text-center mb-4 pt-2 fw-bold"><span class="name">Navn: </span></h2>
    <ul class="list d-flex flex-column list-inline"></ul>

    <h3 class="text-center">Din total score:</h3>
    <div class="inputfield d-flex justify-content-center">
        <input class="bg-secondary rounded-3 border-black text-center fs-3" type="text" id="total" value="0" disabled=""/>
    </div>

    <div class="reload d-flex justify-content-center text-decoration-none my-4">
        <button class="bg-lilla rounded-3 border-black fs-3">Start forfra</button>
    </div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="js/app.js"></script>
</body>
</html>


