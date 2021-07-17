<?php include('tmp/head.html') ?>
<script src="https://kit.fontawesome.com/ca3f6ce531.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/contact.css">

<div id="contact">
    <div class="default_outline">
      <h1 class="title">Contact</h1>
    <div class="pc_flex">
      <div class="text">
        <p>
          ご依頼・ご用件は、<br>
          こちらのフォームよりお問い合わせください。<br>
          <span class="small">
            ・クリエイティブ制作・展示依頼<br>
            ・作品購入についてのご相談<br>
            ・映像制作、写真撮影、ライブ配信のご相談や依頼<br>
            ・その他、市川 徹宏への仕事依頼<br>
          </span>
          <span class="small">
            For inquiries to Yukihiro Ichikawa,<br>
            Please contact us from this form.<br>
          </span>
          <span class="small">
            SNSのダイレクトメッセージからも受け付けてます。
          </span>
        </p>
      </div><!-- text -->
      <div class="form">
        <form action="contactCom.php" method="post">
          <input type="text" name="name" placeholder="お名前 (Name)">
          <input type="text" name="email" placeholder="メールアドレス (Mail)">
          <input type="text" name="subject" placeholder="件名(Subject)">
          <textarea name="message" cols="30" rows="10" placeholder="お問い合わせ (Please enter your message here)"></textarea>
          <input type="submit" value="送信する (Submit) →" name="submit">
        </form>
      </div><!-- form -->
    </div><!-- flex -->
  </div><!-- default_outline -->
</div><!-- #contact -->


<?php include('tmp/foot.html') ?>
