let mybutton = document.getElementById("scrolls");



function upscroll() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



window.onscroll = function () { scrollFunction() };

function scrollFunction() {

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById('scrolls').style.opacity = 1;
  } else {
    document.getElementById('scrolls').style.opacity = 0;
  }

  if (document.body.scrollTop > screen.width / 16 * 9 - 100 || document.documentElement.scrollTop > screen.width / 16 * 9 - 100) {

    document.getElementById("nav-heading").classList.add("fade-in");
    document.getElementById("nav-heading").classList.add("opacity");
    document.getElementById("navbar-inner").classList.add("bg-changer");
    document.getElementById("navbar-inner").classList.add('navs');
    document.getElementById("nav-link1").classList.add('ammend');
    document.getElementById("nav-link2").classList.add('ammend'); document.getElementById("nav-link3").classList.add('ammend'); document.getElementById("nav-link4").classList.add('ammend'); document.getElementById("nav-link5").classList.add('ammend'); document.getElementById("nav-link6").classList.add('ammend'); document.getElementById("nav-link7").classList.add('ammend'); document.getElementById("nav-link8").classList.add('ammend'); document.getElementById("nav-link9").classList.add('ammend');

  } else {
    document.getElementById("navbar-inner").classList.remove('navs');
    document.getElementById("nav-heading").classList.remove('fade-in');
    document.getElementById("nav-heading").classList.remove('opacity');
    document.getElementById("navbar-inner").classList.remove("bg-changer");
    document.getElementById("nav-link1").classList.remove("ammend");
    document.getElementById("nav-link2").classList.remove("ammend");
    document.getElementById("nav-link3").classList.remove("ammend");
    document.getElementById("nav-link4").classList.remove("ammend");
    document.getElementById("nav-link5").classList.remove("ammend");
    document.getElementById("nav-link6").classList.remove("ammend");
    document.getElementById("nav-link7").classList.remove("ammend");
    document.getElementById("nav-link8").classList.remove("ammend");
    document.getElementById("nav-link9").classList.remove("ammend");
  }

}
var i = 0;
var txt = "Tech Wings";
var speed = 50;

function xxx() {
  if (i < txt.length) {
    document.getElementById("typ").innerHTML += txt.charAt(i);
    i++;
    setTimeout(xxx, 90);
  }
}

function printpage() {
  window.print();
}

function c() {

  var input = document.getElementById("csearch_bar");
  var filter = input.value.toUpperCase();
  var tr = document.getElementById("ctable-of").getElementsByTagName("tr");
  var output = parseInt(document.getElementById('csearch-dropdown').value);

  for (i = 0; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[output];
    if (td) {

      if (td.innerText.toUpperCase().indexOf(filter) >= 0) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


function factory() {
  
 

  document.getElementById("products").style.display = 'none';
  document.getElementById("factory").style.display = 'flex';

  document.getElementById('factory-btn').classList.add('change-btn');
  document.getElementById('products-btn').classList.remove('change-btn');


}


function products() {
 


  document.getElementById("products").style.display = 'flex';
  document.getElementById("factory").style.display = 'none';

  document.getElementById('factory-btn').classList.remove('change-btn');
  document.getElementById('products-btn').classList.add('change-btn');
}




