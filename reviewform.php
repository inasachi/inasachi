<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レビュー投稿画面</title>
  <?php
require('link.html');
  ?>
</head>
<body> 

  <?php
  require('header.html');
  ?>
  
  <section class="reviewform">
    <form method="post" action="test.php" id="reviewform" enctype="multipart/form-data">
    <div class="reviewformWrap">
      <div class="reviewformSpot">
        <div class="reviewformImage">
          <img src="images/goryoukaku.JPG">
        </div>
        <div class="reviewformSpotTitle">
          <h3>五稜郭</h3>
          <p>北海道函館市五稜郭町４４</p>
        </div>
      </div>
      
      <div class="postform">
        <div class="pleasePost">
          <h4>以下のフォームから口コミを入力してください</h4>
        </div>

        <div class="reviewformItem formRating">
          <h4>総合評価<span class="required">(必須)</span></h4>
          <h2>☆☆☆☆☆</h2>
        </div>

        <div class="reviewformItem reviewformTitle">
          <label>
            <h4>口コミのタイトル<span class="required">(必須)</span></h4>
            <input type="text" name="title">
          </label>
        </div>

        <div class="reviewformItem reviewformBody">
          <label>
            <h4>口コミの本文<span class="required">(必須)</span></h4>
            <textarea type="text" name="reviewContent"></textarea>
          </label>
        </div>

        <div class="reviewformItem reviewformVisitTerm">
          <label>
            <h4>訪問時期を教えてください<span class="required">(必須)</span></h4>
            <select>
              <option>2020年1月</option>
              <option>2020年1月</option>
              <option>2020年1月</option>
              <option>2020年1月</option>
              <option>2020年1月</option>
            </select>
          </label>
        </div>

        <div class="reviewformItem reviewformSpendTime">
          <h4>どのくらいの時間滞在しましたか？<span class="required">(必須)</span></h4>
          <input type="radio" name="stayTime" value="0"class="radio"id="0"><label for="0"class="radioIcon">1時間未満</label>
          <input type="radio" name="stayTime" value="1"class="radio"id="1"><label class="radioIcon"for="1">1-2時間未満</label>
          <input type="radio" name="stayTime" value="2"class="radio"id="2"><label class="radioIcon"for="2">2-3時間未満</label>
          <input type="radio" name="stayTime" value="3"class="radio"id="3"><label class="radioIcon"for="3">3時間以上</label>
        </div>

        <div class="reviewformItem reviewformPicture">
          <label>
            <h4>写真はありますか？</h4>
            <input type="file" name="picture">
          </label>
        </div>

        <div class="reviewformItem reviewformConsent">
          <label>
          <h4>以下内容に同意します<input type="checkbox">
          <span class="required">(必須)</span></h4>
        </label>
        <p> 口コミの内容は私自身の経験に基づいた誠実な意見であり、この観光スポットとは個人的またはビジネス上の関係がなく、不正な内容ではありません。</p>

        </div>

        <div class="reviewformConfirm">
          <input type="submit"value="投稿する">
          <a href="" class="js-modal-openForm" id="#submit_button">確認する</a>
        </div>

        <div class="modalForm js-modalForm">
          <div class="modal_bgForm js-modal-closeForm"></div>
          <div class="modal_contentForm">

            <div class="formConfirm">
              <p>口コミは以下のように表示されます。</p>
              <a href="" class="js-modal-closeForm">✖</a>
            </div>

            <div class="reviewCard">
              <div class="reviewer">
                <h4>歴史大好き子さん<span>の投稿(2020年1月)</span></h4>
              </div>
              <div class="reviewparts">
                <div class="reviewpartsUpper">
                  <h2 class="rating">★★★☆☆</h2>
                  <p>訪問時期：2019年12月</p>
                </div>
                <div class="reviewpartsBottom">
                  <h3 class="reviewTitle"><?php echo $_POST['title']  ?></h3>
                  <p><?php echo $_POST['reviewContent']  ?></p>
                </div>
              </div>
            </div>

            <div class="reviewformConfirm">
              <input type="submit"value="投稿する">
              <a href="" class="js-modal-closeForm">編集する</a>
              <!-- <input type="button" name="btn_back" value="編集する" onclick="history.back(-1)"> -->

            </div>

          </div>
        </div>



      </div>


    </div>
    </form>
  </section>

  <?php
  require('footer.html');
  ?>