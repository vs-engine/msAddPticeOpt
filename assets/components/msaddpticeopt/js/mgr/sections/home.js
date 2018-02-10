msAddPticeOpt.page.Home = function (config) {
    config = config || {};
    Ext.applyIf(config, {
        components: [{
            xtype: 'msaddpticeopt-panel-home',
            renderTo: 'msaddpticeopt-panel-home-div'
        }]
    });
    msAddPticeOpt.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msAddPticeOpt.page.Home, MODx.Component);
Ext.reg('msaddpticeopt-page-home', msAddPticeOpt.page.Home);