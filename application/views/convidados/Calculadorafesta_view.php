<div class="row" style="text-align: center; margin-top: 50px;">
    <div class="col-md-3"></div>
    <div class="col-md-6 col-sm-12">
        <h1>Calculadora de Festas</h1>
        <form action="<?= base_url() ?>calcular" method="POST" id="formulario" class="form" style="border-radius: 12px;">
            <div class="form-group">
                <label>Adultos</label>
                <input type="number" name="adultos" class="form-control">
            </div>
            <div class="form-group">
                <label>Crianças</label>
                <input type="number" name="criancas" class="form-control">
            </div>
            <div class="form-group">
                <label>Terá bebida alcoólica</label></br>
                Sim:<input type="radio" value="1" checked="" name="bebida">
                Não:<input type="radio" value="0" name="bebida">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Calcular">
            </div>
        </form>                
    </div>
    <div class="col-md-3"></div>      
</div>
<?php if (!empty($resultados)) { ?>               
    <div class="container">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <center><h1>Resultados</h1></center>
            <div style="text-align: center; border: 1px solid #000; background-color: white; border-radius: 12px;">
                <ul style="list-style: none; display: inline;" class="resultado">
                    <li style="text-align: center;"><span><b>Salgados Adultos:</b> <?= $resultados[0]; ?></span></li>
                    <li style="text-align: center;"><b>Salgados Crianças:</b> <?= $resultados[1]; ?></li>
                    <li style="text-align: center;"><span><b>Doces Crianças:</b> <?= $resultados[2]; ?></span></li>
                    <li style="text-align: center;"><span><b>Carne Geral:</b> <?= $resultados[3]; ?></span></li>
                    <li style="text-align: center;"><span><b>Refrigerante Geral:</b> <?= $resultados[4]; ?></span></li>
                    <li style="text-align: center;"><span><b>Cerveja Total:</b> <?= $resultados[5]; ?></span></li>
                    <li style="text-align: center;"><span><b>Whisky Geral:</b> <?= $resultados[6]; ?></span></li>
                    <li style="text-align: center;"><span><b>Subtração Cerveja:</b> <?= $resultados[7]; ?></span></li>
                    <li style="text-align: center;"><a href="<?=base_url()?>limpar" class="btn btn-danger">Limpar</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

<?php } else { ?>
    <p>...</p>
<?php } ?>        


