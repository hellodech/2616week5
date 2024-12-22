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
    <h1>ทดสอบการใช้งาน Bootstrap</h1>
    พัฒนาโดย 66852522 นายเดช ธรรมศิริ <br>
    หมู่เรียน 26.16 <br>

    <div class="alert alert-danger">
        <strong>ยินดีด้วย!</strong> คุณสามารถใช้งาน boostrap ได้แล้ว
    </div>
    <br>
    <button type="button" class="btn btn-primary">บันทึกข้อมูล</button>
    <button type="button" class="btn btn-danger">ยกเลิกการบันทึก</button>
    <br><br>
    <button type="button" class="btn btn-outline-success">บันทึกข้อมูล</button>
    <button type="button" class="btn btn-outline-danger">ยกเลิกการบันทึก</button>
    <br><br>
    <div class="card" style="width:400px">
        <img class="card-img-top" src="dech4.jpg" alt="รูปผมเอง">
        <div class="card-body">
            <h4 class="card-title">นายเดช ธรรมศิริ</h4>
            <p class="card-text"><b>คติประจำใจ</b> ทำวันนี้ให้ดีที่สุด</p>
            <a href="http://npru.ac.th" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    <br><br>
    กิจกรรมที่ชอบ :
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
            กรุณาเลือกกิจกรรมที่ชอบ
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=FZl-f9p-RrM">เล่นบอล</a></li>
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=o9mCUOqpV78">ปั่นจักรยาน</a></li>
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=DwjIv4wHXjs">ว่ายน้ำ</a></li>
        </ul>
    </div>
    <br><br>
</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>