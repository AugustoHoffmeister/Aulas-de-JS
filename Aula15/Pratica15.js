let num = [5,8,2,9,3]
//for(let i=0;i<num.length;i++ ){
for(let i in num){
    console.log(`Indice: ${i} tem valor ${num[i]}`)

}
let b = num.indexOf(9)
console.log(`O valor está no indice ${b}`)
console.log(`Este array possue ${num.length} elementos`)
console.log(`Valores em ordem crescente: ${num.sort()}`)