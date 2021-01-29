let cliente = {nome: 'Pedro',sexo: 'M',idade: 33}
console.log('Cadastro Cliente:')
console.log(`Nome: ${cliente.nome}`)
console.log(`Sexo: ${cliente.sexo}`)
console.log(`Idade: ${cliente.idade}`)

console.log('-------------------------------')
let amigo = {nome: 'José', peso:80.5,
engordou(p=0){
    this.peso += p
    console.log(`Engordou ${p}Kg`)
}}
console.log(`${amigo.nome} pesava ${amigo.peso}Kg`)
amigo.engordou(2)
console.log(`${amigo.nome} pesa ${amigo.peso}Kg`)