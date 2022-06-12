// Ver console no VisualCode
//console.log("Hello Word");

//Exemplo de funcao que traz numeros Pares de uma lista

function returnEvenValues(array) {
    let evenNums = [];
    for(let i = 0; i < array.length; i++) {
        if(array[i] % 2 ===0) {
          evenNums.push(array[i]);  
        } else{
            console.log({`${array[i]} nao e par`)
        }
    }
    console.log("Os numero pares sao:",evenNums);
}

let array = [1, 2, 4, 5, 7, 8];

returnEvenValues(array);
