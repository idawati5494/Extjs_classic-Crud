/**
 * This view is an example list of people.
 */
Ext.define('MyApp.view.main.List', {
    extend: 'Ext.grid.Panel',
    xtype: 'mainlist',

    requires: [
        'MyApp.store.Personnel'
    ],

    title: 'Extjs6 Sport-Example @id',

    store: {
        type: 'personnel'
    },

    plugins:{
        ptype:'rowediting'
    },

    columns: [
        // {text: 'Id', dataIndex: 'id' },
        { text: 'Name',  dataIndex: 'name', editor:'textfield'},
        { text: 'Belt', dataIndex: 'belt', editor:'textfield' },
        { text: 'Special_power', dataIndex: 'special_power', editor:'textfield' },
        { text: 'Created_at', dataIndex: 'created_at' },
        { text: 'Updated_at', dataIndex: 'updated_at' },
    ],
    tbar: [{
        xtype:'button',
        text:'Add',
        handler: 'onAddClick',
        autoLoad: false

    },
    {
        xtype: 'button',
        text: 'Remove',
        reference: 'removeSport',
        handler: 'onRemoveClick',
        disabled: true,
        id:'delete'
        
    }],

    listeners: {
        select: 'onItemSelected',
      
    }
});
