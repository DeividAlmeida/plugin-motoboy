
<div id="poeirao" style='margin-left:0px; white-space: nowrap'></div>



<script>
    window.onload = () => {

fetch('api.php').then( (response) => {
    response.json().then(data => {
const max = data.id_<?php echo $_GET['id']; ?>.max;
const min = data.id_<?php echo $_GET['id']; ?>.min;
const peso = <?php echo $_GET['peso']; ?>;
const valor = data.id_<?php echo $_GET['id']; ?>.valor;
const descricao = data.id_<?php echo $_GET['id']; ?>.descricao;
const box ="<input type='radio' style='cursor:pointer;white-space: nowrap' name='frete' id='motoboy' value='"+parseFloat(valor).toFixed(2).replace(".", ",")+"'><label for='motoboy' style='cursor:pointer; white-space: nowrap'>"+descricao+"valor R$ "+parseFloat(valor).toFixed(2).replace(".", ",")+"</label>";
if(peso >= min && peso <= max ){
    document.getElementById('poeirao').innerHTML= box;
console.log(valor);
}
});

}).catch(err => console.error(err));
}
</script>

