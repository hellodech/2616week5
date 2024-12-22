<!DOCTYPE html>
<html lang="en"  data-bs-theme="dark">

<head>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Prompt", serif;
            font-weight: 600;
            font-style: normal;
            margin-left: 100px;
            margin-bottom: 300px;
            margin-top: 80px;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใช้งาน Bootstrap</title>
</head>

<body>
    <h1>โปรแกรมบันทึกข้อมูลสุนัข </h1>
    
    <form class="row g-3">
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">รหัสประจำตัวสุนัข</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">ชื่อ</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-4">
    <label for="inputPassword4" class="form-label">สายพันธ์</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-2">
    <label for="inputAddress" class="form-label">อายุ (ปี)</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="กรอกอายุสุนัข">
  </div>
  <div class="col-2">
    <label for="inputAddress" class="form-label">เพศ</label>
    <select id="inputState" class="form-select">
      <option selected>กรุณาเลือกเพศสุนัข</option>
      <option>เพศเมีย</option>
      <option>เพศผู้</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
    <button type="reset" class="btn btn-danger">ยกเลิก</button>
  </div>
</form>

</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>