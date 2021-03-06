<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Booking</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding-left: 600px;">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="MODUL 2 CEKAS.php">Home</a>
              <a class="nav-link active" aria-current="page" href="#">Booking</a>
            </div>
          </div>
        </div>
      </nav>
      <div style="padding-top: 80px; padding-bottom: 20px;">
        <h5 style="text-align: center;background-color: black; color: white;">Reserve Your Venue, Now!</h5>
      </div>
      

      <div class="container" style="padding-top: 40px;">
        <div class="row">
            <div class="col" style="padding-top: 100px;">
                <center><img src="https://eventective-media.azureedge.net/1989569_lg.jpg" class="card-img-top" alt="room1"></center>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input class="form-control" type="text" value="Cekas_1202194107" aria-label="readonly input example" readonly>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Event Date</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="dd-mmm-yyyy">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="formGroupExampleInput2" placeholder="">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Duration (Hours)</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" min="1" max="5" placeholder="0">
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Building Type</label>
                    <select class="form-select" aria-label="Default select example">
                        <option value="1">Conrad Venue</option>
                        <option value="2">Flower Venue</option>
                        <option value="3">Small Venue</option>
                      </select>
                  </div>
                  <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
                  </div>
                  <div>
                    <label for="Service" class="form-label">Add Service(s)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Catering / $700
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Decoration / $450
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Sound System / $250
                        </label>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="button">Book</button>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <footer style="text-align: center; margin-top: 64px;">Dibuat oleh Muhammad Cekas Permana_1202194107</footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
