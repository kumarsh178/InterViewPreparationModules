define(['ko','ordinary_file'],function (ko,ordinary_file) {
    'use strict';
    return function (config) {
        return {
            title: ko.observable("Module Namessssss will return"),
            getModulename : function () {
                return "helooooooooooooo friends";
            },
            getUseMapFunctionB: function(){
                return ordinary_file.functionC();
            }
        }
    }
});