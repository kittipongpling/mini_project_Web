<?php
$conn = new mysqli("127.0.0.1", "root", "", "mini_project_web");
$sql = "SELECT * FROM `total`";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">ฟิวเดอะซัน</a>
  <a href="#news">News</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
</div>
<br>
<button   value="เพิ่มสินค้า"><a href="insert.php">เพิ่มสินค้า</a></button>
<div align="center">
้้<h1>กรุณาเลือกสินค้า ที่ท่านต้องการ</h1>

<div class="w3-row-padding">
<?php foreach($result as $tae){

 ?>
    <div style="width:15%;height:20%;" class="w3-col s4">
   <!-- <?php echo $tae['fname']; ?> -->
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3nKeQPw4w-GiVu7nh9Vf3MLrwJJDqDrd_8ATZMquaf4GXEicC" style="padding:10px;width:100%">
      <div align="center">
      <input  type="button" require value="ดูข้อมูล" name="rich">
      <input  type="button" require value="สั่งซื้อ" name="rich">
      </div>
     
    </div>
    <?php }

    ?>
  </div>
  </div>

</body>
</html>
