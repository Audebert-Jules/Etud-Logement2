window.onload = function() {
    document.getElementById("header1").addEventListener("click", function() {
      // masque ou affiche la balise p suivant son état actuel
      if (document.getElementById("paragraph1").style.display === "none") {
        document.getElementById("paragraph1").style.display = "block";
      } else {
        document.getElementById("paragraph1").style.display = "none";
      }
    });
  
    document.getElementById("header2").addEventListener("click", function() {
      // masque ou affiche la balise p suivant son état actuel
      if (document.getElementById("paragraph2").style.display === "none") {
        document.getElementById("paragraph2").style.display = "block";
      } else {
        document.getElementById("paragraph2").style.display = "none";
      }
    })
    document.getElementById("header3").addEventListener("click", function() {
        // masque ou affiche la balise p suivant son état actuel
        if (document.getElementById("paragraph3").style.display === "none") {
          document.getElementById("paragraph3").style.display = "block";
        } else {
          document.getElementById("paragraph3").style.display = "none";
        }
      });
      document.getElementById("header4").addEventListener("click", function() {
        // masque ou affiche la balise p suivant son état actuel
        if (document.getElementById("paragraph4").style.display === "none") {
          document.getElementById("paragraph4").style.display = "block";
        } else {
          document.getElementById("paragraph4").style.display = "none";
        }
      });};