<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!-- cssファイルの読み込み↓ -->
  <link rel="stylesheet" href="./css/beta.css">
  <title>sample配当漢字システム</title>
</head>

<body>
  <header>
    <h1><a href="#">Print Checker.</a></h1>
  </header>
  <?php include('./html/nav.html'); ?>

  <div class="mainScreen">
    <h1>プリントチェッカー　main画面（beta）</h1>
    <p>
      ＊現バージョンの対象ファイルはWordファイル（.docx）のみです＊<br>
      ⇩　配布プリントプリント対象学年を選択してください。⇩<br>
    </p>

    <p>
      <form action="./php/check.php" enctype="multipart/form-data" method="post">
        <fieldset>
          <input id="item-1" class="radio-inline__input" type="radio" name="targetGrade" value="1" checked="checked" />
          <label class="radio-inline__label" for="item-1">
            １年生
          </label>
          <input id="item-2" class="radio-inline__input" type="radio" name="targetGrade" value="2" />
          <label class="radio-inline__label" for="item-2">
            ２年生
          </label>
          <input id="item-3" class="radio-inline__input" type="radio" name="targetGrade" value="3" />
          <label class="radio-inline__label" for="item-3">
            ３年生
          </label>
          <input id="item-4" class="radio-inline__input" type="radio" name="targetGrade" value="4" />
          <label class="radio-inline__label" for="item-4">
            ４年生
          </label>
          <input id="item-5" class="radio-inline__input" type="radio" name="targetGrade" value="5" />
          <label class="radio-inline__label" for="item-5">
            ５年生
          </label>
          <input id="item-6" class="radio-inline__input" type="radio" name="targetGrade" value="6" />
          <label class="radio-inline__label" for="item-6">
            ６年生
          </label>
        </fieldset>

        <label class="upload-img-btn">
          プリントを選択
          <input type="file" name="file_upload" style="display:none">
        </label>
        <input type="submit" class="upBtn" alue="アップロード" />
      </form>
    </p>

  </div>

  <!-- <div class="imgSetting">
    <img src="neko.png">
  </div> -->

</body>
</html>
