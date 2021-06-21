// let frutas = "frutas";
// let foo = ["Melancia", "Manga", "Laranja", "Abacaxi"];
// let names = ["alexandre","magno","Gabriel","Raul","Jair Bolsonaro"];
// let Presidentes = ["Hamiltom Mourão","General Heleno","General Pazuelo"];
// let Vicegovernadores = ["Reinaldo da silva","Gael","hugo"];
// let Prefeitos = ["Marcos Neves-Carapicuiba","Eduardo Leite","Rogerio Lins-Osasco","Bruno Covas-SP"];
// let cont = 0;
// let i=0;
// for (let cont=0; cont <= 9; cont++){
//     console.log('valor' + names[cont]);
// }
// for (let i = 0;  i < 4; i++) {
//     console.log(frutas + foo[i]);
// }
let sub1 = document.getElementsByClassName('subcontent')
console.log(sub1)
let sub1r = true;
let sub2r = true;
let sub3r = true;
let sub4r = true;

const subcontent = (val) => {
    if (val == 0) {
        if (sub1r) {
            sub1[val].style.display = 'block'
            sub1[1].style.display = 'none'
            sub1[2].style.display = 'none'
            sub1[3].style.display = 'none'

            sub2r = true;
            sub3r = true;
            sub4r = true;
            sub1r = false
        } else {
            sub1[val].style.display = 'none'
            sub1r = true;
        }
    }
    if (val == 1) {
        if (sub2r) {
            sub1[val].style.display = 'block'
            sub1[0].style.display = 'none'
            sub1[2].style.display = 'none'
            sub1[3].style.display = 'none'
            sub1r = true;
            sub3r = true;
            sub4r = true;
            sub2r = false
        } else {
            sub1[val].style.display = 'none'
            sub2r = true;
        }
    }
    if (val == 2) {
        if (sub3r) {
            sub1[val].style.display = 'block'
            sub1[0].style.display = 'none'
            sub1[1].style.display = 'none'
            sub1[3].style.display = 'none'
            sub2r = true;
            sub1r = true;
            sub4r = true;
            sub3r = false
        } else {
            sub1[val].style.display = 'none'
            sub3r = true;
        }
    }
    if (val == 3) {
        if (sub4r) {
            sub1[val].style.display = 'block'
            sub1[0].style.display = 'none'
            sub1[1].style.display = 'none'
            sub1[2].style.display = 'none'
            sub2r = true;
            sub3r = true;
            sub1r = true;
            sub4r = false
        } else {
            sub1[val].style.display = 'none'
            sub4r = true;
        }
    }
}