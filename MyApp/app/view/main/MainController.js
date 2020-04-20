/**
 * This class is the controller for the main view for the application. It is specified as
 * the "controller" of the Main view class.
 *
 * TODO - Replace this content of this view to suite the needs of your application.
 */
Ext.define('MyApp.view.main.MainController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.main',

    onClickButton: function(){
        localStorage.removeItem('LoggedIn');
        this.getView().destroy();
        Ext.create({
            xtype:'login'
        })
    },
        

    onAddClick : function (button, event){
        var list = button.up('mainlist');
        let store = list.getStore();
        // location.reload();
        let rowediting = list.getPlugin();
        store.setAutoSync(false);
        var record = {
            name : "",
            belt:"",
            special_power:"",
            created_at: Date(),
            updated_at: Date(),
        }; 
        var model = store.getModel();
        record= new model(record);
        store.insert(0, record);
        // console.log(rowediting)
        rowediting.startEdit(record, 0);
        store.setAutoSync(true);
    },
    
    onItemSelected: function (sender, record){
        var button = Ext.ComponentQuery.query('button#delete')[0];
        // console.log(button);
        button.enable(true)
    },
    onRemoveClick:function(button, grid, rowIndex, collIndex){
        if (grid){
            var grid = button.up('mainlist');
            var model = grid.getStore().getAt(rowIndex);
            

        // if(!model){
        //     Ext.Msg.alert('Info', 'No Record Selected');
        //      }
            Ext.Msg.confirm('Remove Record', 'yakin mau menghapus?',
            function (button){
                if(button == 'yes'){
                    var model = grid.getSelectionModel().getSelection();
                    grid.store.remove (model);
                    grid.store.sync()

                 }
            });

        }

    }

        // onConfirm: function (choice) {
        //     if (choice === 'yes') {
        //         //
        //     }
   
});
