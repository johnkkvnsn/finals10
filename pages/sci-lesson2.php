<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - EduPlatform</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      padding-top: 80px;
      background-color: #f8f9fa;
      font-size: 1.1rem;
      line-height: 1.6;
    }
    .section-card {
      margin-bottom: 30px;
      border-left: 6px solid #28a745;
      border-radius: 10px;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    .section-header {
      background-color: #e9f7ef;
      padding: 15px 20px;
      font-weight: bold;
      font-size: 1.4rem;
      color: #28a745;
      border-bottom: 1px solid #dee2e6;
    }
    .section-body {
      padding: 20px;
      font-size: 1.1rem;
    }
    .section-body img {
      max-width: 100%;
      height: auto;
      max-height: 250px;
      display: block;
      margin: 20px auto;
    }
  </style>
  
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <a class="navbar-brand" href="dashboard.php">EduPlatform</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacts.php">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

  <!-- Content -->
  <div class="container mt-4">
    <h2 class="text-success mb-4 font-weight-bold">LESSON 2: Plants and Animals</h2>

    <div class="section-card">
      <div class="section-header">Living Things</div>
      <div class="section-body">
        <ul>
          <li>All living things need food, water, and air.</li>
          <li>Living things grow and change.</li>
          <li>Living things can reproduce (make more of their kind).</li>
        </ul>
      </div>
    </div>

    <div class="section-card">
      <div class="section-header">Plant Characteristics</div>
      <div class="section-body">
        <p>A plant has several main parts that help it grow and survive:</p>
        <img src="../images/plant.png" alt="Plant">
        <ul>
          <li>Roots</li>
          <li>Stem</li>
          <li>Leaves</li>
          <li>Flowers</li>
          <li>Seeds</li>
        </ul>
      </div>
    </div>

    <div class="section-card">
      <div class="section-header">Plant Parts in Detail</div>
      <div class="section-body">
        <img src="../images/roots.png" alt="Roots">
        <p><strong>Roots:</strong> Absorb water and nutrients from soil, anchor the plant.</p>

        <img src="../images/stem.png" alt="Stem">
        <p><strong>Stem:</strong> Supports the plant, carries water and nutrients.</p>

        <img src="../images/leaves.png" alt="Leaves">
        <p><strong>Leaves:</strong> Make food for the plant using sunlight.</p>

        <img src="../images/flowers.png" alt="Flowers">
        <p><strong>Flowers:</strong> Help plants reproduce.</p>

        <img src="../images/seeds.png" alt="Seeds">
        <p><strong>Seeds:</strong> Grow into new plants.</p>
      </div>
    </div>

    <div class="section-card">
        <div class="section-header">Animal Characteristics</div>
        <div class="section-body">
          <ul>
            <li>Animals need to eat food (cannot make their own).</li>
            <li>Most animals can move from place to place.</li>
            <li>Animals respond quickly to their environment.</li>
            <li>Animals have different body coverings (fur, feathers, scales, skin).</li>
          </ul>
        </div>
      </div>

      <div class="section-card">
        <div class="section-header">Animal Groups</div>
        <div class="section-body">
          <p><strong>Mammals:</strong></p>
          <img src="../images/mammals.png" alt="Mammals">
          <p>Have fur/hair, give birth to live young, feed babies milk.</p>

          <p><strong>Birds:</strong></p>
          <img src="../images/birds.png" alt="Birds">
          <p>Have feathers, lay eggs, most can fly.</p>

          <p><strong>Fish:</strong></p>
          <img src="../images/fish.png" alt="Fish">
          <p>Live in water, have scales and fins.</p>

          <p><strong>Reptiles:</strong></p>
          <img src="../images/reptiles.png" alt="Reptiles">
          <p>Have dry scales, most lay eggs.</p>

          <p><strong>Amphibians:</strong></p>
          <img src="../images/amphibians.png" alt="Amphibians">
          <p>Live both in water and on land.</p>

          <p><strong>Insects:</strong></p>
          <img src="../images/insects.png" alt="Insects">
          <p>Have six legs and three body parts.</p>
        </div>
      </div>

  </div>
  
  <!-- Done Button -->
<div class="container text-center my-5">
    <a href="science.php" class="btn btn-success btn-lg px-5">Done</a>
  </div>
  

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
