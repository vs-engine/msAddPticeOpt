msAddPticeOpt.panel.Home = function (config) {
    config = config || {};
    Ext.apply(config, {
        baseCls: 'modx-formpanel',
        layout: 'anchor',
        /*
         stateful: true,
         stateId: 'msaddpticeopt-panel-home',
         stateEvents: ['tabchange'],
         getState:function() {return {activeTab:this.items.indexOf(this.getActiveTab())};},
         */
        hideMode: 'offsets',
        items: [{
            xtype: 'modx-tabs',
            defaults: {border: false, autoHeight: true},
            border: false,
            hideMode: 'offsets',
            items: [{
                title: _('msaddpticeopt_items'),
                layout: 'anchor',
                items: [{
                    html: _('msaddpticeopt_intro_msg'),
                    cls: 'panel-desc',
                }, {
                    xtype: 'msaddpticeopt-grid-items',
                    cls: 'main-wrapper',
                }]
            }]
        }]
    });
    msAddPticeOpt.panel.Home.superclass.constructor.call(this, config);
};
Ext.extend(msAddPticeOpt.panel.Home, MODx.Panel);
Ext.reg('msaddpticeopt-panel-home', msAddPticeOpt.panel.Home);
