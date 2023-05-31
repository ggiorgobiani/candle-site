import './styles/homepage.css';


let pouredCatalogNode = document.getElementsByClassName('pouredCatalogNode')[0];
let fondantCatalogNode = document.getElementsByClassName('fondantCatalogNode')[0];

pouredCatalogNode.addEventListener('click', function() {
  window.location.href = '/poured';
});

fondantCatalogNode.addEventListener('click', function() {
    window.location.href = '/fondant';
});

    
window.addEventListener('scroll', () => {
  const element = document.querySelector('.aboutImg img');
  const position = element.getBoundingClientRect().top;
  const windowHeight = window.innerHeight;
  if (position < windowHeight) {
    element.classList.add('move');
  }else{
    element.classList.remove('move');
  }


});