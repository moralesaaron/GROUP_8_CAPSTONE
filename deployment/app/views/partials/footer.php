<!-- Enhanced Footer -->
<footer class="footer-area">
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <!-- Company Info -->
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <div class="footer-logo">
              <a href="<?= ROOT ?>/home">
                <img src="<?= ROOT ?>/assets/images/logo.png" alt="DormLynk Logo" class="footer-brand-img">
              </a>
            </div>
            <p class="footer-desc">Connecting students with the perfect dormitory experience. Find, compare, and secure
              your ideal campus housing with DormLynk.</p>
            <div class="social-links mt-3">
              <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
              <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <h4 class="widget-title">Quick Links</h4>
            <ul class="footer-links">
              <li><a href="<?= ROOT ?>/home">Home</a></li>
              <li><a href="<?= ROOT ?>/explore">Explore</a></li>
              <li><a href="<?= ROOT ?>/about">About Us</a></li>
              <li><a href="<?= ROOT ?>/contact">Contact</a></li>
            </ul>
          </div>
        </div>

        <!-- Resources -->
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <div class="footer-widget">
            <h4 class="widget-title">Resources</h4>
            <ul class="footer-links">
              <li><a href="<?= ROOT ?>/faq">FAQs</a></li>
              <li><a href="<?= ROOT ?>/dormitory-guide">Dormitory Guide</a></li>
              <li><a href="<?= ROOT ?>/blog">Blog</a></li>
              <li><a href="<?= ROOT ?>/campus-map">Campus Map</a></li>
            </ul>
          </div>
        </div>

        <!-- Newsletter -->
        <div class="col-lg-3 col-md-6">
          <div class="footer-widget">
            <h4 class="widget-title">Newsletter</h4>
            <p class="newsletter-text">Subscribe for dormitory tips and updates</p>
            <form class="newsletter-form">
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Your email" aria-label="Your email">
                <button class="btn newsletter-btn" type="submit">
                  <i class="bi bi-send"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 text-center text-md-start">
          <p class="copyright mb-0">© <?= date('Y') ?> DormLynk. All rights reserved.</p>
        </div>
        <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
          <ul class="footer-bottom-links">
            <li><a href="<?= ROOT ?>/privacy-policy">Privacy Policy</a></li>
            <li><a href="<?= ROOT ?>/terms-of-service">Terms of Service</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS (required for dropdowns and other components) -->
<script src="<?= ROOT ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Footer Animation -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const footerElements = document.querySelectorAll('.footer-widget');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('footer-animate');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    footerElements.forEach(element => {
      observer.observe(element);
    });
  });
</script>

<style>
  /* Footer Styling */
  .footer-area {
    background: linear-gradient(180deg, #f8f9fa 0%, #e9ecef 100%);
    position: relative;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
  }

  .footer-area::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, rgba(242, 80, 27, 0.2) 0%, rgba(242, 80, 27, 0.8) 50%, rgba(242, 80, 27, 0.2) 100%);
  }

  .footer-main {
    padding: 60px 0 40px;
  }

  .footer-widget {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.8s ease;
  }

  .footer-widget.footer-animate {
    opacity: 1;
    transform: translateY(0);
  }

  .footer-logo {
    margin-bottom: 20px;
  }

  .footer-brand-img {
    height: 50px;
    filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    transition: transform 0.3s ease;
  }

  .footer-logo:hover .footer-brand-img {
    transform: scale(1.05);
  }

  .footer-desc {
    color: #6c757d;
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 15px;
  }

  .widget-title {
    position: relative;
    color: #343a40;
    font-size: 18px;
    margin-bottom: 25px;
    font-weight: 600;
    padding-bottom: 10px;
  }

  .widget-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background-color: #F2501B;
  }

  .footer-links {
    padding-left: 0;
    list-style: none;
    margin-bottom: 0;
  }

  .footer-links li {
    margin-bottom: 10px;
  }

  .footer-links a {
    color: #6c757d;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
    position: relative;
    padding-left: 0;
    display: inline-block;
  }

  .footer-links a:hover {
    color: #F2501B;
    padding-left: 8px;
  }

  .footer-links a::before {
    content: "›";
    position: absolute;
    left: -10px;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    color: #F2501B;
    font-size: 16px;
    transition: all 0.3s ease;
  }

  .footer-links a:hover::before {
    opacity: 1;
    left: 0;
  }

  .social-links {
    display: flex;
    gap: 12px;
  }

  .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: rgba(242, 80, 27, 0.1);
    color: #F2501B;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    background-color: #F2501B;
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(242, 80, 27, 0.2);
  }

  .newsletter-text {
    color: #6c757d;
    font-size: 14px;
    margin-bottom: 15px;
  }

  .newsletter-form .form-control {
    border-radius: 50px 0 0 50px;
    border: 1px solid #ced4da;
    padding: 10px 15px;
    height: auto;
    font-size: 14px;
  }

  .newsletter-form .form-control:focus {
    box-shadow: none;
    border-color: #F2501B;
  }

  .newsletter-btn {
    border-radius: 0 50px 50px 0;
    background-color: #F2501B;
    color: #fff;
    border: none;
    padding: 0 20px;
    transition: all 0.3s ease;
  }

  .newsletter-btn:hover {
    background-color: #e13c08;
  }

  .footer-bottom {
    background-color: #e9ecef;
    padding: 20px 0;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
    font-size: 14px;
  }

  .copyright {
    color: #6c757d;
  }

  .footer-bottom-links {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
    display: flex;
    gap: 20px;
    justify-content: flex-end;
  }

  @media (max-width: 767px) {
    .footer-bottom-links {
      justify-content: center;
    }
  }

  .footer-bottom-links li {
    position: relative;
  }

  .footer-bottom-links li:not(:last-child)::after {
    content: '•';
    position: absolute;
    right: -12px;
    color: #adb5bd;
  }

  .footer-bottom-links a {
    color: #6c757d;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .footer-bottom-links a:hover {
    color: #F2501B;
  }

  /* Animation delay for each widget */
  .col-lg-4 .footer-widget {
    transition-delay: 0.1s;
  }

  .col-lg-2 .footer-widget {
    transition-delay: 0.3s;
  }

  .col-lg-3:nth-of-type(3) .footer-widget {
    transition-delay: 0.5s;
  }

  .col-lg-3:nth-of-type(4) .footer-widget {
    transition-delay: 0.7s;
  }
</style>

</body>

</html>