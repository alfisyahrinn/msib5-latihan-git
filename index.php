<?php
$data = [
  'nama' => 'Alfi Syahrin',
  'study' => [
    'universitas' => 'politeknik negeri lhokseumawe',
    'jurusan' => 'teknik informatika',
    'semester' => 4,
  ],
  'hobby' => ['futsal', 'sepak bola'],
  'favorite' => [
    'team' => 'Chelsea',
    'goat' => 'hazard'
  ],
  'alasan' => 'saya ingin keluar dari zona nyaman dengan ada tantangan  baru mengikuti program ini bisa megembangkan keterampilan, di dunia kerja saat ini sangat  berpengaruh dengan perkembangan teknologi, dalam bidang web development,'
]
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MSIB-GITS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
  <div class="container mt-5 d-flex justify-content-center">
    <div class="card">
      <div class="card-header d-flex gap-3">
        <img src="src/assets/img/Logo-Main-1.png" alt="">
        <p class="my-auto">MSIB Gits.id</p>
      </div>
      <div class="card-body">
        <div class="d-flex gap-3 pb-1 align-items-center mb-3" style="border-bottom: 1px solid gray ;">
          <img src="src/assets/img/chili.jpg" alt="alfi" style="width: 35px;">
          <div class="my-auto">
            <small style="font-size:12px;">nama</small>
            <p style="font-weight: 500; font-size:18px;"><?= $data['nama']; ?></p>
          </div>
        </div>
        <div class="d-flex gap-3 pb-2 align-items-center" style="border-bottom: 1px solid gray ;">
          <img src="src/assets/img/house-door-fill.svg" alt="alfi" style="width: 35px;">
          <div class="my-auto">
            <small style="font-size:12px;"><?= $data['study']['universitas']; ?></small>
            <p style="font-weight: 500; font-size:18px;"><?= $data['study']['jurusan']; ?></p>
          </div>
        </div>
        <div class="d-flex gap-3 pb-1 align-items-center mb-3" style="border-bottom: 1px solid gray ;">
          <img src="src/assets/img/alexa.svg" alt="alfi" style="width: 35px;">
          <div class="my-auto">
            <small style="font-size:12px;">hobby</small>
            <p style="font-weight: 500; font-size:18px;">
              <?php foreach ($data['hobby'] as $item) : ?>
                <?= $item;  ?>,
              <?php endforeach ?>
            </p>
          </div>
        </div>
        <div class="d-flex gap-3 align-items-center pb-2" style="border-bottom: 1px solid gray ;">
          <img src="src/assets/img/emoji-heart-eyes-fill.svg" alt="alfi" style="width: 35px;">
          <div class="my-auto">
            <small style="font-size:12px;"><?= $data['favorite']['goat']; ?></small>
            <p style="font-weight: 500; font-size:18px;"><?= $data['favorite']['team']; ?></p>
          </div>
        </div>
        <div class="d-flex gap-3 align-items-center">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <p style="font-size:18px;" class="m-2">Motivasi mengikuti program</p>
                
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"> <small style="font-size:12px;"><?= $data['alasan']; ?></small></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>