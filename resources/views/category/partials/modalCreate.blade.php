<div class="modal fade" id="modal-category">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="button" class="close"
                data-dismiss="modal">
                <span>&times;</span>
        </button>
        <h2>Crear Nueva Categoria</h2>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="new_category">Categoria</label>
          <input type="text" name="new_category"
                 class="form-control" placeholder="Nueva Categoria"
                 v-model="new_category"
                 @keyup="printConsole">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" name="button"
                class="btn btn-default btn-sm"
                data-dismiss="modal">
                Cancelar
        </button>
        <button type="button" name="button"
                class="btn btn-success btn-sm"
                @click.preventDefault="createCategory" >
          Crear
        </button>
      </div>
    </div>
  </div>
</div>
