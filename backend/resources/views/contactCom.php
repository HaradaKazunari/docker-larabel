<?php include('tmp/head.html') ?>
<?php
mb_language("Japanese");
mb_internal_encoding("UTF-8");
  $to = 'connaiconnai5252@gmail.com';
  $subject = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message =  $_POST["message"];
  $message .= $name."\r\n".$email."\r\n";
  $sendMail = mb_send_mail($to, $subject, $message);
?>
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
        <div class="text-center">
          <h4>メールを送信しました</h4>
        </div>
      </div><!-- form -->
    </div><!-- flex -->
  </div><!-- default_outline -->
</div><!-- #contact -->


<?php include('tmp/foot.html') ?>
