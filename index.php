<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Secondary School Registration Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="./main.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Registration For Secondary School</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Education</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Admissions
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Admission procedures</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Application for submission</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#">Tuition & Fees</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link">Education</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">
            <a class="nav-link" href="./form.php">Apply Now
            </a>
          </button>
        </form>
      </div>
    </div>
  </nav>

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="https://cdn.givingcompass.org/wp-content/uploads/2018/08/16104449/5-Ways-Black-Teachers-Benefit-Black-Students.jpg"
          class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="https://res.cloudinary.com/highereducation/image/upload/v1602208628/TheBestSchools.org/hero-images/scholarships-african-american-black-students-hero.jpg"
          class="d-block w-100" alt="..." />
      </div>
      <div class="carousel-item">
        <img src="https://www.openaccessgovernment.org/wp-content/uploads/2020/08/cover-edited.jpg"
          class="d-block w-100" alt="..." />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="row px-4 py-4 middle-container">
    <div class="card col" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Who We Are</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
      </div>
    </div>

    <div class="mx-4 card col" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Our Mission</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
      </div>
    </div>

    <div class="card col px-4" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Our Vision</h5>
        <p class="card-text">
          Some quick example text to build on the card title and make up the
          bulk of the card's content.
        </p>
      </div>
    </div>
  </div>

  <figure class="figure">
    <img src="https://d92mrp7hetgfk.cloudfront.net/images/sites/misc/Black-students-m/original.jpg"
      class="figure-img img-fluid rounded" alt="..." />
    <figcaption class="figure-caption text-end">
      A caption for the above image.
    </figcaption>
  </figure>

  <!-- FOOTER -->

  <footer class="bd-footer py-4 py-md-5 mt-5 bg-light">
    <div class="container py-4 py-md-5 px-4 px-md-3">
      <div class="row">
        <div class="col-lg-3 mb-3">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/"
            aria-label="Bootstrap">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="d-block me-2" viewBox="0 0 118 94"
              role="img">
              <title>logo</title>
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                fill="currentColor"></path>
            </svg>
            <span class="fs-5">School Portal</span>
          </a>
          <ul class="list-unstyled small text-muted">
            <li class="mb-2">
              Designed and built with all the love in the world by Me </a>
            </li>

          </ul>
        </div>
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Quick Menu</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">About</a></li>
            <li class="mb-2"><a href="/">Accreditations</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Admissions</h5>
          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="">Mission Driven Admission</a>
            </li>
            <li class="mb-2">
              <a href="/">Admission Procedures</a>
            </li>
            <li class="mb-2">
              <a href="/">Application for Admission</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Learning</h5>
          <ul class="list-unstyled">

            <li class="mb-2">
              <a href="/">Primary School</a>
            </li>
            <li class="mb-2">
              <a href="">Middle School</a>
            </li>
            <li class="mb-2">
              <a href="/">High School</a>
            </li>
            <li class="mb-2">
              <a href="/">University</a>
            </li>
            <li>
              <a href="./admin.php">Student List (Admin)</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
</body>

</html>
