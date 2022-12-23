
window.onload = function() {
    document.getElementById("header1").addEventListener("click", function() {
      // masque ou affiche la balise p suivant son état actuel
      if (document.getElementById("paragraph1").style.display === "none") {
        document.getElementById("paragraph1").style.display = "block";
        document.getElementById("br1").style.display = "none";
      } else {
        document.getElementById("paragraph1").style.display = "none";
        document.getElementById("br1").style.display = "block";
      }
    });
  
    document.getElementById("header2").addEventListener("click", function() {
      // masque ou affiche la balise p suivant son état actuel
      if (document.getElementById("paragraph2").style.display === "none") {
        document.getElementById("paragraph2").style.display = "block";
        document.getElementById("br2").style.display = "none";
      } else {
        document.getElementById("paragraph2").style.display = "none";
        document.getElementById("br2").style.display = "block";
      }
    })
    document.getElementById("header3").addEventListener("click", function() {
        // masque ou affiche la balise p suivant son état actuel
        if (document.getElementById("paragraph3").style.display === "none") {
          document.getElementById("paragraph3").style.display = "block";
          document.getElementById("br3").style.display = "none";
        } else {
          document.getElementById("paragraph3").style.display = "none";
          document.getElementById("br3").style.display = "block";
        }
    });
    document.getElementById("header4").addEventListener("click", function() {
        // masque ou affiche la balise p suivant son état actuel
        if (document.getElementById("paragraph4").style.display === "none") {
          document.getElementById("paragraph4").style.display = "block";
          document.getElementById("br4").style.display = "none";
        } else {
          document.getElementById("paragraph4").style.display = "none";
          document.getElementById("br4").style.display = "block";
        }
    });
    document.getElementById("header5").addEventListener("click", function() {
        // masque ou affiche la balise p suivant son état actuel
        if (document.getElementById("paragraph5").style.display === "none") {
          document.getElementById("paragraph5").style.display = "block";
          document.getElementById("br5").style.display = "none";
        } else {
          document.getElementById("paragraph5").style.display = "none";
          document.getElementById("br5").style.display = "block";
        }
    });
};
