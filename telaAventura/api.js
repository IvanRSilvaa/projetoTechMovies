const apiKey = 'f5c5b663';
const frmPesquisa = document.querySelector("form");
frmPesquisa.onsubmit = (ev) =>{
    function alert(){
    Swal.fire('Sucesso', 'Usuário cadastrado com sucesso!', 'success');
    }
    alert();
    
    fetch("https://www.omdbapi.com/?i=${pesquisa}&apikey=${apiKey}")
    .then(result => result.json())
    .then(json => console.log(json));
}
