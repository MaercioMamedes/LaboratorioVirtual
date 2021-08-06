var inicio = document.querySelector("article#descricao p");
var texto = inicio.innerText;
function ti(){
    let x = document.querySelector("article#descricao p");
    x.innerText="As tecnologias da informação, englobam diversas áreas do conhecimento, principalmente Lógica Booleana e Matemática"+
    " Neste Laboratório é abordado diversos exemplos interativos de como esses conceitos são aplicados na prática";
}

function out(){
    let x = document.querySelector("article#descricao p");
    x.innerHTML= texto;
}


function mathe(){
    let x = document.querySelector("article#descricao p");
    x.innerText = "A Matemática é a rainha das Ciências, sem ela, nenhuma tecnologia do mundo atual seria possível."+
    " Neste Laboratório será abordado diversos tema da Matemática, de forma interativa e didática.";
}

function phisi(){
    let x = document.querySelector("article#descricao p");
    x.innerText = "A física é a principal ciência aplicada, que proporciona a materialização dos conceitos lógicos computacionais"+
    " Neste laboratório será abordado diversos experimentos virtuais das mais diversas áreas da Física";
}