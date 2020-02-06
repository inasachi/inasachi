<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>詳細画面</title>
  <?php
  require('link.html');
  ?>
</head>
<body> 

  <?php
  require('header.html');
  ?>

  <section class="spot">
    <div class="spotWrap">
      <div class="spotContent">
        <div class="spotDataLeft">
          <h1 class="contentTitle">五稜郭</h1>
          <a href="#reviewContent"><h2 class="rating">★★★☆☆</h2></a>

          <a  href="" class="tag">#土方歳三</a>
          <a  href="" class="tag">#新選組</a>
          <a  href="" class="tag">#函館戦争</a>
          <a  href="" class="tag">#大政奉還</a>
          <a  href="" class="tag">#榎本武揚</a>
          <p>平均滞在時間：〇時間</p>

          <div class="overview">
            <h5>Overview</h5>
            <p>北海道函館市に星形五角形の外観から、「五稜郭」と呼ばれる城塞があります。1864年に建てられ政治的中心地としての役割を果たしていましたが1872年に解体、1914年から五稜郭公園として一般開放されました。1952年には五稜郭跡として特別史跡の指定を受け、国民的遺産として保護されました。春には1600本の桜が咲き、名所になっています。面積は約25ヘクタール、トイレが完備されています。電車でのアクセス:五稜郭公園前駅(市電)から徒歩15分、函館駅(JR)からバス・シャトルバスなど</p>
          </div>
          <div class="address">
            <i class="fas fa-map-marker-alt"></i>
            <a href="https://www.google.com/maps/place/%E7%89%B9%E5%88%A5%E5%8F%B2%E8%B7%A1%E4%BA%94%E7%A8%9C%E9%83%AD%E8%B7%A1/@41.7969245,140.7545951,17z/data=!3m1!4b1!4m5!3m4!1s0x5f9ef46bcb8d5525:0xa9e4bd2d96c4d502!8m2!3d41.7969245!4d140.7567838"><p>北海道函館市五稜郭町４４</p></a>
          </div>
          <div class="businessHours">
            <i class="far fa-clock"></i>
            <p>8:00~18:00</p>
            <p>年中無休</p>
          </div>
          <div class="official">
            <i class="fas fa-external-link-alt"></i><a href=""><p>公式サイトへ</p></a>
          </div>
          <div class="reviewPost">
            <a href="reviewform.php">口コミを書く</a>
          </div>

        </div>

        <div class="spotDataRight">
          <a href="" class="toFullsize"><img src="images/goryoukaku.JPG"></a>
          <a href="" class="toGallery">全ての写真</a>
        </div>
      </div>
    </div>
  </section>

  <section class="reviewFilter" id="reviewFilter">
    <div class="reviewFilterWrap">
      <div  class="reviewFilterTitle">
        <h3>口コミ（全21件）<span>以下条件で絞り込みできます</span></h3>
      </div>
      <div class="filterPart">
        <div class="ratingFilter">
          <h4>評価</h4>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="5" class="checkbox" id="rating">
              <span class="checkboxIcon">とても良い（12）</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="4" class="checkbox" id="rating">
              <span class="checkboxIcon">良い（8）</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="3" class="checkbox" id="rating">
              <span class="checkboxIcon">普通（1）</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="2" class="checkbox" id="rating">
              <span class="checkboxIcon">悪い（0）</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="1" class="checkbox" id="rating">
              <span class="checkboxIcon">とても悪い（0）</span>
            </label>
          </div>
        </div>

        <div class="visitTerm">
          <h4>訪問時期</h4>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="0" class="checkbox" id="visitTerm">
              <span class="checkboxIcon">3~5月</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="1" class="checkbox" id="visitTerm">
              <span class="checkboxIcon">6~8月</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="2" class="checkbox" id="visitTerm">
              <span class="checkboxIcon">9~11月</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="3" class="checkbox" id="visitTerm">
              <span class="checkboxIcon">12~2月</span>
            </label>
          </div>
        </div>

        <div class="picFilter">
          <h4>写真投稿</h4>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="0" class="checkbox" id="picFilter">
              <span class="checkboxIcon">有り</span>
            </label>
          </div>
          <div class="ratingItem">
            <label>
              <input type="checkbox" value="1" class="checkbox" id="picFilter">
              <span class="checkboxIcon">無し</span>
            </label>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  <section class="reviewContent" id="reviewContent">
    
    <div class="reviewContentWrap">

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
              <h3 class="reviewTitle">幕末のロマンを感じました</h3>
              <p>こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・</p>
            </div>
          </div>
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
            <h3 class="reviewTitle">幕末のロマンを感じました</h3>
            <p>こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・</p>
          </div>
          <div class="reviewpartsPic">
            <a href=""><img src="images/reviewImages/DSC_0141.jpg"></a>
            <a href=""><img src="images/reviewImages/DSC_0142.jpg"></a>
            <a href=""><img src="images/reviewImages/DSC_0141.jpg"></a>
          </div>
        </div>
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
            <h3 class="reviewTitle">幕末のロマンを感じました</h3>
            <p>こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・</p>
          </div>
        </div>
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
            <h3 class="reviewTitle">幕末のロマンを感じました</h3>
            <p>こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・</p>
          </div>
        </div>
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
            <h3 class="reviewTitle">幕末のロマンを感じました</h3>
            <p>こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・こんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったですこんな場所でこんなところがよかったです・・・</p>
          </div>
        </div>
      </div>

      <div class="more">
        <a href="">さらに表示▼</a>
      </div>

    </div>
  </section>

  <?php
  require('footer.html');
  ?>