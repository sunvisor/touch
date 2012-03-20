/**
 * 
 * File:    Edit.js
 * Auther:  sunvisor
 * Date:    2012-03-13
 * Copyright (C) Sunvisor 2012 All right reserved.
 **/
Ext.define('AM.view.Edit', {

    extend: 'Ext.form.Panel',
    alias: 'widget.useredit',

    config: {
        items: [
            {
                xtype: 'fieldset',
                title: 'Personal Info',
                items: [
                    {
                        xtype: 'textfield',
                        name: 'name',
                        label: '名前'
                    },{
                        xtype: 'textfield',
                        name: 'email',
                        label: 'メール'
                    }
                ]
            }
            ,{
                xtype: 'panel',
                defaults: {
                    xtype: 'button',
                    style: 'margein: 4px',
                    flex: 1
                },
                layout: {
                    type: 'hbox'
                },
                items:[
                    {
                        text: '保存',
                        itemId: 'saveButton'
                    },
                    {
                        ui: 'decline',
                        text: '削除',
                        itemId: 'deleteButton'
                    }
                ]
            }
        ]
    }
});
