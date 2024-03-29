const form   = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans  = document.querySelectorAll('.span-required');
const emailRegex = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

form.addEventListener('submit', (evento) => {
    evento.preventDefault();
    nomeValido();
    emailValido();
    messagemValida();
});

function definirErro(index){
    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';
}

function removerErro(index){
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nomeValido(){
    if(campos[0].value.length < 3)
    {
        definirErro(0);
    }
    else
    {
        removerErro(0);
    }
}

function emailValido(){
    if(!emailRegex.test(campos[1].value))
    {
        definirErro(1);
    }
    else
    {
        removerErro(1);
    }
}

function messagemValida(){
    if(campos[2].value.trim() === '') 
    {
        definirErro(2);
    } 
    else 
    {
        removerErro(2);
    }
}
