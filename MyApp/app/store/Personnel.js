Ext.define('MyApp.store.Personnel', {
    extend: 'Ext.data.Store',
    
    alias: 'store.personnel',
    autoLoad: true,
    autoSync: true, //untuk memastikan frontend dan backend sync selalu
    fields: [
        'id', 'name', 'belt', 'special_power', 'created_at', 'updated_at'
    ],
    proxy: {
        type: 'rest',
        url:'http://localhost/Belajar_laravel/public/api/ninjas',

        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }
});
