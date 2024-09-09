
const preguntas = [
    { id: 'botones1', correcta: 'correcta1' },
    { id: 'botones2', correcta: 'correcta2' },
    { id: 'botones3', correcta: 'correcta3' },
    { id: 'botones4', correcta: 'correcta4' },
    { id: 'botones5', correcta: 'correcta5' },
    { id: 'botones6', correcta: 'correcta6' },
    { id: 'botones7', correcta: 'correcta7' },
    { id: 'botones8', correcta: 'correcta8' },
    { id: 'botones9', correcta: 'correcta9' }
];


function setBorderColor(div, isCorrect) {
    div.style.borderColor = isCorrect ? 'green' : 'red';
}

function verificarRespuestas() {
    preguntas.forEach(pregunta => {
        let div = document.getElementById(pregunta.id);
        let correcta = document.getElementById(pregunta.correcta);
        setBorderColor(div, correcta.checked);
    });
}

let btnVerify = document.getElementById('verify');
btnVerify.addEventListener('click', verificarRespuestas);



