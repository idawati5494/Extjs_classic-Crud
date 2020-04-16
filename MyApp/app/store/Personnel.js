Ext.define('MyApp.store.Personnel', {
    extend: 'Ext.data.Store',
    
    alias: 'store.personnel',
    autoLoad: true,
    autoSync: true,
    fields: [
        'id', 'name', 'belt', 'special_power', 'created_at', 'updated_at'
    ],

   

    proxy: {
        type: 'jsonp',
        api: {
            read: "http://localhost/belajar_extjs6/MyApp_php/readSport.php",
            update: "http://localhost/belajar_extjs6/MyApp_php/update.php",
            create: "http://localhost/belajar_extjs6/MyApp_php/create.php",
            destroy: "http://localhost/belajar_extjs6/MyApp_php/destroy.php"
        },
        reader: {
            type: 'json',
            rootProperty: 'items'
        }
    }
});
