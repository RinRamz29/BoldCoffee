function iniciarApp(){scrollNav()}function scrollNav(){document.querySelector(".header__text a").addEventListener("click",(function(e){e.preventDefault();const t=e.target.attributes.href.value;document.querySelector(t).scrollIntoView({behavior:"smooth"})}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));
//# sourceMappingURL=scripts.js.map
