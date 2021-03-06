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
    

    plugins:[
        {ptype:'rowediting'},
        {ptype: 'gridfilters'}
    ],

    columns: [
        // {text: 'Id', dataIndex: 'id' },
        { text: 'Name',  dataIndex: 'name',width: 150, editor:'textfield',
        filter: {
            type: 'string'
        }
        },
        { text: 'Belt', dataIndex: 'belt', editor:'textfield' },
        { text: 'Special_power', dataIndex: 'special_power', editor:'textfield'},
        { text: 'Created_at', dataIndex: 'created_at',width: 150 },
        { text: 'Updated_at', dataIndex: 'updated_at',width:150 },
    ],
    bbar: {
        xtype: 'pagingtoolbar',
        displayInfo: true
    },
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
        
    },
    // {
    //     xtype: 'search',
    //     label: 'Query',
    //     name: 'query'
    // }
    
],


    listeners: {
        select: 'onItemSelected',
      
    }
});
