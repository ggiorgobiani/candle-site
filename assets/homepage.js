import './styles/homepage.css';


let body = document.querySelector('body');
let productCatalog = document.getElementById('productCatalog');

let mainDivCatalogs = document.createElement('div');
    mainDivCatalogs.classList.add('divCatalogs');
    body.appendChild(productCatalog);
    productCatalog.append(mainDivCatalogs)

let divCatalogPoured = document.createElement('div');
let imgPouredNode = document.createElement('img');
let titleCatalogPoured = document.createElement('h5');
let titleCatalogPouredText = document.createTextNode('Bougie coulée');
    imgPouredNode.src = 'img/coule.jpg';
    divCatalogPoured.classList.add('pouredCatalogNode');
    divCatalogPoured.appendChild(imgPouredNode);
    divCatalogPoured.appendChild(titleCatalogPoured);
    titleCatalogPoured.appendChild(titleCatalogPouredText);
    mainDivCatalogs.appendChild(divCatalogPoured);


let divCatalogFondant = document.createElement('div');
let imgFondantNode = document.createElement('img');
let titleCatalogFondant = document.createElement('h5');
let titleCatalogFondantText = document.createTextNode('Fondants');
    imgFondantNode.src = 'img/fondant.jpg';
    divCatalogFondant.classList.add('fondantCatalogNode');
    divCatalogFondant.appendChild(imgFondantNode);
    divCatalogFondant.appendChild(titleCatalogFondant);
    titleCatalogFondant.appendChild(titleCatalogFondantText);
    mainDivCatalogs.appendChild(divCatalogFondant);

    
        divCatalogPoured.addEventListener('click', function() {
        window.location.href = 'pagePoured.php';
        });
    
        divCatalogFondant.addEventListener('click', function() {
        window.location.href = 'pageFondant.php';
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