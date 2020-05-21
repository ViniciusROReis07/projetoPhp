"use stritc";

const maskFone = ( $el ) => {
    let aux = $el.value;
    aux = aux.replace (/[^0-9]/g, '');
    aux = aux.replace (/(.{2})(.{4})(.{4})/,'($1) $2-$3');
    $el.value = aux;
}

const maskCelular = ( $el ) => {
    let aux = $el.value;
    aux= aux.replace (/[^0-9]/g, '');
    aux= aux.replace (/(.{2})(.{5})(.{4})/, '($1) $2-$3');
    $el.value= aux;
}


document.getElementById('telefone').addEventListener('keyup', (e) => maskFone(e.target)  );

document.getElementById('celular').addEventListener('keyup', (e) => maskCelular(e.target) );


