<div class="card" style="max-height: 300px;">
    <div class="card-header">
        <h4 class="card-title">
            <i class="fas fa-building"></i> Información de la empresa
        </h4>
    </div>

    <div class="card-body scroll_vertical">
        <form id="frm_empresa">
            <div class="row">
                <div class="col-md-12">
                    <?= view('base/persona/datos_personales', $datos_personales)?>
                </div>
            </div>
        </form>
    </div>

    <div class="card-footer">
        <div class="row guardar">
            <div class="col-md-8">
                <button type="button" id="btn_guardar" class="btn btn-success w-100">
                    <i class="fas fa-save"></i> Guardar
                </button>
            </div>

            <div class="col-md-4">
                <button type="button" id="btn_cancelar" class="btn btn-danger w-100">
                    <i class="fas fa-times"></i> Cancelar
                </button>
            </div>
        </div>

        <div class="row botones">
            <div class="col-md-12">
                <div class="d-flex justify-content-around">
                    <button class="btn btn-info w-25 btn-grd" type="button" id="btn_editar">Editar
                        informacion</button>

                    <!-- Cambiar foto de perfil -->
                    <button class="btn btn-warning w-25" type="button" id="btn_foto">Cambiar imagen</button>

                    <button class="btn btn-danger w-25" type="button" id="btn_hacienda" data-toggle="modal"
                        data-target="#modalAccion">Ministerio de hacienda</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Modal para ver la infomracion del ministerio de hacienda-->
<?php echo view('base/form', $dataModal);?>