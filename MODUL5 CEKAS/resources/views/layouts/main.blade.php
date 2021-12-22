<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <style>
        #footer {
            text-align: center;
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 8px;
            width: 100%;
            height: 40px;
        }
    </style>
    <title>{{ $title }}</title>
  </head>
  <body>
      <div class="container" style="margin-top: 12px; margin-bottom:42px">
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="/home" style="color: black; font-weight:{{ ($title === "Home") ? 'bold' : '' }}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/vaccine" style="color: black; font-weight:{{ ($title === "Vaccine") ? 'bold' : '' }}">VACCINE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/patient" style="color: black; font-weight:{{ ($title === "Patient") ? 'bold' : '' }}">PATIENT</a>
            </li>
        </ul>
      </div>
    
    @yield('content')

      <div id="footer">
        <a class="nav-link" data-bs-toggle="modal" href="#modalku" style="color:cadetblue">Made with <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-heart-fill" viewBox="0 0 16 16" style="color: dodgerblue">
            <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"/>
          </svg></span> Muhammad Cekas Permana - 1202194107</a>
      </div>
      <div class="modal" tabindex="-1" id="modalku">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Kesan Pesan Praktikum</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p><b>Kesan   :</b> Bagi saya sejauh ini praktikum WAD adalah praktikum paling sulit untuk saya kerjakan. Mungkin karena memang bukan minat saya di web, tapi sangat berkesan sekali. Tapi tetap saya kerjakan semaksimal mungkin. Terima kasih EAD Lab</p>
              <p><b>Pesan   :</b> Mungkin bisa dievaluasi dari hasil praktikum para praktikan dan tahun ini, dan semoga tahun depan bisa lebih baik lagi.</p>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>