      /*==========================
        тайтол блядь
    ============================*/
    
    $(function() {
      var title = document.title,
        animSeq = ["/", "-", "-", "|", "\\"],
          animIndex = 0,
          titleIndex = 0;
      function doInverseSpinZeroPitch() {
          var loadTitle = title.substring(0, titleIndex);
          if (titleIndex > title.length) {
              animIndex = 0;
              titleIndex = 0
          }
          if (animIndex > 1) {
              titleIndex++;
              animIndex = 0
          }
          document.title = loadTitle + animSeq[animIndex];
          animIndex++
      }
      window.setInterval(doInverseSpinZeroPitch, 400);
  });
  
    /*==========================
        тайпед сука
    ============================*/
$(function() {
	$(".typed").typed({
        strings: ["budu tvouim <br> pussy cum.", "Web Developer.", "Долбоёб."],
        typeSpeed: 100,
        loop: true,
        cursorChar: "|",
    });
});
        