<?php
/*
Template Name: 固定ページテンプレート
*/
get_header();
?>
<div class="c-page-head">
  <div class="c-page-head-inner">
    <div class="c-page-head-block">
      <h1 class="c-page-head__heading"><?php the_title(); ?></h1>
      <?php if (is_page('about')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">ABOUT</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('treatment')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">ABOUT</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('money')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">ABOUT</p>
        </div>
      <?php endif; ?>
      <?php if (is_page('contact')): ?>
        <div class="c-page-head__heading__text__block">
          <div class="c-page-head__heading__text__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/furigana-icon.png" alt="">
          </div>
          <p class="c-page-head__heading__text">ABOUT</p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="c-page-contact">
  <div class="c-page-contact-inner">
    <div class="c-page-contact__img">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon-white.png" alt="">
    </div>
    <div class="c-page-contact__body">
      <p>
        <span class="c-page-contact__body__text">050-8893-2767</span><br>
        <span class="c-page-contact__body__text">（受付時間：平日 9:00〜18:00）</span>
      </p>
    </div>
  </div>
</div>
<section class="c-banner-contact">
  <div class="c-banner-contact-inner">
    <div class="c-banner-contact-block">
      <div class="c-banner-contact-block__img">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
      </div>
      <div class="c-banner-contact-block-body">
        <div class="c-banner-contact-block-body__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-field-1.png" alt="">
        </div>
        <div class="c-banner-contact-block-body__phoneNumber">
          <p class="c-banner-contact-block-body__phoneNumber__desc">お問い合わせ・お申し込み</p>
          <p class="c-banner-contact-block-body__phoneNumber__number">050-8893-2767</p>
          <p class="c-banner-contact-block-body__phoneNumber__text">
            当院は名古屋市内で唯一の眼科専門医による訪問診療専門クリニックです<br>
            内科・精神科の診療も可能で、24時間365日、医師がすぐに対応。<br>
            訪問診療で通院の負担なく、眼科と内科の診療を受けられます。
          </p>
          <a href="" class="c-banner-contact-block-body__email c-email-btn">
            <div class="c-banner-contact-block-body__email__img c-email-btn-img">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/email-icon.png" alt="">
            </div>
            <div class="c-email-btn-text">メールで問い合わせ</div>
          </a>
        </div>
        <div class="c-banner-contact-block-body-block-body__img">
          <img src="<?php echo get_template_directory_uri()?>/assets/images/contact-field-2.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
