<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../../../resources/css/navbar.css" />
    <link
      rel="stylesheet"
      href="../../../resources/css/admin_changeProduct.css"
    />
    <link rel="stylesheet" href="../../../resources/css/footer.css" />
    <link rel="stylesheet" href="../../../resources/js/topBtn.js" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />

    <script
      src="https://kit.fontawesome.com/6c4c2bf9f6.js"
      crossorigin="anonymous"
    ></script>
  </head>
<style>
  #img1:after,
  #img2:after{
    content: "\f1c5" " "attr(alt) ;

  font-size: 16px;
  font-family: FontAwesome;
  color: rgb(100, 100, 100);

  display: block;
  position: relative;
  z-index: 2;
  top: -27px;
  left: 0;
  width: 110px;
  height: 25px;
  background-color: #fff;

  }
</style>
  <body>
    <!-- Back-to-Top Button -->
    <button onclick="topFunction()" class="topBtn" id="topBtn"></button>

    <!-- Navbar -->
    <nav class="navbar">
      <div class="navbarTitle">
        <a href="../public/mainpage.html">
          <!-- <img src="../image/icon-noBorder-whiteFont.png"> -->
          <img src="../icon-noBorder-whiteFont.png" />
        </a>
      </div>
      <div class="hambuger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <div class="navbarLink">
        <ul>
          <li><a href="../public/menu.php">產品介紹</a></li>
          <li><a href="../public/locations.html">分店資訊</a></li>
          <li><a href="../public/reserve.html">預約課程</a></li>
          <li><a href="../public/Q&A.html">常見問題</a></li>
          <li><a href="../public/login.html">登入會員</a></li>
        </ul>
      </div>
    </nav>
    <div name="selecttop" id="sel">
      <a href="../public/admin.html" class="selectarea"
        ><i style="font-size: 24px" class="fas">&#xf1b0;</i>&nbsp修改首頁輪播</a
      >
      <a href="../public/admin_addProduct.html" class="selectarea"
        ><i style="font-size: 24px" class="fas">&#xf1b0;</i>&nbsp新增產品</a
      >
      <a href="../public/admin_changeProduct.html" class="selectarea"
        ><i style="font-size: 24px" class="fas">&#xf1b0;</i>&nbsp修改產品資訊
      </a>
      <a href="../public/admin_reserveHistory.html" class="selectarea"
        ><i style="font-size: 24px" class="fas">&#xf1b0;</i>&nbsp顧客預約總覽</a
      >
      <div class="selectarea">您好，<span>管理員</span></div>
    </div>

    <div id="changeForm">
      
      <form action="change_update.php" method="post" enctype="multipart/form-data" id="form" >
        <div class="row">
          <div class="column">
            <h2>修改產品資訊</h2>
          </div>
          <div class="column2">
            <label for="change_cName" class="selectcake">選擇產品：</label>
            <select
              name="change_cName"
              id="change_cName"
              class="selectcake"
              
            >
              <optgroup label="蛋糕" name="cake">
                <option value="皮卡蛋糕">皮卡蛋糕</option>
              </optgroup>
              <optgroup label="點心" name="cake">
                <option value="小火龍餅乾">小火龍餅乾</option>
                <option value="廟挖馬卡龍">廟挖馬卡龍</option>
              </optgroup>
            </select>
          </div>
        </div>
        <div class="r1">
          <label for="cName">產品名稱</label>
          <br />
          <input
            type="text"
            id="cName"
            name="cName"
            placeholder="請輸入產品名"
            value=""
          />
          
          <div id="jojo"></div>
          <br />

          <label for="level">難度</label>
          <br />
          <select name="level" id="level" class="select">
            <option value="1"><span>★</span>小朋友都會</option>
            <option value="2"><span>★★</span>適合大人初學者</option>
            <option value="3"><span>★★★</span>有烘焙經驗比較好</option>
          </select>
          <br />

          <label for="kind">種類</label>
          <br />
          <select id="kind" name="kind" class="select">
            <option value="點心">點心</option>
            <option value="蛋糕">蛋糕</option>
          </select>
          <br />

          <label for="cSize">尺寸/數量</label>
          <br />
          <select id="cSize" name="cSize" class="select">
            <option value="6吋">6吋</option>
            <option value="12個">12個</option>
          </select>
          <br />

          <label for="price">價格</label>
          <br />
          <input
            type="number"
            id="price"
            name="price"
            placeholder="請輸入價格"
            value=""
          />
          <br />
        </div>
        <div class="r1">
          <label for="feature">產品簡介</label>
          <br />
          <textarea
            id="feature"
            name="feature"
            placeholder="字數上限為200字"
            value=""
          ></textarea>
          <br />
          <label for="material">材料內容</label>
          <br />
          <textarea
            id="material"
            name="material"
            placeholder="字數上限為200字"
            value=""
          ></textarea>
          <br />
          <label for="cImg1">上傳產品照片</label>
          <br />
          <br />
          <input accept="image/*" type="file" id="cImg1" name="cImg1" />
          <img id="img1"   style="max-width: 200px" alt="未上傳圖片"/>
          <!-- <div id="img1_1"></div> -->
          <br />
          <input accept="image/*" type="file" id="cImg2" name="cImg2" />
          <img id="img2"   style="max-width: 200px" alt="未上傳圖片"/>
          <!-- <div id="img2_2"></div> -->
          <br />
        </div>
        <br />
        <br />
        <input type="submit" value="儲存產品資料" id="checked" />
      </form>
      <br />
      <br />
    </div>
    <!-- Footer -->
    <footer class="footer">
      <div class="footerContainer">
        <div class="footerRow">
          <div class="footerCol">
            <h4>DIY蛋糕</h4>
            <ul>
              <li><a href="">關於我們</a></li>
              <li><a href="">常見問題</a></li>
            </ul>
          </div>
          <div class="footerCol">
            <h4>服務內容</h4>
            <ul>
              <li><a href="">立即預約</a></li>
              <li><a href="">產品介紹</a></li>
            </ul>
          </div>
          <div class="footerCol">
            <h4>聯絡我們</h4>
            <div class="socialLinks">
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-line"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="../../../resources/js/topBtn.js"></script>
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
  <script>
    const Name = document.getElementById("cName");

    change_cName.onchange = function (e){
        const cName = e.target.value;
        const data = {cName};
        fetch(
            `change_search.php?cName=${cName}`
        )
        .then(function(response){
            return response.json();
        })
        .then(function(data){
          console.log(data);
           Name.value = data[0].cName;
           price.value = data[0].price;
           cSize.value = data[0].cSize
           kind.value = data[0].kind;
           feature.value = data[0].feature;
           level.value = data[0].level;
           material.value = data[0].material;       
             img1.src=data[0].cImg1;       
             img2.src=data[0].cImg2;
           
        })
    }
     //第一張圖片預覽
     $("#cImg1").on("change", function (e) {
      const file = this.files[0]; //將上傳檔案轉換為base64字串

      const fr = new FileReader(); //建立FileReader物件
      fr.onload = function (e) {
        $("#img1").attr("src", e.target.result); //读取的结果放入圖片
      };
      // 使用 readAsDataURL 將圖片轉成 Base64
      fr.readAsDataURL(file);
      console.log('ok');
    });

    //第二張圖片預覽
    $("#cImg2").on("change", function (e) {
      const file = this.files[0]; //將上傳檔案轉換為base64字串

      const fr = new FileReader(); //建立FileReader物件
      fr.onload = function (e) {
        $("#img2").attr("src", e.target.result); //读取的结果放入圖片
      };
      // 使用 readAsDataURL 將圖片轉成 Base64
      fr.readAsDataURL(file);
      console.log('ok');
    });
  </script>
</html>