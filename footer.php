<!-- ===== footer ===== -->
<footer class="footer l-section">
  <div class="footer-inner l-inner">
    <nav class="footer-nav">
      <ul class="footer-nav__list">
        <li class="footer-nav__item"><a href="<?php home_url(); ?>">トップページ</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php home_url('/about'); ?>">当院について</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php home_url('/treatment'); ?>">診療内容</a></li>
        <span>｜</span>
        <li class="footer-nav__item"><a href="<?php home_url('/money'); ?>">料金案内</a></li>
      </ul>
    </nav>
    <div class="footer-info__inner">
      <div class="footer-info-logo">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/footer-logo.png" alt="">
        <div class="footer-info-logo__address">
          <p>〒460-0003 <br>愛知県名古屋市中区錦2-7-7P.T名古屋錦1302</p>
        </div>
      </div>
      <div class="footer-info-body">
        <div class="footer-info-body__phoneNumber">
          <div class="footer-info-body__phoneNumber__img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/phone-icon.png" alt="">
          </div>
          <div class="footer-info-body__phoneNumber__text">
            <p>お問い合わせ先：<span>050-8893-2767</span>　(平日 9:00〜18：00)</p>
            <p>（直接医師に繋がりますので、詳しく聞くことができます）</p>
          </div>
        </div>
        <a href="" class="footer-info-body__email c-email-btn">
          <div class="footer-info-body__email__img c-email-btn-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/email-icon.png" alt="">
          </div>
          <p class="c-email-btn-text">メールで問い合わせ</p>
        </a>
      </div>
    </div>
    <div class="footer-copyright">
      <small>なごやか眼科内科訪問診療クリニック</small>
    </div>
  </div>
</footer>
</div>
  <?php wp_footer(); ?>
</body>
</html>