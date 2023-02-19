<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fake Person Generator</title>
    <script src="app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="bg-dark bg-lighten-xl bg-opacity-60">
    <div class="container border border-success p-2 border-danger border-3 rounded-top mt-2 mb-5">
        <header class="p-3 mb-2 bg-danger text-white m-0 p-0">
            <span class="fs-1 fw-bold bg-dark p-2 rounded-4">FAKE</span> <span class="fw-bold text-black fs-4 fw-normal">Person Generator</span>
        </header>
        <main class="p-3 mb-2 bg-light text-dark">
            <div class="d-grid gap-2 pb-5">
                <button type="button" class="border-1 btn btn-outline-dark btn-lg">CLICK HERE TO CREATE A PERSON</button>
            </div>
                <form action="">
                    <table class="table table-borderless table-striped table-dark table-hover table-sm align-middle">
                        <tbody>
                            <tr>
                                <td><label for="ssn" class="col-sm-2 col-form-label">SSN</label></td>
                                <td><input type="text" class="form-control border-0 opacity-70" placeholder="SSN" aria-label="ssn" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="name" class="col-sm-2 col-form-label">Name</label></td>
                                <td><input type="text" class="form-control border-0 opacity-70" placeholder="Name" aria-label="name" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="height" class="col-sm-2 col-form-label">Height</label></td>
                                <td><input type="text" class="form-control border-0 opacity-70" placeholder="Height" aria-label="height" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="weight" class="col-sm-2 col-form-label">Weight</label></td>
                                <td><input type="text" class="form-control border-0 opacity-70" placeholder="Weight" aria-label="weight" disabled></td>
                            </tr>
                            <tr>
                                <td><label for="address" class="col-sm-2 col-form-label">Address</label></td>
                                <td><input type="text" class="form-control border-0 opacity-70" placeholder="Address" aria-label="address" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
                <div class="d-flex justify-content-center">
                <button type="button" class="border-0 btn btn-warning btn-outline">Export JSON</button>
                </div>
        </main>
        <footer>
            <p class="text-white text-center m-0">Copyright &copy <script>document.write(new Date().getFullYear());</script></p>
        </footer>
    </div>
</body>
</html>