var msAddPticeOpt = function (config) {
    config = config || {};
    msAddPticeOpt.superclass.constructor.call(this, config);
};
Ext.extend(msAddPticeOpt, Ext.Component, {
    page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('msaddpticeopt', msAddPticeOpt);

msAddPticeOpt = new msAddPticeOpt();