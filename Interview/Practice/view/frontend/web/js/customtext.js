define(['ko'],function (ko) {
    'use strict';
    return function (config) {
        return {
            title: ko.observable("Module Namessssss will return"),
            getModulename : function () {
                return config;
            }
        }
    }
});