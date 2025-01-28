<?php 
// `page.php` をインクルードして基本レイアウトを使用
include get_template_directory() . '/page.php';
?>
<style>
  .footer {
    padding-top: 0px!important;
  }
</style>
<main class="p-contact-main l-main">
  <div class="p-contact-body">
    <div class="p-contact-body-inner l-inner">
      <div class="p-contact-body__heading">
        <h3>訪問診療のご相談はお電話にて承っております。</h3>
      </div>
      <div class="p-contact-body__phoneNumber">
        <div class="p-contact-body__phoneNumber__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
        </div>
        <div class="p-contact-body__phoneNumber__text">
          <p>お問い合わせ先：<span>050-8893-2767</span></p>
          <p>(平日 9:00〜18：00)</p>
        </div>
      </div>
      <div class="p-contact-body__content">
        <div class="p-contact-body__content__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-body.png" alt="">
        </div>
        <div class="p-contact-body__content__textBox">
          <div class="p-contact-body__content__textBox__heading">事前にお知らせいただきたい情報</div>
          <p>
            ①現在の生活状況<br>
            ②お名前、生年月日、住所、連絡先<br>
            ③現在の病気に関する情報（病名や状態、使用している医療機器など）<br>
            ④通院している医療機関の情報
          </p>
        </div>
      </div>
    </div>
  </div>
  <section class="p-contact l-section">
    <div class="p-contact__inner l-inner">
      <div class="p-contact__bubble">
        <p>メールでもお問い合わせを承ります。</p>
      </div>
      <div class="p-contact__heading c-heading-block">
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">CONTACT</p>
        </div>
        <h2 class="c-heading">お問い合わせ</h2>
        <p class="p-contact__heading__desc">下記フォームに必要事項をご記入の上、「確認画面へ」「送信する」ボタンをクリックしてください。</p>
      </div>
      <div class="p-contact-form">
        <form class="p-contact-form__form">
          <!-- ===== お名前（担当者名）===== -->
          <div class="p-contact-form__form__body">
            <div class="p-contact-form__form__body__label">
              <label for="">お名前（担当者名）</label>
              <div class="c-required">
                <span class="c-required-text">必須</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <input type="text">
              <span>例）山田　太郎</span>
            </div>
          </div>
          <!-- ===== 施設名 ===== -->
          <div class="p-contact-form__form__body">
            <div class="p-contact-form__form__body__label">
              <label for="">施設名</label>
              <div class="c-option">
                <span class="c-option-text">任意</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <input type="text">
              <span>例） なごやかデイサービス</span>
            </div>
          </div>
          <!-- ===== 住所 ===== -->
          <div class="p-contact-form__form__body">
            <div class="p-contact-form__form__body__label">
              <label for="">住所</label>
              <div class="c-required">
                <span class="c-required-text">必須</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <input type="text">
              <span>例） 愛知県名古屋市中区錦2-7-7</span>
            </div>
          </div>
          <!-- ===== 電話番号 ===== -->
          <div class="p-contact-form__form__body">
            <div class="p-contact-form__form__body__label">
              <label for="">電話番号</label>
              <div class="c-required">
                <span class="c-required-text">必須</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <input type="text">
              <span>例） 09012345678</span>
            </div>
          </div>
          <!-- ===== メールアドレス ===== -->
          <div class="p-contact-form__form__body">
            <div class="p-contact-form__form__body__label">
              <label for="">メールアドレス</label>
              <div class="c-required">
                <span class="c-required-text">必須</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <input type="text">
              <span>例）example@example.jp</span>
            </div>
          </div>
          <!-- ===== お問い合わせ・相談内容 ===== -->
          <div class="p-contact-form__form__body u-border-bottom">
            <div class="p-contact-form__form__body__label">
              <label for="">お問い合わせ・相談内容</label>
              <div class="c-option">
                <span class="c-option-text">任意</span>
              </div>
            </div>
            <div class="p-contact-form__form__body__input">
              <textarea name="" id=""></textarea>
            </div>
          </div>
          <div class="p-contact-form__form__body__submit">
            <button type="submit" class="p-contact-form__form__body__submit__btn">内容を確認</button>
          </div>
        </form>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>