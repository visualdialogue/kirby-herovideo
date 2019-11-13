
<div id="hero-video-ajax-replacement" class="hero-video-ajax-replacement">
  <!-- placeholder bg image and svg for height until Ajax kicks in and loads desktop or mobile video depending on mobile detect-->
  <div class="no-mobile-block"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2016%209%22%20width%3D%2216%22%20height%3D%229%22%2F%3E" style="width: 100%;" alt="video placeholder" class="video-ratio-svg"/>
    <div style="background-image: url(<?= $page->hero_desktop_video_poster()->toFile()->url() ?>)" class="hero-video-wrapper desktop-hero-video-wrapper hero-video-pre-ajax-poster">               </div>
  </div>
  <!-- placeholder bg image and svg for height until Ajax kicks in and loads desktop or mobile video depending on mobile detect-->
  <div style="background-image: url(<?= $page->hero_mobile_video_poster()->toFile()->url() ?>)" class="hero-video-wrapper mobile-hero-video-wrapper mobile-only"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%201%201%22%20width%3D%221%22%20height%3D%221%22%2F%3E" style="width: 100%;" alt="video placeholder" class="video-ratio-svg"/>
  </div>
</div>