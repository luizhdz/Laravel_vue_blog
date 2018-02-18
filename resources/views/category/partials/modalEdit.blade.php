<div class="modal fade" id="modal-edit-category">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" name="button" class="close"
                data-dismiss="modal">
                <span>&times;</span>
        </button>
        <h2>Editar Categoria</h2>
      </div>
      <div class="modal-body">
        <input type="hidden" v-model="fill_category.id" >
        <div class="form-group">
          <label for="edit_category">Categoria</label>
          <input type="text" name="edit_category"
                 class="form-control" placeholder="Editar Categoria"
                 v-model="fill_category.name"
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
                @click.preventDefault="updateCategory" >
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
