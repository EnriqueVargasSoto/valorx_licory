!function(){"use strict";document.addEventListener("DOMContentLoaded",function(){var t,s,e,o,i=document.getElementsByClassName("liquory-sticky-add-to-cart");i.length&&("undefined"==typeof liquory_sticky_add_to_cart_params||0<(t=document.getElementsByClassName(liquory_sticky_add_to_cart_params.trigger_class)).length&&((s=function(){t[0].getBoundingClientRect().top+t[0].scrollHeight<0?(i[0].classList.add("liquory-sticky-add-to-cart--slideOutUp"),i[0].classList.remove("liquory-sticky-add-to-cart--slideInDown"),window.innerHeight+window.scrollY>=document.body.offsetHeight&&(i[0].classList.add("liquory-sticky-add-to-cart--slideInDown"),i[0].classList.remove("liquory-sticky-add-to-cart--slideOutUp"))):i[0].classList.contains("liquory-sticky-add-to-cart--slideOutUp")&&(i[0].classList.add("liquory-sticky-add-to-cart--slideInDown"),i[0].classList.remove("liquory-sticky-add-to-cart--slideOutUp"))})(),window.addEventListener("scroll",function(){s()}),e=null,document.body.classList.forEach(function(t){"postid-"===t.substring(0,7)&&(e=t.replace(/[^0-9]/g,""))}),!e||(o=document.getElementById("product-"+e))&&(o.classList.contains("product-type-simple")||o.classList.contains("product-type-external")||document.getElementsByClassName("liquory-sticky-add-to-cart__content-button")[0].addEventListener("click",function(t){t.preventDefault(),document.getElementById("product-"+e).scrollIntoView()}))))})}();