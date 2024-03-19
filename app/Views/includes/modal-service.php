<!-- Modal Service -->
<div class="modal modal-dialog-scrollable fade" id="modalService" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalServiceLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalServiceLabel">Novo Serviço</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="<?php echo url_to('home.store') ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 my-2">
                            <input type="text" class="form-control" name="order_num" placeholder="Ordem" aria-label="Ordem" value="0001" disabled>
                        </div>
                        <div class="col-6 my-2">
                            <select class="form-select" name="service_type" id="service_type">
                                <option value="1">Computador</option>
                                <option value="2">Redes</option>
                                <option value="3">Cameras</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <select class="form-select" name="service_category" id="service_category">
                                <option value="1">Manutenção preventiva</option>
                                <option value="2">Manutenção corretiva</option>
                                <option value="3">Instalação</option>
                                <option value="4">Configuração</option>
                                <option value="4">Consultoria</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>