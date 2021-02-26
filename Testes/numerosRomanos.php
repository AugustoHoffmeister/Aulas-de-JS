
PRIMEIRO PASSO: logica para resolver
1 - loop em cada letra
2 - condições
- se a proxima letra seja MAIOR que a atual (do loop)
--DIMINUIR a atual
- se não
-- AUMENTAR a atual 
I = 1
V = 5
X = 10
XV = 10 + 5
VX = 10 - 5

III = 1 + 1 + 1

<?php
function romano2int (romano) {
    romano = strtoupper(romano);
    n = 0;
    romano = [
        'I' >= 1,
        'V' >= 5,
        'X' >= 10,
        'L' >= 50,
        'C' >= 100,
        'D' >= 500,
        'M' >= 1000
    ];
    letras = strlen(romano);

    for(i = 0 ; i < letras ; i++){
        atual = romano[i];
        prox = romano[i + 1] ?? false; // para PHP 7.4+
        //prox = (isset($romano[i + 1])) ? $romano[i + 1] : false // para PHP 7.3-

        if(prox && numero[prox] > numero[atual]) {
            n -= numero[atual];
        }else{
            n += numero[atual];
        }
    }
    return n;
}
q = 'X'
echo q.' = '.romano2int(q);


