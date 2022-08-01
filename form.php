<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Secondary School Registration Portal</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./form.css" />
  </head>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#/">Registration For Secondary School</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
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
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
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
      </div>
    </div>
  </nav>
  <div class="main-section">
    <div class="title-container">
      <h1>Application for Admission</h1>
    </div>
    <form method="POST" action="#" class="row g-3 form-container" id="app-form">
      <div class="col-md-6">
        <label for="inputName4" class="form-label">Name of the student</label>
        <input
          type="text"
          class="form-control"
          id="inputName4"
          name="stud-name"
        />
      </div>
      <div class="col-md-6">
        <label for="inputClass4" class="form-label">Class requested</label>
        <input
          type="text"
          class="form-control"
          id="inputClass4"
          name="requested-class"
        />
      </div>
      <div class="col-12">
        <label for="inputAddress" class="form-label">Address</label>
        <input
          type="text"
          class="form-control"
          id="inputAddress"
          placeholder="1234 Main St"
          name="address-1"
        />
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input
          type="text"
          class="form-control"
          id="inputAddress2"
          placeholder="Apartment, studio, or floor"
          name="address-2"
        />
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" id="inputCity" name="city" />
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select id="inputState" class="form-select" name="state">
          <option disabled>Choose...</option>
          <option value="kigali">Kigali</option>
          <option value="huye">Huye</option>
          <option value="nyanza">Nyanza</option>
        </select>
      </div>
      <div class="col-md-2">
        <label for="inputContactPerson" class="form-label">
          Name of contact person</label
        >
        <input
          type="text"
          class="form-control"
          id="inputContactPerson"
          name="contact-person"
        />
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="gridCheck" />
          <label class="form-check-label" for="gridCheck"> I accept </label>
        </div>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary" id="submit-btn">Submit</button>
      </div>
    </form>
  </div>
  <script src="javascript/form.js"></script>
</html>
