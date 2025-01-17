<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni Information</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="/css/searchData.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar -->
  <?php if (session()->get('isLogin')) { ?>
    <nav class="header navbar navbar-expand-lg bg-pink-500">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/search" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <a class="fas nav-link" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        <li>
            <a class="dropdown-item" href="/profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } else { ?>
    <nav class="header navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/login" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <a class="list-menu" href="/login">
          <p>ลงชื่อผู้เข้าใช้</p>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/login">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/login">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } ?>


  <section class="article text-gray-600 body-font">
    <div class="text-center mt-5">
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 py-2 justify-center items-center">
          <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">ข้อมูลศิษย์เก่า</h1>
            <p class="leading-relaxed">ยินดีต้องรับเข้าสู่หน้าข้อมูลศิษย์เก่า</p>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col">
      <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="<?php echo '/image/users/'. $user['img'] ?>">
    </div>
  </section>

  <section class="text-gray-600 body-font">
    <div class="container px-5 py-4 mx-auto">
      <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
        <div class="p-4 md:w-1/3 flex">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ข้อมูลการศึกษา</u></h2>
            <div class="flex">
              <p class="flex">รหัสนักศึกษา :&nbsp;</p>
              <input readonly type="text" name="studentID" value="<?= $user['aln_id'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ชื่อ-นามสกุล :&nbsp;</p>
              <input readonly type="text" name="name" value="<?php echo $user['firstName'] . " " . $user['lastName']; ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ระดับการศึกษา :&nbsp;</p>
              <input readonly type="text" name="educationLevel" value="ปริญญาตรี">
            </div>
            <div class="flex mt-2">
              <p class="flex">ปีการศึกษาที่เข้า :&nbsp;</p>
              <input readonly type="text" name="startStudying" value="<?= $user['inYear'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ปีการศึกษาที่จบ :&nbsp;</p>
              <input readonly type="text" name="endStudying" value="<?= $user['outYear'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">สาขาวิชา :&nbsp;</p>
              <input readonly type="text" name="major" value="<?php echo $major[$user['major'] - 1]['major_name']; ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">คณะ :&nbsp;</p>
              <input readonly type="text" name="faculty" value="<?php echo $faculty[$user['faculty'] - 1]['fac_name']; ?>">
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
            </svg>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ข้อมูลการทำงาน</u></h2>
            <div class="flex">
              <p class="flex">สถานที่ทำงาน :&nbsp;</p>
              <input readonly type="text" name="workplace" value="<?= $working['place']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">อาชีพ :&nbsp;</p>
              <input readonly type="text" name="occupation" value="<?= $working['job']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ตำแหน่ง :&nbsp;</p>
              <input readonly type="text" name="position" value="<?= $working['position']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ที่อยู่ :&nbsp;</p>
              <input readonly type="text" name="address" value="<?= $working['address']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">อำเภอ :&nbsp;</p>
              <input readonly type="text" name="district" value="<?= $working['district']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">จังหวัด :&nbsp;</p>
              <input readonly type="text" name="province" value="<?= $working['province']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">รหัสไปรษณีย์ :&nbsp;</p>
              <input readonly type="text" name="postcode" value="<?= $working['zipcode']?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">เบอร์โทร :&nbsp;</p>
              <input readonly type="text" name="telephone" value="<?= $working['tel']?>">
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3 flex">
          <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
              <circle cx="6" cy="6" r="3"></circle>
              <circle cx="6" cy="18" r="3"></circle>
              <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
            </svg>
          </div>
          <div class="flex-grow pl-6">
            <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ช่องทางการติดต่อ</u></h2>
            <div class="flex">
              <p class="flex">Facebook :&nbsp;</p>
              <input readonly type="text" name="facebook" value="<?= $user['facebook'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">ID Line :&nbsp;</p>
              <input readonly type="text" name="idLine" value="<?= $user['line'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">Tel :&nbsp;</p>
              <input readonly type="text" name="twitter" value="<?= $working['tel'] ?>">
            </div>
            <div class="flex mt-2">
              <p class="flex">Email :&nbsp;</p>
              <input readonly type="text" name="email" value="<?= $user['email'] ?>">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="page-footer font-small bg-pink-500">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Registration System</a>
    </div>
  </footer>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>