<div class="container-fluid" style="text-align: center;">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Calculadora de Festas</h1>
            <form action="<?= base_url() ?>calcular" method="POST" id="formulario" class="form">
                <div class="form-group">
                    <label>Aldultos</label>
                    <input type="number" name="adultos" class="form-control">
                </div>
                <div class="form-group">
                    <label>Crianças</label>
                    <input type="number" name="criancas" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tera bebida alcoólica</label></br>
                    Sim:<input type="radio" value="1" checked="" name="bebida">
                    Não:<input type="radio" value="0" name="bebida">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" value="Calcular">
                </div>
            </form>  
            <?php if (!empty($resultados)) { ?>
                <h1>Resultados</h1>
                <table class="table table-bordered">
                    <thead class="alert alert-success">
                        <tr>
                            <th>Salgados Adultos</th>
                            <th>Salgados Crianças</th>
                            <th>Doces Crianças</th>
                            <th>Carne Geral</th>
                            <th>Refrigerante Geral</th>
                            <th>Cerveja Total</th>
                            <th>Whisky Geral</th>
                            <th>Subtração Cerveja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $resultados[0]; ?></td>
                            <td><?= $resultados[1]; ?></td>
                            <td><?= $resultados[2]; ?></td>
                            <td><?= $resultados[3]; ?></td>
                            <td><?= $resultados[4]; ?></td>
                            <td><?= $resultados[5]; ?></td>
                            <td><?= $resultados[6]; ?></td>
                            <td><?= $resultados[7]; ?></td>
                        </tr>
                    </tbody>               
                </table>
            <?php } else { ?>
                <h1>Veja os Resultados</h1>
            <?php } ?>
        </div>
        <div class="col-md-2"></div>        
    </div>
</div>
<div class="col-md-3"></div>
</div>    
</div>
