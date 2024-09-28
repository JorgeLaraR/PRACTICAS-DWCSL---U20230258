//1. Desestructura el índice 2 de amigos del objeto gato.

const { otros: { amigos: [, , amigoIndice2] } } = gato;
console.log(amigoIndice2); 


//2. Desestructura el valor de comida caliente.

const { otros: { favoritos: { comida: { caliente } } } } = gato;
console.log(caliente); 


//3. Crea un set el cual agregue un nuevo valor en favoritos, el cual se llamará lugares.

gato.otros.favoritos.lugares = [];
console.log(gato.otros.favoritos.lugares);


//4. Crea un set que agregue un valor dentro de lugares (que creaste anteriormente), 
// agrega dos lugares favoritos de los gatos, por ejemplo: caja, sofá.

gato.otros.favoritos.lugares.push('caja', 'sofá'); 
console.log(gato.otros.favoritos.lugares);