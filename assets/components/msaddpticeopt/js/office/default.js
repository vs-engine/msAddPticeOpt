Ext.onReady(function () {
    msAddPticeOpt.config.connector_url = OfficeConfig.actionUrl;

    var grid = new msAddPticeOpt.panel.Home();
    grid.render('office-msaddpticeopt-wrapper');

    var preloader = document.getElementById('office-preloader');
    if (preloader) {
        preloader.parentNode.removeChild(preloader);
    }
});