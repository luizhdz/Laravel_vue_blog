<table class="table table-responsive table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Categoria</th>
      <th colspan="2" > &nbsp; </th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="category in filterCategory" >
      <td v-text="category.id"></td>
      <td v-text="category.name"></td>
      <td width="15px">
        <button type="button" name="button"
        class="btn btn-warning btn-sm"
        @click="editCategory(category)">
        Editar
      </button>
    </td>
    <td width="15px">
      <button type="button" name="button"
              class="btn btn-danger btn-sm"
              @click="deleteCategory(category)">
        Eliminar
      </button>
    </td>
  </tr>
  </tbody>
</table>
