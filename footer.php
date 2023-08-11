<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
            <div class="fixbar">

            <button class="outline">
                <svg class="outline-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
</svg>

            </button>
            <div style="margin-top:5px;"></div>
            <button class="social">
                <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
</svg>

            </button>
<div style="margin-top:5px;"></div>
              <button class="back-to-top hidden">
                <svg class="back-to-top-icon"
    xmlns="http://www.w3.org/2000/svg"
    class="back-to-top-icon"
    fill="none"
    viewBox="0 0 24 24"
    stroke="currentColor"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M7 11l5-5m0 0l5 5m-5-5v12"
    />
  </svg>
            </button>
            </div>
            
            <footer id="footer" role="contentinfo">
                Theme is <a href="https://github.com/zherome/pinhero/" target="_blank">Pinhero</a> Powered by <a href="https://typecho.org/" target="_blank">Typecho</a> &copy; <?php echo date('Y'); ?>
                </br>
                <a href="https://beian.miit.gov.cn/" target="_blank"><?php $this->options->footerbeian(); ?></a>
            </footer><!-- end #footer -->
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.8.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
    <script src="<?php $this->options->themeUrl('js/codecopy.js'); ?>"></script>


<script>
const showOnPx = 100;
const backToTopButton = document.querySelector(".back-to-top")

const scrollContainer = () => {
  return document.documentElement || document.body;
};

document.addEventListener("scroll", () => {
  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("hidden")
  } else {
    backToTopButton.classList.add("hidden")
  }
})


const goToTop = () => {
  document.body.scrollIntoView({
    behavior: "smooth",
  });
};

backToTopButton.addEventListener("click", goToTop)
</script>
<?php $this->footer(); ?>
</body>
</html>
