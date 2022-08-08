<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/logo.ico" type="image/gif" />
  <meta name="keywords" content="Tripura Foundation Jangatta Kolar " />
  <meta name="description" content="OM SRI MATHA MAHAKALI TRUST
" />
  <meta name="author" content="PK | Web Devloper" />

  <title>Tripura foundation | Kolar</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="manifest" href="manifest.webmanifest">
<style>
  .add-button {
  position: absolute;
  top: 1px;
  left: 1px;
}
</style>
<script>
  let deferredPrompt;
const addBtn = document.querySelector('.add-button');
// addBtn.style.display = 'none';
window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn.style.display = 'block';

  addBtn.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    addBtn.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('User accepted the A2HS prompt');
        } else {
          console.log('User dismissed the A2HS prompt');
        }
        deferredPrompt = null;
      });
  });
});

</script>
<style>

</style>
<script src="./js/panchang.js"></script>
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="./">
            <span>
          Tripura Foundation
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="./index.php?page=home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php?page=about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php?page=gallery">Images</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php?page=donate">Donate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php?page=volunteer">Volunteer's</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php?page=contact">Contact Us</a>
              </li>
             
              <!-- <button class="add-button">Add to home screen</button> -->
            </ul>
            <!-- <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from> -->
          </div>
        </nav>
      </div>
    </header>