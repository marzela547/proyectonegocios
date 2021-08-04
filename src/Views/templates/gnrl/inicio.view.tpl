<section class="inicio">
    <section class="descripcion">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque ac nisi vel dui egestas vulputate nec feugiat mauris.
                    Suspendisse ac odio nec dui volutpat bibendum non sed purus.
                    Proin sed nisl eros. Mauris non velit pretium, laoreet ante ut, mattis nunc.
                    Cras vitae semper sem. Fusce eu diam nec justo pretium egestas.
                    Duis viverra orci vitae auctor sollicitudin. Donec sed gravida lectus.
                    Fusce sagittis libero quam, a lobortis metus dignissim a. Aenean enim quam, sodales eget feugiat ut, pretium sed nisi.
                    Pellentesque ut eros in est imperdiet dapibus.

                    Praesent ut elit interdum, eleifend lorem a, ullamcorper ante.
                    In hac habitasse platea dictumst. Duis congue porttitor ante a sollicitudin.
                    Fusce mollis fringilla leo, et viverra nisl rutrum sit amet. Nunc et orci est.
                    Proin luctus metus quis molestie ultrices.
                    Fusce ut cursus enim. Nam mi libero, vestibulum nec aliquet ut, iaculis eget nibh.
                    Phasellus ex magna, efficitur vitae arcu at, placerat vulputate nulla. Suspendisse tincidunt dignissim nulla non lobortis.
                    Praesent mollis nisi dui, at mattis dui porttitor sit amet.
                    Proin urna ligula, congue sit amet rhoncus posuere, maximus eget justo.
                    Morbi iaculis, felis nec finibus molestie, mi nibh convallis lacus, eget commodo mi nisi non odio.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Quisque ac nisi vel dui egestas vulputate nec feugiat mauris.
                    Suspendisse ac odio nec dui volutpat bibendum non sed purus.
                    Proin sed nisl eros. Mauris non velit pretium, laoreet ante ut, mattis nunc.
                    Cras vitae semper sem. Fusce eu diam nec justo pretium egestas.
                    Duis viverra orci vitae auctor sollicitudin. Donec sed gravida lectus.
                    Fusce sagittis libero quam, a lobortis metus dignissim a. Aenean enim quam, sodales eget feugiat ut, pretium sed nisi.
                    Pellentesque ut eros in est imperdiet dapibus.

                    Praesent ut elit interdum, eleifend lorem a, ullamcorper ante.
                </p>
    </section>
    <section class="slider">
            <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="/{{~BASE_DIR}}/public/img/1.7.png" style="width:100%">
                <div class="text">Caption Text</div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="/{{~BASE_DIR}}/public/img/5.1.png" style="width:100%">
                <div class="text">Caption Two</div>
              </div>
              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="/{{~BASE_DIR}}/public/img/9.2.png" style="width:100%">
                <div class="text">Caption Three</div>
              </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
    </section>
</section>
  <script>
  var slideIndex = 1;
  showSlides(slideIndex);
  
  function plusSlides(n) {
    showSlides(slideIndex += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>
  