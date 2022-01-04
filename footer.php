<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
<style>
  // Base Style
.navbar {
    position: fixed;
    img {
        margin: 1em 0 0 1em;
        width: 200px;
    }
}
#content {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: url("https://s3.amazonaws.com/plloyd/codepen/eidfjord.jpg") no-repeat center center;
    background-size: cover;
    h1, h3 {
      margin: .5em 0;
      color: #fff;
      text-align: center;
    }
}
// Feature Style
#mobile-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    @media(min-width: 768px) {
        display: none;
    }
}
#mobile-menu {
    background: hsla(213, 48%, 69%,.8);
}
#mobile-footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    overflow: hidden;
}
.mobile-link {
    padding-top: 0.75em;
    padding-bottom: 0.75em;
}
.mobile-link a {
    font-size: 16px;
    color: #fff;
    text-decoration: none;
}
#mobile-footer-close {
    position: relative;
}
#mobile-footer-btn {
    position: absolute;
    bottom: 25px;
    right: 5px;
    width: 30px;
    height: 30px;
    background-color: #959192;
    border: none;
    border-radius: 50%;
    overflow: hidden;
    text-indent: 100%;
    color: transparent;
    white-space: nowrap;
    cursor: pointer;
    &:focus {
        outline: 0;
    }
}
.mobile-btn-close span,
.mobile-btn-close span::before {
    content: '';
    position: absolute;
    width: 5px;
    height: 18px;
    top: calc(50% - 9px);
    right: calc(50% + -2.5px);
    background-color: #fff;
    transform: rotate(-90deg);
    transition: 0.3s ease-out;
}
.mobile-btn-close {
    transition: 1s ease-out;
    &::focus {
        transition: 1s ease-out;
    }
}
.mobile-btn-close {
    span {
        transform: rotate(45deg);
        &::before {
            content: '';
            transform: rotate(-90deg);
        }
    }
}
.is-rotating {
    transform: rotate(135deg);
}
.is-rotating-back {
    transform: rotate(-90deg);
}
.mobile-menu-hide {
    animation: hideFooter 10s forwards;
}
.mobile-menu-show {
    animation: showFooter 1s forwards;
}
@keyframes hideFooter {
    0% {
        transform: translateY(0);
        opacity: 1;
    }
    100% {
        transform: translateY(1000px);
        opacity: 0;
    }
}
@keyframes showFooter {
    0% {
        transform: translateY(300px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>
</head>
<body>

</body>
<footer id="mobile-footer">
  <div id="mobile-menu">
    <div id="mobile-footer-container">
      <div class="mobile-link">
        <a href="index.php" class="text-center">Mon compte</a>
      </div>
      <div class="mobile-link">
        <a href="apropos.php" class="text-center">A propos du site</a>
      </div>
      <div class="mobile-link">
        <a href="contact.php" class="text-center">Contactez-nous</a>
      </div>
    </div>
  </div>
  <div id="mobile-footer-close">
    <button id="mobile-footer-btn">
      <div class="mobile-btn-close is-rotating-back">
        <span></span>
      </div>
    </button>
  </div>
</footer>
<script>
  (function($) {
  $(function() {
    // Store menu container
    var mobileMenu = '#mobile-menu';
    // Store Trigger
    var mobileBtn = '#mobile-footer-btn';

    var rotation = '.mobile-btn-close';

    $(mobileBtn).on("click", function(e) {
      e.stopPropagation();
      if ($(mobileMenu).hasClass('mobile-menu-hide') || $(rotation).hasClass('is-rotating')) {
        $(mobileMenu).removeClass("mobile-menu-hide").addClass("mobile-menu-show");
        $(rotation).removeClass("is-rotating").addClass("is-rotating-back");
      } else {
        $(mobileMenu).removeClass("mobile-menu-show").addClass("mobile-menu-hide");
        $(rotation).removeClass('is-rotating-back').addClass('is-rotating');
      }
    });
  });
})(jQuery);
</script>
</html>