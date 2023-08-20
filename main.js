//Destructuring Object
const profile = {
    firstName : "Yusuf",
    lastName : "Hidayat",
    age: 18
}

const {firstName,lastName,age} = profile;
console.log(firstName,lastName,age);

//Destructuring assignment
const profilAss={
    firstNameAss :"mohammad",
    lastNameAss :"yusuf",
    ageAss: 19
}

let firstNameAss = "Dimas";
let ageAss ="40";
({firstNameAss,ageAss}=profilAss);

console.log(firstNameAss);
console.log(ageAss);