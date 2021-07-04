<?php
  ob_start();

  session_start();
  if (isset($_SESSION['username'])) {

    $pageTitle = "Dashboard";
    require_once 'includes/templates/header.php';
    include 'init.php';
?>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top flex-md-nowrap shadow">
        <div class="container-fluid">
          <a class="navbar-brand ms-3" href="#">Q-Booking</a>
            <div class="d-flex me-3">
                <a class="btn btn-outline-light" href="logout.php">LogOut</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- Header -->
      <header class="header mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-10">
                        <h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                              </svg>
                             Dashboard <small>manage your site</small></h1>
                  </div>
                  <div class="col-md-2">
                    <div class="dropdown header-create">
                        <button class="btn  bg-light dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                          Create Content
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <li><a class="dropdown-item"  type="button" data-bs-toggle="modal" data-bs-target='#addMedical'> add Clincs</a></li>
                          <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target='#addMedical'> add Pharmacy</a></li>
                          <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target='#addMedical'> add Hospital</a></li>
                          <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target='#addRest'> add Coffe</a></li>
                          <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target='#addRest'> add Hospital</a></li>
                        </ul>
                      </div>
                  </div>
              </div>
          </div>
      </header>


      <!-- Contianer -->
      <div class="container-fluid">
            <div class="row">
                <!-- sidebar -->
                <div class="col-md-2 bg-dark d-none d-md-block sidebar"></div>
                    <div class="sidebar-left">
                        <ul class="nav flex-column sidebar-nav">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="index.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="clincs.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                  Clincs</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="pharmacy.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                  Pharmacy</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link disabled" href="hospital.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                  Hospital</a>
                            </li>
                              <li class="nav-item">
                                <a class="nav-link" href="coffee.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                    Coffee</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="resturant.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
                                    Resturant</a>
                              </li>
                          </ul>
                    </div>
            </div>
      </div>

      <!-- main -->
      <main role="main" class="container col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="text-capitalize">Walcome to our dashboard</h1>
        </div>
      </main>
      <!-- models -->
      <!-- add medical model -->
      <!-- Modal -->
        <div class="modal fade" id="addMedical" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
              <form action="row g-3">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add rest</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                        <div class="col-12">
                            <label for="formFile" class="form-label">add the picture</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <div class="col-12">
                            <label for="addMedicalName" class="form-label">Medical Name:</label>
                            <input type="text" class="form-control" id="addmedicalnaMe" plaNeholder="Ex: Al-Zhraa Hospital">
                        </div>

                        <div class="col-12">
                          <label for="inputAddress" class="form-label">Address</label>
                          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>



                          <div class="col-12">
                            <label for="addDescription" class="form-label">add discription</label>
                            <textarea name="editor1" class="form-control" id="addDescription" rows="3"></textarea>
                          </div>

                          <div class="col-12">
                            <label for="inputState" class="form-label">Type</label>
                            <select id="inputState" class="form-select">
                              <option selected>Hospital</option>
                              <option selected>Clincs</option>
                              <option selected>pharmacy</option>

                            </select>
                          </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
            </div>
        </div>
        <!-- add rest model -->
      <!-- Modal -->
      <div class="modal fade" id="addRest" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <form action="row g-3">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Rest</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="col-12">
                        <label for="formFileMultiple" class="form-label">add the picture and the menu</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>

                    <div class="col-12">
                        <label for="addMedicalName" class="form-label">Rest Name:</label>
                        <input type="text" class="form-control" id="addmedicalnaMe" plaNeholder="Ex: Al-Zhraa Hospital">
                    </div>

                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="col-12">
                        <label for="numberOfPeople" class="form-label">number of pepole:</label>
                        <input type="number" class="form-control" id="numberOfPeople" placeholder="1234">
                      </div>

                      <div class="col-12">
                        <label for="addDescription" class="form-label">add discription</label>
                        <textarea name="editor1" class="form-control" id="addDescription" rows="3"></textarea>
                      </div>
                      <div class="col-12">
                        <label for="inputState" class="form-label">Type</label>
                        <select id="inputState" class="form-select">
                          <option selected>Coffee</option>
                          <option selected>Resturant</option>

                        </select>
                      </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        </div>
        </div>
    </div>
        <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor1' );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?
    }else {

        header('location: index.php');
        exit();
    }

    ob_end_flush();
?>
