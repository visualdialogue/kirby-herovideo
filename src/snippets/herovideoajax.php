
<?php if (!$page->isMobile() || $page->isTablet()): ?>
<!-- Desktop video and poster-->
<div class="hero-video-wrapper desktop-hero-video-wrapper">
  <video id="hero-video" autoplay="autoplay" muted="muted" loop="loop" preload="auto" playsinline="playsinline" src="<?= $page->hero_desktop_video() ?>" poster="<?= $page->hero_desktop_video_poster()->toFile()->url() ?>" class="hero-video"></video>
</div>
<?php else: ?>
<!-- Mobile Video and Poster-->
<div class="hero-video-wrapper">
  <video id="hero-video" autoplay="autoplay" muted="muted" loop="loop" preload="auto" playsinline="playsinline" src="<?= $page->hero_mobile_video() ?>" poster="<?= $page->hero_mobile_video_poster()->toFile()->url() ?>" class="hero-video"></video>
</div>
<?php endif; ?>