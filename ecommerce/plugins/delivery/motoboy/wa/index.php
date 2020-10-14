<?php 
header('Access-Control-Allow-Origin: *');
require_once('../../../../../includes/funcoes.php');
require_once('../../../../../database/config.database.php');
require_once('../../../../../database/config.php');
?>



<label for="motoboy" id="poeirao" style='cursor:pointer; margin-left:10px;'>
  </label>
<script>
 

fetch('<?php echo ConfigPainel('base_url')."ecommerce/plugins/delivery/motoboy/wa/api.php";?>').then( (response) => {
    response.json().then(data => {
const max = data.id_<?php echo intval($_GET['id']); ?>.max;
const min = data.id_<?php echo intval($_GET['id']); ?>.min;
const peso = <?php echo $_GET['peso']; ?>;
const valor = data.id_<?php echo intval($_GET['id']); ?>.valor;
const descricao = data.id_<?php echo intval($_GET['id']); ?>.descricao;
const box ="<input type='radio' style='cursor:pointer;white-space: nowrap' name='frete' id='motoboy' value='"+parseFloat(valor).toFixed(2).replace('.', ',')+"'><b> Dedicado</b><br> "+descricao+" valor R$ "+parseFloat(valor).toFixed(2).replace('.', ',');
if(peso >= min && peso <= max ){
    document.getElementById('poeirao').innerHTML= box;
console.log(valor);
}
});

}).catch(err => console.error(err));

</script>

