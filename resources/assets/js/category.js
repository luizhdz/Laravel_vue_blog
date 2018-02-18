new Vue({
  el:'#category_app',
  data:{
    categories: [],
    fill_category: {id:'',name:''},
    new_category: '',
    find_category: ''
  },
  mounted: function () {
     this.getCategories();
  },
  computed:{
    filterCategory :function(){
      return this.categories.filter(
        (category) => category.name.includes(this.find_category)
      );
    }
  },
  methods:{
    printConsole : function(){
      console.log(this.new_category);
    },
    getCategories : function(){
      var self = this;
      axios.get('/getCategories').then(function(resp){
        self.categories = resp.data;
      }).catch(function(error){
        console.log("error ",error);
      });
    },
    createCategory : function(){
      var self = this;
      axios.post('category',{
        name: self.new_category
      }).then(function(resp){
        self.getCategories();
        self.new_category = '';
        toastr.success('Categoria Creada Exitosamente!')
        $('#modal-category').modal('hide');
      }).catch(function(error){
        console.log("error ",error);
      });
      console.log(this.new_category);
    },
    deleteCategory : function(category){
      var self = this;
      if (confirm('Esta seguro que desea Eliminar la Categoria: '+category.name+' ?')) {
        axios.delete('category/'+category.id).then(function(resp){
          self.getCategories();
          toastr.success('Categoria Eliminada Exitosamente!')
        }).catch(function(error){
          console.log(error);
        });
      }
    },
    editCategory : function(category){
      this.fill_category.id = category.id;
      this.fill_category.name = category.name;
      $("#modal-edit-category").modal('show');
    },
    updateCategory : function(){
      var self = this;
      axios.put('category/'+self.fill_category.id,{
        name: self.fill_category.name
      }).then(function(resp){
        self.getCategories();
        toastr.success('Categoria Actualizada Exitosamente!');
        $("#modal-edit-category").modal('hide');

      }).catch(function(error){
        console.log(error);
      });
    }
  }
});
